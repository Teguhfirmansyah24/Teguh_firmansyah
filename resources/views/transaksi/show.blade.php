@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Transaksi</div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>Tanggal Transaksi</label>
                                <input type="date" class="form-control" name="tanggal_transaksi"
                                    value="{{ $transaksi->tanggal_transaksi }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin"
                                    value="{{ $transaksi->jumlah }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tanggal_lahir"
                                    value="{{ $transaksi->total_harga }}"disabled>
                                <div class="mb-3">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="id_barang"
                                        value="{{ $transaksi->barang->nama_barang }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label>Nama Pembeli</label>
                                    <input type="text" class="form-control" name="id_pembeli"
                                        value="{{ $transaksi->pembeli->nama_pembeli }}" disabled>
                                </div>
                                <a href="{{ route('transaksi.index') }}" class="btn btn-primary">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
