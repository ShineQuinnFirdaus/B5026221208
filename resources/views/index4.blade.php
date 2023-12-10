@extends('master')

@section('title', 'Data Sepeda Motor')

@section('konten')
@php
    function translateChar ($char){
        if($char==1){
            return 'Tersedia';
        }
        else if($char==0){
            return 'Tidak Tersedia';
        }
        else{
            return 'Tidak Valid';
        }
    }
@endphp
	<h3>Data Sepeda Motor</h3>

	<a href="/sepedamotor/tambah4" class="btn btn-primary"> + Tambah Sepeda Motor Baru</a>

	<br/>
	<p>Cari Data Sepeda Motor :</p>
	<form action="/sepedamotor/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Sepeda Motor .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Sepeda Motor</th>
			<th>Merk Sepeda Motor</th>
			<th>Stock Sepeda Motor</th>
			<th>Ketersediaan</th>

		</tr>
		@foreach($sepedamotor as $s)
		<tr>
			<td>{{ $s->kodesepedamotor }}</td>
			<td>{{ $s->merksepedamotor }}</td>
			<td>{{ $s->stocksepedamotor }}</td>
			<td>{{  translateChar($s->tersedia) }}</td>

		</tr>
		@endforeach
	</table>
	{{ $sepedamotor->links() }}
@endsection
