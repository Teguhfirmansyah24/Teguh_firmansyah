@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tampilan data Pengguna</div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="title" value="{{ $penggunas->nama }}"
                                    disabled>
                            </div>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
