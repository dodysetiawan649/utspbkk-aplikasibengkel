@extends('tema')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Customers</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('customers.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nomor Polisi</th>
                                    <th scope="col">Nama Customers</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">Jenis kelamin</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datacustomers as $index => $customers)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $customers->no_pol }}</td>
                                        <td>{{ $customers->nama_customer }}</td>
                                        <td>{{ $customers->alamat }}</td>
                                        <td>{{ $customers->no_hp }}</td>
                                        <td>{{ $customers->jenis_kelamin }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $customers->id) }}" method="POST">
                                                <a href="{{ route('customers.show', $customers->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('customers.edit', $customers->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Customers Belum Ada.
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