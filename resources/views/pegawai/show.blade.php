@extends('tema')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Pegawai</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            Nama : <h5>{{ $pegawai->nama_pegawai }}</h5><br>
                            Alamat : <h5>{{ $pegawai->alamat }}</h5><br>
                            Jabatan : <h5>{{ $pegawai->jabatan }}</h5><br>
                            Status : <h5>{{ $pegawai->status }}</h5><br>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection