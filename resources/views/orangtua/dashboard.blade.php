@extends('layouts.layout_orang_tua')

@section('userNama')
@if( Auth::user()->nama_mahasiswa)
{{  Auth::user()->nama_mahasiswa }}
@endif
@endsection

@section('pageName','Dashboard Orang Tua')

@section('pageDesc','Dashboard Orang Tua Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_orang_tua')
@endsection

@push('styles')

@section('content')
@endpush
@endsection
@push('scripts')
@endpush