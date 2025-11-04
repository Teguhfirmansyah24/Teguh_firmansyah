<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.data', compact('transaksi'));
    }

    public function create()
    {
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('barang', 'pembeli'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_transaksi' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ], [
            'tanggal_transaksi.required' => 'Nama wajib diisi!',
            'jumlah.required' => 'Jenis kelamin wajib diisi!',
            'total_harga.required' => 'Tanggal lahir wajib diisi!',
        ]);

        $transaksi = new Transaksi();
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;

        $transaksi->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('transaksi.index');
    }

    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    } 

    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit', compact('transaksi', 'barang', 'pembeli'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal_transaksi' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ], [
            'tanggal_transaksi.required' => 'Nama wajib diisi!',
            'jumlah.required' => 'Jenis kelamin wajib diisi!',
            'total_harga.required' => 'Tanggal lahir wajib diisi!',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;

        $transaksi->save();
        session()->flash('success', 'Data berhasil dirubah');
        return redirect()->route('transaksi.index');
    }

    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil dihapus');
    }
}
