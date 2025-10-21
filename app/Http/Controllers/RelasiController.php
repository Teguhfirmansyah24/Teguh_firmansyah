<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class RelasiController extends Controller
{

    public function oneToOne()
    {
        // mengambil data mahasiswa dan wali dengan function wali di model mahasiswa
        $mahasiswas = Mahasiswa::with('wali')->get();

        // mengirim variabel mahasiswas ke view
        return view('relasi.one_to_one', compact('mahasiswas'));
    }

    public function oneToMany()
    {
        // Ambil dosen beserta mahasiswa bimbingannya
        $dosens = Dosen::with('mahasiswas')->get();
        return view('relasi.one_to_many', compact('dosens'));
    }

    public function manyToMany()
    {
        $mahasiswas = Mahasiswa::with('hobis')->get();
        return view('relasi.many_to_many', compact('mahasiswas'));
    }

    public function eloquent()
    {
        // Ambil semua data mahasiswa lengkap dengan relasinya
        $mahasiswa = Mahasiswa::with('wali', 'dosen', 'hobis')->get();

        // Kirim data ke view
        return view('relasi.eloquent', compact('mahasiswa'));
    }
}
