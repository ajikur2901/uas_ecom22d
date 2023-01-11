<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listKategori = [
            [
                'nama' => 'pakaian',
                'foto' => 'slide4.jpeg'
            ],
            [
                'nama' => 'perlengkapan',
                'foto' => 'slide1.jpeg'
            ],
            [
                'nama' => 'aksesoris',
                'foto' => 'slide5.jpeg'
            ],
            [
                'nama' => 'perahu',
                'foto' => 'slide2.jpeg'
            ],
        ];
        foreach ($listKategori as $value) {
            $kategori = new Kategori();
            $kategori->nama = $value['nama'];
            $kategori->foto = $value['foto'];
            $kategori->save();
        }
    }
}
