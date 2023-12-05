<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


    class KeranjangController extends Controller
{
    public function index3()
	{
    	// mengambil data dari table keranjangbelanja di php my admin
		//$keranjangbelanja = DB::table('keranjangbelanja')->get();
		$keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data keranjangbelanja ke view index
		return view('index3',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah2()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->kodepembelian,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlahpembelian,
			'Harga' => $request->hargaperitem,
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data pegawai
	public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
