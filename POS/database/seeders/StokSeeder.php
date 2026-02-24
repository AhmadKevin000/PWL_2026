<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id'=>1,'stok_jumlah'=>50],
            ['barang_id'=>2,'stok_jumlah'=>40],
            ['barang_id'=>3,'stok_jumlah'=>100],
            ['barang_id'=>4,'stok_jumlah'=>80],
            ['barang_id'=>5,'stok_jumlah'=>60],
            ['barang_id'=>6,'stok_jumlah'=>70],
            ['barang_id'=>7,'stok_jumlah'=>200],
            ['barang_id'=>8,'stok_jumlah'=>150],
            ['barang_id'=>9,'stok_jumlah'=>300],
            ['barang_id'=>10,'stok_jumlah'=>120],
        ];

        DB::table('t_stok')->insert($data);
    }
}
