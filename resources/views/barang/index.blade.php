@extends('layouts.app')

@section('title', 'Data Barang | INVENTARIS')

@section('content')
    <div class="container">
        <h1 class="page-title">Data Barang</h1>

        @if (session('success'))
            <div class="alert alert-success" data-auto-hide>{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="section-header">
                <div><strong>Total barang:</strong> {{ $barang->count() }}</div>
                <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>Rp {{ number_format((float) $item->harga, 2, ',', '.') }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('barang.edit', $item) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('barang.destroy', $item) }}" method="POST" class="inline" data-confirm-delete="Yakin ingin menghapus data ini?">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada data barang.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
