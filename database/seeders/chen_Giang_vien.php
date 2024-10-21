<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chen_Giang_vien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giao_vien')->insert([
            [
                'user_id' => 1,
                'ho_ten' => 'nguyen hoang tuan anh',
                'ngay_sinh' => '2002-11-25',
                'gioi_tinh' => 1,
                'sdt' => '0865858245',
                'mon_hoc' => 'Toan',
                'nguoi_tao' => 'tuan anh',
                'nguoi_cap_nhat' => 'tuan anh',
                'trang_thai' => 0,
            ],
            [
                'user_id' => 2,
                'ho_ten' => 'nguyen van doan',
                'ngay_sinh' => '2005-10-05',
                'gioi_tinh' => 1,
                'sdt' => '0865858567',
                'mon_hoc' => 'Toan',
                'nguoi_tao' => 'tuan anh',
                'nguoi_cap_nhat' => 'tuan anh',
                'trang_thai' => 0,
            ]
        ]);
    }
}
