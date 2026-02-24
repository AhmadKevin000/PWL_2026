<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'MN',  'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'SNK', 'kategori_nama' => 'Snack'],
            ['kategori_kode' => 'ATK', 'kategori_nama' => 'Alat Tulis'],
            ['kategori_kode' => 'LLN', 'kategori_nama' => 'Lainnya'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
