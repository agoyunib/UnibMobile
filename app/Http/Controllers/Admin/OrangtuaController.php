<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
class OrangtuaController extends Controller
{
    public function index(){
     
            $users=User::get();
            return view('admin/orangtua',compact('users'));
    
    }
    public function tambah()
    {
        return view('admin.tambahuser');
     
    }
    public function store(Request $request)
    {
        // insert data ke table
        DB::table('users')->insert([
            'nama_orang_tua' => $request->nama_orang_tua,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nm_fakultas' => $request->nm_fakultas,
            'nm_prodi' => $request->nm_prodi,
            'status'=> 'true',
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect()->route('admin.orangtua');
     
    }
        public function hapus($id){
            $user = User::find($id);
            $user->delete();
            return redirect()->route('admin.orangtua');
        }
        public function ubah($id){
            $user = User::find($id);
            return view('admin.ubahuser',compact('user'));
        }
    
        public function update(Request $request) 
    {
        // untuk validasi form
        $this -> validate($request, [
               
            'nama_orang_tua' => 'required',
            'nama_mahasiswa' => 'required',
            'no_hp' => 'required',
            'username' => 'required',
            'password'=> 'required',
            'nm_fakultas' => 'required',
            'nm_prodi' => 'required',
        ]);
        // update data 
        DB::table('users') -> where('id', $request -> id) -> update([
            
            'nama_orang_tua' => $request-> nama_orang_tua,
            'nama_mahasiswa' => $request-> nama_mahasiswa,
            'no_hp' => $request-> no_hp,
            'username' => $request-> username,
            'password' => $request-> password,
            'nm_fakultas' => $request-> nm_fakultas,
            'nm_prodi' => $request-> nm_prodi,
            'status'=> 'true',
           
        ]);
        // alihkan halaman edit ke halaman
        return redirect()->route('admin.orangtua') -> with('status', 'Data user Berhasil DiUbah');
    }
}
