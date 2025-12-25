@extends('layout')

@section('content')
    {{-- 
      Note: หน้านี้ต้องการตัวแปรจาก Controller ดังนี้:
      1. $order (Object ของ Order model)
      2. $bankInfo (Array ข้อมูลธนาคาร)
    --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- html2canvas สำหรับ Save รูป QR (ถ้าไม่ได้ใช้จริง ลบออกได้ครับเพื่อลด Load time) --}}
    {{-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script> --}}

    <div class="container mx-auto p-4 min-h-screen flex items-center justify-center bg-gray-50">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">

            {{-- Header สีเขียว --}}
            <div class="bg-gradient-to-r from-[#00B900] to-[#06C755] p-6 text-center text-white relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full bg-white opacity-10"
                    style="background-image: radial-gradient(#fff 2px, transparent 2px); background-size: 20px 20px;"></div>

                <h1 class="font-bold text-2xl relative z-10">ชำระเงิน</h1>
                {{-- ใช้ ord_code จาก Database --}}
                <p class="text-white/90 text-sm mt-1 relative z-10">ออเดอร์ {{ $order->ord_code }}</p>

                <div class="mt-4 bg-white/20 backdrop-blur-sm rounded-lg p-3 inline-block relative z-10">
                    <span class="block text-xs text-white/80">ยอดชำระทั้งหมด</span>
                    {{-- ใช้ net_amount จาก Database --}}
                    <span class="block text-3xl font-bold">฿{{ number_format($order->net_amount, 2) }}</span>
                </div>
            </div>

            <div class="p-6">
                {{-- Countdown (ทำงานจริงด้วย JS) --}}
                <div
                    class="flex items-center justify-center gap-2 mb-6 text-gray-500 text-sm bg-red-50 py-2 rounded-full border border-red-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>กรุณาชำระภายใน</span>
                    <span id="countdown-timer" class="font-mono font-bold text-red-500 text-base">
                        15:00
                    </span>
                    <span>นาที</span>
                </div>

                {{-- Tabs เลือกวิธี --}}
                <div role="tablist" class="tabs tabs-boxed bg-gray-100 p-1 mb-6">
                    <a role="tab"
                        class="tab tab-active bg-white shadow-sm text-emerald-600 font-bold rounded transition-all"
                        onclick="switchTab('qr', this)">สแกน QR</a>
                    <a role="tab" class="tab text-gray-500 hover:text-gray-700 transition-all"
                        onclick="switchTab('bank', this)">เลขบัญชี</a>
                </div>

                {{-- CONTENT 1: QR Code --}}
                <div id="tab-qr" class="text-center animate-fade-in">
                    <div class="bg-white p-4 rounded-xl border-2 border-dashed border-gray-300 inline-block mb-4 relative group"
                        id="qr-container">
                        {{-- ใน Production ควรใช้ Library Gen QR ตามยอดเงินจริง --}}
                        <img src="/images/ci-qrpayment-img-08.png" alt="QR Code"
                            class="w-48 h-48 object-cover rounded-lg mx-auto">
                        <div class="mt-3 text-center">
                            {{-- ดึงชื่อบัญชีจาก $bankInfo --}}
                            <p class="text-xs text-gray-400">ชื่อบัญชี: {{ $bankInfo['account_name'] }}</p>
                        </div>
                    </div>

                    <div class="flex justify-center gap-3 mb-6">
                        <button onclick="saveQRCode()"
                            class="btn btn-sm btn-outline gap-2 text-gray-600 border-gray-300 hover:bg-gray-50 hover:text-gray-800 hover:border-gray-400 font-normal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            บันทึกรูป
                        </button>
                    </div>
                </div>

                {{-- CONTENT 2: Bank Transfer (ซ่อนไว้ตอนแรก) --}}
                <div id="tab-bank" class="hidden animate-fade-in">
                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 mb-6 text-left">
                        <div class="flex items-center gap-3 mb-4">
                            <div
                                class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-sm">
                                KBANK</div>
                            <div>
                                <p class="text-sm text-gray-500">ธนาคาร</p>
                                {{-- ชื่อธนาคารจาก $bankInfo --}}
                                <p class="font-bold text-gray-800">{{ $bankInfo['name'] }}</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm text-gray-500">เลขที่บัญชี</p>
                            <div class="flex items-center justify-between">
                                {{-- เลขบัญชีจาก $bankInfo --}}
                                <p class="font-mono text-xl font-bold text-gray-800 tracking-wider" id="acc-no">
                                    {{ $bankInfo['account_number'] }}
                                </p>
                                <button onclick="copyToClipboard('{{ $bankInfo['account_number'] }}')"
                                    class="btn btn-xs btn-ghost text-emerald-600 hover:bg-emerald-50">
                                    คัดลอก
                                </button>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">ชื่อบัญชี</p>
                            <p class="font-medium text-gray-800">{{ $bankInfo['account_name'] }}</p>
                        </div>
                    </div>
                </div>

                {{-- ปุ่มแจ้งโอน --}}
                <button onclick="handlePaymentSuccess()"
                    class="btn w-full bg-[#00B900] hover:bg-[#009900] text-white border-none text-lg h-12 shadow-md shadow-emerald-200 mb-3">
                    แจ้งชำระเงิน / แนบสลิป
                </button>

                <a href="/"
                    class="btn btn-ghost btn-sm w-full text-gray-400 font-normal hover:bg-transparent hover:text-gray-600">
                    กลับหน้าหลัก
                </a>

            </div>
        </div>
    </div>

    <script>
        // รับค่า LINE ID จาก PHP
        const LINE_LINK = "https://line.me/ti/p/{{ $bankInfo['line_id'] }}";

        // Logic สำหรับ Countdown Timer (15 นาที)
        let timeLeft = 15 * 60;
        const timerElement = document.getElementById('countdown-timer');

        const countdown = setInterval(() => {
            const minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;

            // เติมเลข 0 ข้างหน้าถ้าวินาทีน้อยกว่า 10
            seconds = seconds < 10 ? '0' + seconds : seconds;

            timerElement.innerHTML = `${minutes}:${seconds}`;
            timeLeft--;

            if (timeLeft < 0) {
                clearInterval(countdown);
                timerElement.innerHTML = "0:00";
                timerElement.classList.add('text-gray-400'); // เปลี่ยนสีเมื่อหมดเวลา
                // อาจจะเพิ่ม Logic ปิดปุ่มโอนเงินที่นี่ถ้าต้องการ
            }
        }, 1000);

        // เปลี่ยน Tab
        function switchTab(tabName, btn) {
            document.querySelectorAll('.tab').forEach(t => {
                t.classList.remove('tab-active', 'bg-white', 'shadow-sm', 'text-emerald-600', 'font-bold');
                t.classList.add('text-gray-500');
            });
            btn.classList.add('tab-active', 'bg-white', 'shadow-sm', 'text-emerald-600', 'font-bold');
            btn.classList.remove('text-gray-500');

            if (tabName === 'qr') {
                document.getElementById('tab-qr').classList.remove('hidden');
                document.getElementById('tab-bank').classList.add('hidden');
            } else {
                document.getElementById('tab-qr').classList.add('hidden');
                document.getElementById('tab-bank').classList.remove('hidden');
            }
        }

        // คัดลอกเลขบัญชี
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true
                });
                Toast.fire({
                    icon: 'success',
                    title: 'คัดลอกเลขบัญชีแล้ว'
                });
            });
        }

        function handlePaymentSuccess() {
            Swal.fire({
                title: 'ยืนยันการโอนเงิน?',
                text: "ยอดเงิน ฿{{ number_format($order->net_amount, 2) }} ถูกต้องนะครับ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00B900',
                cancelButtonColor: '#d33',
                confirmButtonText: 'โอนเรียบร้อย',
                cancelButtonText: 'ยังไม่โอน'
            }).then((result) => {
                if (result.isConfirmed) {
                    let timerInterval;
                    Swal.fire({
                        title: 'กำลังไปที่ LINE...',
                        html: 'กรุณาส่งรูปสลิปในแชทไลน์ร้านค้า',
                        timer: 2500,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    }).then(() => {
                        window.location.href = LINE_LINK;
                    });
                }
            });
        }

        function saveQRCode() {
            const link = document.createElement('a');
            link.href = '/images/ci-qrpayment-img-08.png';
            link.download = 'QR-Payment-{{ $order->ord_code }}.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>

    <style>
        .animate-fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
