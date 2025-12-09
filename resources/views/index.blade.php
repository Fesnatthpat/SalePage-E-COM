@extends('layout')

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <div class="relative w-full h-[600px] lg:h-[700px] bg-gray-900 overflow-hidden">

        {{-- Background Image --}}
        {{-- หมายเหตุ: ผมใส่รูปจาก Unsplash ให้ดูเป็นตัวอย่าง คุณสามารถเปลี่ยน src เป็นรูปสินค้าจริงของคุณได้ --}}
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-60 hover:scale-105 transition-transform duration-1000 ease-in-out"
                alt="Sale Background">
            {{-- Gradient Overlay เพื่อให้อ่านตัวหนังสือออกง่ายขึ้น --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        </div>

        {{-- Content --}}
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 z-10">

            {{-- Badge --}}
            <span
                class="inline-block py-1 px-3 rounded-full bg-red-600 text-white text-xs font-bold tracking-widest mb-4 animate-bounce">
                LIMITED TIME OFFER
            </span>

            {{-- Headline --}}
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-4 leading-tight drop-shadow-lg">
                <span class="block text-gray-300 text-2xl md:text-3xl font-light mb-2">สมาชิกช้อปสินค้า</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-orange-500">SALE</span> ก่อนใคร
            </h1>

            {{-- Description --}}
            <p class="text-gray-200 text-base md:text-lg max-w-2xl mx-auto mb-8 leading-relaxed font-light">
                ลดสูงสุด <span class="text-yellow-400 font-bold text-xl">50%</span> | ที่ร้านและออนไลน์ <br
                    class="hidden md:block">
                เฉพาะสินค้าที่ร่วมรายการ จนกว่าสินค้าจะหมด
            </p>

            {{-- Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <button
                    class="btn bg-white text-gray-900 border-none hover:bg-gray-200 px-8 py-3 rounded-full font-bold text-lg transition-transform hover:-translate-y-1 shadow-lg">
                    ช้อปสินค้าลดราคา
                </button>
                <a href="/login">
                    <button
                        class="btn btn-outline text-white border-white hover:bg-white/20 px-8 py-3 rounded-full font-bold text-lg transition-transform hover:-translate-y-1">
                        เข้าสู่ระบบสมาชิก
                    </button>
                </a>
            </div>

            {{-- Terms Text --}}
            <p class="mt-8 text-xs text-gray-400 opacity-80 max-w-lg">
                *สินค้าและราคาของที่ร้านและออนไลน์อาจแตกต่างกัน
                ลงชื่อเข้าใช้เพื่อรับสิทธิพิเศษและเพิ่มสินค้าไปยังกระเป๋าช้อปปิ้ง
            </p>
        </div>
    </div>

    {{-- ================= SERVICE BAR (คั่นก่อนเข้าสินค้า) ================= --}}
    <div class="bg-white border-b border-gray-100 py-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center divide-x divide-gray-100">
                <div class="flex flex-col items-center gap-2 group">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:scale-110 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700">สินค้าของแท้ 100%</span>
                </div>
                <div class="flex flex-col items-center gap-2 group">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:scale-110 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700">จัดส่งไวใน 24 ชม.</span>
                </div>
                <div class="flex flex-col items-center gap-2 group">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:scale-110 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700">ชำระเงินปลอดภัย</span>
                </div>
                <div class="flex flex-col items-center gap-2 group">
                    <svg class="w-8 h-8 text-emerald-600 group-hover:scale-110 transition" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700">บริการหลังการขาย</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= PRODUCTS SECTION ================= --}}
    <div class="container mx-auto px-4 mt-12 mb-20">
        {{-- Section Header --}}
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">สินค้าแนะนำ</h2>
                <p class="text-gray-500 mt-1">คัดสรรมาเพื่อคุณโดยเฉพาะ</p>
            </div>
            <a href="/products" class="text-emerald-600 font-bold hover:underline hidden md:block">ดูทั้งหมด →</a>
        </div>

        {{-- Include Products --}}
        @include('allproducts')

        <div class="mt-8 text-center md:hidden">
            <a href="/products" class="btn btn-outline w-full">ดูสินค้าทั้งหมด</a>
        </div>
    </div>
@endsection
