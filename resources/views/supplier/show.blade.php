@extends('tema')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Supplier</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            Nama Supplier : <h5>{{ $supplier->nama_supplier }}</h5><br>
                            Alamat : <h5>{{ $supplier->alamat }}</h5><br>
                            Nomor HP : <h5>{{ $supplier->no_hp }}</h5>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection