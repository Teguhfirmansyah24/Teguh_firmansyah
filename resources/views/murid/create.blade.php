@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Murid</div>

                    <div class="card-body">
                        <form action="{{ Route('murid.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap">
                                @error('nama_lengkap')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin">
                                @error('jenis_kelamin')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir">
                                @error('tempat_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama">
                                @error('agama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                                @error('alamat')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                                @error('email')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Kelas</label>
                                <select name="id_kelas" class="form-control">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                                    @endforeach
                                </select>
                                @error('id_Kelas')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('murid.index') }}" class="btn btn-primary">kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
