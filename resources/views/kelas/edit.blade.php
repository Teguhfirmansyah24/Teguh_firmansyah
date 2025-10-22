@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ubah Data</div>

                    <div class="card-body">
                        <form action="{{ Route('kelas.update', $kelas->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas"
                                    value="{{ $kelas->nama_kelas }}">
                                @error('nama_kelas')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('kelas.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
