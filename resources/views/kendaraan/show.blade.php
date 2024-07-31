@extends('tema')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            Nomor Polisi : <h5>{{ $kendaraan->no_pol }}</h5><br>
                            Nomor Mesin : <h5>{{ $kendaraan->no_mesin }}</h5><br>
                            Merek : <h5>{{ $kendaraan->merek }}</h5><br>
                            Warna : <h5>{{ $kendaraan->warna }}</h5>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection