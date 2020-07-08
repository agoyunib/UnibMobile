@php
    use App\Periode;
@endphp
@extends('layouts.layout_orang_tua')

@section('userNama')
@if( Auth::user()->nama_mahasiswa)
{{  Auth::user()->nama_mahasiswa }}
@endif
@endsection

@section('pageName','Data Mata Kuliah yang diambil oleh mahasiswa ')

@section('pageDesc','Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_orang_tua')
@endsection

@push('styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('orangtua.matakuliah.get_periode') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Pilih Semester</label>
                    <select name="periode" class="form-control @error('periode') is-invalid @enderror"  id="">
                        <option disabled selected>-- pilih periode semester --</option>
                        @foreach ($periodes as $periode)
                            <option value="{{ $periode->kode_semester }}">{{ $periode->nama_semester }}</option>
                        @endforeach
                    </select>
                    @error('periode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm mb-1"><i class="fa fa-search"></i>&nbsp; Pilih Semester</button>
                <hr style="width: 50%">
            </form>
        </div>
    </div>
    @if (isset($_POST['periode']))
        @php
            $periode = Periode::where('kode_semester',$_POST['periode'])->first();
        @endphp
        <h4 class="text-center mb-4">Anda Memilih Periode : {{ $periode->nama_semester }}</h4>
        <h5>NPM Mahasiswa : {{ $mahasiswa2['mahasiswa'][0]['mhsNiu'] }}</h5>
        <h5>Nama Mahasiswa : {{ $mahasiswa2['mahasiswa'][0]['mhsNama'] }}</h5>
        <div class="row mt-4">
            @foreach ($mahasiswa2['mahasiswa'][0]['krs'][0]['kelas'] as $kelas)
                    <div class="col-md-3">
                        <div style="background: #808080;" class="text-white text-center p-2">
                            <h6>{{ $kelas['matakuliah']['mkkurKode'] }}</h6>
                            <h6>{{ $kelas['matakuliah']['mkkurNamaResmi'] }}</h6>
                            <h6>Jumlah Kehadiran : {{ count($kelas['presensi_kelas']) }}</h6>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td>Jumlah SKS Kurikulum</td>    
                                <td> : </td>
                                <td>
                                    {{ $kelas['matakuliah']['mkkurJumlahSksKurikulum'] }}
                                </td>    
                            </tr>

                            <tr>
                                <td>Jumlah SKS Teori</td>    
                                <td> : </td>
                                <td>
                                    {{ $kelas['matakuliah']['mkkurJumlahSksTeori'] }}
                                </td>    
                            </tr>
                            <tr>
                                <td>Jumlah SKS Praktikum</td>    
                                <td> : </td>
                                <td>
                                    {{ $kelas['matakuliah']['mkkurJumlahSksPraktikum'] }}
                                </td>    
                            </tr>
                        </table>
                    </div>
            @endforeach
        </div>
        @else
    @endif
@endsection
@push('scripts')
@endpush