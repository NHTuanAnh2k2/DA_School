<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chen_Nguoi_dung extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nguoi_dung')->insert([
            ['ten_dang_nhap'=>'tuananh123','mat_khau'=>'tuananh123','vai_tro'=>'GIAO_VIEN','nguoi_tao'=>'tuan anh', 'nguoi_cap_nhat' =>'tuan anh','trang_thai'=>0],
            ['ten_dang_nhap'=>'doan123','mat_khau'=>'doan123','vai_tro'=>'GIAO_VIEN','nguoi_tao'=>'tuan anh', 'nguoi_cap_nhat' =>'tuan anh','trang_thai'=>0]
        ]);
    }
}
