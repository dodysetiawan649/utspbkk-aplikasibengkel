@extends('tema')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Customer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            Nomor Polisi Kendaraan : <h5>{{ $customers->no_pol }}</h5><br>
                            Nama Customer : <h5>{{ $customers->nama_customer }}</h5><br>
                            Alamat : <h5>{{ $customers->alamat }}</h5><br>
                            Nomor HP Costumer : <h5>{{ $customers->no_hp }}</h5><br>
                            Jenis Kelamin : <h5>{{ $customers->jenis_kelamin }}</h5>

                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection