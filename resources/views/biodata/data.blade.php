@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Siswa</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="submit" class="btn btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="{{ route('biodata.create') }}" class="btn btn-primary">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($biodatas as $data)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $data->nama_lengkap }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->tanggal_lahir }}</td>
                                        <td>{{ $data->tempat_lahir }}</td>
                                        <td>{{ $data->agama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td><img src="{{ asset('/images/biodata/' . $data->cover) }}" width="100"></td>
                                        <td>
                                            <form action="{{ route('biodata.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('biodata.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('biodata.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
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
