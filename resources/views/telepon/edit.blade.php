@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ubah data Telepon</div>

                    <div class="card-body">
                        <form action="{{ Route('telepon.update', $telepon->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Nomor</label>
                                <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}">
                                @error('nomor')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Nama pengguna</label>
                                <select class="form-control" name="id_pengguna">
                                    @foreach ($pengguna as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $telepon->id_pengguna ? 'selected' : '' }}>{{ $data->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pengguna')
                                    <small style="color: red;">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('telepon.index') }}" class="btn btn-primary">kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
