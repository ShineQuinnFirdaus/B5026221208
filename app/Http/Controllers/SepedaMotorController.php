<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaMotorController extends Controller
{
	public function index4()
	{
    	// mengambil data dari table sepedamotor
		//$sepedamotor = DB::table('sepedamotor')->get();
		$sepedamotor = DB::table('sepedamotor')->paginate(10);

    	// mengirim data sepedamotor ke view index
		return view('index4',['sepedamotor' => $sepedamotor]);

	}


	// method untuk menampilkan view form tambah
	public function tambah4()
	{
		// memanggil view tambah
		return view('tambah4');

	}

	// method untuk insert data ke table sepedamotor
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('sepedamotor')->insert([

			'kodesepedamotor' => $request->kodesepedamotor,
			'merksepedamotor' => $request->merksepedamotor,
			'stocksepedamotor' => $request->stocksepedamotor,
            'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman sepedamotor

        return redirect('/sepedamotor');

	}

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table pegawai sesuai pencarian data
        $sepedamotor= DB::table('sepedamotor')
            ->where('merksepedamotor', 'like', "%" . $cari . "%")
            ->orderBy('merksepedamotor', 'asc')
            ->paginate(); // Sesuaikan jumlah data per halaman

        return view('index4', ['sepedamotor' => $sepedamotor, 'cari' => $cari]);
    }

}


