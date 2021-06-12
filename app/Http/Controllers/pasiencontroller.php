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
 
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_pasien',$nama_file);
 
		// import data
		Excel::import(new pasienimport, public_path('/file_pasien/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data pasien Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/dokter0002');
	}
}