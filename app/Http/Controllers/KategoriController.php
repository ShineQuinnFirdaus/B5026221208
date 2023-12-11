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

    public function tambah5()
    {
        return view('tambah5');
    }

    public function store(Request $request)
    {
        DB::table('kategori')->insert([
            'ID' => $request->ID,
            'Nama' => $request->Nama
        ]);
        return redirect('/kategori');
    }



    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kategori = DB::table('kategori')
            ->where('Nama', 'like', "%" . $cari . "%")
            ->orderBy('Nama', 'asc')
            ->paginate(10); // Sesuaikan jumlah data per halaman

        return view('index5', ['kategori' => $kategori, 'cari' => $cari]);
    }

    public function view($ID)
    {
        $kategori = DB::table('kategori')
            ->where('ID', $ID)
            ->get();

        return view('index5', ['kategori' => $kategori]);
        return redirect('/kategori');
    }
}
