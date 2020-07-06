@extends('layouts.layout_admin')

@section('userNama')
@if(Session::get('name'))
{{ Session::get('name') }}
@endif
@endsection

@section('userStatus',Session::get('role'))

@section('pageName','Data Admin Fakultas')

@section('pageDesc','Data Admin Fakultas Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_admin')
@endsection

@push('styles')

@endpush

@section('content')
@endsection
@push('scripts')
@endpush