<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data kendaraan</h3>
                    <small id="emailHelp" class="form-text text-muted">Kami Tidak Akan Membagikan Data Anda Kepada Orang lain.</small>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST"  enctype="multipart/form-data" >

                          @csrf
                          <div class="form-group mb-3">
                                <label class="font-weight-bold">No Pol</label>
                                <select name="no_pol" id="no_pol" class="form-control">
                                    <option value="">-- Pilih No Pol --</option>
                                    @forelse($keluhan as $k)
                                        <option value="{{ $k->no_pol }}">{{ $k->no_pol }}</option>
                                    @empty 
                                    <option value="">No POL Belum Tersedia</option>
                                    @endforelse
                                </select>
                           </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Nomor Mesin</label>
                                <input type="text" class="form-control @error('no_mesin') is-invalid @enderror" name="no_mesin" value="{{ old('no_mesin') }}" placeholder="Masukan Nomor Mesin">
                            
                                <!-- error message untuk no_mesin -->
                                @error('no_mesin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Merek</label>
                                <select name="merek" id="merek" class="form-control">
                                    <option value="">-- Pilih Merek --</option>
                                    <option value="honda">Honda</option>
                                    <option value="yamaha">Yamaha</option>
                                    <option value="suzuki">Suzuki</option>
                                    <option value="kawasaki">Kawasaki</option>
                                    <option value="lain">Lain</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Warna</label>
                                <select name="warna" id="warna" class="form-control">
                                    <option value="">-- Pilih Warna --</option>
                                    <option value="Putih">Putih</option>
                                    <option value="Hitam">Hitam</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Biru">Biru</option>
                                    <option value="Merah">Merah</option>
                                    <option value="lain">Lain</option>
                                </select>
                            </div>
                           <br/>

                              <br/>
                              <br/>
                              <div class="form-group">
                              <button type="submit" class="btn btn-md btn-primary me-3">SIMPAN</button>
                              </div>
                        </form>
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>