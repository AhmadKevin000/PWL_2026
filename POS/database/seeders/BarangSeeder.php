<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id'=>1,'barang_kode'=>'BRG001','barang_nama'=>'Nasi Goreng','harga_beli'=>12000,'harga_jual'=>15000],
            ['kategori_id'=>1,'barang_kode'=>'BRG002','barang_nama'=>'Mie Goreng','harga_beli'=>10000,'harga_jual'=>13000],
            ['kategori_id'=>2,'barang_kode'=>'BRG003','barang_nama'=>'Es Teh','harga_beli'=>3000,'harga_jual'=>5000],
            ['kategori_id'=>2,'barang_kode'=>'BRG004','barang_nama'=>'Kopi Hitam','harga_beli'=>4000,'harga_jual'=>7000],
            ['kategori_id'=>3,'barang_kode'=>'BRG005','barang_nama'=>'Keripik','harga_beli'=>5000,'harga_jual'=>8000],
            ['kategori_id'=>3,'barang_kode'=>'BRG006','barang_nama'=>'Biskuit','harga_beli'=>6000,'harga_jual'=>9000],
            ['kategori_id'=>4,'barang_kode'=>'BRG007','barang_nama'=>'Pulpen','harga_beli'=>2000,'harga_jual'=>3500],
            ['kategori_id'=>4,'barang_kode'=>'BRG008','barang_nama'=>'Buku Tulis','harga_beli'=>4000,'harga_jual'=>6500],
            ['kategori_id'=>5,'barang_kode'=>'BRG009','barang_nama'=>'Masker','harga_beli'=>1000,'harga_jual'=>2000],
            ['kategori_id'=>5,'barang_kode'=>'BRG010','barang_nama'=>'Air Mineral','harga_beli'=>2500,'harga_jual'=>4000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
