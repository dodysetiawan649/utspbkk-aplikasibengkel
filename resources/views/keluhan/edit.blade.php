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
                                <select name="keluhan" id="keluhan" class="form-control">
                                    <option value="">-- Pilih Keluhan --</option>
                                    @forelse($barang as $b)
                                        <option value="{{ $b->id.'_'.$b->nama_barang }}" {{ $datakeluhan->barang_id == $b->id ? 'selected' : '' }}>{{ $b->nama_barang }}</option>
                                    @empty 
                                    <option value="">Barang Belum Di Input</option>
                                    @endforelse
                                </select>
                           </div>
                           <br/>

                           <div class="form-group">
                                <label class="font-weight-bold">Nomor Polisi</label>
                                <select name="no_pol" id="no_pol" class="form-control">
                                    <option value="">-- Pilih Nomor Polisi --</option>
                                    @forelse($no_pol as $np)
                                        <option value="{{ $np->no_pol }}" {{ $datakeluhan->no_pol == $np->no_pol ? 'selected' : '' }}>{{ $np->no_pol }}</option>
                                    @empty 
                                    <option value="">No Polisi Belum Di Input</option>
                                    @endforelse
                                </select>
                            
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