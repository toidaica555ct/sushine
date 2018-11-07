<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;

class LoaiController extends Controller
{
    public function index()
    {
            $ds_loai = Loai::all();
            return view('loai.danhsachloai')->with('danhsachloai', $ds_loai);        
    }
}
