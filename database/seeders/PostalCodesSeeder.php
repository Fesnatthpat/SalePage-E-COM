<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostalCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the postal_codes table with initial data.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('postal_codes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('postal_codes')->insert([
            [
                'id' => 1,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'ขุนตาล',
                'postal_code' => 57340,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 620
            ],
            [
                'id' => 2,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เชียงของ',
                'postal_code' => 57140,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 609
            ],
            [
                'id' => 3,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เชียงแสน',
                'postal_code' => 57150,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 614
            ],
            [
                'id' => 4,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'ดอยหลวง',
                'postal_code' => 57110,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 624
            ],
            [
                'id' => 5,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เทิง',
                'postal_code' => 57160,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 610
            ],
            [
                'id' => 6,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เทิง',
                'postal_code' => 57230,
                'note' => 'ใช้ในเขตพื้นที่ ต.เชียงเคี่ยน, ต.ปล้อง, ต.แม่ลอย, ต.ศรีดอนชัย, ต.หนองแรด, ต.งิ้ว ม.5, ม.7, ม.12-13, ม.17, ม.19, ม.23',
                'province_id' => 46,
                'amphure_id' => 610
            ],
            [
                'id' => 7,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'ป่าแดด',
                'postal_code' => 57190,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 612
            ],
            [
                'id' => 8,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'พญาเม็งราย',
                'postal_code' => 57290,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 618
            ],
            [
                'id' => 9,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'พาน',
                'postal_code' => 57120,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 611
            ],
            [
                'id' => 10,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'พาน',
                'postal_code' => 57250,
                'note' => 'ใช้ในเขตพื้นที่ ต.ธารทอง',
                'province_id' => 46,
                'amphure_id' => 611
            ],
            [
                'id' => 11,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'พาน',
                'postal_code' => 57280,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่เย็น, ต.ทานตะวัน',
                'province_id' => 46,
                'amphure_id' => 611
            ],
            [
                'id' => 12,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เมืองเชียงราย',
                'postal_code' => 57000,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 607
            ],
            [
                'id' => 13,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เมืองเชียงราย',
                'postal_code' => 57100,
                'note' => 'ใช้ในเขตพื้นที่ ต.ริมกก, ต.บ้านดู่, ต.แม่ข้าวต้ม, ต.แม่ยาว, ต.นางแล, ต.ท่าสุด',
                'province_id' => 46,
                'amphure_id' => 607
            ],
            [
                'id' => 14,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่จัน',
                'postal_code' => 57110,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 613
            ],
            [
                'id' => 15,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่จัน',
                'postal_code' => 57240,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่คำ, ต.แม่ไร่',
                'province_id' => 46,
                'amphure_id' => 613
            ],
            [
                'id' => 16,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่จัน',
                'postal_code' => 57270,
                'note' => 'ใช้ในเขตพื้นที่ ต.จันจว้าใต้, ต.จันจว้า',
                'province_id' => 46,
                'amphure_id' => 613
            ],
            [
                'id' => 17,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่ฟ้าหลวง',
                'postal_code' => 57110,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 621
            ],
            [
                'id' => 18,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่ฟ้าหลวง',
                'postal_code' => 57240,
                'note' => 'ใช้ในเขตพื้นที่ ต.เทอดไทย, ต.แม่ฟ้าหลวง',
                'province_id' => 46,
                'amphure_id' => 621
            ],
            [
                'id' => 19,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่ลาว',
                'postal_code' => 57000,
                'note' => 'ใช้ในเขตพื้นที่ ต.บัวสลี',
                'province_id' => 46,
                'amphure_id' => 622
            ],
            [
                'id' => 20,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่ลาว',
                'postal_code' => 57250,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 622
            ],
            [
                'id' => 21,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่สรวย',
                'postal_code' => 57180,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 616
            ],
            [
                'id' => 22,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่สาย',
                'postal_code' => 57130,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 615
            ],
            [
                'id' => 23,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'แม่สาย',
                'postal_code' => 57220,
                'note' => 'ใช้ในเขตพื้นที่ ต.ห้วยไคร้, ต.บ้านด้าย',
                'province_id' => 46,
                'amphure_id' => 615
            ],
            [
                'id' => 24,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เวียงแก่น',
                'postal_code' => 57310,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 619
            ],
            [
                'id' => 25,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เวียงชัย',
                'postal_code' => 57210,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 608
            ],
            [
                'id' => 26,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เวียงเชียงรุ้ง',
                'postal_code' => 57210,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 623
            ],
            [
                'id' => 27,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เวียงป่าเป้า',
                'postal_code' => 57170,
                'note' => '',
                'province_id' => 46,
                'amphure_id' => 617
            ],
            [
                'id' => 28,
                'place' => 'north',
                'province' => 'เชียงราย',
                'amphoe' => 'เวียงป่าเป้า',
                'postal_code' => 57260,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่เจดีย์, ต.แม่เจดีย์ใหม่, ต.เวียงกาหลง',
                'province_id' => 46,
                'amphure_id' => 617
            ],
            [
                'id' => 29,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'จอมทอง',
                'postal_code' => 50160,
                'note' => 'ปณ.จอมทอง',
                'province_id' => 39,
                'amphure_id' => 521
            ],
            [
                'id' => 30,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'จอมทอง',
                'postal_code' => 50240,
                'note' => 'ปณ.ฮอด',
                'province_id' => 39,
                'amphure_id' => 521
            ],
            [
                'id' => 31,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'เชียงดาว',
                'postal_code' => 50170,
                'note' => 'ปณ.เชียงดาว',
                'province_id' => 39,
                'amphure_id' => 523
            ],
            [
                'id' => 32,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ไชยปราการ',
                'postal_code' => 50320,
                'note' => 'ปณ.ไชยปราการ',
                'province_id' => 39,
                'amphure_id' => 540
            ],
            [
                'id' => 33,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ดอยเต่า',
                'postal_code' => 50260,
                'note' => 'ปณ.ดอยเต่า',
                'province_id' => 39,
                'amphure_id' => 536
            ],
            [
                'id' => 34,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ดอยสะเก็ด',
                'postal_code' => 50220,
                'note' => 'ปณ.ดอยสะเก็ด',
                'province_id' => 39,
                'amphure_id' => 524
            ],
            [
                'id' => 35,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ดอยหล่อ',
                'postal_code' => 50160,
                'note' => 'ปณ.จอมทอง',
                'province_id' => 39,
                'amphure_id' => 543
            ],
            [
                'id' => 36,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ฝาง',
                'postal_code' => 50110,
                'note' => 'ปณ.ฝาง',
                'province_id' => 39,
                'amphure_id' => 528
            ],
            [
                'id' => 37,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ฝาง',
                'postal_code' => 50320,
                'note' => 'ปณ.ไชยปราการ',
                'province_id' => 39,
                'amphure_id' => 528
            ],
            [
                'id' => 38,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'พร้าว',
                'postal_code' => 50190,
                'note' => 'ปณ.พร้าว',
                'province_id' => 39,
                'amphure_id' => 530
            ],
            [
                'id' => 39,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'เมืองเชียงใหม่',
                'postal_code' => 50000,
                'note' => 'ปณ.เชียงใหม่',
                'province_id' => 39,
                'amphure_id' => 520
            ],
            [
                'id' => 40,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'เมืองเชียงใหม่',
                'postal_code' => 50100,
                'note' => 'ที่ทำการนำจ่าย ชม.2',
                'province_id' => 39,
                'amphure_id' => 520
            ],
            [
                'id' => 41,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'เมืองเชียงใหม่',
                'postal_code' => 50200,
                'note' => 'ที่ทำการนำจ่าย ชม.3',
                'province_id' => 39,
                'amphure_id' => 520
            ],
            [
                'id' => 42,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'เมืองเชียงใหม่',
                'postal_code' => 50300,
                'note' => 'ที่ทำการนำจ่าย ชม.4',
                'province_id' => 39,
                'amphure_id' => 520
            ],
            [
                'id' => 43,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่แจ่ม',
                'postal_code' => 50270,
                'note' => 'ปณ.แม่แจ่ม',
                'province_id' => 39,
                'amphure_id' => 522
            ],
            [
                'id' => 44,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่แจ่ม',
                'postal_code' => 58130,
                'note' => 'ปณ.ปาย จ.แม่ฮ่องสอน',
                'province_id' => 39,
                'amphure_id' => 522
            ],
            [
                'id' => 45,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่แตง',
                'postal_code' => 50150,
                'note' => 'ปณ.แม่แตง',
                'province_id' => 39,
                'amphure_id' => 525
            ],
            [
                'id' => 46,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่แตง',
                'postal_code' => 50330,
                'note' => 'ปณ.สันป่ายาง',
                'province_id' => 39,
                'amphure_id' => 525
            ],
            [
                'id' => 47,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่ริม',
                'postal_code' => 50180,
                'note' => 'ปณ.แม่ริม',
                'province_id' => 39,
                'amphure_id' => 526
            ],
            [
                'id' => 48,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่ริม',
                'postal_code' => 50330,
                'note' => 'ปณ.สันป่ายาง',
                'province_id' => 39,
                'amphure_id' => 526
            ],
            [
                'id' => 49,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่วาง',
                'postal_code' => 50360,
                'note' => 'ปณ.แม่วาง',
                'province_id' => 39,
                'amphure_id' => 541
            ],
            [
                'id' => 50,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่ออน',
                'postal_code' => 50130,
                'note' => 'ปณ.สันกำแพง',
                'province_id' => 39,
                'amphure_id' => 542
            ],
            [
                'id' => 51,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'แม่อาย',
                'postal_code' => 50280,
                'note' => 'ปณ.แม่อาย',
                'province_id' => 39,
                'amphure_id' => 529
            ],
            [
                'id' => 52,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'เวียงแหง',
                'postal_code' => 50350,
                'note' => 'ปณ.เวียงแหง',
                'province_id' => 39,
                'amphure_id' => 539
            ],
            [
                'id' => 53,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'สะเมิง',
                'postal_code' => 50250,
                'note' => 'ปณ.สะเมิง',
                'province_id' => 39,
                'amphure_id' => 527
            ],
            [
                'id' => 54,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'สันกำแพง',
                'postal_code' => 50130,
                'note' => 'ปณ.สันกำแพง',
                'province_id' => 39,
                'amphure_id' => 532
            ],
            [
                'id' => 55,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'สันทราย',
                'postal_code' => 50210,
                'note' => 'ปณ.สันทราย',
                'province_id' => 39,
                'amphure_id' => 533
            ],
            [
                'id' => 56,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'สันทราย',
                'postal_code' => 50290,
                'note' => 'ปณ.แม่โจ้',
                'province_id' => 39,
                'amphure_id' => 533
            ],
            [
                'id' => 57,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'สันป่าตอง',
                'postal_code' => 50120,
                'note' => 'ปณ.สันป่าตอง',
                'province_id' => 39,
                'amphure_id' => 531
            ],
            [
                'id' => 58,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'สารภี',
                'postal_code' => 50140,
                'note' => 'ปณ.สารภี',
                'province_id' => 39,
                'amphure_id' => 538
            ],
            [
                'id' => 59,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'หางดง',
                'postal_code' => 50230,
                'note' => 'ปณ.หางดง',
                'province_id' => 39,
                'amphure_id' => 534
            ],
            [
                'id' => 60,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'หางดง',
                'postal_code' => 50340,
                'note' => 'ปณ.หนองตอง',
                'province_id' => 39,
                'amphure_id' => 534
            ],
            [
                'id' => 61,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'อมก๋อย',
                'postal_code' => 50310,
                'note' => 'ปณ.อมก๋อย',
                'province_id' => 39,
                'amphure_id' => 537
            ],
            [
                'id' => 62,
                'place' => 'north',
                'province' => 'เชียงใหม่',
                'amphoe' => 'ฮอด',
                'postal_code' => 50240,
                'note' => 'ปณ.ฮอด',
                'province_id' => 39,
                'amphure_id' => 535
            ],
            [
                'id' => 63,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เกาะคา',
                'postal_code' => 52130,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 555
            ],
            [
                'id' => 64,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'งาว',
                'postal_code' => 52110,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 557
            ],
            [
                'id' => 65,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แจ้ห่ม',
                'postal_code' => 52120,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 558
            ],
            [
                'id' => 66,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เถิน',
                'postal_code' => 52160,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 560
            ],
            [
                'id' => 67,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เถิน',
                'postal_code' => 52230,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่วะ',
                'province_id' => 41,
                'amphure_id' => 560
            ],
            [
                'id' => 68,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เมืองลำปาง',
                'postal_code' => 52000,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 553
            ],
            [
                'id' => 69,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เมืองลำปาง',
                'postal_code' => 52100,
                'note' => 'ใช้ในเขตพื้นที่ ต.สบตุ๋ย, ต.สวนดอก, ต.ชมพู, ต.ปงแสนทอง, ต.บ่อแฮ้ว, ต.บ้านเป้า, ต.บ้านเอื้อม, ต.บ้านค่า',
                'province_id' => 41,
                'amphure_id' => 553
            ],
            [
                'id' => 70,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เมืองลำปาง',
                'postal_code' => 52220,
                'note' => 'ใช้ในเขตพื้นที่ ต.พระบาท ม.4',
                'province_id' => 41,
                'amphure_id' => 553
            ],
            [
                'id' => 71,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เมืองปาน',
                'postal_code' => 52240,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 565
            ],
            [
                'id' => 72,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แม่ทะ',
                'postal_code' => 52150,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 562
            ],
            [
                'id' => 73,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แม่ทะ',
                'postal_code' => 52220,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่ทะ ม.6',
                'province_id' => 41,
                'amphure_id' => 562
            ],
            [
                'id' => 74,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แม่พริก',
                'postal_code' => 52180,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 561
            ],
            [
                'id' => 75,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แม่พริก',
                'postal_code' => 52230,
                'note' => 'ใช้ในเขตพื้นที่ ต.พระบาทวังตวง ม.1-2',
                'province_id' => 41,
                'amphure_id' => 561
            ],
            [
                'id' => 76,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แม่เมาะ',
                'postal_code' => 52000,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านดง ม.4-6',
                'province_id' => 41,
                'amphure_id' => 554
            ],
            [
                'id' => 77,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'แม่เมาะ',
                'postal_code' => 52220,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 554
            ],
            [
                'id' => 78,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'วังเหนือ',
                'postal_code' => 52140,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 559
            ],
            [
                'id' => 79,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'สบปราบ',
                'postal_code' => 52170,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 563
            ],
            [
                'id' => 80,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'เสริมงาม',
                'postal_code' => 52210,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 556
            ],
            [
                'id' => 81,
                'place' => 'north',
                'province' => 'ลำปาง',
                'amphoe' => 'ห้างฉัตร',
                'postal_code' => 52190,
                'note' => '',
                'province_id' => 41,
                'amphure_id' => 564
            ],
            [
                'id' => 82,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'ทุ่งหัวช้าง',
                'postal_code' => 51160,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 549
            ],
            [
                'id' => 83,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'บ้านธิ',
                'postal_code' => 51180,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 551
            ],
            [
                'id' => 84,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'บ้านโฮ่ง',
                'postal_code' => 51130,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 547
            ],
            [
                'id' => 85,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'ป่าซาง',
                'postal_code' => 51120,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 550
            ],
            [
                'id' => 86,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'เมืองลำพูน',
                'postal_code' => 51000,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 545
            ],
            [
                'id' => 87,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'เมืองลำพูน',
                'postal_code' => 51150,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองช้างคืน, ต.อุโมงค์',
                'province_id' => 40,
                'amphure_id' => 545
            ],
            [
                'id' => 88,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'แม่ทา',
                'postal_code' => 51140,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 546
            ],
            [
                'id' => 89,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'แม่ทา',
                'postal_code' => 51170,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทากาศ, ต.ทาขุมเงิน, ต.ทาทุ่งหลวง, ต.ทาแม่ลอบ',
                'province_id' => 40,
                'amphure_id' => 546
            ],
            [
                'id' => 90,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'ลี้',
                'postal_code' => 51110,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 548
            ],
            [
                'id' => 91,
                'place' => 'north',
                'province' => 'ลำพูน',
                'amphoe' => 'เวียงหนองล่อง',
                'postal_code' => 51120,
                'note' => '',
                'province_id' => 40,
                'amphure_id' => 552
            ],
            [
                'id' => 92,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 55130,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 597
            ],
            [
                'id' => 93,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'เชียงกลาง',
                'postal_code' => 55160,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 591
            ],
            [
                'id' => 94,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'ท่าวังผา',
                'postal_code' => 55140,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 588
            ],
            [
                'id' => 95,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'ทุ่งช้าง',
                'postal_code' => 55130,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 590
            ],
            [
                'id' => 96,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'นาน้อย',
                'postal_code' => 55150,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 586
            ],
            [
                'id' => 97,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'นาหมื่น',
                'postal_code' => 55180,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 592
            ],
            [
                'id' => 98,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'บ่อเกลือ',
                'postal_code' => 55220,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 594
            ],
            [
                'id' => 99,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'บ้านหลวง',
                'postal_code' => 55190,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 585
            ],
            [
                'id' => 100,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'ปัว',
                'postal_code' => 55120,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 587
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 101,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'ภูเพียง',
                'postal_code' => 55000,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 596
            ],
            [
                'id' => 102,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'เมืองน่าน',
                'postal_code' => 55000,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 583
            ],
            [
                'id' => 103,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'แม่จริม',
                'postal_code' => 55170,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 584
            ],
            [
                'id' => 104,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'เวียงสา',
                'postal_code' => 55110,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 589
            ],
            [
                'id' => 105,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'สองแคว',
                'postal_code' => 55160,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 595
            ],
            [
                'id' => 106,
                'place' => 'north',
                'province' => 'น่าน',
                'amphoe' => 'สันติสุข',
                'postal_code' => 55210,
                'note' => '',
                'province_id' => 44,
                'amphure_id' => 593
            ],
            [
                'id' => 107,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'จุน',
                'postal_code' => 56150,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 599
            ],
            [
                'id' => 108,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'เชียงคำ',
                'postal_code' => 56110,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 600
            ],
            [
                'id' => 109,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'เชียงม่วน',
                'postal_code' => 56160,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 601
            ],
            [
                'id' => 110,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'ดอกคำใต้',
                'postal_code' => 56120,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 602
            ],
            [
                'id' => 111,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'ปง',
                'postal_code' => 56140,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 603
            ],
            [
                'id' => 112,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'ภูกามยาว',
                'postal_code' => 56000,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 606
            ],
            [
                'id' => 113,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'ภูซาง',
                'postal_code' => 56110,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 605
            ],
            [
                'id' => 114,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'เมืองพะเยา',
                'postal_code' => 56000,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 598
            ],
            [
                'id' => 115,
                'place' => 'north',
                'province' => 'พะเยา',
                'amphoe' => 'แม่ใจ',
                'postal_code' => 56130,
                'note' => '',
                'province_id' => 45,
                'amphure_id' => 604
            ],
            [
                'id' => 116,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'เด่นชัย',
                'postal_code' => 54110,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 579
            ],
            [
                'id' => 117,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'เมืองแพร่',
                'postal_code' => 54000,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 575
            ],
            [
                'id' => 118,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'ร้องกวาง',
                'postal_code' => 54140,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 576
            ],
            [
                'id' => 119,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'ลอง',
                'postal_code' => 54150,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 577
            ],
            [
                'id' => 120,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'วังชิ้น',
                'postal_code' => 54160,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 581
            ],
            [
                'id' => 121,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'สอง',
                'postal_code' => 54120,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 580
            ],
            [
                'id' => 122,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'สูงเม่น',
                'postal_code' => 54000,
                'note' => 'ใช้ในเขตพื้นที่ ต.เวียงทอง',
                'province_id' => 43,
                'amphure_id' => 578
            ],
            [
                'id' => 123,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'สูงเม่น',
                'postal_code' => 54130,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 578
            ],
            [
                'id' => 124,
                'place' => 'north',
                'province' => 'แพร่',
                'amphoe' => 'หนองม่วงไข่',
                'postal_code' => 54170,
                'note' => '',
                'province_id' => 43,
                'amphure_id' => 582
            ],
            [
                'id' => 125,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ตรอน',
                'postal_code' => 53140,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 567
            ],
            [
                'id' => 126,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ทองแสนขัน',
                'postal_code' => 53230,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 574
            ],
            [
                'id' => 127,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ท่าปลา',
                'postal_code' => 53110,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าแฝก',
                'province_id' => 42,
                'amphure_id' => 568
            ],
            [
                'id' => 128,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ท่าปลา',
                'postal_code' => 53150,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 568
            ],
            [
                'id' => 129,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ท่าปลา',
                'postal_code' => 53190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ผาเลือด, ต.ร่วมจิต, ต.หาดล้า ม.1-3, ม.9',
                'province_id' => 42,
                'amphure_id' => 568
            ],
            [
                'id' => 130,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'น้ำปาด',
                'postal_code' => 53110,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 569
            ],
            [
                'id' => 131,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'บ้านโคก',
                'postal_code' => 53180,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 571
            ],
            [
                'id' => 132,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'พิชัย',
                'postal_code' => 53120,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 572
            ],
            [
                'id' => 133,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'พิชัย',
                'postal_code' => 53220,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าสัก, ต.บ้านดารา',
                'province_id' => 42,
                'amphure_id' => 572
            ],
            [
                'id' => 134,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ฟากท่า',
                'postal_code' => 53160,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 570
            ],
            [
                'id' => 135,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'เมืองอุตรดิตถ์',
                'postal_code' => 53000,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 566
            ],
            [
                'id' => 136,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'เมืองอุตรดิตถ์',
                'postal_code' => 53170,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังกะพี้, ต.บ้านเกาะ ม.7-9',
                'province_id' => 42,
                'amphure_id' => 566
            ],
            [
                'id' => 137,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ลับแล',
                'postal_code' => 53130,
                'note' => '',
                'province_id' => 42,
                'amphure_id' => 573
            ],
            [
                'id' => 138,
                'place' => 'north',
                'province' => 'อุตรดิตถ์',
                'amphoe' => 'ลับแล',
                'postal_code' => 53210,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทุ่งยั้ง, ต.ไผ่ล้อม, ต.ด่านแม่คำมัน',
                'province_id' => 42,
                'amphure_id' => 573
            ],
            [
                'id' => 139,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'ขุนยวม',
                'postal_code' => 58140,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 626
            ],
            [
                'id' => 140,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'ปางมะผ้า',
                'postal_code' => 58150,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 631
            ],
            [
                'id' => 141,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'ปาย',
                'postal_code' => 58130,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 627
            ],
            [
                'id' => 142,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'เมืองแม่ฮ่องสอน',
                'postal_code' => 58000,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 625
            ],
            [
                'id' => 143,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'แม่ลาน้อย',
                'postal_code' => 58120,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 629
            ],
            [
                'id' => 144,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'แม่สะเรียง',
                'postal_code' => 58110,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 628
            ],
            [
                'id' => 145,
                'place' => 'north',
                'province' => 'แม่ฮ่องสอน',
                'amphoe' => 'สบเมย',
                'postal_code' => 58110,
                'note' => '',
                'province_id' => 47,
                'amphure_id' => 630
            ],
            [
                'id' => 146,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'แก่งหางแมว',
                'postal_code' => 22160,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 157
            ],
            [
                'id' => 147,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'ขลุง',
                'postal_code' => 22110,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 151
            ],
            [
                'id' => 148,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'ขลุง',
                'postal_code' => 22150,
                'note' => 'แค่เขตพื้นที่ ต.บ่อเวฬุ',
                'province_id' => 13,
                'amphure_id' => 151
            ],
            [
                'id' => 149,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'เขาคิชฌกูฏ',
                'postal_code' => 22210,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 159
            ],
            [
                'id' => 150,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'ท่าใหม่',
                'postal_code' => 22120,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 152
            ],
            [
                'id' => 151,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'ท่าใหม่',
                'postal_code' => 22170,
                'note' => 'ใช้ในเขตพื้นที่ ต.โขมง, ต.รำพัน, ต.เขาแก้ว, ต.ทุ่งเบญจา',
                'province_id' => 13,
                'amphure_id' => 152
            ],
            [
                'id' => 152,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'นายายอาม',
                'postal_code' => 22160,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 158
            ],
            [
                'id' => 153,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'นายายอาม',
                'postal_code' => 22170,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังโตนด, ต.กระแจะ, ต.สนามไชย, ต.วังใหม่',
                'province_id' => 13,
                'amphure_id' => 158
            ],
            [
                'id' => 154,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'โป่งน้ำร้อน',
                'postal_code' => 22140,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 153
            ],
            [
                'id' => 155,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'มะขาม',
                'postal_code' => 22150,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 154
            ],
            [
                'id' => 156,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'เมืองจันทบุรี',
                'postal_code' => 22000,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 150
            ],
            [
                'id' => 157,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'สอยดาว',
                'postal_code' => 22180,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 156
            ],
            [
                'id' => 158,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'แหลมสิงห์',
                'postal_code' => 22120,
                'note' => 'ใช้ในเขตพื้นที่ ต.บางกะไชย',
                'province_id' => 13,
                'amphure_id' => 155
            ],
            [
                'id' => 159,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'แหลมสิงห์',
                'postal_code' => 22130,
                'note' => '',
                'province_id' => 13,
                'amphure_id' => 155
            ],
            [
                'id' => 160,
                'place' => 'east',
                'province' => 'จันทบุรี',
                'amphoe' => 'แหลมสิงห์',
                'postal_code' => 22190,
                'note' => 'ใช้ในเขตพื้นที่ ต.พลิ้ว, ต.คลองน้ำเค็ม, ต.บางสระเก้า',
                'province_id' => 13,
                'amphure_id' => 155
            ],
            [
                'id' => 161,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'คลองเขื่อน',
                'postal_code' => 24000,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 177
            ],
            [
                'id' => 162,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'คลองเขื่อน',
                'postal_code' => 24110,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 177
            ],
            [
                'id' => 163,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'ท่าตะเกียบ',
                'postal_code' => 24160,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 176
            ],
            [
                'id' => 164,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บางคล้า',
                'postal_code' => 24110,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 168
            ],
            [
                'id' => 165,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บางน้ำเปรี้ยว',
                'postal_code' => 24000,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 169
            ],
            [
                'id' => 166,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บางน้ำเปรี้ยว',
                'postal_code' => 24150,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 169
            ],
            [
                'id' => 167,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บางน้ำเปรี้ยว',
                'postal_code' => 24170,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 169
            ],
            [
                'id' => 168,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บางปะกง',
                'postal_code' => 24130,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 170
            ],
            [
                'id' => 169,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บางปะกง',
                'postal_code' => 24180,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 170
            ],
            [
                'id' => 170,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'บ้านโพธิ์',
                'postal_code' => 24140,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 171
            ],
            [
                'id' => 171,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'แปลงยาว',
                'postal_code' => 24190,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 175
            ],
            [
                'id' => 172,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'พนมสารคาม',
                'postal_code' => 24120,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 172
            ],
            [
                'id' => 173,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'เมืองฉะเชิงเทรา',
                'postal_code' => 24000,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 167
            ],
            [
                'id' => 174,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'ราชสาส์น',
                'postal_code' => 24120,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 173
            ],
            [
                'id' => 175,
                'place' => 'east',
                'province' => 'ฉะเชิงเทรา',
                'amphoe' => 'สนามชัยเขต',
                'postal_code' => 24160,
                'note' => '',
                'province_id' => 15,
                'amphure_id' => 174
            ],
            [
                'id' => 176,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'เกาะจันทร์',
                'postal_code' => 20240,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 141
            ],
            [
                'id' => 177,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'เกาะสีชัง',
                'postal_code' => 20120,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 138
            ],
            [
                'id' => 178,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'บ่อทอง',
                'postal_code' => 20270,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 140
            ],
            [
                'id' => 179,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'บางละมุง',
                'postal_code' => 20150,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 134
            ],
            [
                'id' => 180,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'บ้านบึง',
                'postal_code' => 20170,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 132
            ],
            [
                'id' => 181,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'บ้านบึง',
                'postal_code' => 20220,
                'note' => 'ใช้ในเขตพื้นที่ ต.คลองกิ่ว, ต.หนองอิรุณ, ต.หนองไผ่แก้ว',
                'province_id' => 11,
                'amphure_id' => 132
            ],
            [
                'id' => 182,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'พนัสนิคม',
                'postal_code' => 20140,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 136
            ],
            [
                'id' => 183,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'พนัสนิคม',
                'postal_code' => 20240,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาเริก ม.4-5, ม.8-11, ม.14-15, ต.นาวังหิน ม.4-6, ม.10-11',
                'province_id' => 11,
                'amphure_id' => 136
            ],
            [
                'id' => 184,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'พานทอง',
                'postal_code' => 20160,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 135
            ],
            [
                'id' => 185,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'เมืองชลบุรี',
                'postal_code' => 20000,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 131
            ],
            [
                'id' => 186,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'เมืองชลบุรี',
                'postal_code' => 20130,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านปึก, ต.แสนสุข, ต.เหมือง, ต.เสม็ด ม.7-8, ต.ห้วยกะปิ ม.4-5',
                'province_id' => 11,
                'amphure_id' => 131
            ],
            [
                'id' => 187,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'เมืองชลบุรี',
                'postal_code' => 20131,
                'note' => 'ใช้ในเขตพื้นที่หน่วยงานราชการและหอพักภายในมหาวิทยาลัยบูรพา',
                'province_id' => 11,
                'amphure_id' => 131
            ],
            [
                'id' => 188,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'ศรีราชา',
                'postal_code' => 20110,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 137
            ],
            [
                'id' => 189,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'ศรีราชา',
                'postal_code' => 20230,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทุ่งสุขลา, ต.บึง, ต.บ่อวิน, ต.หนองขาม ม.1, ม.5, ม.10-11',
                'province_id' => 11,
                'amphure_id' => 137
            ],
            [
                'id' => 190,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'สัตหีบ',
                'postal_code' => 20180,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 139
            ],
            [
                'id' => 191,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'สัตหีบ',
                'postal_code' => 20182,
                'note' => 'ใช้ในเขตพื้นที่ ภายในฐานทัพเรือสัตหีบ',
                'province_id' => 11,
                'amphure_id' => 139
            ],
            [
                'id' => 192,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'สัตหีบ',
                'postal_code' => 20250,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาจอมเทียน, ต.บางเสร่',
                'province_id' => 11,
                'amphure_id' => 139
            ],
            [
                'id' => 193,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'สัตหีบ',
                'postal_code' => 20251,
                'note' => 'ใช้ในเขตพื้นที่ ภายในบริเวณศูนย์ฝึกทหารใหม่ และ รร.ชุมพลทหารเรือ',
                'province_id' => 11,
                'amphure_id' => 139
            ],
            [
                'id' => 194,
                'place' => 'east',
                'province' => 'ชลบุรี',
                'amphoe' => 'หนองใหญ่',
                'postal_code' => 20190,
                'note' => '',
                'province_id' => 11,
                'amphure_id' => 133
            ],
            [
                'id' => 195,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'กบินทร์บุรี',
                'postal_code' => 25110,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 179
            ],
            [
                'id' => 196,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'กบินทร์บุรี',
                'postal_code' => 25240,
                'note' => 'ใช้ในเขตพื้นที่ ต.เมืองเก่า',
                'province_id' => 16,
                'amphure_id' => 179
            ],
            [
                'id' => 197,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'นาดี',
                'postal_code' => 25220,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 180
            ],
            [
                'id' => 198,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'บ้านสร้าง',
                'postal_code' => 25150,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 181
            ],
            [
                'id' => 199,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'ประจันตคาม',
                'postal_code' => 25130,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 182
            ],
            [
                'id' => 200,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'เมืองปราจีนบุรี',
                'postal_code' => 25000,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 178
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 201,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'เมืองปราจีนบุรี',
                'postal_code' => 25230,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านพระ, ต.โคกไม้ลาย, ต.ไม้เค็ด, ต.เนินหอม',
                'province_id' => 16,
                'amphure_id' => 178
            ],
            [
                'id' => 202,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'ศรีมหาโพธิ',
                'postal_code' => 25140,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 183
            ],
            [
                'id' => 203,
                'place' => 'east',
                'province' => 'ปราจีนบุรี',
                'amphoe' => 'ศรีมโหสถ',
                'postal_code' => 25190,
                'note' => '',
                'province_id' => 16,
                'amphure_id' => 184
            ],
            [
                'id' => 204,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'แกลง',
                'postal_code' => 21110,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 144
            ],
            [
                'id' => 205,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'แกลง',
                'postal_code' => 21170,
                'note' => 'เฉพาะ ต.คลองปูน, ต.พังราด, ต.ปากน้ำกระแส',
                'province_id' => 12,
                'amphure_id' => 144
            ],
            [
                'id' => 206,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'แกลง',
                'postal_code' => 21190,
                'note' => 'เฉพาะ ต.กร่ำ, ต.ชากพง',
                'province_id' => 12,
                'amphure_id' => 144
            ],
            [
                'id' => 207,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'แกลง',
                'postal_code' => 22160,
                'note' => 'เฉพาะ ต.กองดิน',
                'province_id' => 12,
                'amphure_id' => 144
            ],
            [
                'id' => 208,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'เขาชะเมา',
                'postal_code' => 21110,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 148
            ],
            [
                'id' => 209,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'นิคมพัฒนา',
                'postal_code' => 21180,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 149
            ],
            [
                'id' => 210,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'บ้านค่าย',
                'postal_code' => 21120,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 146
            ],
            [
                'id' => 211,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'บ้านฉาง',
                'postal_code' => 21130,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 143
            ],
            [
                'id' => 212,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'ปลวกแดง',
                'postal_code' => 21140,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 147
            ],
            [
                'id' => 213,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'เมืองระยอง',
                'postal_code' => 21000,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 142
            ],
            [
                'id' => 214,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'เมืองระยอง',
                'postal_code' => 21100,
                'note' => 'เฉพาะ ต.กะเฉด, ต.สำนักทอง',
                'province_id' => 12,
                'amphure_id' => 142
            ],
            [
                'id' => 215,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'เมืองระยอง',
                'postal_code' => 21150,
                'note' => 'เฉพาะ ต.มาบตาพุด, ต.ห้วยโป่ง, ต.เนินพระ ม.4-7',
                'province_id' => 12,
                'amphure_id' => 142
            ],
            [
                'id' => 216,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'เมืองระยอง',
                'postal_code' => 21160,
                'note' => 'เฉพาะ ต.แกลง, ต.เพ',
                'province_id' => 12,
                'amphure_id' => 142
            ],
            [
                'id' => 217,
                'place' => 'east',
                'province' => 'ระยอง',
                'amphoe' => 'วังจันทร์',
                'postal_code' => 21210,
                'note' => '',
                'province_id' => 12,
                'amphure_id' => 145
            ],
            [
                'id' => 218,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'เขาฉกรรจ์',
                'postal_code' => 27000,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 195
            ],
            [
                'id' => 219,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'คลองหาด',
                'postal_code' => 27260,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 190
            ],
            [
                'id' => 220,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'โคกสูง',
                'postal_code' => 27120,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 196
            ],
            [
                'id' => 221,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'โคกสูง',
                'postal_code' => 27180,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองม่วง, ต.หนองแวง',
                'province_id' => 18,
                'amphure_id' => 196
            ],
            [
                'id' => 222,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'ตาพระยา',
                'postal_code' => 27180,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 191
            ],
            [
                'id' => 223,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'เมืองสระแก้ว',
                'postal_code' => 27000,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 189
            ],
            [
                'id' => 224,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'วังน้ำเย็น',
                'postal_code' => 27210,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 192
            ],
            [
                'id' => 225,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'วังสมบูรณ์',
                'postal_code' => 27210,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังใหม่ ม.2-4, ม.10 บ้านเลขที่ 56, 69/1, 74, 75, 92-94, 104, 105, 113-115, 126, 134-146',
                'province_id' => 18,
                'amphure_id' => 197
            ],
            [
                'id' => 226,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'วังสมบูรณ์',
                'postal_code' => 27250,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 197
            ],
            [
                'id' => 227,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'วัฒนานคร',
                'postal_code' => 27160,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 193
            ],
            [
                'id' => 228,
                'place' => 'east',
                'province' => 'สระแก้ว',
                'amphoe' => 'อรัญประเทศ',
                'postal_code' => 27120,
                'note' => '',
                'province_id' => 18,
                'amphure_id' => 194
            ],
            [
                'id' => 229,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'เกาะกูด',
                'postal_code' => 23000,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 165
            ],
            [
                'id' => 230,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'เกาะช้าง',
                'postal_code' => 23170,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 166
            ],
            [
                'id' => 231,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'เขาสมิง',
                'postal_code' => 23130,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 162
            ],
            [
                'id' => 232,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'เขาสมิง',
                'postal_code' => 23150,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าโสม, ต.แสนตุ้ง, ต.สะตอ, ต.ประณีต, ต.เทพนิมิต',
                'province_id' => 14,
                'amphure_id' => 162
            ],
            [
                'id' => 233,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'คลองใหญ่',
                'postal_code' => 23110,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 161
            ],
            [
                'id' => 234,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'บ่อไร่',
                'postal_code' => 23140,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 163
            ],
            [
                'id' => 235,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'เมืองตราด',
                'postal_code' => 23000,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 160
            ],
            [
                'id' => 236,
                'place' => 'east',
                'province' => 'ตราด',
                'amphoe' => 'แหลมงอบ',
                'postal_code' => 23120,
                'note' => '',
                'province_id' => 14,
                'amphure_id' => 164
            ],
            [
                'id' => 237,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ด่านมะขามเตี้ย',
                'postal_code' => 71260,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 736
            ],
            [
                'id' => 238,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ทองผาภูมิ',
                'postal_code' => 71180,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 732
            ],
            [
                'id' => 239,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ท่าม่วง',
                'postal_code' => 71000,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 731
            ],
            [
                'id' => 240,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ท่าม่วง',
                'postal_code' => 71110,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 731
            ],
            [
                'id' => 241,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ท่าม่วง',
                'postal_code' => 71130,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 731
            ],
            [
                'id' => 242,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ท่ามะกา',
                'postal_code' => 70190,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 730
            ],
            [
                'id' => 243,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ท่ามะกา',
                'postal_code' => 71120,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 730
            ],
            [
                'id' => 244,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ท่ามะกา',
                'postal_code' => 71130,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 730
            ],
            [
                'id' => 245,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ไทรโยค',
                'postal_code' => 71150,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 727
            ],
            [
                'id' => 246,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'บ่อพลอย',
                'postal_code' => 71160,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 728
            ],
            [
                'id' => 247,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'บ่อพลอย',
                'postal_code' => 71220,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 728
            ],
            [
                'id' => 248,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'พนมทวน',
                'postal_code' => 71140,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 734
            ],
            [
                'id' => 249,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'พนมทวน',
                'postal_code' => 71170,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 734
            ],
            [
                'id' => 250,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'เมืองกาญจนบุรี',
                'postal_code' => 71000,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 726
            ],
            [
                'id' => 251,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'เมืองกาญจนบุรี',
                'postal_code' => 71190,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 726
            ],
            [
                'id' => 252,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'เลาขวัญ',
                'postal_code' => 71210,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 735
            ],
            [
                'id' => 253,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ศรีสวัสดิ์',
                'postal_code' => 71220,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 729
            ],
            [
                'id' => 254,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ศรีสวัสดิ์',
                'postal_code' => 71250,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 729
            ],
            [
                'id' => 255,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'สังขละบุรี',
                'postal_code' => 71240,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 733
            ],
            [
                'id' => 256,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'หนองปรือ',
                'postal_code' => 71220,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 737
            ],
            [
                'id' => 257,
                'place' => 'west',
                'province' => 'กาญจนบุรี',
                'amphoe' => 'ห้วยกระเจา',
                'postal_code' => 71170,
                'note' => '',
                'province_id' => 57,
                'amphure_id' => 738
            ],
            [
                'id' => 258,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'ท่าสองยาง',
                'postal_code' => 63150,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 670
            ],
            [
                'id' => 259,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'บ้านตาก',
                'postal_code' => 63120,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 667
            ],
            [
                'id' => 260,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'พบพระ',
                'postal_code' => 63160,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 672
            ],
            [
                'id' => 261,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'เมืองตาก',
                'postal_code' => 63000,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 666
            ],
            [
                'id' => 262,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'แม่ระมาด',
                'postal_code' => 63140,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 669
            ],
            [
                'id' => 263,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'แม่สอด',
                'postal_code' => 63110,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 671
            ],
            [
                'id' => 264,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'วังเจ้า',
                'postal_code' => 63000,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 674
            ],
            [
                'id' => 265,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'สามเงา',
                'postal_code' => 63130,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 668
            ],
            [
                'id' => 266,
                'place' => 'west',
                'province' => 'ตาก',
                'amphoe' => 'อุ้มผาง',
                'postal_code' => 63170,
                'note' => '',
                'province_id' => 51,
                'amphure_id' => 673
            ],
            [
                'id' => 267,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'แก่งกระจาน',
                'postal_code' => 76170,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 769
            ],
            [
                'id' => 268,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'เขาย้อย',
                'postal_code' => 76140,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 763
            ],
            [
                'id' => 269,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'ชะอำ',
                'postal_code' => 76120,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 765
            ],
            [
                'id' => 270,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'ท่ายาง',
                'postal_code' => 76130,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 766
            ],
            [
                'id' => 271,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'บ้านลาด',
                'postal_code' => 76150,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 767
            ],
            [
                'id' => 272,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'บ้านแหลม',
                'postal_code' => 76100,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 768
            ],
            [
                'id' => 273,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'บ้านแหลม',
                'postal_code' => 76110,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 768
            ],
            [
                'id' => 274,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'เมืองเพชรบุรี',
                'postal_code' => 76000,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 762
            ],
            [
                'id' => 275,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'เมืองเพชรบุรี',
                'postal_code' => 76100,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 762
            ],
            [
                'id' => 276,
                'place' => 'west',
                'province' => 'เพชรบุรี',
                'amphoe' => 'หนองหญ้าปล้อง',
                'postal_code' => 76160,
                'note' => '',
                'province_id' => 62,
                'amphure_id' => 764
            ],
            [
                'id' => 277,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'จอมบึง',
                'postal_code' => 70150,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 717
            ],
            [
                'id' => 278,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'ดำเนินสะดวก',
                'postal_code' => 70130,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 719
            ],
            [
                'id' => 279,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'ดำเนินสะดวก',
                'postal_code' => 70210,
                'note' => '仅限T.BuaNgam，T.Prasatsit',
                'province_id' => 56,
                'amphure_id' => 719
            ],
            [
                'id' => 280,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'บางแพ',
                'postal_code' => 70160,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 721
            ],
            [
                'id' => 281,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'บ้านคา',
                'postal_code' => 70180,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 725
            ],
            [
                'id' => 282,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'บ้านโป่ง',
                'postal_code' => 70110,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 720
            ],
            [
                'id' => 283,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'บ้านโป่ง',
                'postal_code' => 70190,
                'note' => '仅限T.KrapYai',
                'province_id' => 56,
                'amphure_id' => 720
            ],
            [
                'id' => 284,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'ปากท่อ',
                'postal_code' => 70140,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 723
            ],
            [
                'id' => 285,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'โพธาราม',
                'postal_code' => 70120,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 722
            ],
            [
                'id' => 286,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'เมืองราชบุรี',
                'postal_code' => 70000,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 716
            ],
            [
                'id' => 287,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'วัดเพลง',
                'postal_code' => 70170,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 724
            ],
            [
                'id' => 288,
                'place' => 'west',
                'province' => 'ราชบุรี',
                'amphoe' => 'สวนผึ้ง',
                'postal_code' => 70180,
                'note' => '',
                'province_id' => 56,
                'amphure_id' => 718
            ],
            [
                'id' => 289,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'กุยบุรี',
                'postal_code' => 77150,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 771
            ],
            [
                'id' => 290,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'ทับสะแก',
                'postal_code' => 77130,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 772
            ],
            [
                'id' => 291,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'บางสะพาน',
                'postal_code' => 77140,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 773
            ],
            [
                'id' => 292,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'บางสะพาน',
                'postal_code' => 77190,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 773
            ],
            [
                'id' => 293,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'บางสะพาน',
                'postal_code' => 77230,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 773
            ],
            [
                'id' => 294,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'บางสะพานน้อย',
                'postal_code' => 77170,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 774
            ],
            [
                'id' => 295,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'ปราณบุรี',
                'postal_code' => 77120,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 775
            ],
            [
                'id' => 296,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'ปราณบุรี',
                'postal_code' => 77160,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 775
            ],
            [
                'id' => 297,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'ปราณบุรี',
                'postal_code' => 77220,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 775
            ],
            [
                'id' => 298,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'เมืองประจวบคีรีขันธ์',
                'postal_code' => 77000,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 770
            ],
            [
                'id' => 299,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'เมืองประจวบคีรีขันธ์',
                'postal_code' => 77210,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 770
            ],
            [
                'id' => 300,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'สามร้อยยอด',
                'postal_code' => 77120,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 777
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 301,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'สามร้อยยอด',
                'postal_code' => 77180,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 777
            ],
            [
                'id' => 302,
                'place' => 'west',
                'province' => 'ประจวบคีรีขันธ์',
                'amphoe' => 'หัวหิน',
                'postal_code' => 77110,
                'note' => '',
                'province_id' => 63,
                'amphure_id' => 776
            ],
            [
                'id' => 303,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'คลองเตย',
                'postal_code' => 10110,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 33
            ],
            [
                'id' => 304,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'คลองเตย',
                'postal_code' => 10260,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 33
            ],
            [
                'id' => 305,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'คลองสาน',
                'postal_code' => 10600,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 18
            ],
            [
                'id' => 306,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'คลองสามวา',
                'postal_code' => 10510,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 46
            ],
            [
                'id' => 307,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'คันนายาว',
                'postal_code' => 10230,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 43
            ],
            [
                'id' => 308,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'จตุจักร',
                'postal_code' => 10900,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 30
            ],
            [
                'id' => 309,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'จอมทอง',
                'postal_code' => 10150,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 35
            ],
            [
                'id' => 310,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดอนเมือง',
                'postal_code' => 10001,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 36
            ],
            [
                'id' => 311,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดอนเมือง',
                'postal_code' => 10002,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 36
            ],
            [
                'id' => 312,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดอนเมือง',
                'postal_code' => 10003,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 36
            ],
            [
                'id' => 313,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดอนเมือง',
                'postal_code' => 10210,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 36
            ],
            [
                'id' => 314,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดินแดง',
                'postal_code' => 10400,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 26
            ],
            [
                'id' => 315,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดุสิต',
                'postal_code' => 10300,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 2
            ],
            [
                'id' => 316,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ดุสิต',
                'postal_code' => 10303,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 2
            ],
            [
                'id' => 317,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ตลิ่งชัน',
                'postal_code' => 10170,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 19
            ],
            [
                'id' => 318,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ทวีวัฒนา',
                'postal_code' => 10170,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 48
            ],
            [
                'id' => 319,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ทุ่งครุ',
                'postal_code' => 10140,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 49
            ],
            [
                'id' => 320,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ธนบุรี',
                'postal_code' => 10600,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 15
            ],
            [
                'id' => 321,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางกอกน้อย',
                'postal_code' => 10700,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 20
            ],
            [
                'id' => 322,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางกอกใหญ่',
                'postal_code' => 10600,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 16
            ],
            [
                'id' => 323,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางกะปิ',
                'postal_code' => 10240,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 6
            ],
            [
                'id' => 324,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางกะปิ',
                'postal_code' => 10250,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 6
            ],
            [
                'id' => 325,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางขุนเทียน',
                'postal_code' => 10150,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 21
            ],
            [
                'id' => 326,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางเขน',
                'postal_code' => 10220,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 5
            ],
            [
                'id' => 327,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางเขน',
                'postal_code' => 10230,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 5
            ],
            [
                'id' => 328,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางคอแหลม',
                'postal_code' => 10120,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 31
            ],
            [
                'id' => 329,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางคอแหลม',
                'postal_code' => 10140,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 31
            ],
            [
                'id' => 330,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางแค',
                'postal_code' => 10160,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 40
            ],
            [
                'id' => 331,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางซื่อ',
                'postal_code' => 10800,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 29
            ],
            [
                'id' => 332,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางนา',
                'postal_code' => 10260,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 47
            ],
            [
                'id' => 333,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางบอน',
                'postal_code' => 10150,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 50
            ],
            [
                'id' => 334,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางพลัด',
                'postal_code' => 10700,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 25
            ],
            [
                'id' => 335,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บางรัก',
                'postal_code' => 10500,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 4
            ],
            [
                'id' => 336,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บึงกุ่ม',
                'postal_code' => 10230,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 27
            ],
            [
                'id' => 337,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'บึงกุ่ม',
                'postal_code' => 10240,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 27
            ],
            [
                'id' => 338,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ปทุมวัน',
                'postal_code' => 10110,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 7
            ],
            [
                'id' => 339,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ปทุมวัน',
                'postal_code' => 10120,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 7
            ],
            [
                'id' => 340,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ปทุมวัน',
                'postal_code' => 10330,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 7
            ],
            [
                'id' => 341,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ปทุมวัน',
                'postal_code' => 10400,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 7
            ],
            [
                'id' => 342,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ปทุมวัน',
                'postal_code' => 10500,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 7
            ],
            [
                'id' => 343,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ประเวศ',
                'postal_code' => 10250,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 32
            ],
            [
                'id' => 344,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ป้อมปราบศัตรูพ่าย',
                'postal_code' => 10100,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 8
            ],
            [
                'id' => 345,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'พญาไท',
                'postal_code' => 10400,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 14
            ],
            [
                'id' => 346,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'พระโขนง',
                'postal_code' => 10260,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 9
            ],
            [
                'id' => 347,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'พระนคร',
                'postal_code' => 10200,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 1
            ],
            [
                'id' => 348,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ภาษีเจริญ',
                'postal_code' => 10160,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 22
            ],
            [
                'id' => 349,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'มีนบุรี',
                'postal_code' => 10510,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 10
            ],
            [
                'id' => 350,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ยานนาวา',
                'postal_code' => 10110,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 12
            ],
            [
                'id' => 351,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ยานนาวา',
                'postal_code' => 10120,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 12
            ],
            [
                'id' => 352,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ยานนาวา',
                'postal_code' => 10500,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 12
            ],
            [
                'id' => 353,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ราชเทวี',
                'postal_code' => 10400,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 37
            ],
            [
                'id' => 354,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ราษฎร์บูรณะ',
                'postal_code' => 10140,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 24
            ],
            [
                'id' => 355,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ลาดกระบัง',
                'postal_code' => 10520,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 11
            ],
            [
                'id' => 356,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ลาดพร้าว',
                'postal_code' => 10230,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 38
            ],
            [
                'id' => 357,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'วังทองหลาง',
                'postal_code' => 10310,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 45
            ],
            [
                'id' => 358,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'วัฒนา',
                'postal_code' => 10110,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 39
            ],
            [
                'id' => 359,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'วัฒนา',
                'postal_code' => 10260,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 39
            ],
            [
                'id' => 360,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สวนหลวง',
                'postal_code' => 10250,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 34
            ],
            [
                'id' => 361,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สะพานสูง',
                'postal_code' => 10240,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 44
            ],
            [
                'id' => 362,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สะพานสูง',
                'postal_code' => 10250,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 44
            ],
            [
                'id' => 363,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สัมพันธวงศ์',
                'postal_code' => 10100,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 13
            ],
            [
                'id' => 364,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สาทร',
                'postal_code' => 10120,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 28
            ],
            [
                'id' => 365,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สาทร',
                'postal_code' => 10500,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 28
            ],
            [
                'id' => 366,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'สายไหม',
                'postal_code' => 10220,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 42
            ],
            [
                'id' => 367,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'หนองแขม',
                'postal_code' => 10160,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 23
            ],
            [
                'id' => 368,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'หนองจอก',
                'postal_code' => 10530,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 3
            ],
            [
                'id' => 369,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'หลักสี่',
                'postal_code' => 10010,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 41
            ],
            [
                'id' => 370,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'หลักสี่',
                'postal_code' => 10210,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 41
            ],
            [
                'id' => 371,
                'place' => 'central',
                'province' => 'กรุงเทพมหานคร',
                'amphoe' => 'ห้วยขวาง',
                'postal_code' => 10310,
                'note' => '',
                'province_id' => 1,
                'amphure_id' => 17
            ],
            [
                'id' => 372,
                'place' => 'central',
                'province' => 'นครนายก',
                'amphoe' => 'บ้านนา',
                'postal_code' => 26110,
                'note' => '',
                'province_id' => 17,
                'amphure_id' => 187
            ],
            [
                'id' => 373,
                'place' => 'central',
                'province' => 'นครนายก',
                'amphoe' => 'ปากพลี',
                'postal_code' => 26130,
                'note' => '',
                'province_id' => 17,
                'amphure_id' => 186
            ],
            [
                'id' => 374,
                'place' => 'central',
                'province' => 'นครนายก',
                'amphoe' => 'เมืองนครนายก',
                'postal_code' => 26000,
                'note' => '',
                'province_id' => 17,
                'amphure_id' => 185
            ],
            [
                'id' => 375,
                'place' => 'central',
                'province' => 'นครนายก',
                'amphoe' => 'เมืองนครนายก',
                'postal_code' => 26001,
                'note' => 'ใช้ในเขตพื้นที่ ต.พรหมณี ม.1, ม.13, ภายในบริเวณ รร.จปร. และ รร.ปิยชาติ',
                'province_id' => 17,
                'amphure_id' => 185
            ],
            [
                'id' => 376,
                'place' => 'central',
                'province' => 'นครนายก',
                'amphoe' => 'องครักษ์',
                'postal_code' => 26120,
                'note' => '',
                'province_id' => 17,
                'amphure_id' => 188
            ],
            [
                'id' => 377,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'เนินขาม',
                'postal_code' => 17130,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 117
            ],
            [
                'id' => 378,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'มโนรมย์',
                'postal_code' => 17110,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 111
            ],
            [
                'id' => 379,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'มโนรมย์',
                'postal_code' => 17170,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 111
            ],
            [
                'id' => 380,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'เมืองชัยนาท',
                'postal_code' => 17000,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 110
            ],
            [
                'id' => 381,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'เมืองชัยนาท',
                'postal_code' => 17120,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 110
            ],
            [
                'id' => 382,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'วัดสิงห์',
                'postal_code' => 17120,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 112
            ],
            [
                'id' => 383,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'สรรคบุรี',
                'postal_code' => 17140,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 114
            ],
            [
                'id' => 384,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'สรรพยา',
                'postal_code' => 17150,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 113
            ],
            [
                'id' => 385,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'หนองมะโมง',
                'postal_code' => 17120,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 116
            ],
            [
                'id' => 386,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'หันคา',
                'postal_code' => 17130,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 115
            ],
            [
                'id' => 387,
                'place' => 'central',
                'province' => 'ชัยนาท',
                'amphoe' => 'หันคา',
                'postal_code' => 17160,
                'note' => '',
                'province_id' => 9,
                'amphure_id' => 115
            ],
            [
                'id' => 388,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'กำแพงแสน',
                'postal_code' => 73140,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 750
            ],
            [
                'id' => 389,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'กำแพงแสน',
                'postal_code' => 73180,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 750
            ],
            [
                'id' => 390,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'ดอนตูม',
                'postal_code' => 73150,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 752
            ],
            [
                'id' => 391,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'นครชัยศรี',
                'postal_code' => 73120,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 751
            ],
            [
                'id' => 392,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'บางเลน',
                'postal_code' => 73130,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 753
            ],
            [
                'id' => 393,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'บางเลน',
                'postal_code' => 73190,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 753
            ],
            [
                'id' => 394,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'พุทธมณฑล',
                'postal_code' => 73170,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 755
            ],
            [
                'id' => 395,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'เมืองนครปฐม',
                'postal_code' => 73000,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 749
            ],
            [
                'id' => 396,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'สามพราน',
                'postal_code' => 73110,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 754
            ],
            [
                'id' => 397,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'สามพราน',
                'postal_code' => 73160,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 754
            ],
            [
                'id' => 398,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'สามพราน',
                'postal_code' => 73210,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 754
            ],
            [
                'id' => 399,
                'place' => 'central',
                'province' => 'นครปฐม',
                'amphoe' => 'สามพราน',
                'postal_code' => 73220,
                'note' => '',
                'province_id' => 59,
                'amphure_id' => 754
            ],
            [
                'id' => 400,
                'place' => 'central',
                'province' => 'นนทบุรี',
                'amphoe' => 'ไทรน้อย',
                'postal_code' => 11150,
                'note' => '',
                'province_id' => 3,
                'amphure_id' => 61
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 401,
                'place' => 'central',
                'province' => 'นนทบุรี',
                'amphoe' => 'บางกรวย',
                'postal_code' => 11130,
                'note' => '',
                'province_id' => 3,
                'amphure_id' => 58
            ],
            [
                'id' => 402,
                'place' => 'central',
                'province' => 'นนทบุรี',
                'amphoe' => 'บางบัวทอง',
                'postal_code' => 11110,
                'note' => '',
                'province_id' => 3,
                'amphure_id' => 60
            ],
            [
                'id' => 403,
                'place' => 'central',
                'province' => 'นนทบุรี',
                'amphoe' => 'บางใหญ่',
                'postal_code' => 11140,
                'note' => '',
                'province_id' => 3,
                'amphure_id' => 59
            ],
            [
                'id' => 404,
                'place' => 'central',
                'province' => 'นนทบุรี',
                'amphoe' => 'ปากเกร็ด',
                'postal_code' => 11120,
                'note' => '',
                'province_id' => 3,
                'amphure_id' => 62
            ],
            [
                'id' => 405,
                'place' => 'central',
                'province' => 'นนทบุรี',
                'amphoe' => 'เมืองนนทบุรี',
                'postal_code' => 11000,
                'note' => '',
                'province_id' => 3,
                'amphure_id' => 57
            ],
            [
                'id' => 406,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'คลองหลวง',
                'postal_code' => 12110,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 64
            ],
            [
                'id' => 407,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'คลองหลวง',
                'postal_code' => 12120,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 64
            ],
            [
                'id' => 408,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'คลองหลวง',
                'postal_code' => 13180,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 64
            ],
            [
                'id' => 409,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'ธัญบุรี',
                'postal_code' => 12110,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 65
            ],
            [
                'id' => 410,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'ธัญบุรี',
                'postal_code' => 12130,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 65
            ],
            [
                'id' => 411,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'เมืองปทุมธานี',
                'postal_code' => 12000,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 63
            ],
            [
                'id' => 412,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'ลาดหลุมแก้ว',
                'postal_code' => 12140,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 67
            ],
            [
                'id' => 413,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'ลำลูกกา',
                'postal_code' => 12130,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 68
            ],
            [
                'id' => 414,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'ลำลูกกา',
                'postal_code' => 12150,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 68
            ],
            [
                'id' => 415,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'สามโคก',
                'postal_code' => 12160,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 69
            ],
            [
                'id' => 416,
                'place' => 'central',
                'province' => 'ปทุมธานี',
                'amphoe' => 'หนองเสือ',
                'postal_code' => 12170,
                'note' => '',
                'province_id' => 4,
                'amphure_id' => 66
            ],
            [
                'id' => 417,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ท่าเรือ',
                'postal_code' => 13130,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 71
            ],
            [
                'id' => 418,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ท่าเรือ',
                'postal_code' => 18270,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 71
            ],
            [
                'id' => 419,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'นครหลวง',
                'postal_code' => 13260,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 72
            ],
            [
                'id' => 420,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางซ้าย',
                'postal_code' => 13270,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 82
            ],
            [
                'id' => 421,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางไทร',
                'postal_code' => 13190,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 73
            ],
            [
                'id' => 422,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางไทร',
                'postal_code' => 13290,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 73
            ],
            [
                'id' => 423,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางบาล',
                'postal_code' => 13250,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 74
            ],
            [
                'id' => 424,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางปะหัน',
                'postal_code' => 13220,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 76
            ],
            [
                'id' => 425,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางปะอิน',
                'postal_code' => 13160,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 75
            ],
            [
                'id' => 426,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางปะอิน',
                'postal_code' => 13170,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 75
            ],
            [
                'id' => 427,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บางปะอิน',
                'postal_code' => 13180,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 75
            ],
            [
                'id' => 428,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'บ้านแพรก',
                'postal_code' => 13240,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 85
            ],
            [
                'id' => 429,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ผักไห่',
                'postal_code' => 13120,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 77
            ],
            [
                'id' => 430,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ผักไห่',
                'postal_code' => 13280,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 77
            ],
            [
                'id' => 431,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'พระนครศรีอยุธยา',
                'postal_code' => 13000,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 70
            ],
            [
                'id' => 432,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ภาชี',
                'postal_code' => 13140,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 78
            ],
            [
                'id' => 433,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ภาชี',
                'postal_code' => 18250,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 78
            ],
            [
                'id' => 434,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'มหาราช',
                'postal_code' => 13150,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 84
            ],
            [
                'id' => 435,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'ลาดบัวหลวง',
                'postal_code' => 13230,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 79
            ],
            [
                'id' => 436,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'วังน้อย',
                'postal_code' => 13170,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 80
            ],
            [
                'id' => 437,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'วังน้อย',
                'postal_code' => 13180,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 80
            ],
            [
                'id' => 438,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'เสนา',
                'postal_code' => 13110,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 81
            ],
            [
                'id' => 439,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'อุทัย',
                'postal_code' => 13000,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 83
            ],
            [
                'id' => 440,
                'place' => 'central',
                'province' => 'พระนครศรีอยุธยา',
                'amphoe' => 'อุทัย',
                'postal_code' => 13210,
                'note' => '',
                'province_id' => 5,
                'amphure_id' => 83
            ],
            [
                'id' => 441,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'โกสัมพีนคร',
                'postal_code' => 62000,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 665
            ],
            [
                'id' => 442,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'ขาณุวรลักษบุรี',
                'postal_code' => 62130,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 658
            ],
            [
                'id' => 443,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'ขาณุวรลักษบุรี',
                'postal_code' => 62140,
                'note' => 'ใช้ในเขตพื้นที่ ต.สลกบาตร, ต.บ่อถ้ำ, ต.ดอนแตง, ต.วังชะพลู, ต.โค้งไผ่, ต.วังหามแห, ต.ปางมะค่า',
                'province_id' => 50,
                'amphure_id' => 658
            ],
            [
                'id' => 444,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'คลองขลุง',
                'postal_code' => 62120,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 659
            ],
            [
                'id' => 445,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'คลองลาน',
                'postal_code' => 62180,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 657
            ],
            [
                'id' => 446,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'ทรายทองวัฒนา',
                'postal_code' => 62190,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 662
            ],
            [
                'id' => 447,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'ไทรงาม',
                'postal_code' => 62150,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 656
            ],
            [
                'id' => 448,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'บึงสามัคคี',
                'postal_code' => 62210,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 664
            ],
            [
                'id' => 449,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'ปางศิลาทอง',
                'postal_code' => 62120,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 663
            ],
            [
                'id' => 450,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'พรานกระต่าย',
                'postal_code' => 62110,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 660
            ],
            [
                'id' => 451,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'เมืองกำแพงเพชร',
                'postal_code' => 62000,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 655
            ],
            [
                'id' => 452,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'เมืองกำแพงเพชร',
                'postal_code' => 62160,
                'note' => 'ใช้ในเขตพื้นที่ ต.ไตรตรึงษ์, ต.ธำมรงค์',
                'province_id' => 50,
                'amphure_id' => 655
            ],
            [
                'id' => 453,
                'place' => 'central',
                'province' => 'กำแพงเพชร',
                'amphoe' => 'ลานกระบือ',
                'postal_code' => 62170,
                'note' => '',
                'province_id' => 50,
                'amphure_id' => 661
            ],
            [
                'id' => 454,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'เก้าเลี้ยว',
                'postal_code' => 60230,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 637
            ],
            [
                'id' => 455,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'โกรกพระ',
                'postal_code' => 60170,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 633
            ],
            [
                'id' => 456,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ชุมตาบง',
                'postal_code' => 60150,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 646
            ],
            [
                'id' => 457,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ชุมแสง',
                'postal_code' => 60120,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 634
            ],
            [
                'id' => 458,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ชุมแสง',
                'postal_code' => 60250,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทับกฤช, ต.ทับกฤชใต้, ต.พันลาน',
                'province_id' => 48,
                'amphure_id' => 634
            ],
            [
                'id' => 459,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ตากฟ้า',
                'postal_code' => 60190,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 643
            ],
            [
                'id' => 460,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ตาคลี',
                'postal_code' => 60140,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 638
            ],
            [
                'id' => 461,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ตาคลี',
                'postal_code' => 60210,
                'note' => 'ใช้ในเขตพื้นที่ ต.ช่องแค, ต.สร้อยทอง, ต.ห้วยหอม, ต.พรหมนิมิต',
                'province_id' => 48,
                'amphure_id' => 638
            ],
            [
                'id' => 462,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ตาคลี',
                'postal_code' => 60260,
                'note' => 'ใช้ในเขตพื้นที่ ต.จันเสน, ต.ลาดทิพรส',
                'province_id' => 48,
                'amphure_id' => 638
            ],
            [
                'id' => 463,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ท่าตะโก',
                'postal_code' => 60160,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 639
            ],
            [
                'id' => 464,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'บรรพตพิสัย',
                'postal_code' => 60180,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 636
            ],
            [
                'id' => 465,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'พยุหะคีรี',
                'postal_code' => 60130,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 641
            ],
            [
                'id' => 466,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ไพศาลี',
                'postal_code' => 60220,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 640
            ],
            [
                'id' => 467,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'เมืองนครสวรรค์',
                'postal_code' => 60000,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 632
            ],
            [
                'id' => 468,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'เมืองนครสวรรค์',
                'postal_code' => 60240,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองกระโดน, ต.หนองกรด',
                'province_id' => 48,
                'amphure_id' => 632
            ],
            [
                'id' => 469,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'แม่เปิน',
                'postal_code' => 60150,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 645
            ],
            [
                'id' => 470,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'แม่วงก์',
                'postal_code' => 60150,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 644
            ],
            [
                'id' => 471,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'ลาดยาว',
                'postal_code' => 60150,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 642
            ],
            [
                'id' => 472,
                'place' => 'central',
                'province' => 'นครสวรรค์',
                'amphoe' => 'หนองบัว',
                'postal_code' => 60110,
                'note' => '',
                'province_id' => 48,
                'amphure_id' => 635
            ],
            [
                'id' => 473,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'ดงเจริญ',
                'postal_code' => 66210,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 703
            ],
            [
                'id' => 474,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'ตะพานหิน',
                'postal_code' => 66110,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 696
            ],
            [
                'id' => 475,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'ตะพานหิน',
                'postal_code' => 66150,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทุ่งโพธิ์, ต.วังหลุม',
                'province_id' => 54,
                'amphure_id' => 696
            ],
            [
                'id' => 476,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'ทับคล้อ',
                'postal_code' => 66150,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 700
            ],
            [
                'id' => 477,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'ทับคล้อ',
                'postal_code' => 66230,
                'note' => 'ใช้ในเขตพื้นที่ ต.เขาทราย, ต.เขาเจ็ดลูก',
                'province_id' => 54,
                'amphure_id' => 700
            ],
            [
                'id' => 478,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'บางมูลนาก',
                'postal_code' => 66120,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 697
            ],
            [
                'id' => 479,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'บางมูลนาก',
                'postal_code' => 66210,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังตะกู',
                'province_id' => 54,
                'amphure_id' => 697
            ],
            [
                'id' => 480,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'บึงนาราง',
                'postal_code' => 66130,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 702
            ],
            [
                'id' => 481,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'โพทะเล',
                'postal_code' => 66130,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 698
            ],
            [
                'id' => 482,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'โพธิ์ประทับช้าง',
                'postal_code' => 66190,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 695
            ],
            [
                'id' => 483,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'เมืองพิจิตร',
                'postal_code' => 66000,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 693
            ],
            [
                'id' => 484,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'เมืองพิจิตร',
                'postal_code' => 66170,
                'note' => 'ใช้ในเขตพื้นที่ ต.ฆะมัง ม.3-4, ม.7-9, ต.ดงป่าคำ, ต.หัวดง, ต.ดงกลาง',
                'province_id' => 54,
                'amphure_id' => 693
            ],
            [
                'id' => 485,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'วชิรบารมี',
                'postal_code' => 66140,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 704
            ],
            [
                'id' => 486,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'วชิรบารมี',
                'postal_code' => 66220,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองหลุม',
                'province_id' => 54,
                'amphure_id' => 704
            ],
            [
                'id' => 487,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'วังทรายพูน',
                'postal_code' => 66180,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 694
            ],
            [
                'id' => 488,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'สากเหล็ก',
                'postal_code' => 66160,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 701
            ],
            [
                'id' => 489,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'สามง่าม',
                'postal_code' => 66140,
                'note' => '',
                'province_id' => 54,
                'amphure_id' => 699
            ],
            [
                'id' => 490,
                'place' => 'central',
                'province' => 'พิจิตร',
                'amphoe' => 'สามง่าม',
                'postal_code' => 66220,
                'note' => 'ใช้ในเขตพื้นที่ ต.กำแพงดิน',
                'province_id' => 54,
                'amphure_id' => 699
            ],
            [
                'id' => 491,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'ชาติตระการ',
                'postal_code' => 65170,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 686
            ],
            [
                'id' => 492,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'นครไทย',
                'postal_code' => 65120,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 685
            ],
            [
                'id' => 493,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'เนินมะปราง',
                'postal_code' => 65190,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 692
            ],
            [
                'id' => 494,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'บางกระทุ่ม',
                'postal_code' => 65110,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 688
            ],
            [
                'id' => 495,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'บางกระทุ่ม',
                'postal_code' => 65210,
                'note' => 'ใช้ในเขตพื้นที่ ต.เนินกุ่ม, ต.วัดตายม',
                'province_id' => 53,
                'amphure_id' => 688
            ],
            [
                'id' => 496,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'บางระกำ',
                'postal_code' => 65140,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 687
            ],
            [
                'id' => 497,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'บางระกำ',
                'postal_code' => 65240,
                'note' => 'ใช้ในเขตพื้นที่ ต.ชุมแสงสงคราม, ต.คุยม่วง',
                'province_id' => 53,
                'amphure_id' => 687
            ],
            [
                'id' => 498,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'พรหมพิราม',
                'postal_code' => 65150,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 689
            ],
            [
                'id' => 499,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'พรหมพิราม',
                'postal_code' => 65180,
                'note' => 'ใช้ในเขตพื้นที่ ต.ตลุกเทียม, ต.มะต้อง, ต.ศรีภิรมย์, ต.วงฆ้อง, ต.ดงประคำ',
                'province_id' => 53,
                'amphure_id' => 689
            ],
            [
                'id' => 500,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'เมืองพิษณุโลก',
                'postal_code' => 65000,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 684
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 501,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'เมืองพิษณุโลก',
                'postal_code' => 65230,
                'note' => 'ใช้ในเขตพื้นที่ ต.วัดพริก, ต.วังน้ำคู้, ต.งิ้วงาม',
                'province_id' => 53,
                'amphure_id' => 684
            ],
            [
                'id' => 502,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'วังทอง',
                'postal_code' => 65130,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 691
            ],
            [
                'id' => 503,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'วังทอง',
                'postal_code' => 65220,
                'note' => 'ใช้ในเขตพื้นที่ ต.แก่งโสภา, ต.บ้านกลาง',
                'province_id' => 53,
                'amphure_id' => 691
            ],
            [
                'id' => 504,
                'place' => 'central',
                'province' => 'พิษณุโลก',
                'amphoe' => 'วัดโบสถ์',
                'postal_code' => 65160,
                'note' => '',
                'province_id' => 53,
                'amphure_id' => 690
            ],
            [
                'id' => 505,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'เขาค้อ',
                'postal_code' => 67270,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 715
            ],
            [
                'id' => 506,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'เขาค้อ',
                'postal_code' => 67280,
                'note' => 'ใช้ในเขตพื้นที่ ต.แคมป์สน, ต.เข็กน้อย',
                'province_id' => 55,
                'amphure_id' => 715
            ],
            [
                'id' => 507,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'ชนแดน',
                'postal_code' => 67150,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 706
            ],
            [
                'id' => 508,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'ชนแดน',
                'postal_code' => 67190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ดงขุย, ต.บ้านกล้วย, ต.ตะกุดไร',
                'province_id' => 55,
                'amphure_id' => 706
            ],
            [
                'id' => 509,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'น้ำหนาว',
                'postal_code' => 67260,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 713
            ],
            [
                'id' => 510,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'บึงสามพัน',
                'postal_code' => 67160,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 712
            ],
            [
                'id' => 511,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'บึงสามพัน',
                'postal_code' => 67230,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังพิกุล',
                'province_id' => 55,
                'amphure_id' => 712
            ],
            [
                'id' => 512,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'เมืองเพชรบูรณ์',
                'postal_code' => 67000,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 705
            ],
            [
                'id' => 513,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'เมืองเพชรบูรณ์',
                'postal_code' => 67210,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังชมภู, ต.นายม, ต.ระวิง, ต.ห้วยสะแก',
                'province_id' => 55,
                'amphure_id' => 705
            ],
            [
                'id' => 514,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'เมืองเพชรบูรณ์',
                'postal_code' => 67250,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าพล',
                'province_id' => 55,
                'amphure_id' => 705
            ],
            [
                'id' => 515,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'วังโป่ง',
                'postal_code' => 67240,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 714
            ],
            [
                'id' => 516,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'วิเชียรบุรี',
                'postal_code' => 67130,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 709
            ],
            [
                'id' => 517,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'วิเชียรบุรี',
                'postal_code' => 67180,
                'note' => 'ใช้ในเขตพื้นที่ ต.พุเตย, ต.พุขาม, ต.ภูน้ำหยด, ต.ซับสมบูรณ์, ต.วังใหญ่, ต.ซับน้อย',
                'province_id' => 55,
                'amphure_id' => 709
            ],
            [
                'id' => 518,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'ศรีเทพ',
                'postal_code' => 67170,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 710
            ],
            [
                'id' => 519,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'หนองไผ่',
                'postal_code' => 67140,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 711
            ],
            [
                'id' => 520,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'หนองไผ่',
                'postal_code' => 67220,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาเฉลียง, ต.ยางงาม, ต.ห้วยโป่ง',
                'province_id' => 55,
                'amphure_id' => 711
            ],
            [
                'id' => 521,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'หล่มเก่า',
                'postal_code' => 67120,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 708
            ],
            [
                'id' => 522,
                'place' => 'central',
                'province' => 'เพชรบูรณ์',
                'amphoe' => 'หล่มสัก',
                'postal_code' => 67110,
                'note' => '',
                'province_id' => 55,
                'amphure_id' => 707
            ],
            [
                'id' => 523,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'กงไกรลาศ',
                'postal_code' => 64170,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 678
            ],
            [
                'id' => 524,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'คีรีมาศ',
                'postal_code' => 64160,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 677
            ],
            [
                'id' => 525,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'ทุ่งเสลี่ยม',
                'postal_code' => 64150,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 683
            ],
            [
                'id' => 526,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'ทุ่งเสลี่ยม',
                'postal_code' => 64230,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านใหม่ไชยมงคล, ต.เขาแก้วศรีสมบูรณ์',
                'province_id' => 52,
                'amphure_id' => 683
            ],
            [
                'id' => 527,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'บ้านด่านลานหอย',
                'postal_code' => 64140,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 676
            ],
            [
                'id' => 528,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'เมืองสุโขทัย',
                'postal_code' => 64000,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 675
            ],
            [
                'id' => 529,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'เมืองสุโขทัย',
                'postal_code' => 64210,
                'note' => 'ใช้ในเขตพื้นที่ ต.เมืองเก่า, ต.วังทองแดง, ต.บ้านกล้วย ม.8',
                'province_id' => 52,
                'amphure_id' => 675
            ],
            [
                'id' => 530,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'เมืองสุโขทัย',
                'postal_code' => 64220,
                'note' => 'ใช้ในเขตพื้นที่ ต.ตาลเตี้ย, ต.บ้านสวน',
                'province_id' => 52,
                'amphure_id' => 675
            ],
            [
                'id' => 531,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'ศรีนคร',
                'postal_code' => 64180,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 682
            ],
            [
                'id' => 532,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'ศรีสัชนาลัย',
                'postal_code' => 64130,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 679
            ],
            [
                'id' => 533,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'ศรีสัชนาลัย',
                'postal_code' => 64190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ศรีสัชนาลัย, ต.ท่าชัย',
                'province_id' => 52,
                'amphure_id' => 679
            ],
            [
                'id' => 534,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'ศรีสำโรง',
                'postal_code' => 64120,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 680
            ],
            [
                'id' => 535,
                'place' => 'central',
                'province' => 'สุโขทัย',
                'amphoe' => 'สวรรคโลก',
                'postal_code' => 64110,
                'note' => '',
                'province_id' => 52,
                'amphure_id' => 681
            ],
            [
                'id' => 536,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'ทัพทัน',
                'postal_code' => 61120,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 648
            ],
            [
                'id' => 537,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'บ้านไร่',
                'postal_code' => 61140,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 652
            ],
            [
                'id' => 538,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'บ้านไร่',
                'postal_code' => 61180,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังหิน, ต.เมืองการุ้ง, ต.หูช้าง, ต.หนองจอก, ต.บ้านใหม่คลองเคียน, ต.หนองบ่มกล้วย',
                'province_id' => 49,
                'amphure_id' => 652
            ],
            [
                'id' => 539,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'เมืองอุทัยธานี',
                'postal_code' => 61000,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 647
            ],
            [
                'id' => 540,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'ลานสัก',
                'postal_code' => 61160,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 653
            ],
            [
                'id' => 541,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'สว่างอารมณ์',
                'postal_code' => 61150,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 649
            ],
            [
                'id' => 542,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'หนองขาหย่าง',
                'postal_code' => 61130,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 651
            ],
            [
                'id' => 543,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'หนองฉาง',
                'postal_code' => 61110,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 650
            ],
            [
                'id' => 544,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'หนองฉาง',
                'postal_code' => 61170,
                'note' => 'เฉลย ต.เขาบางแกรก',
                'province_id' => 49,
                'amphure_id' => 650
            ],
            [
                'id' => 545,
                'place' => 'central',
                'province' => 'อุทัยธานี',
                'amphoe' => 'ห้วยคต',
                'postal_code' => 61170,
                'note' => '',
                'province_id' => 49,
                'amphure_id' => 654
            ],
            [
                'id' => 546,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'โคกเจริญ',
                'postal_code' => 15250,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 101
            ],
            [
                'id' => 547,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'โคกสำโรง',
                'postal_code' => 15120,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 95
            ],
            [
                'id' => 548,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ชัยบาดาล',
                'postal_code' => 15130,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 96
            ],
            [
                'id' => 549,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ชัยบาดาล',
                'postal_code' => 15190,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 96
            ],
            [
                'id' => 550,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ชัยบาดาล',
                'postal_code' => 15230,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 96
            ],
            [
                'id' => 551,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ท่าวุ้ง',
                'postal_code' => 15150,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 97
            ],
            [
                'id' => 552,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ท่าวุ้ง',
                'postal_code' => 15180,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 97
            ],
            [
                'id' => 553,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ท่าหลวง',
                'postal_code' => 15230,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 99
            ],
            [
                'id' => 554,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'บ้านหมี่',
                'postal_code' => 15110,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 98
            ],
            [
                'id' => 555,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'บ้านหมี่',
                'postal_code' => 15180,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 98
            ],
            [
                'id' => 556,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'พัฒนานิคม',
                'postal_code' => 15140,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 94
            ],
            [
                'id' => 557,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'พัฒนานิคม',
                'postal_code' => 15220,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 94
            ],
            [
                'id' => 558,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'พัฒนานิคม',
                'postal_code' => 18220,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 94
            ],
            [
                'id' => 559,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'เมืองลพบุรี',
                'postal_code' => 13240,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 93
            ],
            [
                'id' => 560,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'เมืองลพบุรี',
                'postal_code' => 15000,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 93
            ],
            [
                'id' => 561,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'เมืองลพบุรี',
                'postal_code' => 15160,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 93
            ],
            [
                'id' => 562,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'เมืองลพบุรี',
                'postal_code' => 15210,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 93
            ],
            [
                'id' => 563,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ลำสนธิ',
                'postal_code' => 15130,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 102
            ],
            [
                'id' => 564,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'ลำสนธิ',
                'postal_code' => 15190,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 102
            ],
            [
                'id' => 565,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'สระโบสถ์',
                'postal_code' => 15240,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 100
            ],
            [
                'id' => 566,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'สระโบสถ์',
                'postal_code' => 15250,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 100
            ],
            [
                'id' => 567,
                'place' => 'central',
                'province' => 'ลพบุรี',
                'amphoe' => 'หนองม่วง',
                'postal_code' => 15170,
                'note' => '',
                'province_id' => 7,
                'amphure_id' => 103
            ],
            [
                'id' => 568,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'บางบ่อ',
                'postal_code' => 10550,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 52
            ],
            [
                'id' => 569,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'บางบ่อ',
                'postal_code' => 10560,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 52
            ],
            [
                'id' => 570,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'บางพลี',
                'postal_code' => 10540,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 53
            ],
            [
                'id' => 571,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'บางเสาธง',
                'postal_code' => 10540,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 56
            ],
            [
                'id' => 572,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'พระประแดง',
                'postal_code' => 10130,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 54
            ],
            [
                'id' => 573,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'พระสมุทรเจดีย์',
                'postal_code' => 10290,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 55
            ],
            [
                'id' => 574,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'เมืองสมุทรปราการ',
                'postal_code' => 10270,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 51
            ],
            [
                'id' => 575,
                'place' => 'central',
                'province' => 'สมุทรปราการ',
                'amphoe' => 'เมืองสมุทรปราการ',
                'postal_code' => 10280,
                'note' => '',
                'province_id' => 2,
                'amphure_id' => 51
            ],
            [
                'id' => 576,
                'place' => 'central',
                'province' => 'สมุทรสงคราม',
                'amphoe' => 'บางคนที',
                'postal_code' => 75120,
                'note' => '',
                'province_id' => 61,
                'amphure_id' => 760
            ],
            [
                'id' => 577,
                'place' => 'central',
                'province' => 'สมุทรสงคราม',
                'amphoe' => 'เมืองสมุทรสงคราม',
                'postal_code' => 75000,
                'note' => '',
                'province_id' => 61,
                'amphure_id' => 759
            ],
            [
                'id' => 578,
                'place' => 'central',
                'province' => 'สมุทรสงคราม',
                'amphoe' => 'อัมพวา',
                'postal_code' => 75110,
                'note' => '',
                'province_id' => 61,
                'amphure_id' => 761
            ],
            [
                'id' => 579,
                'place' => 'central',
                'province' => 'สมุทรสาคร',
                'amphoe' => 'กระทุ่มแบน',
                'postal_code' => 74110,
                'note' => '',
                'province_id' => 60,
                'amphure_id' => 757
            ],
            [
                'id' => 580,
                'place' => 'central',
                'province' => 'สมุทรสาคร',
                'amphoe' => 'กระทุ่มแบน',
                'postal_code' => 74130,
                'note' => '',
                'province_id' => 60,
                'amphure_id' => 757
            ],
            [
                'id' => 581,
                'place' => 'central',
                'province' => 'สมุทรสาคร',
                'amphoe' => 'บ้านแพ้ว',
                'postal_code' => 70210,
                'note' => '',
                'province_id' => 60,
                'amphure_id' => 758
            ],
            [
                'id' => 582,
                'place' => 'central',
                'province' => 'สมุทรสาคร',
                'amphoe' => 'บ้านแพ้ว',
                'postal_code' => 74120,
                'note' => '',
                'province_id' => 60,
                'amphure_id' => 758
            ],
            [
                'id' => 583,
                'place' => 'central',
                'province' => 'สมุทรสาคร',
                'amphoe' => 'เมืองสมุทรสาคร',
                'postal_code' => 74000,
                'note' => '',
                'province_id' => 60,
                'amphure_id' => 756
            ],
            [
                'id' => 584,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'แก่งคอย',
                'postal_code' => 18110,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 119
            ],
            [
                'id' => 585,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'แก่งคอย',
                'postal_code' => 18260,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 119
            ],
            [
                'id' => 586,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 18000,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 130
            ],
            [
                'id' => 587,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 18240,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 130
            ],
            [
                'id' => 588,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'ดอนพุด',
                'postal_code' => 18210,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 124
            ],
            [
                'id' => 589,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'บ้านหมอ',
                'postal_code' => 18130,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 123
            ],
            [
                'id' => 590,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'บ้านหมอ',
                'postal_code' => 18210,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 123
            ],
            [
                'id' => 591,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'บ้านหมอ',
                'postal_code' => 18270,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 123
            ],
            [
                'id' => 592,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'พระพุทธบาท',
                'postal_code' => 18120,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 126
            ],
            [
                'id' => 593,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'มวกเหล็ก',
                'postal_code' => 18180,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 128
            ],
            [
                'id' => 594,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'มวกเหล็ก',
                'postal_code' => 18220,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 128
            ],
            [
                'id' => 595,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'มวกเหล็ก',
                'postal_code' => 30130,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 128
            ],
            [
                'id' => 596,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'เมืองสระบุรี',
                'postal_code' => 18000,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 118
            ],
            [
                'id' => 597,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'วังม่วง',
                'postal_code' => 18220,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 129
            ],
            [
                'id' => 598,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'วิหารแดง',
                'postal_code' => 18150,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 121
            ],
            [
                'id' => 599,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'เสาไห้',
                'postal_code' => 18160,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 127
            ],
            [
                'id' => 600,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'หนองแค',
                'postal_code' => 18140,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 120
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 601,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'หนองแค',
                'postal_code' => 18230,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 120
            ],
            [
                'id' => 602,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'หนองแค',
                'postal_code' => 18250,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 120
            ],
            [
                'id' => 603,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'หนองแซง',
                'postal_code' => 18170,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 122
            ],
            [
                'id' => 604,
                'place' => 'central',
                'province' => 'สระบุรี',
                'amphoe' => 'หนองโดน',
                'postal_code' => 18190,
                'note' => '',
                'province_id' => 10,
                'amphure_id' => 125
            ],
            [
                'id' => 605,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'ค่ายบางระจัน',
                'postal_code' => 16150,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 106
            ],
            [
                'id' => 606,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'ท่าช้าง',
                'postal_code' => 16140,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 108
            ],
            [
                'id' => 607,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'บางระจัน',
                'postal_code' => 16130,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 105
            ],
            [
                'id' => 608,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'พรหมบุรี',
                'postal_code' => 16120,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 107
            ],
            [
                'id' => 609,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'พรหมบุรี',
                'postal_code' => 16160,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 107
            ],
            [
                'id' => 610,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'เมืองสิงห์บุรี',
                'postal_code' => 16000,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 104
            ],
            [
                'id' => 611,
                'place' => 'central',
                'province' => 'สิงห์บุรี',
                'amphoe' => 'อินทร์บุรี',
                'postal_code' => 16110,
                'note' => '',
                'province_id' => 8,
                'amphure_id' => 109
            ],
            [
                'id' => 612,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'ดอนเจดีย์',
                'postal_code' => 72170,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 744
            ],
            [
                'id' => 613,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'ดอนเจดีย์',
                'postal_code' => 72250,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 744
            ],
            [
                'id' => 614,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'ด่านช้าง',
                'postal_code' => 72180,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 741
            ],
            [
                'id' => 615,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'เดิมบางนางบวช',
                'postal_code' => 72120,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 740
            ],
            [
                'id' => 616,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'บางปลาม้า',
                'postal_code' => 72150,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 742
            ],
            [
                'id' => 617,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'เมืองสุพรรณบุรี',
                'postal_code' => 72000,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 739
            ],
            [
                'id' => 618,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'เมืองสุพรรณบุรี',
                'postal_code' => 72210,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 739
            ],
            [
                'id' => 619,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'เมืองสุพรรณบุรี',
                'postal_code' => 72230,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 739
            ],
            [
                'id' => 620,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'ศรีประจันต์',
                'postal_code' => 72140,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 743
            ],
            [
                'id' => 621,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'สองพี่น้อง',
                'postal_code' => 71170,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 745
            ],
            [
                'id' => 622,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'สองพี่น้อง',
                'postal_code' => 72110,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 745
            ],
            [
                'id' => 623,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'สองพี่น้อง',
                'postal_code' => 72190,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 745
            ],
            [
                'id' => 624,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'สามชุก',
                'postal_code' => 72130,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 746
            ],
            [
                'id' => 625,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'หนองหญ้าไซ',
                'postal_code' => 72240,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 748
            ],
            [
                'id' => 626,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'อู่ทอง',
                'postal_code' => 71170,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 747
            ],
            [
                'id' => 627,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'อู่ทอง',
                'postal_code' => 72160,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 747
            ],
            [
                'id' => 628,
                'place' => 'central',
                'province' => 'สุพรรณบุรี',
                'amphoe' => 'อู่ทอง',
                'postal_code' => 72220,
                'note' => '',
                'province_id' => 58,
                'amphure_id' => 747
            ],
            [
                'id' => 629,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'ไชโย',
                'postal_code' => 14140,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 87
            ],
            [
                'id' => 630,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'ป่าโมก',
                'postal_code' => 14130,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 88
            ],
            [
                'id' => 631,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'โพธิ์ทอง',
                'postal_code' => 14120,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 89
            ],
            [
                'id' => 632,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'เมืองอ่างทอง',
                'postal_code' => 14000,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 86
            ],
            [
                'id' => 633,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'วิเศษไชยชาญ',
                'postal_code' => 14110,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 91
            ],
            [
                'id' => 634,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'สามโก้',
                'postal_code' => 14160,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 92
            ],
            [
                'id' => 635,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'แสวงหา',
                'postal_code' => 14150,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 90
            ],
            [
                'id' => 636,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'ไชโย',
                'postal_code' => 14140,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 87
            ],
            [
                'id' => 637,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'ป่าโมก',
                'postal_code' => 14130,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 88
            ],
            [
                'id' => 638,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'โพธิ์ทอง',
                'postal_code' => 14120,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 89
            ],
            [
                'id' => 639,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'เมืองอ่างทอง',
                'postal_code' => 14000,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 86
            ],
            [
                'id' => 640,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'วิเศษไชยชาญ',
                'postal_code' => 14110,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 91
            ],
            [
                'id' => 641,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'สามโก้',
                'postal_code' => 14160,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 92
            ],
            [
                'id' => 642,
                'place' => 'central',
                'province' => 'อ่างทอง',
                'amphoe' => 'แสวงหา',
                'postal_code' => 14150,
                'note' => '',
                'province_id' => 6,
                'amphure_id' => 90
            ],
            [
                'id' => 643,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'กระนวน',
                'postal_code' => 40170,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 371
            ],
            [
                'id' => 644,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เขาสวนกวาง',
                'postal_code' => 40280,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 381
            ],
            [
                'id' => 645,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'โคกโพธิ์ไชย',
                'postal_code' => 40160,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 384
            ],
            [
                'id' => 646,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'ชนบท',
                'postal_code' => 40180,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 380
            ],
            [
                'id' => 647,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'ชุมแพ',
                'postal_code' => 40130,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 367
            ],
            [
                'id' => 648,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'ชุมแพ',
                'postal_code' => 40290,
                'note' => 'ใช้ในเขตพื้นที่ ต.โนนหัน, ต.นาหนองทุ่ม, ต.โนนสะอาด, ต.หนองเขียด',
                'province_id' => 29,
                'amphure_id' => 367
            ],
            [
                'id' => 649,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'ซำสูง',
                'postal_code' => 40170,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 383
            ],
            [
                'id' => 650,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'น้ำพอง',
                'postal_code' => 40140,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 369
            ],
            [
                'id' => 651,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'น้ำพอง',
                'postal_code' => 40310,
                'note' => 'ใช้ในเขตพื้นที่ ต.น้ำพอง ม.2-8, ม.13, ม.15-16, ต.กุดน้ำใส, ต.ม่วงหวาน, ต.สะอาด',
                'province_id' => 29,
                'amphure_id' => 369
            ],
            [
                'id' => 652,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'โนนศิลา',
                'postal_code' => 40110,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 387
            ],
            [
                'id' => 653,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'บ้านไผ่',
                'postal_code' => 40110,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 372
            ],
            [
                'id' => 654,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'บ้านฝาง',
                'postal_code' => 40270,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 364
            ],
            [
                'id' => 655,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'บ้านแฮด',
                'postal_code' => 40110,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 386
            ],
            [
                'id' => 656,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เปือยน้อย',
                'postal_code' => 40340,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 373
            ],
            [
                'id' => 657,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'พระยืน',
                'postal_code' => 40320,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 365
            ],
            [
                'id' => 658,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'พล',
                'postal_code' => 40120,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 374
            ],
            [
                'id' => 659,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'ภูผาม่าน',
                'postal_code' => 40350,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 382
            ],
            [
                'id' => 660,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'ภูเวียง',
                'postal_code' => 40150,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 378
            ],
            [
                'id' => 661,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'มัญจาคีรี',
                'postal_code' => 40160,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 379
            ],
            [
                'id' => 662,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เมืองขอนแก่น',
                'postal_code' => 40000,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 363
            ],
            [
                'id' => 663,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เมืองขอนแก่น',
                'postal_code' => 40002,
                'note' => 'ใช้ในเขตพื้นที่ภายในมหาวิทยาลัยขอนแก่น',
                'province_id' => 29,
                'amphure_id' => 363
            ],
            [
                'id' => 664,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เมืองขอนแก่น',
                'postal_code' => 40010,
                'note' => 'ใช้ในเขตพื้นที่ ศูนย์ไปรษณีย์ขอนแก่น',
                'province_id' => 29,
                'amphure_id' => 363
            ],
            [
                'id' => 665,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เมืองขอนแก่น',
                'postal_code' => 40260,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าพระ, ต.ดอนหัน',
                'province_id' => 29,
                'amphure_id' => 363
            ],
            [
                'id' => 666,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'เวียงเก่า',
                'postal_code' => 40150,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 388
            ],
            [
                'id' => 667,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'แวงน้อย',
                'postal_code' => 40230,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 376
            ],
            [
                'id' => 668,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'แวงใหญ่',
                'postal_code' => 40330,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 375
            ],
            [
                'id' => 669,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'สีชมพู',
                'postal_code' => 40220,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 368
            ],
            [
                'id' => 670,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'หนองนาคำ',
                'postal_code' => 40150,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 385
            ],
            [
                'id' => 671,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'หนองเรือ',
                'postal_code' => 40210,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 366
            ],
            [
                'id' => 672,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'หนองเรือ',
                'postal_code' => 40240,
                'note' => 'ใช้ในเขตพื้นที่ ต.จระเข้, ต.บ้านกง, ต.ยางคำ, ต.บ้านผือ',
                'province_id' => 29,
                'amphure_id' => 366
            ],
            [
                'id' => 673,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'หนองสองห้อง',
                'postal_code' => 40190,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 377
            ],
            [
                'id' => 674,
                'place' => 'northeast',
                'province' => 'ขอนแก่น',
                'amphoe' => 'อุบลรัตน์',
                'postal_code' => 40250,
                'note' => '',
                'province_id' => 29,
                'amphure_id' => 370
            ],
            [
                'id' => 675,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'เกษตรสมบูรณ์',
                'postal_code' => 36000,
                'note' => 'ใช้ในเขตพื้นที่ ต.ซับสีทอง',
                'province_id' => 25,
                'amphure_id' => 329
            ],
            [
                'id' => 676,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'เกษตรสมบูรณ์',
                'postal_code' => 36120,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 329
            ],
            [
                'id' => 677,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'แก้งคร้อ',
                'postal_code' => 36150,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 337
            ],
            [
                'id' => 678,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'คอนสวรรค์',
                'postal_code' => 36140,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 328
            ],
            [
                'id' => 679,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'คอนสาร',
                'postal_code' => 36180,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 338
            ],
            [
                'id' => 680,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'จัตุรัส',
                'postal_code' => 36130,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 331
            ],
            [
                'id' => 681,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'จัตุรัส',
                'postal_code' => 36220,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองบัวโคก',
                'province_id' => 25,
                'amphure_id' => 331
            ],
            [
                'id' => 682,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'ซับใหญ่',
                'postal_code' => 36130,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 341
            ],
            [
                'id' => 683,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'เทพสถิต',
                'postal_code' => 36230,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 334
            ],
            [
                'id' => 684,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'เนินสง่า',
                'postal_code' => 36130,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 340
            ],
            [
                'id' => 685,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'บ้านเขว้า',
                'postal_code' => 36170,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 327
            ],
            [
                'id' => 686,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'บ้านแท่น',
                'postal_code' => 36190,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 336
            ],
            [
                'id' => 687,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'บำเหน็จณรงค์',
                'postal_code' => 36160,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 332
            ],
            [
                'id' => 688,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'บำเหน็จณรงค์',
                'postal_code' => 36220,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านตาล, ต.หัวทะเล',
                'province_id' => 25,
                'amphure_id' => 332
            ],
            [
                'id' => 689,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'ภักดีชุมพล',
                'postal_code' => 36260,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 339
            ],
            [
                'id' => 690,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'ภูเขียว',
                'postal_code' => 36110,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 335
            ],
            [
                'id' => 691,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'เมืองชัยภูมิ',
                'postal_code' => 36000,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 326
            ],
            [
                'id' => 692,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'เมืองชัยภูมิ',
                'postal_code' => 36240,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านค่าย, ต.หนองไผ่, ต.โนนสำราญ',
                'province_id' => 25,
                'amphure_id' => 326
            ],
            [
                'id' => 693,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'หนองบัวแดง',
                'postal_code' => 36210,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 330
            ],
            [
                'id' => 694,
                'place' => 'northeast',
                'province' => 'ชัยภูมิ',
                'amphoe' => 'หนองบัวระเหว',
                'postal_code' => 36250,
                'note' => '',
                'province_id' => 25,
                'amphure_id' => 333
            ],
            [
                'id' => 695,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'ท่าอุเทน',
                'postal_code' => 48120,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 503
            ],
            [
                'id' => 696,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'ธาตุพนม',
                'postal_code' => 48110,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 505
            ],
            [
                'id' => 697,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'นาแก',
                'postal_code' => 48130,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 507
            ],
            [
                'id' => 698,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'นาทม',
                'postal_code' => 48140,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 511
            ],
            [
                'id' => 699,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'นาหว้า',
                'postal_code' => 48180,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 509
            ],
            [
                'id' => 700,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'บ้านแพง',
                'postal_code' => 48140,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 504
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 701,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'ปลาปาก',
                'postal_code' => 48160,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 502
            ],
            [
                'id' => 702,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'โพนสวรรค์',
                'postal_code' => 48190,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 510
            ],
            [
                'id' => 703,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'เมืองนครพนม',
                'postal_code' => 48000,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 501
            ],
            [
                'id' => 704,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'เรณูนคร',
                'postal_code' => 48170,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 506
            ],
            [
                'id' => 705,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'วังยาง',
                'postal_code' => 48130,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 512
            ],
            [
                'id' => 706,
                'place' => 'northeast',
                'province' => 'นครพนม',
                'amphoe' => 'ศรีสงคราม',
                'postal_code' => 48150,
                'note' => '',
                'province_id' => 37,
                'amphure_id' => 508
            ],
            [
                'id' => 707,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'แก้งสนามนาง',
                'postal_code' => 30440,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 220
            ],
            [
                'id' => 708,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ขามทะเลสอ',
                'postal_code' => 30280,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 216
            ],
            [
                'id' => 709,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ขามสะแกแสง',
                'postal_code' => 30290,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 208
            ],
            [
                'id' => 710,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'คง',
                'postal_code' => 30260,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 201
            ],
            [
                'id' => 711,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ครบุรี',
                'postal_code' => 30250,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 199
            ],
            [
                'id' => 712,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'จักราช',
                'postal_code' => 30230,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 203
            ],
            [
                'id' => 713,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 30000,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองงูเหลือม',
                'province_id' => 19,
                'amphure_id' => 229
            ],
            [
                'id' => 714,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 30230,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 229
            ],
            [
                'id' => 715,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ชุมพวง',
                'postal_code' => 30270,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 214
            ],
            [
                'id' => 716,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'โชคชัย',
                'postal_code' => 30190,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 204
            ],
            [
                'id' => 717,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ด่านขุนทด',
                'postal_code' => 30210,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 205
            ],
            [
                'id' => 718,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ด่านขุนทด',
                'postal_code' => 36220,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านแปรง, ต.หนองไทร',
                'province_id' => 19,
                'amphure_id' => 205
            ],
            [
                'id' => 719,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เทพารักษ์',
                'postal_code' => 30210,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 223
            ],
            [
                'id' => 720,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'โนนแดง',
                'postal_code' => 30360,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 221
            ],
            [
                'id' => 721,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'โนนไทย',
                'postal_code' => 30220,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 206
            ],
            [
                'id' => 722,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'โนนสูง',
                'postal_code' => 30160,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 207
            ],
            [
                'id' => 723,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'โนนสูง',
                'postal_code' => 30420,
                'note' => 'ใช้ในเขตพื้นที่ ต.ธารปราสาท',
                'province_id' => 19,
                'amphure_id' => 207
            ],
            [
                'id' => 724,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'บัวลาย',
                'postal_code' => 30120,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 227
            ],
            [
                'id' => 725,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'บัวใหญ่',
                'postal_code' => 30120,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 209
            ],
            [
                'id' => 726,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'บ้านเหลื่อม',
                'postal_code' => 30350,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 202
            ],
            [
                'id' => 727,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ประทาย',
                'postal_code' => 30180,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 210
            ],
            [
                'id' => 728,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ปักธงชัย',
                'postal_code' => 30150,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 211
            ],
            [
                'id' => 729,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ปากช่อง',
                'postal_code' => 30130,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 218
            ],
            [
                'id' => 730,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ปากช่อง',
                'postal_code' => 30320,
                'note' => 'ใช้ในเขตพื้นที่ ต.กลางดง, ต.พญาเย็น',
                'province_id' => 19,
                'amphure_id' => 218
            ],
            [
                'id' => 731,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'พระทองคำ',
                'postal_code' => 30220,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 225
            ],
            [
                'id' => 732,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'พิมาย',
                'postal_code' => 30110,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 212
            ],
            [
                'id' => 733,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เมืองนครราชสีมา',
                'postal_code' => 30000,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 198
            ],
            [
                'id' => 734,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เมืองนครราชสีมา',
                'postal_code' => 30280,
                'note' => 'ใช้ในเขตพื้นที่ ต.โคกกรวด',
                'province_id' => 19,
                'amphure_id' => 198
            ],
            [
                'id' => 735,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เมืองนครราชสีมา',
                'postal_code' => 30310,
                'note' => 'ใช้ในเขตพื้นที่ ต.โคกสูง, ต.จอหอ, ต.บ้านโพธิ์, ต.ตลาด, ต.หนองไข่น้ำ',
                'province_id' => 19,
                'amphure_id' => 198
            ],
            [
                'id' => 736,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เมืองยาง',
                'postal_code' => 30270,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 224
            ],
            [
                'id' => 737,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ลำทะเมนชัย',
                'postal_code' => 30270,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 226
            ],
            [
                'id' => 738,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'วังน้ำเขียว',
                'postal_code' => 30150,
                'note' => 'ใช้ในเขตพื้นที่ ต.ระเริง',
                'province_id' => 19,
                'amphure_id' => 222
            ],
            [
                'id' => 739,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'วังน้ำเขียว',
                'postal_code' => 30370,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 222
            ],
            [
                'id' => 740,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'สีคิ้ว',
                'postal_code' => 30140,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 217
            ],
            [
                'id' => 741,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'สีคิ้ว',
                'postal_code' => 30340,
                'note' => 'ใช้ในเขตพื้นที่ ต.ลาดบัวขาว, ต.คลองไผ่',
                'province_id' => 19,
                'amphure_id' => 217
            ],
            [
                'id' => 742,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'สีดา',
                'postal_code' => 30430,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 228
            ],
            [
                'id' => 743,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'สูงเนิน',
                'postal_code' => 30170,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 215
            ],
            [
                'id' => 744,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'สูงเนิน',
                'postal_code' => 30380,
                'note' => 'ใช้ในเขตพื้นที่ ต.กุดจิก, ต.นากลาง, ต.หนองตะไก้',
                'province_id' => 19,
                'amphure_id' => 215
            ],
            [
                'id' => 745,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'เสิงสาง',
                'postal_code' => 30330,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 200
            ],
            [
                'id' => 746,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'หนองบุญมาก',
                'postal_code' => 30410,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 219
            ],
            [
                'id' => 747,
                'place' => 'northeast',
                'province' => 'นครราชสีมา',
                'amphoe' => 'ห้วยแถลง',
                'postal_code' => 30240,
                'note' => '',
                'province_id' => 19,
                'amphure_id' => 213
            ],
            [
                'id' => 748,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'กระสัง',
                'postal_code' => 31160,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 232
            ],
            [
                'id' => 749,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'คูเมือง',
                'postal_code' => 31190,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 231
            ],
            [
                'id' => 750,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'แคนดง',
                'postal_code' => 31150,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 251
            ],
            [
                'id' => 751,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 31110,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 252
            ],
            [
                'id' => 752,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 31170,
                'note' => 'ใช้ในเขตพื้นที่ ต.ถาวร, ต.ยายแย้มวัฒนา',
                'province_id' => 20,
                'amphure_id' => 252
            ],
            [
                'id' => 753,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'ชำนิ',
                'postal_code' => 31110,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 247
            ],
            [
                'id' => 754,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'นางรอง',
                'postal_code' => 31110,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 233
            ],
            [
                'id' => 755,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'นาโพธิ์',
                'postal_code' => 31230,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 242
            ],
            [
                'id' => 756,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'โนนดินแดง',
                'postal_code' => 31260,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 249
            ],
            [
                'id' => 757,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'โนนสุวรรณ',
                'postal_code' => 31110,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 246
            ],
            [
                'id' => 758,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'บ้านกรวด',
                'postal_code' => 31180,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 237
            ],
            [
                'id' => 759,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'บ้านด่าน',
                'postal_code' => 31000,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 250
            ],
            [
                'id' => 760,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'บ้านใหม่ไชยพจน์',
                'postal_code' => 31120,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 248
            ],
            [
                'id' => 761,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'ประโคนชัย',
                'postal_code' => 31140,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 236
            ],
            [
                'id' => 762,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'ปะคำ',
                'postal_code' => 31220,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 241
            ],
            [
                'id' => 763,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'พลับพลาชัย',
                'postal_code' => 31250,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 244
            ],
            [
                'id' => 764,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'พุทไธสง',
                'postal_code' => 31120,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 238
            ],
            [
                'id' => 765,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'เมืองบุรีรัมย์',
                'postal_code' => 31000,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 230
            ],
            [
                'id' => 766,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'ละหานทราย',
                'postal_code' => 31170,
                'note' => 'ใช้ในเขตพื้นที่ ต.ถาวร, ต.ยายแย้มวัฒนา',
                'province_id' => 20,
                'amphure_id' => 235
            ],
            [
                'id' => 767,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'ลำปลายมาศ',
                'postal_code' => 31130,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 239
            ],
            [
                'id' => 768,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'สตึก',
                'postal_code' => 31150,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 240
            ],
            [
                'id' => 769,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'หนองกี่',
                'postal_code' => 31210,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 234
            ],
            [
                'id' => 770,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'หนองหงส์',
                'postal_code' => 31240,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 243
            ],
            [
                'id' => 771,
                'place' => 'northeast',
                'province' => 'บุรีรัมย์',
                'amphoe' => 'ห้วยราช',
                'postal_code' => 31000,
                'note' => '',
                'province_id' => 20,
                'amphure_id' => 245
            ],
            [
                'id' => 772,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'กันทรวิชัย',
                'postal_code' => 44150,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 435
            ],
            [
                'id' => 773,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'กุดรัง',
                'postal_code' => 44130,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 443
            ],
            [
                'id' => 774,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'แกดำ',
                'postal_code' => 44190,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 433
            ],
            [
                'id' => 775,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'โกสุมพิสัย',
                'postal_code' => 44140,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 434
            ],
            [
                'id' => 776,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'ชื่นชม',
                'postal_code' => 44160,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 444
            ],
            [
                'id' => 777,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'เชียงยืน',
                'postal_code' => 44160,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 436
            ],
            [
                'id' => 778,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'นาเชือก',
                'postal_code' => 44170,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 438
            ],
            [
                'id' => 779,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'นาดูน',
                'postal_code' => 44180,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 441
            ],
            [
                'id' => 780,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'บรบือ',
                'postal_code' => 44130,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 437
            ],
            [
                'id' => 781,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'พยัคฆภูมิพิสัย',
                'postal_code' => 44110,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 439
            ],
            [
                'id' => 782,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'เมืองมหาสารคาม',
                'postal_code' => 44000,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 432
            ],
            [
                'id' => 783,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'ยางสีสุราช',
                'postal_code' => 44210,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 442
            ],
            [
                'id' => 784,
                'place' => 'northeast',
                'province' => 'มหาสารคาม',
                'amphoe' => 'วาปีปทุม',
                'postal_code' => 44120,
                'note' => '',
                'province_id' => 33,
                'amphure_id' => 440
            ],
            [
                'id' => 785,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'คำชะอี',
                'postal_code' => 49110,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 517
            ],
            [
                'id' => 786,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'ดงหลวง',
                'postal_code' => 49140,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 516
            ],
            [
                'id' => 787,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'ดอนตาล',
                'postal_code' => 49120,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 515
            ],
            [
                'id' => 788,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'นิคมคำสร้อย',
                'postal_code' => 49130,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 514
            ],
            [
                'id' => 789,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'เมืองมุกดาหาร',
                'postal_code' => 49000,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 513
            ],
            [
                'id' => 790,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'หนองสูง',
                'postal_code' => 49160,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 519
            ],
            [
                'id' => 791,
                'place' => 'northeast',
                'province' => 'มุกดาหาร',
                'amphoe' => 'หว้านใหญ่',
                'postal_code' => 49150,
                'note' => '',
                'province_id' => 38,
                'amphure_id' => 518
            ],
            [
                'id' => 792,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'กุดชุม',
                'postal_code' => 35140,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 319
            ],
            [
                'id' => 793,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'ค้อวัง',
                'postal_code' => 35160,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 323
            ],
            [
                'id' => 794,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'คำเขื่อนแก้ว',
                'postal_code' => 35110,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 320
            ],
            [
                'id' => 795,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'คำเขื่อนแก้ว',
                'postal_code' => 35180,
                'note' => 'ใช้ในเขตพื้นที่ ต.ดงแคนใหญ่, ต.แคนน้อย, ต.นาคำ, ต.นาแก',
                'province_id' => 24,
                'amphure_id' => 320
            ],
            [
                'id' => 796,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'ทรายมูล',
                'postal_code' => 35170,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 318
            ],
            [
                'id' => 797,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'ไทยเจริญ',
                'postal_code' => 35120,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 325
            ],
            [
                'id' => 798,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'ป่าติ้ว',
                'postal_code' => 35150,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 321
            ],
            [
                'id' => 799,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'มหาชนะชัย',
                'postal_code' => 35130,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 322
            ],
            [
                'id' => 800,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'เมืองยโสธร',
                'postal_code' => 35000,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 317
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 801,
                'place' => 'northeast',
                'province' => 'ยโสธร',
                'amphoe' => 'เลิงนกทา',
                'postal_code' => 35120,
                'note' => '',
                'province_id' => 24,
                'amphure_id' => 324
            ],
            [
                'id' => 802,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เกษตรวิสัย',
                'postal_code' => 45150,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 446
            ],
            [
                'id' => 803,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'จตุรพักตรพิมาน',
                'postal_code' => 45180,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 448
            ],
            [
                'id' => 804,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'จังหาร',
                'postal_code' => 45000,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 461
            ],
            [
                'id' => 805,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เชียงขวัญ',
                'postal_code' => 45000,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 462
            ],
            [
                'id' => 806,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เชียงขวัญ',
                'postal_code' => 45170,
                'note' => 'ใช้ในเขตพื้นที่ ต.พลับพลา, ต.หมูม้น',
                'province_id' => 34,
                'amphure_id' => 462
            ],
            [
                'id' => 807,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'ทุ่งเขาหลวง',
                'postal_code' => 45170,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 464
            ],
            [
                'id' => 808,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'ธวัชบุรี',
                'postal_code' => 45170,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 449
            ],
            [
                'id' => 809,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'ปทุมรัตต์',
                'postal_code' => 45190,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 447
            ],
            [
                'id' => 810,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'พนมไพร',
                'postal_code' => 45140,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 450
            ],
            [
                'id' => 811,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'โพธิ์ชัย',
                'postal_code' => 45230,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 452
            ],
            [
                'id' => 812,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'โพนทราย',
                'postal_code' => 45240,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 457
            ],
            [
                'id' => 813,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'โพนทอง',
                'postal_code' => 45110,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 451
            ],
            [
                'id' => 814,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เมยวดี',
                'postal_code' => 45250,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 459
            ],
            [
                'id' => 815,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เมืองร้อยเอ็ด',
                'postal_code' => 45000,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 445
            ],
            [
                'id' => 816,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เมืองสรวง',
                'postal_code' => 45220,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 456
            ],
            [
                'id' => 817,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'ศรีสมเด็จ',
                'postal_code' => 45000,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 460
            ],
            [
                'id' => 818,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'ศรีสมเด็จ',
                'postal_code' => 45280,
                'note' => 'ใช้ในเขตพื้นที่ ต.สวนจิก, ต.โพธิ์สัย',
                'province_id' => 34,
                'amphure_id' => 460
            ],
            [
                'id' => 819,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'สุวรรณภูมิ',
                'postal_code' => 45130,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 455
            ],
            [
                'id' => 820,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'เสลภูมิ',
                'postal_code' => 45120,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 454
            ],
            [
                'id' => 821,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'หนองพอก',
                'postal_code' => 45210,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 453
            ],
            [
                'id' => 822,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'หนองฮี',
                'postal_code' => 45140,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 463
            ],
            [
                'id' => 823,
                'place' => 'northeast',
                'province' => 'ร้อยเอ็ด',
                'amphoe' => 'อาจสามารถ',
                'postal_code' => 45160,
                'note' => '',
                'province_id' => 34,
                'amphure_id' => 458
            ],
            [
                'id' => 824,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'เชียงคาน',
                'postal_code' => 42110,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 411
            ],
            [
                'id' => 825,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ด่านซ้าย',
                'postal_code' => 42120,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 413
            ],
            [
                'id' => 826,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ท่าลี่',
                'postal_code' => 42140,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 416
            ],
            [
                'id' => 827,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'นาด้วง',
                'postal_code' => 42210,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 410
            ],
            [
                'id' => 828,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'นาแห้ว',
                'postal_code' => 42170,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 414
            ],
            [
                'id' => 829,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ปากชม',
                'postal_code' => 42150,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 412
            ],
            [
                'id' => 830,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ผาขาว',
                'postal_code' => 42240,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 420
            ],
            [
                'id' => 831,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ภูกระดึง',
                'postal_code' => 42180,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 418
            ],
            [
                'id' => 832,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ภูเรือ',
                'postal_code' => 42160,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 415
            ],
            [
                'id' => 833,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'ภูหลวง',
                'postal_code' => 42230,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 419
            ],
            [
                'id' => 834,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'เมืองเลย',
                'postal_code' => 42000,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 409
            ],
            [
                'id' => 835,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'เมืองเลย',
                'postal_code' => 42100,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาอ้อ, ต.ศรีสองรัก',
                'province_id' => 31,
                'amphure_id' => 409
            ],
            [
                'id' => 836,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'วังสะพุง',
                'postal_code' => 42130,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 417
            ],
            [
                'id' => 837,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'หนองหิน',
                'postal_code' => 42190,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 422
            ],
            [
                'id' => 838,
                'place' => 'northeast',
                'province' => 'เลย',
                'amphoe' => 'เอราวัณ',
                'postal_code' => 42220,
                'note' => '',
                'province_id' => 31,
                'amphure_id' => 421
            ],
            [
                'id' => 839,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'กันทรลักษ์',
                'postal_code' => 33110,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 273
            ],
            [
                'id' => 840,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'กันทรารมย์',
                'postal_code' => 33130,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 272
            ],
            [
                'id' => 841,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ขุขันธ์',
                'postal_code' => 33140,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 274
            ],
            [
                'id' => 842,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ขุนหาญ',
                'postal_code' => 33150,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 277
            ],
            [
                'id' => 843,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'น้ำเกลี้ยง',
                'postal_code' => 33130,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 284
            ],
            [
                'id' => 844,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'โนนคูณ',
                'postal_code' => 33250,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 282
            ],
            [
                'id' => 845,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'บึงบูรพ์',
                'postal_code' => 33220,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 280
            ],
            [
                'id' => 846,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'เบญจลักษ์',
                'postal_code' => 33110,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 288
            ],
            [
                'id' => 847,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ปรางค์กู่',
                'postal_code' => 33170,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 276
            ],
            [
                'id' => 848,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'พยุห์',
                'postal_code' => 33230,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 289
            ],
            [
                'id' => 849,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'โพธิ์ศรีสุวรรณ',
                'postal_code' => 33120,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 290
            ],
            [
                'id' => 850,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ไพรบึง',
                'postal_code' => 33180,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 275
            ],
            [
                'id' => 851,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ภูสิงห์',
                'postal_code' => 33140,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 286
            ],
            [
                'id' => 852,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'เมืองศรีสะเกษ',
                'postal_code' => 33000,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 270
            ],
            [
                'id' => 853,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'เมืองจันทร์',
                'postal_code' => 33120,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 287
            ],
            [
                'id' => 854,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ยางชุมน้อย',
                'postal_code' => 33190,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 271
            ],
            [
                'id' => 855,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ราษีไศล',
                'postal_code' => 33160,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 278
            ],
            [
                'id' => 856,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'วังหิน',
                'postal_code' => 33270,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 285
            ],
            [
                'id' => 857,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ศรีรัตนะ',
                'postal_code' => 33240,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 283
            ],
            [
                'id' => 858,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ศิลาลาด',
                'postal_code' => 33160,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 291
            ],
            [
                'id' => 859,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'ห้วยทับทัน',
                'postal_code' => 33210,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 281
            ],
            [
                'id' => 860,
                'place' => 'northeast',
                'province' => 'ศรีสะเกษ',
                'amphoe' => 'อุทุมพรพิสัย',
                'postal_code' => 33120,
                'note' => '',
                'province_id' => 22,
                'amphure_id' => 279
            ],
            [
                'id' => 861,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'กุดบาก',
                'postal_code' => 47180,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 485
            ],
            [
                'id' => 862,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'กุสุมาลย์',
                'postal_code' => 47210,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 484
            ],
            [
                'id' => 863,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'กุสุมาลย์',
                'postal_code' => 47230,
                'note' => 'ใช้ในเขตพื้นที่ ต.อุ่มจาน, ต.นาเพียง',
                'province_id' => 36,
                'amphure_id' => 484
            ],
            [
                'id' => 864,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'คำตากล้า',
                'postal_code' => 47250,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 491
            ],
            [
                'id' => 865,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'โคกศรีสุพรรณ',
                'postal_code' => 47280,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 497
            ],
            [
                'id' => 866,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'เจริญศิลป์',
                'postal_code' => 47290,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 498
            ],
            [
                'id' => 867,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'เต่างอย',
                'postal_code' => 47260,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 496
            ],
            [
                'id' => 868,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'นิคมน้ำอูน',
                'postal_code' => 47270,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 489
            ],
            [
                'id' => 869,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'บ้านม่วง',
                'postal_code' => 47140,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 492
            ],
            [
                'id' => 870,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'พรรณานิคม',
                'postal_code' => 47130,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 486
            ],
            [
                'id' => 871,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'พรรณานิคม',
                'postal_code' => 47220,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาหัวบ่อ, ต.พอกน้อย',
                'province_id' => 36,
                'amphure_id' => 486
            ],
            [
                'id' => 872,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'พังโคน',
                'postal_code' => 47160,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 487
            ],
            [
                'id' => 873,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'โพนนาแก้ว',
                'postal_code' => 47230,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 499
            ],
            [
                'id' => 874,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'ภูพาน',
                'postal_code' => 47180,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 500
            ],
            [
                'id' => 875,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'เมืองสกลนคร',
                'postal_code' => 47000,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 483
            ],
            [
                'id' => 876,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'เมืองสกลนคร',
                'postal_code' => 47220,
                'note' => 'ใช้ในเขตพื้นที่ ต.ขมิ้น, ต.หนองลาด',
                'province_id' => 36,
                'amphure_id' => 483
            ],
            [
                'id' => 877,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'เมืองสกลนคร',
                'postal_code' => 47230,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าแร่',
                'province_id' => 36,
                'amphure_id' => 483
            ],
            [
                'id' => 878,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'วานรนิวาส',
                'postal_code' => 47120,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 490
            ],
            [
                'id' => 879,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'วาริชภูมิ',
                'postal_code' => 47150,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 488
            ],
            [
                'id' => 880,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'สว่างแดนดิน',
                'postal_code' => 47110,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 494
            ],
            [
                'id' => 881,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'สว่างแดนดิน',
                'postal_code' => 47240,
                'note' => 'ใช้ในเขตพื้นที่ ต.แวง, ต.ตาลโกน, ต.ตาลเนิ้ง, ต.พันนา, ต.ธาตุทอง',
                'province_id' => 36,
                'amphure_id' => 494
            ],
            [
                'id' => 882,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'ส่องดาว',
                'postal_code' => 47190,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 495
            ],
            [
                'id' => 883,
                'place' => 'northeast',
                'province' => 'สกลนคร',
                'amphoe' => 'อากาศอำนวย',
                'postal_code' => 47170,
                'note' => '',
                'province_id' => 36,
                'amphure_id' => 493
            ],
            [
                'id' => 884,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'กาบเชิง',
                'postal_code' => 32210,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 258
            ],
            [
                'id' => 885,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'เขวาสินรินทร์',
                'postal_code' => 32000,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 268
            ],
            [
                'id' => 886,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'จอมพระ',
                'postal_code' => 32180,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 256
            ],
            [
                'id' => 887,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'ชุมพลบุรี',
                'postal_code' => 32190,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 254
            ],
            [
                'id' => 888,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'ท่าตูม',
                'postal_code' => 32120,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 255
            ],
            [
                'id' => 889,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'โนนนารายณ์',
                'postal_code' => 32130,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 269
            ],
            [
                'id' => 890,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'บัวเชด',
                'postal_code' => 32230,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 265
            ],
            [
                'id' => 891,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'ปราสาท',
                'postal_code' => 32140,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 257
            ],
            [
                'id' => 892,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'พนมดงรัก',
                'postal_code' => 32140,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 266
            ],
            [
                'id' => 893,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'เมืองสุรินทร์',
                'postal_code' => 32000,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 253
            ],
            [
                'id' => 894,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'รัตนบุรี',
                'postal_code' => 32130,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 259
            ],
            [
                'id' => 895,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'ลำดวน',
                'postal_code' => 32220,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 263
            ],
            [
                'id' => 896,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'ศรีณรงค์',
                'postal_code' => 32150,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 267
            ],
            [
                'id' => 897,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'ศีขรภูมิ',
                'postal_code' => 32110,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 261
            ],
            [
                'id' => 898,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'สนม',
                'postal_code' => 32160,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 260
            ],
            [
                'id' => 899,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'สังขะ',
                'postal_code' => 32150,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 262
            ],
            [
                'id' => 900,
                'place' => 'northeast',
                'province' => 'สุรินทร์',
                'amphoe' => 'สำโรงทาบ',
                'postal_code' => 32170,
                'note' => '',
                'province_id' => 21,
                'amphure_id' => 264
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 901,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'ท่าบ่อ',
                'postal_code' => 43110,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 424
            ],
            [
                'id' => 902,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'เฝ้าไร่',
                'postal_code' => 43120,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 429
            ],
            [
                'id' => 903,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'โพธิ์ตาก',
                'postal_code' => 43130,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 431
            ],
            [
                'id' => 904,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'โพนพิสัย',
                'postal_code' => 43120,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 425
            ],
            [
                'id' => 905,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'เมืองหนองคาย',
                'postal_code' => 43000,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 423
            ],
            [
                'id' => 906,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'เมืองหนองคาย',
                'postal_code' => 43100,
                'note' => 'ใช้ในเขตพื้นที่ ต.ค่ายบกหวาน, ต.สองห้อง, ต.พระธาตุบังพวน',
                'province_id' => 32,
                'amphure_id' => 423
            ],
            [
                'id' => 907,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'รัตนวาปี',
                'postal_code' => 43120,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 430
            ],
            [
                'id' => 908,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'ศรีเชียงใหม่',
                'postal_code' => 43130,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 426
            ],
            [
                'id' => 909,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'สระใคร',
                'postal_code' => 43100,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 428
            ],
            [
                'id' => 910,
                'place' => 'northeast',
                'province' => 'หนองคาย',
                'amphoe' => 'สังคม',
                'postal_code' => 43160,
                'note' => '',
                'province_id' => 32,
                'amphure_id' => 427
            ],
            [
                'id' => 911,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'นากลาง',
                'postal_code' => 39170,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 358
            ],
            [
                'id' => 912,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'นากลาง',
                'postal_code' => 39350,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 358
            ],
            [
                'id' => 913,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'นาวัง',
                'postal_code' => 39170,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 362
            ],
            [
                'id' => 914,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'โนนสัง',
                'postal_code' => 39140,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 359
            ],
            [
                'id' => 915,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'เมืองหนองบัวลำภู',
                'postal_code' => 39000,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 357
            ],
            [
                'id' => 916,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'ศรีบุญเรือง',
                'postal_code' => 39180,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 360
            ],
            [
                'id' => 917,
                'place' => 'northeast',
                'province' => 'หนองบัวลำภู',
                'amphoe' => 'สุวรรณคูหา',
                'postal_code' => 39270,
                'note' => '',
                'province_id' => 28,
                'amphure_id' => 361
            ],
            [
                'id' => 918,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'ชานุมาน',
                'postal_code' => 37210,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 343
            ],
            [
                'id' => 919,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'ปทุมราชวงศา',
                'postal_code' => 37110,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 344
            ],
            [
                'id' => 920,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'พนา',
                'postal_code' => 37180,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 345
            ],
            [
                'id' => 921,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'เมืองอำนาจเจริญ',
                'postal_code' => 37000,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 342
            ],
            [
                'id' => 922,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'ลืออำนาจ',
                'postal_code' => 37000,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 348
            ],
            [
                'id' => 923,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'เสนางคนิคม',
                'postal_code' => 37290,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 346
            ],
            [
                'id' => 924,
                'place' => 'northeast',
                'province' => 'อำนาจเจริญ',
                'amphoe' => 'หัวตะพาน',
                'postal_code' => 37240,
                'note' => '',
                'province_id' => 26,
                'amphure_id' => 347
            ],
            [
                'id' => 925,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'กุดจับ',
                'postal_code' => 41250,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 390
            ],
            [
                'id' => 926,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'กุมภวาปี',
                'postal_code' => 41110,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 392
            ],
            [
                'id' => 927,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'กุมภวาปี',
                'postal_code' => 41370,
                'note' => 'ใช้ในเขตพื้นที่ ต.พันดอน, ต.ผาสุก, ต.ปะโค, ต.เสอเพลอ',
                'province_id' => 30,
                'amphure_id' => 392
            ],
            [
                'id' => 928,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'กู่แก้ว',
                'postal_code' => 41130,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 407
            ],
            [
                'id' => 929,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'ไชยวาน',
                'postal_code' => 41290,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 396
            ],
            [
                'id' => 930,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'ทุ่งฝน',
                'postal_code' => 41310,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 395
            ],
            [
                'id' => 931,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'นายูง',
                'postal_code' => 41380,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 405
            ],
            [
                'id' => 932,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'น้ำโสม',
                'postal_code' => 41210,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 401
            ],
            [
                'id' => 933,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'โนนสะอาด',
                'postal_code' => 41240,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 393
            ],
            [
                'id' => 934,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'บ้านดุง',
                'postal_code' => 41190,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 399
            ],
            [
                'id' => 935,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'บ้านผือ',
                'postal_code' => 41160,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 400
            ],
            [
                'id' => 936,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'ประจักษ์ศิลปาคม',
                'postal_code' => 41110,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 408
            ],
            [
                'id' => 937,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'พิบูลย์รักษ์',
                'postal_code' => 41130,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 406
            ],
            [
                'id' => 938,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'เพ็ญ',
                'postal_code' => 41150,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 402
            ],
            [
                'id' => 939,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'เมืองอุดรธานี',
                'postal_code' => 41000,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 389
            ],
            [
                'id' => 940,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'เมืองอุดรธานี',
                'postal_code' => 41330,
                'note' => 'ใช้ในเขตพื้นที่ ต.โนนสูง, ต.หนองไผ่',
                'province_id' => 30,
                'amphure_id' => 389
            ],
            [
                'id' => 941,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'วังสามหมอ',
                'postal_code' => 41280,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 398
            ],
            [
                'id' => 942,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'ศรีธาตุ',
                'postal_code' => 41230,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 397
            ],
            [
                'id' => 943,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'สร้างคอม',
                'postal_code' => 41260,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 403
            ],
            [
                'id' => 944,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'หนองวัวซอ',
                'postal_code' => 41220,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 391
            ],
            [
                'id' => 945,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'หนองวัวซอ',
                'postal_code' => 41360,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองวัวซอ, ต.หมากหญ้า, ต.น้ำพ่น, ต.หนองบัวบาน',
                'province_id' => 30,
                'amphure_id' => 391
            ],
            [
                'id' => 946,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'หนองแสง',
                'postal_code' => 41340,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 404
            ],
            [
                'id' => 947,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'หนองหาน',
                'postal_code' => 41130,
                'note' => '',
                'province_id' => 30,
                'amphure_id' => 394
            ],
            [
                'id' => 948,
                'place' => 'northeast',
                'province' => 'อุดรธานี',
                'amphoe' => 'หนองหาน',
                'postal_code' => 41320,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านเชียง, ต.บ้านยา, ต.หนองสระปลา',
                'province_id' => 30,
                'amphure_id' => 394
            ],
            [
                'id' => 949,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'กุดข้าวปุ้น',
                'postal_code' => 34270,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 302
            ],
            [
                'id' => 950,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'เขมราฐ',
                'postal_code' => 34170,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 296
            ],
            [
                'id' => 951,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'เขื่องใน',
                'postal_code' => 34150,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 295
            ],
            [
                'id' => 952,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'เขื่องใน',
                'postal_code' => 34320,
                'note' => 'ใช้ในเขตพื้นที่ ต.กลางใหญ่, ต.โนนรัง, ต.บ้านไทย, ต.บ้านกอก',
                'province_id' => 23,
                'amphure_id' => 295
            ],
            [
                'id' => 953,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'โขงเจียม',
                'postal_code' => 34220,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 294
            ],
            [
                'id' => 954,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'ดอนมดแดง',
                'postal_code' => 34000,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 309
            ],
            [
                'id' => 955,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'เดชอุดม',
                'postal_code' => 34160,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 297
            ],
            [
                'id' => 956,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'ตระการพืชผล',
                'postal_code' => 34130,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 301
            ],
            [
                'id' => 957,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'ตาลสุม',
                'postal_code' => 34330,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 306
            ],
            [
                'id' => 958,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'ทุ่งศรีอุดม',
                'postal_code' => 34160,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 311
            ],
            [
                'id' => 959,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'นาจะหลวย',
                'postal_code' => 34280,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 298
            ],
            [
                'id' => 960,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'นาตาล',
                'postal_code' => 34170,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 313
            ],
            [
                'id' => 961,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'นาเยีย',
                'postal_code' => 34160,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 312
            ],
            [
                'id' => 962,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'น้ำขุ่น',
                'postal_code' => 34260,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 316
            ],
            [
                'id' => 963,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'น้ำยืน',
                'postal_code' => 34260,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 299
            ],
            [
                'id' => 964,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'บุณฑริก',
                'postal_code' => 34230,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 300
            ],
            [
                'id' => 965,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'พิบูลมังสาหาร',
                'postal_code' => 34110,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 305
            ],
            [
                'id' => 966,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'โพธิ์ไทร',
                'postal_code' => 34340,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 307
            ],
            [
                'id' => 967,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'ม่วงสามสิบ',
                'postal_code' => 34140,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 303
            ],
            [
                'id' => 968,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'เมืองอุบลราชธานี',
                'postal_code' => 34000,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 292
            ],
            [
                'id' => 969,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'วารินชำราบ',
                'postal_code' => 34190,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 304
            ],
            [
                'id' => 970,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'วารินชำราบ',
                'postal_code' => 34310,
                'note' => 'ใช้ในเขตพื้นที่ ต.ห้วยขะยุง, ต.ท่าลาด, ต.บุ่งหวาย',
                'province_id' => 23,
                'amphure_id' => 304
            ],
            [
                'id' => 971,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'ศรีเมืองใหม่',
                'postal_code' => 34250,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 293
            ],
            [
                'id' => 972,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'สว่างวีระวงศ์',
                'postal_code' => 34190,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 315
            ],
            [
                'id' => 973,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'สำโรง',
                'postal_code' => 34360,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 308
            ],
            [
                'id' => 974,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'สิรินธร',
                'postal_code' => 34350,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 310
            ],
            [
                'id' => 975,
                'place' => 'northeast',
                'province' => 'อุบลราชธานี',
                'amphoe' => 'เหล่าเสือโก้ก',
                'postal_code' => 34000,
                'note' => '',
                'province_id' => 23,
                'amphure_id' => 314
            ],
            [
                'id' => 976,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'เซกา',
                'postal_code' => 38150,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 352
            ],
            [
                'id' => 977,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'โซ่พิสัย',
                'postal_code' => 38170,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 351
            ],
            [
                'id' => 978,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'เมืองบึงกาฬ',
                'postal_code' => 38000,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 349
            ],
            [
                'id' => 979,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'บึงโขงหลง',
                'postal_code' => 38220,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 354
            ],
            [
                'id' => 980,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'บุ่งคล้า',
                'postal_code' => 38000,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 356
            ],
            [
                'id' => 981,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'ปากคาด',
                'postal_code' => 38190,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 353
            ],
            [
                'id' => 982,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'พรเจริญ',
                'postal_code' => 38180,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 350
            ],
            [
                'id' => 983,
                'place' => 'northeast',
                'province' => 'บึงกาฬ',
                'amphoe' => 'ศรีวิไล',
                'postal_code' => 38210,
                'note' => '',
                'province_id' => 27,
                'amphure_id' => 355
            ],
            [
                'id' => 984,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'กมลาไสย',
                'postal_code' => 46130,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 467
            ],
            [
                'id' => 985,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'กุฉินารายณ์',
                'postal_code' => 46110,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 469
            ],
            [
                'id' => 986,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'เขาวง',
                'postal_code' => 46160,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 470
            ],
            [
                'id' => 987,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'คำม่วง',
                'postal_code' => 46180,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 474
            ],
            [
                'id' => 988,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ฆ้องชัย',
                'postal_code' => 46130,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 482
            ],
            [
                'id' => 989,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ดอนจาน',
                'postal_code' => 46000,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 481
            ],
            [
                'id' => 990,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ท่าคันโท',
                'postal_code' => 46190,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 475
            ],
            [
                'id' => 991,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'นาคู',
                'postal_code' => 46160,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 480
            ],
            [
                'id' => 992,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'นามน',
                'postal_code' => 46230,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 466
            ],
            [
                'id' => 993,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'เมืองกาฬสินธุ์',
                'postal_code' => 46000,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 465
            ],
            [
                'id' => 994,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ยางตลาด',
                'postal_code' => 46120,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 471
            ],
            [
                'id' => 995,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ร่องคำ',
                'postal_code' => 46210,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 468
            ],
            [
                'id' => 996,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'สมเด็จ',
                'postal_code' => 46150,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 477
            ],
            [
                'id' => 997,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'สหัสขันธ์',
                'postal_code' => 46140,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 473
            ],
            [
                'id' => 998,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'สามชัย',
                'postal_code' => 46180,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 479
            ],
            [
                'id' => 999,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'หนองกุงศรี',
                'postal_code' => 46220,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 476
            ],
            [
                'id' => 1000,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ห้วยผึ้ง',
                'postal_code' => 46240,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 478
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 1001,
                'place' => 'northeast',
                'province' => 'กาฬสินธุ์',
                'amphoe' => 'ห้วยเม็ก',
                'postal_code' => 46170,
                'note' => '',
                'province_id' => 35,
                'amphure_id' => 472
            ],
            [
                'id' => 1002,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'เกาะลันตา',
                'postal_code' => 81120,
                'note' => 'ใช้ในเขตพื้นที่ ต.เกาะกลาง, ต.คลองยาง',
                'province_id' => 65,
                'amphure_id' => 803
            ],
            [
                'id' => 1003,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'เกาะลันตา',
                'postal_code' => 81150,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 803
            ],
            [
                'id' => 1004,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'เขาพนม',
                'postal_code' => 80240,
                'note' => 'ใช้ในเขตพื้นที่ ต.สินปุน, ต.โคกหาร',
                'province_id' => 65,
                'amphure_id' => 802
            ],
            [
                'id' => 1005,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'เขาพนม',
                'postal_code' => 81140,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 802
            ],
            [
                'id' => 1006,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'คลองท่อม',
                'postal_code' => 81120,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 804
            ],
            [
                'id' => 1007,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'คลองท่อม',
                'postal_code' => 81170,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทรายขาว, ต.คลองพน',
                'province_id' => 65,
                'amphure_id' => 804
            ],
            [
                'id' => 1008,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'ปลายพระยา',
                'postal_code' => 81160,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 806
            ],
            [
                'id' => 1009,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'เมืองกระบี่',
                'postal_code' => 81000,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 801
            ],
            [
                'id' => 1010,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'ลำทับ',
                'postal_code' => 81120,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 807
            ],
            [
                'id' => 1011,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'เหนือคลอง',
                'postal_code' => 81130,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 808
            ],
            [
                'id' => 1012,
                'place' => 'southern',
                'province' => 'กระบี่',
                'amphoe' => 'อ่าวลึก',
                'postal_code' => 81110,
                'note' => '',
                'province_id' => 65,
                'amphure_id' => 805
            ],
            [
                'id' => 1013,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ท่าแซะ',
                'postal_code' => 86140,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 845
            ],
            [
                'id' => 1014,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ท่าแซะ',
                'postal_code' => 86190,
                'note' => 'ใช้ในเขตพื้นที่ ต.หินแก้ว, ต.รับร่อ ม.1-9, ม.11-13, 15-18',
                'province_id' => 70,
                'amphure_id' => 845
            ],
            [
                'id' => 1015,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ทุ่งตะโก',
                'postal_code' => 86220,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 851
            ],
            [
                'id' => 1016,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ปะทิว',
                'postal_code' => 86160,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 846
            ],
            [
                'id' => 1017,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ปะทิว',
                'postal_code' => 86210,
                'note' => 'ใช้ในเขตพื้นที่ ต.เขาไชยราช, ต.ปากคลอง, ต.ดอนยาง',
                'province_id' => 70,
                'amphure_id' => 846
            ],
            [
                'id' => 1018,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ปะทิว',
                'postal_code' => 86230,
                'note' => 'ใช้ในเขตพื้นที่ ต.สะพลี',
                'province_id' => 70,
                'amphure_id' => 846
            ],
            [
                'id' => 1019,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'พะโต๊ะ',
                'postal_code' => 86180,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 849
            ],
            [
                'id' => 1020,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'เมืองชุมพร',
                'postal_code' => 86000,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 844
            ],
            [
                'id' => 1021,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'เมืองชุมพร',
                'postal_code' => 86100,
                'note' => 'ใช้ในเขตพื้นที่ ต.ถ้ำสิงห์, ต.ทุ่งคา, ต.วิสัยเหนือ',
                'province_id' => 70,
                'amphure_id' => 844
            ],
            [
                'id' => 1022,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'เมืองชุมพร',
                'postal_code' => 86120,
                'note' => 'ใช้ในเขตพื้นที่ ต.ปากน้ำ, ต.หาดทรายรี, ต.ท่ายาง ม.1, ม.9-10',
                'province_id' => 70,
                'amphure_id' => 844
            ],
            [
                'id' => 1023,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'เมืองชุมพร',
                'postal_code' => 86190,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านนา, ต.วังใหม่, ต.ขุนกระทิง ม.1-5, ม.7-8, ต.ตากแดด ม.7, ม.9, ต.วังไผ่ ม.4, ม.8-9, ม.12-13',
                'province_id' => 70,
                'amphure_id' => 844
            ],
            [
                'id' => 1024,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'ละแม',
                'postal_code' => 86170,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 848
            ],
            [
                'id' => 1025,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'สวี',
                'postal_code' => 86130,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 850
            ],
            [
                'id' => 1026,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'หลังสวน',
                'postal_code' => 86110,
                'note' => '',
                'province_id' => 70,
                'amphure_id' => 847
            ],
            [
                'id' => 1027,
                'place' => 'southern',
                'province' => 'ชุมพร',
                'amphoe' => 'หลังสวน',
                'postal_code' => 86150,
                'note' => 'ใช้ในเขตพื้นที่ ต.บางน้ำจืด, ต.ปากน้ำ, ต.บางมะพร้าว ม.8, ม.10-14',
                'province_id' => 70,
                'amphure_id' => 847
            ],
            [
                'id' => 1028,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'กันตัง',
                'postal_code' => 92110,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 876
            ],
            [
                'id' => 1029,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'นาโยง',
                'postal_code' => 92170,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 882
            ],
            [
                'id' => 1030,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ปะเหลียน',
                'postal_code' => 92120,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 878
            ],
            [
                'id' => 1031,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ปะเหลียน',
                'postal_code' => 92140,
                'note' => 'ใช้ในเขตพื้นที่ ต.บางด้วน, ต.บ้านนา, ต.ท่าพญา',
                'province_id' => 73,
                'amphure_id' => 878
            ],
            [
                'id' => 1032,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ปะเหลียน',
                'postal_code' => 92180,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทุ่งยาว, ต.ลิพัง, ต.ปะเหลียน, ต.แหลมสอม, ต.สุโสะ ม.5',
                'province_id' => 73,
                'amphure_id' => 878
            ],
            [
                'id' => 1033,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'เมืองตรัง',
                'postal_code' => 92000,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 875
            ],
            [
                'id' => 1034,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'เมืองตรัง',
                'postal_code' => 92170,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาโยงใต้',
                'province_id' => 73,
                'amphure_id' => 875
            ],
            [
                'id' => 1035,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'เมืองตรัง',
                'postal_code' => 92190,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาท่ามเหนือ, ต.นาท่ามใต้',
                'province_id' => 73,
                'amphure_id' => 875
            ],
            [
                'id' => 1036,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ย่านตาขาว',
                'postal_code' => 92140,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 877
            ],
            [
                'id' => 1037,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'รัษฎา',
                'postal_code' => 92130,
                'note' => 'ใช้ในเขตพื้นที่ ต.หนองปรือ',
                'province_id' => 73,
                'amphure_id' => 883
            ],
            [
                'id' => 1038,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'รัษฎา',
                'postal_code' => 92160,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 883
            ],
            [
                'id' => 1039,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'วังวิเศษ',
                'postal_code' => 92000,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าสะบ้า',
                'province_id' => 73,
                'amphure_id' => 881
            ],
            [
                'id' => 1040,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'วังวิเศษ',
                'postal_code' => 92220,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 881
            ],
            [
                'id' => 1041,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'สิเกา',
                'postal_code' => 92000,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาเมืองเพชร',
                'province_id' => 73,
                'amphure_id' => 879
            ],
            [
                'id' => 1042,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'สิเกา',
                'postal_code' => 92150,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 879
            ],
            [
                'id' => 1043,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ห้วยยอด',
                'postal_code' => 92130,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 880
            ],
            [
                'id' => 1044,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ห้วยยอด',
                'postal_code' => 92190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ปากแจ่ม, ต.ลำภูรา',
                'province_id' => 73,
                'amphure_id' => 880
            ],
            [
                'id' => 1045,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'ห้วยยอด',
                'postal_code' => 92210,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาวง, ต.บางดี, ต.บางกุ้ง, ต.วังคีรี',
                'province_id' => 73,
                'amphure_id' => 880
            ],
            [
                'id' => 1046,
                'place' => 'southern',
                'province' => 'ตรัง',
                'amphoe' => 'หาดสำราญ',
                'postal_code' => 92120,
                'note' => '',
                'province_id' => 73,
                'amphure_id' => 884
            ],
            [
                'id' => 1047,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ขนอม',
                'postal_code' => 80210,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 792
            ],
            [
                'id' => 1048,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'จุฬาภรณ์',
                'postal_code' => 80130,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 796
            ],
            [
                'id' => 1049,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'จุฬาภรณ์',
                'postal_code' => 80180,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านชะอวด, ต.บ้านควนมุด',
                'province_id' => 64,
                'amphure_id' => 796
            ],
            [
                'id' => 1050,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ฉวาง',
                'postal_code' => 80150,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 781
            ],
            [
                'id' => 1051,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ฉวาง',
                'postal_code' => 80250,
                'note' => 'ใช้ในเขตพื้นที่ ต.ละอาย, ต.จันดี, ต.ฉวาง ม.8',
                'province_id' => 64,
                'amphure_id' => 781
            ],
            [
                'id' => 1052,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ฉวาง',
                'postal_code' => 80260,
                'note' => 'ใช้ในเขตพื้นที่ ต.กะเบียด, ต.ห้วยปริก, ต.นาเขลียง, ต.นากะชะ ม.3-6, ต.นาแว ม.1-6, ม.8-11, ต.ไม้เรียง ม.1-3, ม.5, ม.8-10',
                'province_id' => 64,
                'amphure_id' => 781
            ],
            [
                'id' => 1053,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 80190,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 800
            ],
            [
                'id' => 1054,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 80290,
                'note' => 'ใช้ในเขตพื้นที่ ต.ดอนตรอ, ต.ทางพูน ม.1-2, ม.6',
                'province_id' => 64,
                'amphure_id' => 800
            ],
            [
                'id' => 1055,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เฉลิมพระเกียรติ',
                'postal_code' => 80350,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทางพูน ม.3-4',
                'province_id' => 64,
                'amphure_id' => 800
            ],
            [
                'id' => 1056,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ชะอวด',
                'postal_code' => 80180,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 784
            ],
            [
                'id' => 1057,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ช้างกลาง',
                'postal_code' => 80220,
                'note' => 'ใช้ในเขตพื้นที่ ต.ช้างกลาง ม.8, ม.16',
                'province_id' => 64,
                'amphure_id' => 799
            ],
            [
                'id' => 1058,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ช้างกลาง',
                'postal_code' => 80250,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 799
            ],
            [
                'id' => 1059,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เชียรใหญ่',
                'postal_code' => 80190,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 783
            ],
            [
                'id' => 1060,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ถ้ำพรรณรา',
                'postal_code' => 80260,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 795
            ],
            [
                'id' => 1061,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ท่าศาลา',
                'postal_code' => 80160,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 785
            ],
            [
                'id' => 1062,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ทุ่งสง',
                'postal_code' => 80110,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 786
            ],
            [
                'id' => 1063,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ทุ่งสง',
                'postal_code' => 80310,
                'note' => 'ใช้ในเขตพื้นที่ ต.กะปาง, ต.เขาโร ม.5, ต.ที่วัง ม.3-4, ม.11',
                'province_id' => 64,
                'amphure_id' => 786
            ],
            [
                'id' => 1064,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ทุ่งใหญ่',
                'postal_code' => 80240,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 788
            ],
            [
                'id' => 1065,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'นบพิตำ',
                'postal_code' => 80160,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 798
            ],
            [
                'id' => 1066,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'นาบอน',
                'postal_code' => 80220,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 787
            ],
            [
                'id' => 1067,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'นาบอน',
                'postal_code' => 80250,
                'note' => 'ใช้ในเขตพื้นที่ ต.แก้วแสน ม.3-4',
                'province_id' => 64,
                'amphure_id' => 787
            ],
            [
                'id' => 1068,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'บางขัน',
                'postal_code' => 80360,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 794
            ],
            [
                'id' => 1069,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ปากพนัง',
                'postal_code' => 80140,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 789
            ],
            [
                'id' => 1070,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ปากพนัง',
                'postal_code' => 80330,
                'note' => 'ใช้ในเขตพื้นที่ ต.คลองน้อย, ต.ชะเมา, ต.เกาะทวด',
                'province_id' => 64,
                'amphure_id' => 789
            ],
            [
                'id' => 1071,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'พรหมคีรี',
                'postal_code' => 80320,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 779
            ],
            [
                'id' => 1072,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'พระพรหม',
                'postal_code' => 80000,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 797
            ],
            [
                'id' => 1073,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'พิปูน',
                'postal_code' => 80270,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 782
            ],
            [
                'id' => 1074,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เมืองนครศรีธรรมราช',
                'postal_code' => 80000,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 778
            ],
            [
                'id' => 1075,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เมืองนครศรีธรรมราช',
                'postal_code' => 80280,
                'note' => 'ใช้ในเขตพื้นที่ ต.กำแพงเซา, ต.ท่างิ้ว, ต.นาทราย',
                'province_id' => 64,
                'amphure_id' => 778
            ],
            [
                'id' => 1076,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เมืองนครศรีธรรมราช',
                'postal_code' => 80290,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าเรือ ม.2-6, ม.8, ม.14-17',
                'province_id' => 64,
                'amphure_id' => 778
            ],
            [
                'id' => 1077,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'เมืองนครศรีธรรมราช',
                'postal_code' => 80330,
                'note' => 'ใช้ในเขตพื้นที่ ต.บางจาก',
                'province_id' => 64,
                'amphure_id' => 778
            ],
            [
                'id' => 1078,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ร่อนพิบูลย์',
                'postal_code' => 80130,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 790
            ],
            [
                'id' => 1079,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ร่อนพิบูลย์',
                'postal_code' => 80350,
                'note' => 'ใช้ในเขตพื้นที่ ต.เสาธง, ต.หินตก',
                'province_id' => 64,
                'amphure_id' => 790
            ],
            [
                'id' => 1080,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'ลานสกา',
                'postal_code' => 80230,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 780
            ],
            [
                'id' => 1081,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'สิชล',
                'postal_code' => 80120,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 791
            ],
            [
                'id' => 1082,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'สิชล',
                'postal_code' => 80340,
                'note' => 'ใช้ในเขตพื้นที่ ต.เสาเภา, ต.เทพราช',
                'province_id' => 64,
                'amphure_id' => 791
            ],
            [
                'id' => 1083,
                'place' => 'southern',
                'province' => 'นครศรีธรรมราช',
                'amphoe' => 'หัวไทร',
                'postal_code' => 80170,
                'note' => '',
                'province_id' => 64,
                'amphure_id' => 793
            ],
            [
                'id' => 1084,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'จะแนะ',
                'postal_code' => 96220,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 927
            ],
            [
                'id' => 1085,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'เจาะไอร้อง',
                'postal_code' => 96130,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 928
            ],
            [
                'id' => 1086,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'ตากใบ',
                'postal_code' => 96110,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 917
            ],
            [
                'id' => 1087,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'บาเจาะ',
                'postal_code' => 96170,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 918
            ],
            [
                'id' => 1088,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'เมืองนราธิวาส',
                'postal_code' => 96000,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 916
            ],
            [
                'id' => 1089,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'ยี่งอ',
                'postal_code' => 96180,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 919
            ],
            [
                'id' => 1090,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'ระแงะ',
                'postal_code' => 96130,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 920
            ],
            [
                'id' => 1091,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'ระแงะ',
                'postal_code' => 96220,
                'note' => 'ใช้ในเขตพื้นที่ ต.บองอ',
                'province_id' => 77,
                'amphure_id' => 920
            ],
            [
                'id' => 1092,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'รือเสาะ',
                'postal_code' => 96150,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 921
            ],
            [
                'id' => 1093,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'แว้ง',
                'postal_code' => 96160,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 923
            ],
            [
                'id' => 1094,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'ศรีสาคร',
                'postal_code' => 96210,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 922
            ],
            [
                'id' => 1095,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'สุคิริน',
                'postal_code' => 96190,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 924
            ],
            [
                'id' => 1096,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'สุไหงโก-ลก',
                'postal_code' => 96120,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 925
            ],
            [
                'id' => 1097,
                'place' => 'southern',
                'province' => 'นราธิวาส',
                'amphoe' => 'สุไหงปาดี',
                'postal_code' => 96140,
                'note' => '',
                'province_id' => 77,
                'amphure_id' => 926
            ],
            [
                'id' => 1098,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'กะพ้อ',
                'postal_code' => 94230,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 906
            ],
            [
                'id' => 1099,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'โคกโพธิ์',
                'postal_code' => 94120,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 897
            ],
            [
                'id' => 1100,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'โคกโพธิ์',
                'postal_code' => 94180,
                'note' => 'ใช้ในเขตพื้นที่ ต.นาประดู่, ต.ทุ่งพลา, ต.ปากล่อ, ต.ควนโนรี',
                'province_id' => 75,
                'amphure_id' => 897
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 1101,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ทุ่งยางแดง',
                'postal_code' => 94140,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 901
            ],
            [
                'id' => 1102,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ปะนาเระ',
                'postal_code' => 94130,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 899
            ],
            [
                'id' => 1103,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ปะนาเระ',
                'postal_code' => 94190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ควน, ต.ดอน ม.1-2',
                'province_id' => 75,
                'amphure_id' => 899
            ],
            [
                'id' => 1104,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'มายอ',
                'postal_code' => 94140,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 900
            ],
            [
                'id' => 1105,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'มายอ',
                'postal_code' => 94190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ลางา, ต.กระหวะ ม.1-4',
                'province_id' => 75,
                'amphure_id' => 900
            ],
            [
                'id' => 1106,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'เมืองปัตตานี',
                'postal_code' => 94000,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 896
            ],
            [
                'id' => 1107,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'แม่ลาน',
                'postal_code' => 94180,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 907
            ],
            [
                'id' => 1108,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ไม้แก่น',
                'postal_code' => 94220,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 903
            ],
            [
                'id' => 1109,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ยะรัง',
                'postal_code' => 94160,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 905
            ],
            [
                'id' => 1110,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ยะหริ่ง',
                'postal_code' => 94150,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 904
            ],
            [
                'id' => 1111,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'ยะหริ่ง',
                'postal_code' => 94190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ตันหยงจึงงา, ต.บาโลย',
                'province_id' => 75,
                'amphure_id' => 904
            ],
            [
                'id' => 1112,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'สายบุรี',
                'postal_code' => 94110,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 902
            ],
            [
                'id' => 1113,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'สายบุรี',
                'postal_code' => 94190,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทุ่งคล้า',
                'province_id' => 75,
                'amphure_id' => 902
            ],
            [
                'id' => 1114,
                'place' => 'southern',
                'province' => 'ปัตตานี',
                'amphoe' => 'หนองจิก',
                'postal_code' => 94170,
                'note' => '',
                'province_id' => 75,
                'amphure_id' => 898
            ],
            [
                'id' => 1115,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'กะปง',
                'postal_code' => 82170,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 811
            ],
            [
                'id' => 1116,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'เกาะยาว',
                'postal_code' => 82160,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 810
            ],
            [
                'id' => 1117,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'เกาะยาว',
                'postal_code' => 83000,
                'note' => 'ใช้ในเขตพื้นที่ ต.พรุใน',
                'province_id' => 66,
                'amphure_id' => 810
            ],
            [
                'id' => 1118,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'คุระบุรี',
                'postal_code' => 82150,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 814
            ],
            [
                'id' => 1119,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ตะกั่วทุ่ง',
                'postal_code' => 82130,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 812
            ],
            [
                'id' => 1120,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ตะกั่วทุ่ง',
                'postal_code' => 82140,
                'note' => 'ใช้ในเขตพื้นที่ ต.โคกกลอย, ต.หล่อยูง',
                'province_id' => 66,
                'amphure_id' => 812
            ],
            [
                'id' => 1121,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ตะกั่วป่า',
                'postal_code' => 82110,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 813
            ],
            [
                'id' => 1122,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ตะกั่วป่า',
                'postal_code' => 82190,
                'note' => 'ใช้ในเขตพื้นที่ ต.คึกคัก, ต.เกาะคอเขา, ต.บางม่วง ม.2-8, ม.1 ยกเว้นบ้านเลขที่ 22-22/..., 24-24/..., 34-34/..., 35-35/..., 46-46/..., 52-52/..., 55, 58-58/…, 59-59/...',
                'province_id' => 66,
                'amphure_id' => 813
            ],
            [
                'id' => 1123,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ทับปุด',
                'postal_code' => 82180,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 815
            ],
            [
                'id' => 1124,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ท้ายเหมือง',
                'postal_code' => 82120,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 816
            ],
            [
                'id' => 1125,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'ท้ายเหมือง',
                'postal_code' => 82210,
                'note' => 'ใช้ในเขตพื้นที่ ต.ลำแก่น ม.1-3, ม.5-6',
                'province_id' => 66,
                'amphure_id' => 816
            ],
            [
                'id' => 1126,
                'place' => 'southern',
                'province' => 'พังงา',
                'amphoe' => 'เมืองพังงา',
                'postal_code' => 82000,
                'note' => '',
                'province_id' => 66,
                'amphure_id' => 809
            ],
            [
                'id' => 1127,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'กงหรา',
                'postal_code' => 93000,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 886
            ],
            [
                'id' => 1128,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'กงหรา',
                'postal_code' => 93180,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 886
            ],
            [
                'id' => 1129,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'เขาชัยสน',
                'postal_code' => 93130,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 887
            ],
            [
                'id' => 1130,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ควนขนุน',
                'postal_code' => 93110,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 889
            ],
            [
                'id' => 1131,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ควนขนุน',
                'postal_code' => 93150,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 889
            ],
            [
                'id' => 1132,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ตะโหมด',
                'postal_code' => 93160,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 888
            ],
            [
                'id' => 1133,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'บางแก้ว',
                'postal_code' => 93140,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 893
            ],
            [
                'id' => 1134,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'บางแก้ว',
                'postal_code' => 93160,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 893
            ],
            [
                'id' => 1135,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ปากพะยูน',
                'postal_code' => 93120,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 890
            ],
            [
                'id' => 1136,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ป่าบอน',
                'postal_code' => 93170,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 892
            ],
            [
                'id' => 1137,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ป่าพะยอม',
                'postal_code' => 93110,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 894
            ],
            [
                'id' => 1138,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'เมืองพัทลุง',
                'postal_code' => 93000,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 885
            ],
            [
                'id' => 1139,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ศรีนครินทร์',
                'postal_code' => 93000,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 895
            ],
            [
                'id' => 1140,
                'place' => 'southern',
                'province' => 'พัทลุง',
                'amphoe' => 'ศรีบรรพต',
                'postal_code' => 93190,
                'note' => '',
                'province_id' => 74,
                'amphure_id' => 891
            ],
            [
                'id' => 1141,
                'place' => 'southern',
                'province' => 'ภูเก็ต',
                'amphoe' => 'กะทู้',
                'postal_code' => 83120,
                'note' => '',
                'province_id' => 67,
                'amphure_id' => 818
            ],
            [
                'id' => 1142,
                'place' => 'southern',
                'province' => 'ภูเก็ต',
                'amphoe' => 'กะทู้',
                'postal_code' => 83150,
                'note' => 'ใช้ในเขตพื้นที่ ต.ป่าตอง',
                'province_id' => 67,
                'amphure_id' => 818
            ],
            [
                'id' => 1143,
                'place' => 'southern',
                'province' => 'ภูเก็ต',
                'amphoe' => 'ถลาง',
                'postal_code' => 83110,
                'note' => '',
                'province_id' => 67,
                'amphure_id' => 819
            ],
            [
                'id' => 1144,
                'place' => 'southern',
                'province' => 'ภูเก็ต',
                'amphoe' => 'เมืองภูเก็ต',
                'postal_code' => 83000,
                'note' => '',
                'province_id' => 67,
                'amphure_id' => 817
            ],
            [
                'id' => 1145,
                'place' => 'southern',
                'province' => 'ภูเก็ต',
                'amphoe' => 'เมืองภูเก็ต',
                'postal_code' => 83100,
                'note' => 'ใช้ในเขตพื้นที่ ต.กะรน',
                'province_id' => 67,
                'amphure_id' => 817
            ],
            [
                'id' => 1146,
                'place' => 'southern',
                'province' => 'ภูเก็ต',
                'amphoe' => 'เมืองภูเก็ต',
                'postal_code' => 83130,
                'note' => 'ใช้ในเขตพื้นที่ ต.ราไวย์, ต.ฉลอง',
                'province_id' => 67,
                'amphure_id' => 817
            ],
            [
                'id' => 1147,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'กรงปินัง',
                'postal_code' => 95000,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 915
            ],
            [
                'id' => 1148,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'กาบัง',
                'postal_code' => 95120,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 914
            ],
            [
                'id' => 1149,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'ธารโต',
                'postal_code' => 95130,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่หวาด ม.6',
                'province_id' => 76,
                'amphure_id' => 911
            ],
            [
                'id' => 1150,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'ธารโต',
                'postal_code' => 95150,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 911
            ],
            [
                'id' => 1151,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'ธารโต',
                'postal_code' => 95170,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่หวาด ม.1-5, ม.7-8',
                'province_id' => 76,
                'amphure_id' => 911
            ],
            [
                'id' => 1152,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'บันนังสตา',
                'postal_code' => 95130,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 910
            ],
            [
                'id' => 1153,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'เบตง',
                'postal_code' => 95110,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 909
            ],
            [
                'id' => 1154,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'เมืองยะลา',
                'postal_code' => 95000,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 908
            ],
            [
                'id' => 1155,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'เมืองยะลา',
                'postal_code' => 95160,
                'note' => 'ใช้ในเขตพื้นที่ ต.พร่อน, ต.ลิดล, ต.ลำใหม่, ต.ลำพระยา',
                'province_id' => 76,
                'amphure_id' => 908
            ],
            [
                'id' => 1156,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'ยะหา',
                'postal_code' => 95120,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 912
            ],
            [
                'id' => 1157,
                'place' => 'southern',
                'province' => 'ยะลา',
                'amphoe' => 'รามัน',
                'postal_code' => 95140,
                'note' => '',
                'province_id' => 76,
                'amphure_id' => 913
            ],
            [
                'id' => 1158,
                'place' => 'southern',
                'province' => 'ระนอง',
                'amphoe' => 'กระบุรี',
                'postal_code' => 85110,
                'note' => '',
                'province_id' => 69,
                'amphure_id' => 842
            ],
            [
                'id' => 1159,
                'place' => 'southern',
                'province' => 'ระนอง',
                'amphoe' => 'กะเปอร์',
                'postal_code' => 85120,
                'note' => '',
                'province_id' => 69,
                'amphure_id' => 841
            ],
            [
                'id' => 1160,
                'place' => 'southern',
                'province' => 'ระนอง',
                'amphoe' => 'เมืองระนอง',
                'postal_code' => 85000,
                'note' => '',
                'province_id' => 69,
                'amphure_id' => 839
            ],
            [
                'id' => 1161,
                'place' => 'southern',
                'province' => 'ระนอง',
                'amphoe' => 'เมืองระนอง',
                'postal_code' => 85130,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทรายแดง',
                'province_id' => 69,
                'amphure_id' => 839
            ],
            [
                'id' => 1162,
                'place' => 'southern',
                'province' => 'ระนอง',
                'amphoe' => 'ละอุ่น',
                'postal_code' => 85130,
                'note' => '',
                'province_id' => 69,
                'amphure_id' => 840
            ],
            [
                'id' => 1163,
                'place' => 'southern',
                'province' => 'ระนอง',
                'amphoe' => 'สุขสำราญ',
                'postal_code' => 85120,
                'note' => '',
                'province_id' => 69,
                'amphure_id' => 843
            ],
            [
                'id' => 1164,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'กระแสสินธุ์',
                'postal_code' => 90270,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 859
            ],
            [
                'id' => 1165,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'คลองหอยโข่ง',
                'postal_code' => 90115,
                'note' => 'ใช้ในเขตพื้นที่ ต.คลองหลา, ต.โคกม่วง (ม.8 ใช้ในเขตพื้นที่บ้านพักในกองบิน 56)',
                'province_id' => 71,
                'amphure_id' => 867
            ],
            [
                'id' => 1166,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'คลองหอยโข่ง',
                'postal_code' => 90230,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 867
            ],
            [
                'id' => 1167,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'ควนเนียง',
                'postal_code' => 90220,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 864
            ],
            [
                'id' => 1168,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'จะนะ',
                'postal_code' => 90130,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 854
            ],
            [
                'id' => 1169,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'เทพา',
                'postal_code' => 90150,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 856
            ],
            [
                'id' => 1170,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'เทพา',
                'postal_code' => 90260,
                'note' => 'ใช้ในเขตพื้นที่ ต.วังใหญ่, ต.ลำไพล, ต.ท่าม่วง ม.2-4, ม.6-7, ม.10, ม.12',
                'province_id' => 71,
                'amphure_id' => 856
            ],
            [
                'id' => 1171,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'นาทวี',
                'postal_code' => 90160,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 855
            ],
            [
                'id' => 1172,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'นาหม่อม',
                'postal_code' => 90310,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 863
            ],
            [
                'id' => 1173,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'บางกล่ำ',
                'postal_code' => 90110,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 865
            ],
            [
                'id' => 1174,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'เมืองสงขลา',
                'postal_code' => 90000,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 852
            ],
            [
                'id' => 1175,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'เมืองสงขลา',
                'postal_code' => 90100,
                'note' => 'ใช้ในเขตพื้นที่ ต.พะวง, ต.เกาะยอ',
                'province_id' => 71,
                'amphure_id' => 852
            ],
            [
                'id' => 1176,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'ระโนด',
                'postal_code' => 90140,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 858
            ],
            [
                'id' => 1177,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'รัตภูมิ',
                'postal_code' => 90180,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 860
            ],
            [
                'id' => 1178,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'รัตภูมิ',
                'postal_code' => 90220,
                'note' => 'ใช้ในเขตพื้นที่ ต.ควนรู ม.3-6, ม.8-9',
                'province_id' => 71,
                'amphure_id' => 860
            ],
            [
                'id' => 1179,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สทิงพระ',
                'postal_code' => 90190,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 853
            ],
            [
                'id' => 1180,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สะเดา',
                'postal_code' => 90120,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 861
            ],
            [
                'id' => 1181,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สะเดา',
                'postal_code' => 90170,
                'note' => 'ใช้ในเขตพื้นที่ ต.พังลา, ต.ท่าโพธิ์, ต.เขามีเกียรติ',
                'province_id' => 71,
                'amphure_id' => 861
            ],
            [
                'id' => 1182,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สะเดา',
                'postal_code' => 90240,
                'note' => 'ใช้ในเขตพื้นที่ ต.ทุ่งหมอ, ต.ปาดังเบซาร์',
                'province_id' => 71,
                'amphure_id' => 861
            ],
            [
                'id' => 1183,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สะเดา',
                'postal_code' => 90320,
                'note' => 'ใช้ในเขตพื้นที่ ต.สำนักขาม ม.1-2, ม.5-7',
                'province_id' => 71,
                'amphure_id' => 861
            ],
            [
                'id' => 1184,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สะบ้าย้อย',
                'postal_code' => 90210,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 857
            ],
            [
                'id' => 1185,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สิงหนคร',
                'postal_code' => 90280,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 866
            ],
            [
                'id' => 1186,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'สิงหนคร',
                'postal_code' => 90330,
                'note' => 'ใช้ในเขตพื้นที่ ต.ม่วงงาม, ต.ชะแล้, ต.บางเขียด, ต.ปากรอ, ต.ป่าขาด, ต.รำแดง, ต.วัดขนุน',
                'province_id' => 71,
                'amphure_id' => 866
            ],
            [
                'id' => 1187,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'หาดใหญ่',
                'postal_code' => 90110,
                'note' => '',
                'province_id' => 71,
                'amphure_id' => 862
            ],
            [
                'id' => 1188,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'หาดใหญ่',
                'postal_code' => 90230,
                'note' => 'ใช้ในเขตพื้นที่ ต.พะตง',
                'province_id' => 71,
                'amphure_id' => 862
            ],
            [
                'id' => 1189,
                'place' => 'southern',
                'province' => 'สงขลา',
                'amphoe' => 'หาดใหญ่',
                'postal_code' => 90250,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ้านพรุ',
                'province_id' => 71,
                'amphure_id' => 862
            ],
            [
                'id' => 1190,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'ควนกาหลง',
                'postal_code' => 91130,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 870
            ],
            [
                'id' => 1191,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'ควนโดน',
                'postal_code' => 91160,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 869
            ],
            [
                'id' => 1192,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'ท่าแพ',
                'postal_code' => 91150,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 871
            ],
            [
                'id' => 1193,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'ทุ่งหว้า',
                'postal_code' => 91120,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 873
            ],
            [
                'id' => 1194,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'มะนัง',
                'postal_code' => 91130,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 874
            ],
            [
                'id' => 1195,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'เมืองสตูล',
                'postal_code' => 91000,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 868
            ],
            [
                'id' => 1196,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'เมืองสตูล',
                'postal_code' => 91110,
                'note' => 'ใช้ในเขตพื้นที่ อุทยานแห่งชาติตะรุเตา',
                'province_id' => 72,
                'amphure_id' => 868
            ],
            [
                'id' => 1197,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'เมืองสตูล',
                'postal_code' => 91140,
                'note' => 'ใช้ในเขตพื้นที่ ต.ฉลุง, ต.บ้านควน, ต.ควนโพธิ์, ต.เกตรี',
                'province_id' => 72,
                'amphure_id' => 868
            ],
            [
                'id' => 1198,
                'place' => 'southern',
                'province' => 'สตูล',
                'amphoe' => 'ละงู',
                'postal_code' => 91110,
                'note' => '',
                'province_id' => 72,
                'amphure_id' => 872
            ],
            [
                'id' => 1199,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'กาญจนดิษฐ์',
                'postal_code' => 84160,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 821
            ],
            [
                'id' => 1200,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'กาญจนดิษฐ์',
                'postal_code' => 84290,
                'note' => 'ใช้ในเขตพื้นที่ ต.ท่าทองใหม่, ต.ทุ่งกง, ต.ทุ่งรัง',
                'province_id' => 68,
                'amphure_id' => 821
            ]
        ]);

        DB::table('postal_codes')->insert([
            [
                'id' => 1201,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เกาะพะงัน',
                'postal_code' => 84280,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 824
            ],
            [
                'id' => 1202,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เกาะสมุย',
                'postal_code' => 84140,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 823
            ],
            [
                'id' => 1203,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เกาะสมุย',
                'postal_code' => 84220,
                'note' => 'ใช้ในเขตพื้นที่ ต.อ่างทอง ม.6 (เกาะพลวย)',
                'province_id' => 68,
                'amphure_id' => 823
            ],
            [
                'id' => 1204,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เกาะสมุย',
                'postal_code' => 84310,
                'note' => 'ใช้ในเขตพื้นที่ ต.มะเร็ต',
                'province_id' => 68,
                'amphure_id' => 823
            ],
            [
                'id' => 1205,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เกาะสมุย',
                'postal_code' => 84320,
                'note' => 'ใช้ในเขตพื้นที่ ต.บ่อผุด',
                'province_id' => 68,
                'amphure_id' => 823
            ],
            [
                'id' => 1206,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เกาะสมุย',
                'postal_code' => 84330,
                'note' => 'ใช้ในเขตพื้นที่ ต.แม่น้ำ',
                'province_id' => 68,
                'amphure_id' => 823
            ],
            [
                'id' => 1207,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'คีรีรัฐนิคม',
                'postal_code' => 84180,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 827
            ],
            [
                'id' => 1208,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เคียนซา',
                'postal_code' => 84210,
                'note' => 'ใช้ในเขตพื้นที่ ต.พ่วงพรหมนคร',
                'province_id' => 68,
                'amphure_id' => 833
            ],
            [
                'id' => 1209,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เคียนซา',
                'postal_code' => 84260,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 833
            ],
            [
                'id' => 1210,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ชัยบุรี',
                'postal_code' => 84350,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 837
            ],
            [
                'id' => 1211,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ไชยา',
                'postal_code' => 84110,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 825
            ],
            [
                'id' => 1212,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ดอนสัก',
                'postal_code' => 84160,
                'note' => 'ใช้ในเขตพื้นที่ ต.ชลคราม',
                'province_id' => 68,
                'amphure_id' => 822
            ],
            [
                'id' => 1213,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ดอนสัก',
                'postal_code' => 84220,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 822
            ],
            [
                'id' => 1214,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ดอนสัก',
                'postal_code' => 84340,
                'note' => 'ใช้ในเขตพื้นที่ ต.ปากแพรก',
                'province_id' => 68,
                'amphure_id' => 822
            ],
            [
                'id' => 1215,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ท่าฉาง',
                'postal_code' => 84150,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 830
            ],
            [
                'id' => 1216,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'ท่าชนะ',
                'postal_code' => 84170,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 826
            ],
            [
                'id' => 1217,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'บ้านตาขุน',
                'postal_code' => 84230,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 828
            ],
            [
                'id' => 1218,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'บ้านนาเดิม',
                'postal_code' => 84240,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 832
            ],
            [
                'id' => 1219,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'บ้านนาสาร',
                'postal_code' => 84120,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 831
            ],
            [
                'id' => 1220,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'บ้านนาสาร',
                'postal_code' => 84240,
                'note' => 'ใช้ในเขตพื้นที่ ต.ควนสุวรรณ ม.3, ม.5, ม.7',
                'province_id' => 68,
                'amphure_id' => 831
            ],
            [
                'id' => 1221,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'บ้านนาสาร',
                'postal_code' => 84270,
                'note' => 'ใช้ในเขตพื้นที่ ต.ควนศรี, ต.พรุพี',
                'province_id' => 68,
                'amphure_id' => 831
            ],
            [
                'id' => 1222,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'พนม',
                'postal_code' => 84250,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 829
            ],
            [
                'id' => 1223,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'พระแสง',
                'postal_code' => 84210,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 835
            ],
            [
                'id' => 1224,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'พุนพิน',
                'postal_code' => 84130,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 836
            ],
            [
                'id' => 1225,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เมืองสุราษฎร์ธานี',
                'postal_code' => 84000,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 820
            ],
            [
                'id' => 1226,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เมืองสุราษฎร์ธานี',
                'postal_code' => 84100,
                'note' => 'ใช้ในเขตพื้นที่ ต.ขุนทะเล',
                'province_id' => 68,
                'amphure_id' => 820
            ],
            [
                'id' => 1227,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'วิภาวดี',
                'postal_code' => 84180,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 838
            ],
            [
                'id' => 1228,
                'place' => 'southern',
                'province' => 'สุราษฎร์ธานี',
                'amphoe' => 'เวียงสระ',
                'postal_code' => 84190,
                'note' => '',
                'province_id' => 68,
                'amphure_id' => 834
            ]
        ]);
    }
}