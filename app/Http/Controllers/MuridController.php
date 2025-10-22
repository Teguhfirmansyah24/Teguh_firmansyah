<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\Kelas;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();
        return view('murid.data', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ], [
            'nama_lengkap.required' => 'Nama wajib diisi!',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
            'tempat_lahir.required' => 'Tempat wajib diisi!',
            'agama.required' => 'Agama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'email.required' => 'Email wajib diisi!',
        ]);

        $murid = new Murid;
        $murid->nama_lengkap = $request->nama_lengkap;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir = $request->tempat_lahir;
        $murid->agama = $request->agama;
        $murid->alamat = $request->alamat;
        $murid->email = $request->email;
        $murid->id_kelas = $request->id_kelas;

        $murid->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid = Murid::findOrFail($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ], [
            'nama_lengkap.required' => 'Nama wajib diisi!',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
            'tempat_lahir.required' => 'Tempat wajib diisi!',
            'agama.required' => 'Agama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'email.required' => 'Email wajib diisi!',
        ]);

        $murid = Murid::findOrFail($id);
        $murid->nama_lengkap = $request->nama_lengkap;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir = $request->tempat_lahir;
        $murid->agama = $request->agama;
        $murid->alamat = $request->alamat;
        $murid->email = $request->email;
        $murid->id_kelas = $request->id_kelas;

        $murid->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')->with('success', 'Data berhasil dihapus');
    }
}
