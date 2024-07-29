@extends('tema')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No Pol</th>
                                    <th scope="col">No Mesin</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datakendaraan as $index => $kendaraan)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $kendaraan->no_pol }}</td>
                                        <td>{{ $kendaraan->no_mesin }}</td>
                                        <td>{{ $kendaraan->merek }}</td>
                                        <td>{{ $kendaraan->warna }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST">
                                                <a href="{{ route('kendaraan.show', $kendaraan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Kendaraan Belum Ada.
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