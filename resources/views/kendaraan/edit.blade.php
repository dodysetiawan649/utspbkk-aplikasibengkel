<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.update', $datakendaraan->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="id" value="{{ $datakendaraan->id }}">
                          <div class="form-group mb-3">
                                <label class="font-weight-bold">No Pol</label>
                                <select name="no_pol" id="no_pol" class="form-control">
                                    <option value="">-- Pilih No Pol --</option>
                                    @forelse($keluhan as $k)
                                        <option value="{{ $k->no_pol }}" {{ $datakendaraan->no_pol == $k->no_pol ? 'selected' : '' }}>{{ $k->no_pol }}</option>
                                    @empty 
                                    <option value="">No POL Belum Tersedia</option>
                                    @endforelse
                                </select>
                           </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Nomor Mesin</label>
                                <input type="text" class="form-control @error('no_mesin') is-invalid @enderror" value="{{ $datakendaraan->no_mesin }}" name="no_mesin" value="{{ old('no_mesin') }}" placeholder="Masukan Nomor Polisi">
                            
                                <!-- error message untuk no_mesin -->
                                @error('no_mesin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">merek</label>
                                <select name="merek" id="merek" class="form-control">
                                    <option value="">-- Pilih Merek --</option>
                                    <option value="honda" {{ $datakendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="yamaha" {{ $datakendaraan->merek == 'yamaha' ? 'selected' : '' }}>Yamaha</option>
                                    <option value="suzuki" {{ $datakendaraan->merek == 'suzuki' ? 'selected' : '' }}>Suzuki</option>
                                    <option value="kawasaki" {{ $datakendaraan->merek == 'kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                                    <option value="lain" {{ $datakendaraan->merek == 'lain' ? 'selected' : '' }}>Lain</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Warna</label>
                                <select name="warna" id="warna" class="form-control">
                                    <option value="">-- Pilih Warna --</option>
                                    <option value="Putih" {{ $datakendaraan->warna == 'Putih' ? 'selected' : '' }}>Putih</option>
                                    <option value="Hitam" {{ $datakendaraan->warna == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                                    <option value="Hijau" {{ $datakendaraan->warna == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                                    <option value="Biru" {{ $datakendaraan->warna == 'Biru' ? 'selected' : '' }}>Biru</option>
                                    <option value="Merah" {{ $datakendaraan->warna == 'Merah' ? 'selected' : '' }}>Merah</option>
                                    <option value="lain" {{ $datakendaraan->warna == 'lain' ? 'selected' : '' }}>Lain</option>
                                </select>
                            </div>
                           <br/>

                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
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