<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        //$data = DB::table('m_kategori')->get();

        //return 'Insert data baru berhasil';

        //$row = DB::table('m_kategori')->where('kategori_kode', 'MKN')->update(['kategori_nama' => 'Camilan']);
        //return 'Update data berhasil. Jumlah data yang diupdate: '. $row . ' baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
