@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Pengguna</div>

                    <div class="card-body">
                        <form action="{{ Route('pengguna.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                                @error('nama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('pengguna.index') }}" class="btn btn-primary">kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
