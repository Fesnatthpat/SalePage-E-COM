<?php

namespace App\Services;

use App\Models\CartStorage;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class CartService
{
    /**
     * Get the current user's session ID for the cart.
     * Can be a logged-in user's ID or a guest's session ID.
     */
    public function getUserId(): string|int
    {
        return Auth::check() ? Auth::id() : '_guest_' . Session::getId();
    }

    /**
     * Get the content of the current user's cart.
     */
    public function getCartContents(): Collection
    {
        $userId = $this->getUserId();
        // For logged-in users, always ensure cart is synced with DB
        if (Auth::check()) {
            $this->restoreCartFromDatabase($userId);
        }
        return Cart::session($userId)->getContent()->sort();
    }
    
    /**
     * Get the total price of the cart.
     */
    public function getTotal(): float
    {
        return Cart::session($this->getUserId())->getTotal();
    }

    /**
     * Get the total quantity of items in the cart.
     */
    public function getTotalQuantity(): int
    {
        return Cart::session($this->getUserId())->getTotalQuantity();
    }

    /**
     * Add a product to the cart or update it if it already exists.
     */
    public function addOrUpdate(int $productId, int $quantity): void
    {
        $productModel = Product::findOrFail($productId);
        $userId = $this->getUserId();
        
        // Use accessors for clean price calculation
        $salePrice = $productModel->real_price;
        $normalPrice = $productModel->pd_price;
        $discount = $productModel->discount_amount;
        
        $quantity = max(1, $quantity);

        $cartDetails = [
            'id' => $productId,
            'name' => $productModel->pd_name,
            'price' => $salePrice,
            'quantity' => $quantity,
            'attributes' => [
                'image' => $productModel->pd_img,
                'original_price' => $normalPrice,
                'discount' => $discount,
            ],
            'associatedModel' => $productModel,
        ];

        if (Cart::session($userId)->get($productId)) {
            Cart::session($userId)->update($productId, [
                'quantity' => [
                    'relative' => false, // Set the quantity, not add to it
                    'value' => $quantity
                ],
                // Also update price details in case they changed
                'price' => $salePrice,
                'attributes' => $cartDetails['attributes']
            ]);
        } else {
            Cart::session($userId)->add($cartDetails);
        }

        $this->saveCartToDatabase();
    }

    /**
     * Update the quantity of a cart item relatively.
     */
    public function updateQuantity(int $productId, string $action): void
    {
        $quantityValue = ($action === 'increase') ? 1 : -1;
        $userId = $this->getUserId();
        
        Cart::session($userId)->update($productId, [
            'quantity' => [
                'relative' => true,
                'value' => $quantityValue
            ]
        ]);

        $this->saveCartToDatabase();
    }

    /**
     * Remove an item from the cart.
     */
    public function removeItem(int $productId): void
    {
        Cart::session($this->getUserId())->remove($productId);
        $this->saveCartToDatabase();
    }

    /**
     * Merge the guest cart into the logged-in user's cart.
     */
    public function mergeGuestCart(string $guestSessionId, int $userId): void
    {
        $guestCartItems = Cart::session($guestSessionId)->getContent();
        
        // Restore user's existing cart from DB first
        $this->restoreCartFromDatabase($userId);
        
        // Add items from guest cart to user cart
        if ($guestCartItems->isNotEmpty()) {
            Cart::session($userId)->add($guestCartItems->toArray());
        }

        // Persist the final merged cart and clear guest cart
        $this->saveCartToDatabase($userId);
        Cart::session($guestSessionId)->clear();
        
        session()->save();
    }

    /**
     * Persist the cart content to the database for the logged-in user.
     */
    private function saveCartToDatabase(?int $userId = null): void
    {
        $currentUserId = $userId ?? Auth::id();

        if ($currentUserId && !str_starts_with((string)$currentUserId, '_guest_')) {
            $cartData = Cart::session($currentUserId)->getContent();

            CartStorage::updateOrCreate(
                ['user_id' => $currentUserId],
                ['cart_data' => $cartData->toArray()]
            );
        }
    }

    /**
     * Restore the cart from the database for the logged-in user.
     */
    private function restoreCartFromDatabase(?int $userId = null): void
    {
        $currentUserId = $userId ?? Auth::id();

        if ($currentUserId && !str_starts_with((string)$currentUserId, '_guest_')) {
            $savedCart = CartStorage::where('user_id', $currentUserId)->first();
            
            Cart::session($currentUserId)->clear(); // Clear session cart before restoring

            if ($savedCart && !empty($savedCart->cart_data)) {
                // The model automatically casts JSON to an array
                Cart::session($currentUserId)->add($savedCart->cart_data);
            }
        }
    }
}
