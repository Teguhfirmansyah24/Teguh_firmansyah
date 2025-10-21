<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'teguh firmansyah',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-8-23',
                'kelas' => 'smk',
            ],
            [
                'nama_lengkap' => 'teguh firmansyah',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-1-12',
                'kelas' => 'smk',
            ],
             [
                'nama_lengkap' => 'teguh firmansyah',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-1-12',
                'kelas' => 'smk',
            ],
            [
                'nama_lengkap' => 'teguh firmansyah',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-1-12',
                'kelas' => 'smk',
            ],
            [
                'nama_lengkap' => 'teguh firmansyah',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-1-12',
                'kelas' => 'smk',
            ],
        ]);
    }
}
