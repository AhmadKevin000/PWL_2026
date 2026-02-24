<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            /* Penjualan 1 */
            ['penjualan_id'=>1,'barang_id'=>1,'jumlah'=>1,'harga'=>15000],
            ['penjualan_id'=>1,'barang_id'=>3,'jumlah'=>1,'harga'=>5000],
            ['penjualan_id'=>1,'barang_id'=>5,'jumlah'=>1,'harga'=>8000],

            /* Penjualan 2 */
            ['penjualan_id'=>2,'barang_id'=>2,'jumlah'=>1,'harga'=>13000],
            ['penjualan_id'=>2,'barang_id'=>3,'jumlah'=>2,'harga'=>5000],
            ['penjualan_id'=>2,'barang_id'=>4,'jumlah'=>1,'harga'=>7000],

            /* Penjualan 3 */
            ['penjualan_id'=>3,'barang_id'=>10,'jumlah'=>1,'harga'=>4000],
            ['penjualan_id'=>3,'barang_id'=>7,'jumlah'=>2,'harga'=>3500],
            ['penjualan_id'=>3,'barang_id'=>9,'jumlah'=>1,'harga'=>2000],

            /* Penjualan 4 */
            ['penjualan_id'=>4,'barang_id'=>1,'jumlah'=>2,'harga'=>15000],
            ['penjualan_id'=>4,'barang_id'=>6,'jumlah'=>1,'harga'=>9000],
            ['penjualan_id'=>4,'barang_id'=>8,'jumlah'=>1,'harga'=>6500],

            /* Penjualan 5 */
            ['penjualan_id'=>5,'barang_id'=>5,'jumlah'=>1,'harga'=>8000],
            ['penjualan_id'=>5,'barang_id'=>3,'jumlah'=>2,'harga'=>5000],
            ['penjualan_id'=>5,'barang_id'=>10,'jumlah'=>1,'harga'=>4000],

            /* Penjualan 6 */
            ['penjualan_id'=>6,'barang_id'=>4,'jumlah'=>1,'harga'=>7000],
            ['penjualan_id'=>6,'barang_id'=>2,'jumlah'=>1,'harga'=>13000],
            ['penjualan_id'=>6,'barang_id'=>9,'jumlah'=>2,'harga'=>2000],

            /* Penjualan 7 */
            ['penjualan_id'=>7,'barang_id'=>6,'jumlah'=>2,'harga'=>9000],
            ['penjualan_id'=>7,'barang_id'=>7,'jumlah'=>1,'harga'=>3500],
            ['penjualan_id'=>7,'barang_id'=>3,'jumlah'=>1,'harga'=>5000],

            /* Penjualan 8 */
            ['penjualan_id'=>8,'barang_id'=>1,'jumlah'=>1,'harga'=>15000],
            ['penjualan_id'=>8,'barang_id'=>2,'jumlah'=>1,'harga'=>13000],
            ['penjualan_id'=>8,'barang_id'=>5,'jumlah'=>1,'harga'=>8000],

            /* Penjualan 9 */
            ['penjualan_id'=>9,'barang_id'=>8,'jumlah'=>1,'harga'=>6500],
            ['penjualan_id'=>9,'barang_id'=>7,'jumlah'=>1,'harga'=>3500],
            ['penjualan_id'=>9,'barang_id'=>10,'jumlah'=>1,'harga'=>4000],

            /* Penjualan 10 */
            ['penjualan_id'=>10,'barang_id'=>1,'jumlah'=>2,'harga'=>15000],
            ['penjualan_id'=>10,'barang_id'=>3,'jumlah'=>2,'harga'=>5000],
            ['penjualan_id'=>10,'barang_id'=>6,'jumlah'=>1,'harga'=>9000],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
