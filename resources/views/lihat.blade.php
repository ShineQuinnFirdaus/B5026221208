@extends('master')

@section('title', 'Data Sepeda Motor')

@section('konten')

<h2 class="text-center">Data Sepeda Motor</h2><br>

<a href="/sepedamotor" class="btn btn-primary"> Kembali</a>

<br />
<br />

@foreach ($sepedamotor as $s)
    {{-- <form action="/buku/update" method="post" class="form-horizontal"> --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-sm-7">
                <div class="card-group" style="height: 400px">
                    <div class="card bg-dark">
                        <div class="card-body text-center">


                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <p class="card-text">Kode: {{ $s->kodesepedamotor }}</p>
                            <p class="card-text">Merk: {{ $s->merksepedamotor}}</p>
                            <p class="card-text">Stock: {{ $s->stocksepedamotor }}</p>
                            <p class="card-text">Tersedia: {{ $s->tersedia }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
