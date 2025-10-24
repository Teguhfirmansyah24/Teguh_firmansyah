@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Barang</div>

                    <div class="card-body">
                        <form action="{{ Route('barang.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                                @error('nama_barang')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                                <div class="mb-3">
                                    <label>Merek</label>
                                    <input type="text" class="form-control" name="merek" placeholder="Merek">
                                    @error('merek')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Harga</label>
                                    <input type="number" class="form-control" name="harga" placeholder="Harga">
                                    @error('nama_barang')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Stok</label>
                                    <input type="number" class="form-control" name="stok" placeholder="Stok">
                                    @error('stok')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('barang.index') }}" class="btn btn-primary">kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
