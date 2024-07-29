<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Data keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('keluhan.update', $datakeluhan->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="id" value="{{ $datakeluhan->id }}">
                          <div class="form-group">
                                <label class="font-weight-bold">Nama Keluhan</label>
                                <input type="text" class="form-control @error('nama_keluhan') is-invalid @enderror" name="nama_keluhan" value="{{ old('nama_keluhan', $datakeluhan->nama_keluhan) }}" placeholder="Masukan Keluhan">
                            
                                <!-- error message untuk nama_keluhan -->
                                @error('nama_keluhan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                           </div>
                           <br/>

                           <div class="form-group">
                                <label class="font-weight-bold">Nomor Polisi</label>
                                <input type="text" class="form-control @error('no_pol') is-invalid @enderror" name="no_pol" value="{{ old('no_pol', $datakeluhan->no_pol) }}" placeholder="Masukan Nomor Polisi">
                            
                                <!-- error message untuk no_pol -->
                                @error('no_pol')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Customer</label>
                                <!-- <input type="text" class="form-control @error('customer') is-invalid @enderror" name="customer" value="{{ old('customer') }}" placeholder="Pilih Jenis Kelamin"> -->
                                <select name="customer_id" id="customer" class="form-control">
                                    <option value="">-- Pilih Customer --</option>
                                    @forelse($customer as $ct)
                                        <option value="{{ $ct->id }}" {{ $datakeluhan->customer_id == $ct->id ? 'selected' : '' }}>{{ $ct->nama_customer }}</option>
                                    @empty 
                                    <option value="">Customer Belum Di Input</option>
                                    @endforelse
                                </select>
                                <!-- error message untuk customer -->
                                <!-- @error('customer')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror -->
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Pegawai</label>
                                <!-- <input type="text" class="form-control @error('pegawai') is-invalid @enderror" name="pegawai" value="{{ old('pegawai') }}" placeholder="Pilih Jenis Kelamin"> -->
                                <select name="id_pegawai" id="pegawai" class="form-control">
                                    <option value="">-- Pilih Pegawai --</option>
                                    @forelse($pegawai as $pg)
                                        <option value="{{ $pg->id }}" {{ $datakeluhan->pegawai_id == $pg->id ? 'selected' : '' }}>{{ $pg->nama_pegawai }}</option>
                                    @empty 
                                    <option value="">Customer Belum Di Input</option>
                                    @endforelse
                                </select>
                                <!-- error message untuk pegawai -->
                                <!-- @error('pegawai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror -->
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Ongkos</label>
                                <input type="number" class="form-control @error('ongkos') is-invalid @enderror" name="ongkos" value="{{ old('ongkos', $datakeluhan->ongkos) }}" placeholder="Masukan Ongkos">
                            
                                <!-- error message untuk ongkos -->
                                @error('ongkos')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
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