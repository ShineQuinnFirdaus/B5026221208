@extends('master')

@section('title', 'Data Kategori')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <br/>
    <br/>

    @foreach($kategori as $k)
    <form action="/kategori/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $k->ID }}"> <br/>
        <div class="form-group" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="card mb-8" style="max-width: 100%; padding: 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" style="border: 1px solid #ccc; padding: 40%;">
                            <img src="..." class="card-img" alt="..." style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table style="width: 100%;">
                            <tr>
                                <td style="padding-bottom: 10px;"><label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label></td>
                                <td style="padding-bottom: 10px;"><div class readonly class="form-control-plaintext">{{ $p->pegawai_nama }}</div></td>
                            </tr>
                            <tr>
                        </table>
                        <br>
                        <a href="/pegawai" class="btn btn-primary"> OK</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection
