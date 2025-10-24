@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ubah Data Pembeli</div>

                    <div class="card-body">
                        <form action="{{ Route('pembeli.update', $pembeli->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Pembeli</label>
                                <input type="text" class="form-control" name="nama_pembeli"
                                    value="{{ $pembeli->nama_pembeli }}">
                                @error('nama_pembeli')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>jenis Kelamin</label>
                                <br>
                                <label><input type="radio" name="jenis_kelamin" value="Laki-laki"
                                        {{ $pembeli->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>Laki-laki</label>
                                <br>
                                <label><input type="radio" name="jenis_kelamin" value="Perempuan"
                                        {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan</label>
                                @error('jenis_kelamin')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon }}">
                                @error('telepon')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
