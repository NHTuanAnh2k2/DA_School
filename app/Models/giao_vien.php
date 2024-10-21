<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class giao_vien extends Model
{
    // Định nghĩa tên bảng (nếu khác với tên model)
    protected $table = 'giao_vien';

    // Định nghĩa các cột có thể được gán
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'ho_ten',
        'ngay_sinh',
        'gioi_tinh',
        'sdt',
        'mon_hoc',
        'nguoi_tao',
        'nguoi_cap_nhat',
        'ngay_tao',
        'ngay_cap_nhat',
        'trang_thai'
    ];

    public function nguoiDung()
{
    return $this->belongsTo(nguoi_dung::class, 'user_id');
}


}
