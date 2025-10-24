@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit data Transaksi</div>

                    <div class="card-body">
                        <form action="{{ Route('transaksi.update', $transaksi->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Tanggal Transaksi</label>
                                <input type="text" class="form-control" name="tanggal_transaksi"
                                    value="{{ $transaksi->tanggal_transaksi }}">
                                @error('tanggal_transaksi')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" name="Jumlah" value="{{ $transaksi->jumlah }}">
                                @error('jumlah')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Total Harga</label>
                                <input type="text" class="form-control" name="total_harga"
                                    value="{{ $transaksi->total_harga }}">
                                @error('total_harga')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nama Barang</label>
                                <select class="form-control" name="id_barang">
                                    @foreach ($barang as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $transaksi->id_barang ? 'selected' : '' }}>
                                            {{ $data->nama_barang }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_barang')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nama Pembeli</label>
                                <select class="form-control" name="id_pembeli">
                                    @foreach ($pembeli as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $transaksi->id_pembeli ? 'selected' : '' }}>
                                            {{ $data->nama_pembeli }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pembeli')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
