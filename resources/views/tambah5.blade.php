@extends('master')

@section('title', 'Kategori')

@section('konten')
<br>

<div class="container mt-4">
    <h1>Anda telah memilih Kategori dengan Kode:
        {{ $selectedKategoriId }}
    </h1>
</div>


<a class="btn btn-success"href="/kategori">OK</a>
@endsection
