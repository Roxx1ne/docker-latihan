@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
    <h1>Form Pembayaran</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="/pembayaran" method="POST">
        @csrf
        <div class="form-group">
            <label for="nominal">Nominal Pembayaran:</label>
            <input type="text" class="form-control" id="nominal" name="nominal" required>
        </div>
        <button type="submit" class="btn btn-primary">Bayar</button>
    </form>
@endsection
