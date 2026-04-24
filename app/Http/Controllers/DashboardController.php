<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'totalBarang' => Barang::count(),
            'totalStok' => Barang::sum('stok'),
        ]);
    }
}
