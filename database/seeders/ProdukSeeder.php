<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listProduk = [
            [
                'nama' => 'pakaian renang',
                'kategori' => 'pakaian',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
            ],
            [
                'nama' => 'dayung',
                'kategori' => 'perlengkapan',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
            ],
            [
                'nama' => 'gelang',
                'kategori' => 'aksesoris',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
            ],
            [
                'nama' => 'perahu karet',
                'kategori' => 'perahu',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
            ]
        ];
        foreach ($listProduk as $value) {
            $produk = new Produk();
            $produk->nama = $value['nama'];
            $produk->kategori = $value['kategori'];
            $produk->jumlah = $value['jumlah'];
            $produk->harga = $value['harga'];
            $produk->save();
        }
    }
}
