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
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.tambahperiode') }}" class="btn btn-primary btn-sm mb-3" style="background:green">Tambah</a>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Semester</th>    
                    <th>Nama Semester</th>
                    <th>Aksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($periodes as $periode)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $periode->kode_semester }}</td>
                    <td>{{ $periode->nama_semester }}</td>
                    <td>
                        <a href="{{ route('admin.ubahperiode',[$periode->id]) }}" class="btn btn-primary " style="background:blue">Ubah</a>
                    </td>
                    <td>  
                    <form action="{{ route('admin.hapusperiode',[$periode->id]) }}" method="POST">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush