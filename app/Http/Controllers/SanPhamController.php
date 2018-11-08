<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use DB;

class SanPhamController extends Controller
{
    public function sanpham_all()
    {
        $ds_sp=SanPham::all();
        //$ds_sp=DB::table('sanpham')->get();
        return view('sanpham.danhsachsanpham')->with('sp_all', $ds_sp);
        // $ds_loai = Loai::all();
        //     return view('loai.danhsachloai')->with('danhsachloai', $ds_loai);
    }
}
