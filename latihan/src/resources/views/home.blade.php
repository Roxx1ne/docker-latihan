@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Selamat datang di aplikasi pembayaran</h1>
    <p>Silakan klik tombol di bawah ini untuk menuju halaman pembayaran.</p>
    <a href="/pembayaran" class="btn btn-primary">Bayar Sekarang</a>
@endsection
