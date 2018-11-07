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
}
