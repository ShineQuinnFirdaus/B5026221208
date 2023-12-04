@extends('master')

@section('title','Edit Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>

        <div class="form-group">
            <label for="nama" class="col-xs-3 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group">
            <label for="first_name" class="col-xs-3 col-form-label mr-2">Umur</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukan umur pegawai" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="first_name" class="col-xs-3 col-form-label mr-2">Alamat</label>
            <div class="col-xs-9">
            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat pegawai" required="required"></textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">

	</form>
@endsection
