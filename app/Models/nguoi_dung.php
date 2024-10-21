<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nguoi_dung extends Model
{
    protected $table = 'nguoi_dung';

    // Định nghĩa các cột có thể được gán
    public $timestamps = false;

    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'vai_tro',
        'nguoi_tao',
        'nguoi_cap_nhat',
        'ngay_tao',
        'ngay_cap_nhat',
        'trang_thai'
    ];
    public function giaoViens()
    {
        return $this->hasOne(giao_vien::class, 'user_id');
    }
}
