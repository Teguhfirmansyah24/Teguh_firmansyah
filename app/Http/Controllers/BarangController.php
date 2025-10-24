<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.data', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merek' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            'nama_barang.required' => 'wajib diisi!',
            'merek.required' => 'wajib diisi!',
            'harga.required' => 'wajib diisi!',
            'stok.required' => 'wajib diisi!',
        ]);

        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->merek = $request->merek;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('barang.index');
    }

    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merek' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            'nama_barang.required' => 'wajib diisi!',
            'merek.required' => 'wajib diisi!',
            'harga.required' => 'wajib diisi!',
            'stok.required' => 'wajib diisi!',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->merek = $request->merek;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        session()->flash('success', 'Data berhasil di ubah');
        return redirect()->route('barang.index');
    }

    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus');
    }
}
