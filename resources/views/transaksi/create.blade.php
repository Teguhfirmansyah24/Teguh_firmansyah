@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Transaksi</div>

                    <div class="card-body">
                        <form action="{{ Route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Tanggal Transaksi</label>
                                <input type="date" class="form-control" name="tanggal_transaksi">
                                @error('tanggal_transaksi')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" name="jumlah">
                                @error('jumlah')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Total Harga</label>
                                <input type="text" class="form-control" name="total_harga">
                                @error('total_harga')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nama Barang</label>
                                <select name="id_barang" class="form-control">
                                    <option value="" disabled selected>-- Pilih Barang --</option>
                                    @foreach ($barang as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                    @endforeach
                                </select>
                                @error('id_barang')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nama Pembeli</label>
                                <select name="id_pembeli" class="form-control">
                                    <option value="" disabled selected>-- Pilih Pembeli --</option>
                                    @foreach ($pembeli as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                                    @endforeach
                                </select>
                                @error('id_pembeli')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('transaksi.index') }}" class="btn btn-primary">kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
