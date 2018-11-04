<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
use App\Loai;
Route::get('/danhsachloai', function () {
    //Eloquent Model để lấy dữ liệu
    $ds_loai=Loai::all();//Select * from Loai
    $json=json_encode($ds_loai);
    return $json;
});
use App\Chude;
Route::get('/danhsachchude', function () {
    //Eloquent Model để lấy dữ liệu
    $ds_chude=Chude::all();//Select * from Loai
    //$ds_chude=DB::table('chude')->get();
    $json=json_encode($ds_chude);
    return $json;
});

use App\SanPham;
Route::get('/danhsachsanpham', function () {
    //Eloquent Model để lấy dữ liệu
    $ds_sanpham=SanPham::all();//Select * from Loai
    //$ds_chude=DB::table('chude')->get();
    $json=json_encode($ds_sanpham);
    return $json;
});

