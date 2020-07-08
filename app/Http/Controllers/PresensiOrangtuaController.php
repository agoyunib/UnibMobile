<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\PresensiController;
use Auth;
use App\Periode;

use Illuminate\Http\Request;

class PresensiOrangtuaController extends Controller
{
    public function index(){
    
        return view('orangtua.presensi');
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
        return view('orangtua.presensi', compact('mahasiswa2','periodes'));
      }

}
