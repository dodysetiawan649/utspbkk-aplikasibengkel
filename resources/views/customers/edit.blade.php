<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Customers</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('customers.update', $datacustomers->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group mb-3">
                                <label class="font-weight-bold">Nomor Polisi</label>
                                <input type="text" class="form-control @error('no_pol') is-invalid @enderror" name="no_pol" value="{{ old('no_pol', $datacustomers->no_pol) }}" placeholder="Cth: KB1234ABC, KB1234AB">
                            
                                <!-- error message untuk no_pol -->
                                @error('no_pol')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                           </div>
                           <br/>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Customers</label>
                                <input type="text" name="nama_customers" class="form-control" placeholder="Enter nama customers" value="{{ old('nama_customers', $datacustomers->nama_customer) }}">
                                @error('nama_customers')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <br/>

                              <div class="form-group mb-3">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $datacustomers->alamat) }}" placeholder="Masukkan Alamat Anda">
                            
                                <!-- error message untuk alamats -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           <br/>

                           <div class="form-group mb-3">
                                <label class="font-weight-bold">Jenis jenis_kelamin</label>
                                <!-- <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" placeholder="Pilih Jenis Kelamin"> -->
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ $datacustomers->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                    <option value="P" {{ $datacustomers->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                <!-- error message untuk jenis_kelamin -->
                                <!-- @error('jenis_kelamin')
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