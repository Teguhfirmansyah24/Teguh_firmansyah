<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan dan mengirim data ke view
        $kelas = Kelas::all();
        return view('kelas.data', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|min:3',
        ], [
            'nama_kelas.required' => 'wajib diisi!',
        ]);

        $Kelas = new Kelas;
        $Kelas->nama_kelas = $request->nama_kelas;

        $Kelas->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ], [
            'nama_kelas.required' => 'wajib diisi!',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;

        $kelas->save();
        session()->flash('success', 'Data berhasil dirubah');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Data berhasil dihapus');
    }
}
