@extends('layouts.app')

@section('title', 'Edit Barang | INVENTARIS')

@section('content')
    <div class="container">
        <h1 class="page-title">Edit Barang</h1>
        <p class="page-subtitle">Perbarui data barang sesuai kondisi inventaris terbaru.</p>

        <div class="card">
            <form action="{{ route('barang.update', $barang) }}" method="POST">
                @csrf
                @method('PUT')

                @include('barang._form')

                <div class="actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
