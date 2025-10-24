@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="mb-4">SMK ASSALAAM BANDUNG</h3>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="submit" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('transaksi.create') }} " class="btn btn-outline-primary mb-3">Tambah Transaksi</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Nama Barang</th>
                            <th>Nama Pembeli</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($transaksi as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->tanggal_transaksi }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->total_harga }}</td>
                                <td>{{ $data->barang->nama_barang }}</td>
                                <td>{{ $data->pembeli->nama_pembeli }}</td>
                                <td>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('transaksi.edit', $data->id) }}"
                                            class="btn btn-outline-success">Ubah</a>
                                        <a href="{{ route('transaksi.show', $data->id) }}"
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
