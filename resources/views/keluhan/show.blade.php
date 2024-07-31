@extends('tema')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            Nomor Polisi Kendaraan : <h5>{{ $keluhan->no_pol }}</h5><br>
                            Nama Customer : <h5>{{ $keluhan->customer->nama_customer }}</h5><br>
                            Keluhan : <h5>{{ $keluhan->nama_keluhan }}</h5><br>
                            Ongkos : <h5>{{ "Rp " . number_format($keluhan->ongkos,0,',','.'); }}</h5><br>
                            Pegawai : <h5>{{ $keluhan->pegawai->nama_pegawai }}</h5>

                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection