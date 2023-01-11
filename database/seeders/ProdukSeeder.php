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
                'nama' => 'pelampung',
                'kategori' => 'pakaian',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
                'foto' => 'slide4.jpeg',
            ],
            [
                'nama' => 'dayung',
                'kategori' => 'perlengkapan',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
                'foto' => 'slide1.jpeg',
            ],
            [
                'nama' => 'helm',
                'kategori' => 'perlengkapan',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
                'foto' => 'slide3.jpeg',
            ],
            [
                'nama' => 'sepatu',
                'kategori' => 'aksesoris',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
                'foto' => 'slide5.jpeg',
            ],
            [
                'nama' => 'perahu karet',
                'kategori' => 'perahu',
                'jumlah' => rand(1, 100),
                'harga' => rand(1, 150) * 1000,
                'foto' => 'slide2.jpeg',
            ]
        ];
        foreach ($listProduk as $value) {
            $produk = new Produk();
            $produk->nama = $value['nama'];
            $produk->kategori = $value['kategori'];
            $produk->jumlah = $value['jumlah'];
            $produk->harga = $value['harga'];
            $produk->foto = $value['foto'];
            $produk->save();
        }
    }
}
