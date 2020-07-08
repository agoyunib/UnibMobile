@extends('layouts.layout_admin')

@section('userNama')
@if( Auth::guard('admin')->user()->name)
{{  Auth::guard('admin')->user()->name }}
@endif
@endsection

@section('userStatus', Auth::guard('admin')->user()->role)

@section('pageName','Data Akun Orang Tua')

@section('pageDesc','Managemen Akun Orang Tua Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_admin')
@endsection

@push('styles')
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.tambahuser') }}" class="btn btn-primary btn-sm mb-3" style="background:green">Tambah</a>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Orang Tua</th>    
                    <th>Nama Mahasiswa</th>
                    <th>NPM</th>
                    <th>Nomor HP</th>
                    <th>Nama Prodi</th>
                    <th>Nama Fakultas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->nama_orang_tua }}</td>
                    <td>{{ $user->nama_mahasiswa }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->no_hp }}</td>
                    <td>{{ $user->nm_prodi }}</td>
                    <td>{{ $user->nm_fakultas }}</td>
                    <td>{{ $user->status }}</td>

                    <td>
                        <a href="{{ route('admin.ubahuser',[$user->id]) }}" class="btn btn-primary " style="background:blue">Ubah</a>
                    </td>
                    <td>  
                    <form action="{{ route('admin.hapususer',[$user->id]) }}" method="POST">
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