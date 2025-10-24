@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ubah Data Barang</div>

                    <div class="card-body">
                        <form action="{{ Route('barang.update', $barang->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang"
                                    value="{{ $barang->nama_barang }}">
                                @error('nama_barang')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Merek</label>
                                <input type="text" class="form-control" name="merek" value="{{ $barang->merek }}">
                                @error('merek')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga" value="{{ $barang->harga }}">
                                @error('harga')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>stok</label>
                                <input type="text" class="form-control" name="stok" value="{{ $barang->stok }}">
                                @error('stok')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('barang.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
