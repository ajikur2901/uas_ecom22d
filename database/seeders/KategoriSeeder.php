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
            'pakaian',
            'perlengkapan',
            'aksesoris',
            'perahu'
        ];
        foreach ($listKategori as $value) {
            $kategori = new Kategori();
            $kategori->nama = $value;
            $kategori->save();
        }
    }
}
