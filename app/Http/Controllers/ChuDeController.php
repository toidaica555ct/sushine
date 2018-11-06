<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuDe;
use DB;

class ChuDeController extends Controller
{
    public function danhsachchude()
    {
        $ds_chude=DB::table('chude')->get();
        return view('chude.danhsachchude')->with('danhsachchude', $ds_chude);
    }
    // use App\Loai;
// Route::get('/danhsachloai', function () {
//     //Eloquent Model để lấy dữ liệu
//     $ds_loai=Loai::all();//Select * from Loai
//     $json=json_encode($ds_loai);
//     return $json;
// });
// use App\Chude;
// Route::get('/danhsachchude', function () {
//     //Eloquent Model để lấy dữ liệu
//     $ds_chude=Chude::all();//Select * from Loai
//     //$ds_chude=DB::table('chude')->get();
//     $json=json_encode($ds_chude);
//     return $json;
// });

// use App\SanPham;
// Route::get('/danhsachsanpham', function () {
//     //Eloquent Model để lấy dữ liệu
//     $ds_sanpham=SanPham::all();//Select * from Loai
//     //$ds_chude=DB::table('chude')->get();
//     $json=json_encode($ds_sanpham);
//     return $json;
// });
}
