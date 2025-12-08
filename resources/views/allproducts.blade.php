{{-- ไม่ต้องมี @extends หรือ @section แล้ว --}}

{{-- products --}}
<div class="container mx-auto">
    <div class="m-5">

        {{-- grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- item --}}
            {{-- หมายเหตุ: ตอนนี้ใช้ Loop 8 รอบเพื่อจำลองข้อมูล --}}
            @for ($i = 0; $i < 4; $i++)
                <div
                    class="w-full shadow-lg rounded-md bg-base-500 overflow-hidden h-full
                            transition-all duration-300 ease-in-out
                            hover:shadow-2xl hover:-translate-y-2 hover:scale-105 cursor-pointer">

                    {{-- image --}}
                    <div class="w-full h-[200px]">
                        <img src="/images/img.png" class="w-full h-full object-cover" alt="Product Image">
                    </div>

                    {{-- details --}}
                    <div class="w-full h-[200px] p-5">
                        <div class="space-y-3">

                            <h1 class="text-md font-bold">รองเท้า</h1>

                            <div>
                                <div class=" uppercase text-sm text-gray-500">
                                    Lorem ipsum dolor sit amet
                                </div>

                                <div class="text-2xl font-bold text-red-500">$999</div>
                            </div>

                            <div>
                                <a href="/product" class="btn btn-success w-full hover:bg-green-600 text-white">Buy
                                    now</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
</div>
