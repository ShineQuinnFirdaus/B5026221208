@extends('master')

@section('title', 'Data KeranjangBelanja')

@section('konten')
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja/tambah2" class="btn btn-primary"> + Beli</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>Rp{{ number_format ($k->Harga,0,",",",") }}</td>
            <td>Rp{{ number_format (($k->Jumlah * $k->Harga),0,",",",") }}</td>
			<td>

				<a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $keranjangbelanja->links() }}
@endsection
