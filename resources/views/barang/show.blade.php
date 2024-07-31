@extends('tema')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Barang</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            Nama Barang : <h5>{{ $barang->nama_barang }}</h5><br>
                            Merek : <h5>{{ $barang->merek }}</h5><br>
                            Harga : <h5>{{ "Rp " . number_format($barang->harga,0,',','.'); }}</h5><br>
                            Satuan : <h5>{{ $barang->satuan }}</h5>
                            Stok : <h5>{{ $barang->stok }}</h5><br>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection