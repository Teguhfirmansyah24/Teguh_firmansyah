@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah data Biodata</div>

                    <div class="card-body">
                        <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                @error('nama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <br>
                                <input type="radio" value="Laki-laki" name="jk"> Laki-laki
                                <input type="radio" value="Perempuan" name="jk"> Perempuan
                                <br>
                                @error('jk')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                @error('tanggal_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                @error('tempat_lahir')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama" placeholder="Agama">
                                @error('agama')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                @error('alamat')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Telepon</label>
                                <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                                @error('telepon')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                @error('email')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <input type="file" class="form-control" name="cover" placeholder="Content">
                                @error('cover')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('biodata.index') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
