@extends('master')

@section('title', 'Data Keranjang Belanja')

@section('konten')

	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}


		<div class="form-group">
            <label for="kodebarang" class="col-sm-2 control-label">Kode Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="kodebarang" name="kodebarang">
            </div>
        </div>

		<div class="form-group">
            <label for="jumlahpembelian" class="col-sm-2 control-label">Jumlah Pembelian</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="jumlahpembelian" name="jumlahpembelian">
            </div>
        </div>

		<div class="form-group">
            <label for="hargaperitem" class="col-sm-2 control-label">Harga per Item</label>
            <div class="col-sm-8">
            <textarea type="number" class="form-control" id="hargaperitem" name="hargaperitem" ></textarea>
            </div>
        </div>

		<div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
            </div>
        </div>
	</form>
@endsection
