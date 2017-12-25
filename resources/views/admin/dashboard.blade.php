@extends('layouts.admin.app')

@section('title', 'Dasbor Admin')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-home"></i> Dasbor</a></li>
@endsection

@section('content')
    <p>Selamat datang {{ \Illuminate\Support\Facades\Auth::user()->name }}!</p>
@endsection