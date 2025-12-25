<?php

namespace App\Http\Controllers;

use App\Models\CartStorage;
use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Province;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    // [Step 1] แสดงหน้าเลือกที่อยู่และสรุปยอด
    public function checkout(Request $request)
    {
        $selectedItems = $request->input('selected_items', []);

        if (empty($selectedItems)) {
            return redirect()->route('cart.index')->with('error', 'กรุณาเลือกสินค้าอย่างน้อย 1 รายการ');
        }

        $cartContent = Cart::session(auth()->id())->getContent();
        $cartItems = [];
        $totalAmount = 0;

        foreach ($cartContent as $item) {
            if (in_array((string) $item->id, $selectedItems)) {
                $cartItems[] = $item;
                $totalAmount += ($item->price * $item->quantity);
            }
        }

        $addresses = DeliveryAddress::where('user_id', auth()->id())->get();
        $provinces = Province::all();

        return view('payment', compact('cartItems', 'totalAmount', 'addresses', 'selectedItems', 'provinces'));
    }

    // [Step 2] บันทึกข้อมูล Order
    public function process(Request $request)
    {
        // 1. ตรวจสอบข้อมูล
        $request->validate([
            'address_id' => 'required|exists:delivery_addresses,id',
            'selected_items' => 'required|array|min:1',
        ], [
            'address_id.required' => 'กรุณาเลือกที่อยู่จัดส่ง',
            'selected_items.required' => 'ไม่พบรายการสินค้าที่เลือก',
        ]);

        $userId = Auth::id();
        $selectedItems = $request->input('selected_items', []);
        $cartContent = Cart::session($userId)->getContent();

        DB::beginTransaction();

        try {
            // 2. คำนวณยอดเงินและคัดแยกสินค้า
            $totalPrice = 0;
            $itemsToBuy = [];

            foreach ($cartContent as $item) {
                if (in_array((string) $item->id, $selectedItems)) {
                    $itemsToBuy[] = $item;
                    $totalPrice += ($item->price * $item->quantity);
                }
            }

            if (count($itemsToBuy) === 0) {
                throw new \Exception('ไม่พบสินค้าที่เลือกในตะกร้า');
            }

            $shippingCost = 0;
            $totalDiscount = 0;
            $netAmount = ($totalPrice + $shippingCost) - $totalDiscount;

            // 3. ดึงข้อมูลที่อยู่ (Snapshot)
            $address = DeliveryAddress::with(['province', 'amphure', 'district'])->find($request->address_id);

            // สร้าง String ที่อยู่
            $fullAddress = $address->address_line1.' '.
                           ($address->address_line2 ? $address->address_line2.' ' : '').
                           ($address->district->name_th ?? '').' '.
                           ($address->amphure->name_th ?? '').' '.
                           ($address->province->name_th ?? '').' '.
                           $address->zipcode;

            // 4. สร้างเลข Order ID
            $orderCode = 'ORD-'.date('YmdHis').'-'.rand(100, 999);

            // 5. บันทึก Order ลงตาราง orders
            $order = Order::create([
                'ord_code' => $orderCode,
                'user_id' => $userId,
                'total_price' => $totalPrice,
                'shipping_cost' => $shippingCost,
                'total_discount' => $totalDiscount,
                'net_amount' => $netAmount,
                'ord_date' => now(),
                'status_id' => 1, // 1 = รอชำระเงิน
                'shipping_name' => $address->fullname,
                'shipping_phone' => $address->phone,
                'shipping_address' => $fullAddress,
            ]);

            // 6. บันทึก Order Detail ลงตาราง order_detail
            foreach ($itemsToBuy as $item) {
                $itemDiscount = isset($item->attributes['discount']) ? $item->attributes['discount'] : 0;

                OrderDetail::create([
                    'ord_id' => $order->ord_id, // ใช้ ID จาก Order ที่เพิ่งสร้าง
                    'user_id' => $userId,
                    'pd_id' => $item->id,
                    'pd_price' => $item->price,
                    'ordd_count' => $item->quantity,
                    'pd_sp_discount' => $itemDiscount,
                    'ordd_create_date' => now(),
                ]);

                // ลบสินค้าชิ้นนี้ออกจากตะกร้า Session
                Cart::session($userId)->remove($item->id);
            }

            // 7. อัปเดต CartStorage (Database Backup ของตะกร้า)
            $remainingCartData = Cart::session($userId)->getContent();

            if ($remainingCartData->isEmpty()) {
                CartStorage::where('user_id', $userId)->delete();
            } else {
                CartStorage::updateOrCreate(
                    ['user_id' => $userId],
                    ['cart_data' => $remainingCartData] // Model ต้องมี $casts = ['cart_data' => 'array']
                );
            }

            DB::commit();

            // ส่งไปหน้า QR Code
            return redirect()->route('payment.qr', ['orderId' => $orderCode]);

        } catch (\Exception $e) {
            DB::rollBack();

            // ส่ง Error กลับไปแสดงผล
            return back()->with('error', 'เกิดข้อผิดพลาด: '.$e->getMessage());
        }
    }

    // [Step 3] แสดงหน้า QR Code
    public function showQr($orderId)
    {
        // ใช้ ord_code ในการค้นหา (ตรงกับที่ create ไว้ใน step 2)
        $order = Order::where('ord_code', $orderId)->first();

        if (! $order) {
            return redirect()->route('home')->with('error', 'ไม่พบคำสั่งซื้อ');
        }

        // เพิ่มข้อมูลธนาคารตรงนี้ (หรือดึงจาก Config/DB ก็ได้)
        $bankInfo = [
            'name' => 'ธนาคารกสิกรไทย',
            'account_name' => 'บจก. เอช แอนด์ เอ็ม-อาร์ สโตร์',
            'account_number' => '012-3-45678-9',
            'line_id' => '@YOUR_LINE_ID', // ใส่ LINE ID จริงของร้าน
        ];

        // ส่งทั้ง $order และ $bankInfo ไปที่ View
        return view('qr', compact('order', 'bankInfo'));
    }
}