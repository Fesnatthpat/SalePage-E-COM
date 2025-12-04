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

    {{-- products --}}
    <div class="container mx-auto">
        <div class="m-5">

            {{-- grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                {{-- item --}}
                @for ($i = 0; $i < 8; $i++)
                    <div
                        class="w-full shadow-lg rounded-md bg-base-500 overflow-hidden h-full
                            transition-all duration-300 ease-in-out
                            hover:shadow-2xl hover:-translate-y-2 hover:scale-105 cursor-pointer">

                        {{-- image --}}
                        <div class="w-full h-[200px]">
                            <img src="/images/img.png" class="w-full h-full object-cover" alt="">
                        </div>

                        {{-- details --}}
                        <div class="w-full h-[200px] p-5">
                            <div class="space-y-3">

                                <h1 class="text-md font-bold">รองเท้า</h1>

                                <div>
                                    <div class=" uppercase">
                                        Lorem ipsum dolor sit amet
                                    </div>

                                    <div class="text-2xl font-bold text-red-500">$999</div>
                                </div>

                                <div>
                                    <a href="/product" class="btn btn-success w-full hover:bg-green-600 text-white">Buy now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
@endsection
