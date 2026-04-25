<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    public function index(): View
    {
        return view('barang.index', [
            'barang' => Barang::with('kategori')->orderBy('kode_barang')->get(),
        ]);
    }

    public function create(): View
    {
        return view('barang.create', [
            'kategoriOptions' => Kategori::orderBy('nama_kategori')->get(),
            'kodeBarang' => $this->generateKodeBarang(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateBarang($request);
        $validated['kode_barang'] = $this->generateKodeBarang();

        Barang::create($validated);

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil ditambahkan.');
    }

    public function edit(Barang $barang): View
    {
        return view('barang.edit', [
            'barang' => $barang,
            'kategoriOptions' => Kategori::orderBy('nama_kategori')->get(),
            'kodeBarang' => $barang->kode_barang,
        ]);
    }

    public function update(Request $request, Barang $barang): RedirectResponse
    {
        $validated = $this->validateBarang($request);

        $barang->update($validated);

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil diperbarui.');
    }

    public function destroy(Barang $barang): RedirectResponse
    {
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil dihapus.');
    }

    private function validateBarang(Request $request): array
    {
        return $request->validate([
            'nama_barang' => ['required', 'max:100'],
            'kategori_id' => ['required', 'exists:kategori,id'],
            'stok' => ['required', 'integer', 'min:0'],
            'harga' => ['required', 'numeric', 'min:0'],
        ], [
            'nama_barang.required' => 'Nama barang wajib diisi.',
            'kategori_id.required' => 'Kategori wajib dipilih.',
            'kategori_id.exists' => 'Kategori yang dipilih tidak valid.',
            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh minus.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'harga.min' => 'Harga tidak boleh minus.',
        ]);
    }

    private function generateKodeBarang(): string
    {
        $lastBarang = Barang::orderByDesc('id')->first();
        $nextNumber = $lastBarang ? ((int) substr($lastBarang->kode_barang, 3)) + 1 : 1;

        return 'BRG' . str_pad((string) $nextNumber, 3, '0', STR_PAD_LEFT);
    }
}
