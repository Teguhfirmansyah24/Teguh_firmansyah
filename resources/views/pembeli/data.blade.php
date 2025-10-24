@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="mb-4">SMK ASSALAAM BANDUNG</h3>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="submit" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('pembeli.create') }} " class="btn btn-outline-primary mb-3">Tambah Pembeli</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pembeli as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_pembeli }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>
                                    <form action="{{ route('pembeli.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('pembeli.edit', $data->id) }}"
                                            class="btn btn-outline-success">Ubah</a>
                                        <a href="{{ route('pembeli.show', $data->id) }}"
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
