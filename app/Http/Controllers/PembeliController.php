<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.data', compact('pembeli'));
    }

    public function create()
    {
        return view('pembeli.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
        ], [
            'nama_pembeli.required' => 'wajib diisi!',
            'jenis_kelamin.required' => 'wajib diisi!',
            'telepn.required' => 'wajib diisi!',
        ]);

        $pembeli = new Pembeli();
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jenis_kelamin = $request->jenis_kelamin;
        $pembeli->telepon = $request->telepon;

        $pembeli->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('pembeli.index');
    }

    public function show(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pembeli' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
        ], [
            'nama_pembeli.required' => 'wajib diisi!',
            'jenis_kelamin.required' => 'wajib diisi!',
            'telepon.required' => 'wajib diisi!',
        ]);

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jenis_kelamin = $request->jenis_kelamin;
        $pembeli->telepon = $request->telepon;

        $pembeli->save();
        session()->flash('success', 'Data berhasil di ubah');
        return redirect()->route('pembeli.index');
    }

    public function destroy(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success', 'Data berhasil dihapus');
    }
}
