<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\PresensiController;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $panda = new PresensiController();
        $mahasiswa = '
        {mahasiswa(mhsNiu:"'.Auth::user()->username.'") {
            mhsNiu
            mhsNama
          mhsProdiKode
            krs(semId:20191) {
                krsId
                krsMhsNiu
              kelas {
                klsId
                matakuliah {
                  mkkurKode
                  mkkurNamaResmi
                }
                presensi_kelas {
                  presensi_dosen {
                    presklsdsnNip
                    presklsdsnNama
                  }
                }
              }
              }
            
          }}
        ';
        $mahasiswas = $panda->panda($mahasiswa);
        return $mahasiswas;
        return view('home');
    }
}
