<?php

use App\Http\Controllers\GiaoVienController;
use Illuminate\Support\Facades\Route;

Route::get('/ds/giaovien', [
    GiaoVienController::class,
    'getDS_GiaoVien'
]);
Route::get('/them-giao-vien', [
    GiaoVienController::class,
    'view_them'
]);
Route::post('/them-giao-vien', [
    GiaoVienController::class,
    'them'
]); 
Route::get('/giao-vien/xoa/{id}', [
    GiaoVienController::class,
    'xoa'
]); 
Route::get('/update-giao-vien/{id}', [
    GiaoVienController::class,
    'view_update'
]);
Route::post('/update-giao-vien/{id}', [
    GiaoVienController::class,
    'update'
]);
//tuan anh