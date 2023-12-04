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
            <table style="width: 100%;">
                <tr>
                    <td style="width: 30%;"><label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label></td>
                    <td style="width: 70%;"><div class="col-xs-9">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div></td>
                </tr>
                <tr>
                    <td><label for="jabatan" class="col-xs-3 col-form-label mr-2">Jabatan</label></td>
                    <td><div class="col-xs-9">
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div></td>
                </tr>
                <tr>
                    <td><label for="umur" class="col-xs-3 col-form-label mr-2">Umur</label></td>
                    <td><div class="col-xs-9">
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur pegawai" required="required">
                    </div></td>
                </tr>
                <tr>
                    <td><label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
                    <td><div class="col-xs-9">
                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat pegawai" required="required"></textarea>
                    </div></td>
                </tr>
            </table>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
