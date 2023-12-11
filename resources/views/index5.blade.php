@extends('master')

@section('title','Kategori')

@section('konten')

	<h3>Pilih Kategori</h3>


    <div class="form-group">
        <div class="col-sm-8">
        <input type="Option" class="form-control" id="Kategori" name="Kategori" placeholder="Pilih Kategori">
        </div>
    </div>


    <a href="/kategori/tambah5"class="btn btn-primary"> KIRIM</a>


		@foreach($kategori as $k)

		@endforeach
	</table>
    {{$kategori->links()}}
@endsection

