<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiaoVienRequest;
use App\Models\giao_vien;
use App\Models\nguoi_dung;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GiaoVienController extends Controller
{
    public function getDS_GiaoVien(){
        $data = giao_vien::all();
        return view('danhSach',['data'=> $data]);
    }

    public function view_them(){
        return view('themgiaovien');
    }
    public function them(Request $request){

        $nd = new nguoi_dung();
        $nd->ten_dang_nhap = Str::random(8);
        $nd->mat_khau = Str::random(8);
        $nd->vai_tro = "GIAO_VIEN";
        $nd -> nguoi_tao = 'tuan anh';
        $nd -> nguoi_cap_nhat = 'tuan anh';
        $nd -> trang_thai = 1;
        $nd->save();


        $validatedData = $request->validate(
            [
                'ho_ten' => 'required|max:10',
                'ngay_sinh' => 'required|date',
                'sdt' => 'required|digits:10',
            ],
            [
                'ho_ten.required' => 'Họ tên là bắt buộc.',
                'ho_ten.max' => 'Họ tên không được vượt quá :max ký tự.',
                'ngay_sinh.required' => 'Ngay sinh là bắt buộc.',
                'sdt.digits' => 'So dien thoai du :digits so.',
            ]
        );

        $gv = new giao_vien($validatedData);
        $gv->ho_ten= $_POST['ho_ten'];
        $gv -> ngay_sinh = $_POST['ngay_sinh'];
        $gv -> gioi_tinh = $_POST['gioi_tinh'];
        $gv -> sdt = $_POST['sdt'];
        $gv -> mon_hoc = $_POST['mon_hoc'];
        $gv -> nguoi_tao = 'tuan anh';
        $gv -> nguoi_cap_nhat = 'tuan anh';
        $gv -> trang_thai = 1;
        $gv -> user_id = $nd->id;
        $gv -> save();


        

        return redirect('/ds/giaovien');
    }
    public function xoa($id){
        $gv = giao_vien::findOrFail($id);

        $gv->delete();
        return redirect('/ds/giaovien')->with('success','Da xoa thanh cong!');
    }
    public function view_update($id){
        $gv = giao_vien::findOrFail($id);
        return view('updategiaovien', ['gv' =>$gv]);
    }
    public function update($id){
        $gv = giao_vien::findOrFail($id);
        $gv->ho_ten= $_POST['ho_ten'];
        $gv -> ngay_sinh = $_POST['ngay_sinh'];
        $gv -> gioi_tinh = $_POST['gioi_tinh'];
        $gv -> sdt = $_POST['sdt'];
        $gv -> mon_hoc = $_POST['mon_hoc'];
        $gv -> nguoi_cap_nhat = 'tuan anh';
        $gv -> trang_thai = 1;
        $gv -> user_id = 1;
        $gv -> save();
        return redirect('/ds/giaovien');
    }
}
