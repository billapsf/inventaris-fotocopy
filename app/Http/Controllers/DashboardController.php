<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'totalBarang' => Barang::count(),
            'totalKategori' => Kategori::count(),
            'totalStok' => Barang::sum('stok'),
        ]);
    }
}
