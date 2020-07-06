@extends('layouts.layout_admin')

@section('userNama')
@if( Auth::guard('admin')->user()->name)
{{  Auth::guard('admin')->user()->name }}
@endif
@endsection

@section('userStatus', Auth::guard('admin')->user()->role)

@section('pageName','Dashboard Administrator')

@section('pageDesc','Dashboard Administrator Aplikasi Unib Mobile for Parents')

@section('sidebar')
@include('layouts.sidebar_admin')
@endsection

@push('styles')

@section('content')
@endpush
@endsection
@push('scripts')
@endpush