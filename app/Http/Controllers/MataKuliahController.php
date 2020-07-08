<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\PresensiController;
use Auth;
use App\Periode;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(){
        $periodes = Periode::where('status',1)->get();
        return view('orangtua.matakuliah.index', compact('periodes'));
    }

    public function getSemester(Request $request){
      $this->validate($request,[
        'periode' =>  'required'
      ]);

      $panda = new PresensiController();
      $mahasiswa = '
      {mahasiswa(mhsNiu:"'.Auth::user()->username.'") {
          mhsNiu
          mhsNama
          mhsProdiKode
          krs(semId:'.$request->periode.') {
            kelas {
              matakuliah {
                mkkurId
                mkkurKode
                mkkurNamaResmi
                mkkurProdiKode
                mkkurJumlahSksKurikulum
                mkkurJumlahSksTeori
                mkkurJumlahSksPraktikum
                mkkurJumlahSksPraktikumLapangan
              }
              presensi_kelas {
                presklsId
        
              }
            }
          }
        }}
      ';
      $mahasiswa2 = $panda->panda($mahasiswa);
      $periodes = Periode::where('status',1)->get();
      // return $mahasiswa2;
      return view('orangtua.matakuliah.index', compact('mahasiswa2','periodes'));
    }
}
