@extends('layout')

@section('content')
    {{-- content for qr page --}}
    <div class="container mx-auto p-4">

        <div class="text-center  p-5 border-2 border-gray-100 rounded-lg shadow-lg bg-white">
            <div class="text-center mb-8">
                <div class="flex items-center justify-center space-x-4 mb-2">
                    <span class="countdown font-mono text-3xl">
                        <span style="--value:24;" aria-live="polite" aria-label="24"></span>
                        :
                        <span style="--value:59; --digits: 2;" aria-live="polite" aria-label="59"></span>
                        :
                        <span style="--value:58; --digits: 2;" aria-live="polite" aria-label="58"></span>
                    </span>
                    <p>ชม.</p>
                </div>
                <div class="">
                    <p class="text-gray-600">เวลาที่เหลือในการชำระเงิน</p>
                    <p class="text-gray-600">รหัสคำสั่งซื้อ: #ORD-2568001</p>
                </div>
            </div>
            <h1 class="font-bold text-2xl mb-4">สแกน QR เพื่อชำระเงิน</h1>
            <img src="/images/ci-qrpayment-img-08.png" alt="QR Code"
                class="mx-auto mb-4 w-[500px] h-[500px] object-cover max-w-xs">
            <p class="text-gray-600">โปรดสแกน QR โค้ดด้านบนเพื่อดำเนินการชำระเงิน</p>
        </div>
    </div>
@endsection
