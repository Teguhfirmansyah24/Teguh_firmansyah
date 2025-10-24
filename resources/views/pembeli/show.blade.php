@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Pembeli</div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>Nama Pembeli</label>
                                <input type="text" class="form-control" name="nama_pembeli"
                                    value="{{ $pembeli->nama_pembeli }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <br>
                                <label><input type="radio" name="jenis_kelamin" value="Laki-laki"
                                        {{ $pembeli->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>Laki-laki</label>
                                <br>
                                <label><input type="radio" name="jenis_kelamin" value="Perempuan"
                                        {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan</label>
                            </div>
                            <div class="mb-3">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="harga" value="{{ $pembeli->telepon }}"
                                    disabled>
                            </div>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-primary">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
