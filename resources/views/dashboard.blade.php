@extends('layouts.app')

@section('title', 'Dashboard | INVENTARIS')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" data-auto-hide>{{ session('success') }}</div>
        @endif

        <div class="card hero-box">
            <h2>Selamat datang, {{ auth()->user()->name }}</h2>
            <p>
                Anda sedang masuk ke Sistem Inventaris Fotocopy. Gunakan dashboard ini untuk melihat ringkasan stok
                dan mengelola data barang dengan cepat.
            </p>
            <a href="{{ route('barang.index') }}" class="btn btn-success">Buka Data Barang</a>
        </div>

        <div class="grid stats">
            <div class="card">
                <div class="stat-value">{{ $totalBarang }}</div>
                <div class="stat-label">Total Data Barang</div>
            </div>
            <div class="card">
                <div class="stat-value">{{ $totalKategori }}</div>
                <div class="stat-label">Total Kategori</div>
            </div>
            <div class="card">
                <div class="stat-value">{{ $totalStok }}</div>
                <div class="stat-label">Jumlah Stok Keseluruhan</div>
            </div>
        </div>
    </div>
@endsection
