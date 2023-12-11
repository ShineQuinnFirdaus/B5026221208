<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller


{
    public function index5()
    {
        $kategori = DB::table('kategori')->paginate(10);
        return view('index5', ['kategori' => $kategori]);
    }



    public function tambah5(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('tambah5', ['selectedKategoriId' => $selectedKategoriId,]);
}
}
