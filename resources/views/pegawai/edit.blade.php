<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Data Pegawai</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $datapegawai->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                                <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control" placeholder="Enter nama pegawai" value="{{ old('nama_pegawai', $datapegawai->nama_pegawai) }}">

                                @error('nama_pegawai')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <br/>
                              
                              <div class="form-group">
                              <label for="exampleInputEmail1">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-control">
                                        <option value="">-- Pilih Jabatan --</option>
                                        <option value="teknisi" {{ $datapegawai->jabatan == 'teknisi' ? 'selected' : '' }}>Tekniksi</option>
                                        <option value="admin" {{ $datapegawai->jabatan == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="spv" {{ $datapegawai->jabatan == 'spv' ? 'selected' : '' }}>Spv</option>
                                    </select>
                                    <!-- <input type="text" name="jabatan" class="form-control" placeholder="masukkan jabatan anda">
                                    @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror -->
                                </div>
                                <br/>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" name="alamat" value="{{ $datapegawai->alamat }}" class="form-control" placeholder="masukkan alamat anda">
                                        @error('alamat')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <br/>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select name="status" id="status" class="status form-control">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="aktif" {{ $datapegawai->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                            <option value="tidak_aktif" {{ $datapegawai->jabatan == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                        </select>
                                        <!-- <input type="text" name="status" class="form-control" placeholder="klik status anda">
                                        @error('status')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror -->
                                </div>
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