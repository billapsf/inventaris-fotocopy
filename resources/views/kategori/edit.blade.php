@extends('layouts.app')

@section('title', 'Edit Kategori | INVENTARIS')

@section('content')
    <div class="container">
        <h1 class="page-title">Edit Kategori</h1>
        <p class="page-subtitle">Perbarui nama kategori sesuai kebutuhan master data barang.</p>

        <div class="card">
            <form action="{{ route('kategori.update', $kategori) }}" method="POST">
                @csrf
                @method('PUT')

                @include('kategori._form')

                <div class="actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
