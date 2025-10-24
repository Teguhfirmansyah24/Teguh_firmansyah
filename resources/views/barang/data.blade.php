@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="mb-4">SMK ASSALAAM BANDUNG</h3>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="submit" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('barang.create') }} " class="btn btn-outline-primary mb-3">Tambah Barang</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($barang as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_barang }}</td>
                                <td>{{ $data->merek }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->stok }}</td>
                                <td>
                                    <form action="{{ route('barang.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('barang.edit', $data->id) }}"
                                            class="btn btn-outline-success">Ubah</a>
                                        <a href="{{ route('barang.show', $data->id) }}"
                                            class="btn btn-outline-warning">Tampilkan</a>
                                        <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
