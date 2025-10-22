@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="mb-4">SMK ASSALAAM BANDUNG</h3>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="submit" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('murid.create') }} " class="btn btn-outline-primary mb-3">Tambah Murid</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($murid as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->kelas->nama_kelas }}</td>
                                <td>
                                    <form action="{{ route('murid.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('murid.edit', $data->id) }}"
                                            class="btn btn-outline-success">Ubah</a>
                                        <a href="{{ route('murid.show', $data->id) }}"
                                            class="btn btn-outline-warning">Tampilkan</a>
                                        <button type="submit" class="btn btn-outline-danger"
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
@endsection
