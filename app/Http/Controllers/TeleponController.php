<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Telepon;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    // munculkan data
    public function index()
    {
        $telepon = Telepon::all();
        return view('telepon.data', compact('telepon'));
    }

    // mengarahkan ke view
    public function create()
    {
        $pengguna = Pengguna::all();
        return view('telepon.create', compact('pengguna'));
    }

    // memproses tambah data
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required|min:3',
        ], [
            'nomor.required' => 'Nomor wajib diisi!',
        ]);

        $telepon = new Telepon();
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;

        $telepon->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('telepon.index');
    }

    // menampilkan detail data
    public function show(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));
    }

    // mengarahkan ke view
    public function edit(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        $pengguna = Pengguna::all();
        return view('telepon.edit', compact('telepon', 'pengguna'));
    }

    // memproses uptade data
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor' => 'required',
        ], [
            'nomor.required' => 'nomor wajib diisi!',
        ]);

        $telepon = Telepon::findOrFail($id);
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;

        $telepon->save();
        session()->flash('success', 'Data berhasil dirubah');
        return redirect()->route('telepon.index');
    }

    // menghapus data
    public function destroy(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        $telepon->delete();
        return redirect()->route('telepon.index')->with('success', 'Data berhasil dihapus');
    }
}
