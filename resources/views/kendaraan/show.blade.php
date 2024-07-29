<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

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
</body>
</html>