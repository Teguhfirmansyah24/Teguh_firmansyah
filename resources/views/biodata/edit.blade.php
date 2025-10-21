@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit data Biodata</div>

                    <div class="card-body">
                        <form action="{{ Route('biodata.update', $biodatas->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $biodatas->nama_lengkap }}">
                                @error('nama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jk"
                                    value="{{ $biodatas->jenis_kelamin }}">
                                @error('jk')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    value="{{ $biodatas->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ $biodatas->tempat_lahir }}">
                                @error('tempat_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama" value="{{ $biodatas->agama }}">
                                @error('agama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $biodatas->alamat }}">
                                @error('alamat')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Telepon</label>
                                <input type="number" class="form-control" name="telepon" value="{{ $biodatas->telepon }}">
                                @error('telepon')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $biodatas->email }}">
                                @error('email')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <img src="{{ asset('/images/biodata/' . $biodatas->cover) }}" width="100">
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <input type="file" class="form-control" name="cover" placeholder="Content">
                                @error('cover')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
