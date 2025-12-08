@extends('layout')

@section('content')
    {{-- hero --}}
    <div class="container mx-auto max-w-full">
        <div class="hero bg-base-200 shadow min-h-screen bg-cover bg-center">

            <div class="hero-content flex-col lg:flex-row-reverse">

                <img src="/images/logo_hm.png" class="max-w-sm rounded-lg shadow-2xl transition-all duration-300 ease-in-out
                            hover:shadow-2xl hover:-translate-y-2 hover:scale-105" />

                <div>
                    <h1 class="text-5xl font-bold text-red-600">
                        สมาชิกช้อปสินค้า SALE ก่อนใคร
                    </h1>

                    <p class="py-6">
                        ลดสูงสุด 50% | ที่ร้านและออนไลน์
                        เฉพาะสินค้าที่ร่วมรายการ จนกว่าสินค้าจะหมด
                        สินค้าและราคาของที่ร้านและออนไลน์อาจแตกต่างกัน
                        ลงชื่อเข้าใช้เพื่อรับสิทธิพิเศษและเพิ่มสินค้าไปยังกระเป๋าช้อปปิ้ง
                    </p>

                    <button class="btn btn-primary transition-all duration-300 ease-in-out
                            hover:shadow-2xl hover:-translate-y-2 hover:scale-105">Buy Now!</button>
                </div>
            </div>

        </div>
    </div>

    {{-- products section --}}
    {{-- ใช้ @include เพื่อดึงไฟล์ allproducts.blade.php มาแสดงตรงนี้ --}}
    <div class="container mx-auto mt-10">
        @include('allproducts')
    </div>

@endsection