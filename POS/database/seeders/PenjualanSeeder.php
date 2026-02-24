<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>20000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>28000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>15000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>32000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>18000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>22000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>27000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>35000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>12000],
            ['user_id'=>3,'tanggal'=>now(),'total_harga'=>40000],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
