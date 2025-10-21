@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Pengguna</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="submit" class="btn btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($penggunas as $data)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>
                                            <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('pengguna.edit', $data->id) }}"
                                                    class="btn btn-success">Ubah</a>
                                                <a href="{{ route('pengguna.show', $data->id) }}"
                                                    class="btn btn-warning">Tampilkan</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
