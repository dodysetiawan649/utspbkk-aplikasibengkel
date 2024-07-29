@extends('tema')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('keluhan.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Keluhan</th>
                                    <th scope="col">Ongkos</th>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Pegawai</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datakeluhan as $index => $keluhan)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $keluhan->nama_keluhan }}</td>
                                        <td>{{ "Rp " . number_format($keluhan->ongkos,0,',','.'); }}</td>
                                        <td>{{ $keluhan->no_pol }}</td>
                                        <td>{{ $keluhan->customer->nama_customer }}</td>
                                        <td>{{ $keluhan->pegawai->nama_pegawai }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('keluhan.destroy', $keluhan->id) }}" method="POST">
                                                <a href="{{ route('keluhan.show', $keluhan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('keluhan.edit', $keluhan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Keluhan Belum Ada.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection