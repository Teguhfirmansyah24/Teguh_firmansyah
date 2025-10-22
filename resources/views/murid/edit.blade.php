@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit data Murid</div>

                    <div class="card-body">
                        <form action="{{ Route('murid.update', $murid->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap"
                                    value="{{ $murid->nama_lengkap }}">
                                @error('nama_lengkap')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin"
                                    value="{{ $murid->jenis_kelamin }}">
                                @error('jenis_kelamin')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    value="{{ $murid->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ $murid->tempat_lahir }}">
                                @error('tempat_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama" value="{{ $murid->agama }}">
                                @error('agama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $murid->alamat }}">
                                @error('alamat')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $murid->email }}">
                                @error('email')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Kelas</label>
                                <select class="form-control" name="id_kelas">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $murid->id_kelas ? 'selected' : '' }}>{{ $data->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pengguna')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('murid.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
