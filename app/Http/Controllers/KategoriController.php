<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class KategoriController extends Controller
{
    public function index(): View
    {
        return view('kategori.index', [
            'kategori' => Kategori::withCount('barang')->orderBy('nama_kategori')->get(),
        ]);
    }

    public function create(): View
    {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateKategori($request);

        Kategori::create($validated);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil ditambahkan.');
    }

    public function edit(Kategori $kategori): View
    {
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori): RedirectResponse
    {
        $validated = $this->validateKategori($request, $kategori);

        $kategori->update($validated);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil diperbarui.');
    }

    public function destroy(Kategori $kategori): RedirectResponse
    {
        if ($kategori->barang()->exists()) {
            return redirect()->route('kategori.index')->with('error', 'Kategori tidak bisa dihapus karena masih dipakai data barang.');
        }

        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil dihapus.');
    }

    private function validateKategori(Request $request, ?Kategori $kategori = null): array
    {
        return $request->validate([
            'nama_kategori' => [
                'required',
                'max:100',
                Rule::unique('kategori', 'nama_kategori')->ignore($kategori?->id),
            ],
        ], [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.unique' => 'Nama kategori sudah digunakan.',
        ]);
    }
}
