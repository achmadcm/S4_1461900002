<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use DB;
use App\Imports\PasienImport;
use Maatwebsite\Excel\Facades\Excel;
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


    public function import(Request $request)
    {
        Excel::import(new PasienImport, $request->file);
        return redirect('dokter0002');
    }

    public function formimport()
    {
        return view('pasienimport0002');
    }
}