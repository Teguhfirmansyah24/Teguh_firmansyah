@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Telepon Pengguna</div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>Nomor</label>
                                <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" class="form-control" name="id_pengguna"
                                    value="{{ $telepon->pengguna->nama }}" disabled>
                            </div>
                            <a href="{{ route('telepon.index') }}" class="btn btn-primary">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
