@extends('layouts.layout_admin')

@section('userNama')
@if( Auth::guard('admin')->user()->name)
{{  Auth::guard('admin')->user()->name }}
@endif
@endsection

@section('userStatus', Auth::guard('admin')->user()->role)

@section('pageName','Managemen Periode')

@section('pageDesc','Pengaturan Periode Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_admin')
@endsection

@push('styles')
@endpush
@section('content')
<form action="{{ route('admin.updateperiode') }}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <input class="form-control" type="hidden" name="id" id="id" value="{{ $periode->id}}">
        <label for="name">Kode Semester</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="kode_semester" id="kode_semester" value="{{ $periode->kode_semester }}" placeholder="Masukkan Nama Buku"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Nama Semester</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="nama_semester" id="nama_semester" value="{{ $periode->nama_semester }}" placeholder="masukkan tipe buku"> @error('type')
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