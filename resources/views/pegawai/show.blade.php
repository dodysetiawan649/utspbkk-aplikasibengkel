<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

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
</body>
</html>