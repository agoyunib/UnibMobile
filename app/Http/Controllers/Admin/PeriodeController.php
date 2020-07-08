<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Periode;
use DB;
class PeriodeController extends Controller
{
    public function index(){
        $periodes=Periode::get();
        return view('admin/periode',compact('periodes'));
    }
    public function tambah()
{
	return view('admin.tambahperiode');
 
}
public function store(Request $request)
{
	// insert data ke table
	DB::table('periodes')->insert([
		'kode_semester' => $request->kode_semester,
        'nama_semester' => $request->nama_semester,
        'status'=> '1',
	]);
	// alihkan halaman ke halaman pegawai
    return redirect()->route('admin.periode');
 
}
    public function hapus($id){
        $periode = Periode::find($id);
        $periode->delete();
        return redirect()->route('admin.periode');
    }
    public function ubah($id){
        $periode = Periode::find($id);
        return view('admin.ubahperiode',compact('periode'));
    }

    public function update(Request $request) 
{
    // untuk validasi form
    $this -> validate($request, [
        'kode_semester' => 'required',
        'nama_semester' => 'required',
        
    ]);
    // update data 
    DB::table('periodes') -> where('id', $request -> id) -> update([
        'kode_semester' => $request -> kode_semester,
        'nama_semester' => $request -> nama_semester,
       
    ]);
    // alihkan halaman edit ke halaman
    return redirect()->route('admin.periode') -> with('status', 'Data Periode Berhasil DiUbah');
}
}
