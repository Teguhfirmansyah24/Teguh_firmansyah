<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class Relasiseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Membuat dan menyimpan satu data mahasiswa
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Teguh Firmansyah',
            'nim' => '240408',
        ]);

        // Membuat wali yang terhubung ke mahasiswa tersebut
        Wali::create([
            'nama' => 'Pak Deni',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
