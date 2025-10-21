<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodatas = Biodata::all();
        return view('biodata.data', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'cover' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'jk.required' => 'Jenis kelamin wajib diisi!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
            'tempat_lahir.required' => 'Tempat wajib diisi!',
            'agama.required' => 'Agama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'telepon.required' => 'Telepon wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'cover.required' => 'Cover wajib diisi!',
        ]);

        $biodatas = new Biodata;
        $biodatas->nama_lengkap = $request->nama;
        $biodatas->jenis_kelamin = $request->jk;
        $biodatas->tanggal_lahir = $request->tanggal_lahir;
        $biodatas->tempat_lahir = $request->tempat_lahir;
        $biodatas->agama = $request->agama;
        $biodatas->alamat = $request->alamat;
        $biodatas->telepon = $request->telepon;
        $biodatas->email = $request->email;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodatas->cover = $name;
        }

        $biodatas->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'cover' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'jk.required' => 'Jenis kelamin wajib diisi!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
            'tempat_lahir.required' => 'Tempat wajib diisi!',
            'agama.required' => 'Agama wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'telepon.required' => 'Telepon wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'cover.required' => 'Cover wajib diisi!',
        ]);

        $biodatas = Biodata::findOrFail($id);
        $biodatas->nama_lengkap = $request->nama;
        $biodatas->jenis_kelamin = $request->jk;
        $biodatas->tanggal_lahir = $request->tanggal_lahir;
        $biodatas->tempat_lahir = $request->tempat_lahir;
        $biodatas->agama = $request->agama;
        $biodatas->alamat = $request->alamat;
        $biodatas->telepon = $request->telepon;
        $biodatas->email = $request->email;

        if ($request->hasFile('cover')) {
            if ($biodatas->cover) {
                $filePath = public_path('images/biodata/' . $biodatas->cover);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodatas->cover = $name;
        }

        $biodatas->save();
        session()->flash('success', 'Data berhasil dirubah');
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = Biodata::findOrFail($id);

        if ($biodatas->cover) {
            $filePath = public_path('images/biodata/' . $biodatas->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $biodatas->delete();
        return redirect()->route('biodata.index')->with('success', 'Data berhasil dihapus');
    }
}
