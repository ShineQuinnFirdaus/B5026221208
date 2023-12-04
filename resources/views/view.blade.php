@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <br/>
    <br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <div class="card mb-8" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nama" class="col-xs-3 col-form-label mr-2">Nama</label>
                            <div class="col-xs-9">
                                <div class="form-control">{{ $p->pegawai_nama }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="umur" class="col-xs-3 col-form-label mr-2">Jabatan</label>
                            <div class="col-xs-9">
                                <div class="form-control">{{ $p->pegawai_jabatan }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="divisi" class="col-xs-3 col-form-label mr-2">Umur</label>
                            <div class="col-xs-9">
                                <div class="form-control">{{ $p->pegawai_umur }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label>
                            <div class="col-xs-9">
                                <div class="form-control">{{ $p->pegawai_alamat }}</div>
                                <br/>
                                <a href="/pegawai" class="btn btn-primary"> OK</a>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @endforeach
@endsection
