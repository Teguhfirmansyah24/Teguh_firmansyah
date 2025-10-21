@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ubah data Pengguna</div>

                    <div class="card-body">
                        <form action="{{ Route('pengguna.update', $penggunas->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $penggunas->nama }}">
                                @error('nama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
