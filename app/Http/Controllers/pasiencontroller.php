<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\pasien;
 
use App\Exports\pasienExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class pasienController extends Controller
{
	public function index()
	{
		$siswa = pasien::all();
		return view('dokter0002',['pasien'=>$pasien]);
	}
 
	public function export_excel()
	{
        Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/')->with('success', 'All good!');
	}
}