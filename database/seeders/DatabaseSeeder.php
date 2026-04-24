<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('admin123'),
        ]);

        $dataBarang = [
            [
                'kode_barang' => 'BRG001',
                'nama_barang' => 'Kertas A4',
                'kategori' => 'ATK',
                'stok' => 100,
                'harga' => 50000,
            ],
            [
                'kode_barang' => 'BRG002',
                'nama_barang' => 'Kertas F4',
                'kategori' => 'ATK',
                'stok' => 80,
                'harga' => 55000,
            ],
            [
                'kode_barang' => 'BRG003',
                'nama_barang' => 'Tinta Printer',
                'kategori' => 'Bahan Habis Pakai',
                'stok' => 20,
                'harga' => 150000,
            ],
            [
                'kode_barang' => 'BRG004',
                'nama_barang' => 'Toner Fotocopy',
                'kategori' => 'Bahan Habis Pakai',
                'stok' => 10,
                'harga' => 300000,
            ],
            [
                'kode_barang' => 'BRG005',
                'nama_barang' => 'Map Plastik',
                'kategori' => 'ATK',
                'stok' => 50,
                'harga' => 2000,
            ],
        ];

        foreach ($dataBarang as $barang) {
            Barang::updateOrCreate(
                ['kode_barang' => $barang['kode_barang']],
                $barang
            );
        }
    }
}
