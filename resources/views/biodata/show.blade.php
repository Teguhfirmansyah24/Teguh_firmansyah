@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show data Biodata</div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $biodatas->nama_lengkap }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jk"
                                    value="{{ $biodatas->jenis_kelamin }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    value="{{ $biodatas->tanggal_lahir }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ $biodatas->tempat_lahir }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama" value="{{ $biodatas->agama }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $biodatas->alamat }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label>Telepon</label>
                                <input type="integer" class="form-control" name="telepon" value="{{ $biodatas->telepon }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $biodatas->email }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <img src="{{ asset('/images/biodata/' . $biodatas->cover) }}" width="100">
                            </div>
                            <a href="{{ route('biodata.index') }}" type="submit" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
