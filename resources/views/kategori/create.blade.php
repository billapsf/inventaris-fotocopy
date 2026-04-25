@extends('layouts.app')

@section('title', 'Tambah Kategori | INVENTARIS')

@section('content')
    <div class="container">
        <h1 class="page-title">Tambah Kategori</h1>
        <p class="page-subtitle">Tambahkan kategori baru untuk digunakan pada data barang.</p>

        <div class="card">
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf

                @include('kategori._form')

                <div class="actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
