<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Data Barang</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('barang.update', $databarang->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="id" value="{{ $databarang->id }}">

                          <div class="form-group mb-3">
                            <label for="">Supplier</label>
                            <select name="supplier" id="supplier" class="form-control">
                                    <option value="">-- Pilih Supplier --</option>
                                    @forelse($supplier as $s)
                                        <option value="{{ $s->id }}"  {{ $databarang->supplier_id == $s->id ? 'selected' : '' }}>{{ $s->nama_supplier }}</option>
                                    @empty 
                                    <option value="">Supplier Belum Di Input</option>
                                    @endforelse
                                </select>
                          </div>

                          <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang', $databarang->nama_barang) }}" placeholder="Masukan Nama Barang">
                            
                                <!-- error message untuk nama_barang -->
                                @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                           </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Merek</label>
                                <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek', $databarang->merek) }}" placeholder="Masukan Merek">
                            
                                <!-- error message untuk merek -->
                                @error('merek')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $databarang->harga) }}" placeholder="Masukan harga">
                            
                                <!-- error message untuk harga -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Stok</label>
                                <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok', $databarang->stok) }}" placeholder="Masukan stok">
                            
                                <!-- error message untuk stok -->
                                @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Satuan</label>
                                <input type="number" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan', $databarang->satuan) }}" placeholder="Masukan satuan">
                            
                                <!-- error message untuk satuan -->
                                @error('satuan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>
                           <br>
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