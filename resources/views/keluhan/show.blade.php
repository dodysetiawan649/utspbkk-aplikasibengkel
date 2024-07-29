<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

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
</body>
</html>