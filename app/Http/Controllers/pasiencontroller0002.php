<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use DB;
use Illuminate\Http\Request;

class pasiencontroller0002 extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = DB::table('kamar')
        ->join('pasien','pasien.id','=','kamar.id_pasien')
        ->join('dokter', 'dokter.id', '=', 'kamar.id_dokter')
        ->get();
        return view('dokter0002', ['pasien'=>$pasien]);
    }
}