@extends('layouts.layout_admin')

@section('userNama')
@if( Auth::guard('admin')->user()->name)
{{  Auth::guard('admin')->user()->name }}
@endif
@endsection

@section('userStatus', Auth::guard('admin')->user()->role)

@section('pageName','Managemen Akun Orang Tua')

@section('pageDesc','Pengaturan Akun Orang Tua Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_admin')
@endsection

@push('styles')
@endpush
@section('content')
<form action="{{ route('admin.updateuser') }}" method="POST">
    {{csrf_field()}}
   
    <div class="form-group">
        <input class="form-control" type="hidden" name="id" id="id" value="{{ $user->id}}">
        <label for="name">Nama Orang Tua</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="nama_orang_tua" id="nama_orang_tua" value="{{ $user->nama_orang_tua }}"  placeholder="Masukkan nama orang tua"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Nama Mahasiwa</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="nama_mahasiswa" id="nama_mahasiswa" value="{{ $user->nama_mahasiswa }}" placeholder="masukkan Nama Mahasiwa"> @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">NPM</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="username" id="username" value="{{ $user->username }}"  placeholder="Masukkan NPM"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Password</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="password" id="password" value="{{ $user->password }}"  placeholder="masukkan Password"> @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Nomor HP</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="no_hp" id="no_hp" value="{{ $user->no_hp }}" placeholder="Masukkan nama nomor hp"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Nama Program Studi</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="nm_prodi" id="nm_prodi" value="{{ $user->nm_prodi }}" placeholder="Masukkan nama program studi"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Nama Fakultas</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="nm_fakultas" id="nm_fakultas" value="{{ $user->nm_fakultas}}" placeholder="masukkan Nama Fakultas"> @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  
    <div class="form-group float-right">
        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
        <button class="btn btn-lg btn-primary" type="submit" value="Simpan Data">Submit</button>
    </div>
</form>
@endsection
@push('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush