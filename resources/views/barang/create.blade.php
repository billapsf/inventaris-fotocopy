@extends('layouts.app')

@section('title', 'Tambah Barang | INVENTARIS')

@section('content')
    <div class="container">
        <h1 class="page-title">Tambah Barang</h1>
        <p class="page-subtitle">Masukkan data barang fotocopy baru.</p>

        <div class="card">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf

                @include('barang._form')

                <div class="actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
