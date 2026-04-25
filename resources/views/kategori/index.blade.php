@extends('layouts.app')

@section('title', 'Data Kategori | INVENTARIS')

@section('content')
    <div class="container">
        <h1 class="page-title">Data Kategori</h1>
        <p class="page-subtitle">Kategori barang untuk kebutuhan inventaris Fotocopy Prima.</p>

        @if (session('success'))
            <div class="alert alert-success" data-auto-hide>{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" data-auto-hide>{{ session('error') }}</div>
        @endif

        <div class="card">
            <div class="section-header">
                <div><strong>Total kategori:</strong> {{ $kategori->count() }}</div>
                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Jumlah Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kategori as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_kategori }}</td>
                                <td>{{ $item->barang_count }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('kategori.edit', $item) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('kategori.destroy', $item) }}" method="POST" class="inline" data-confirm-delete="Yakin ingin menghapus kategori ini?">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Belum ada data kategori.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
