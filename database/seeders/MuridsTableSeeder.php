<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('murids')->delete();
        DB::table('murids')->insert([
            [
                'nama_lengkap' => 'Teguh Firmansyah',
                'kelas' => '11 RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_lengkap' => 'Ahmad Fadilah',
                'kelas' => '11 RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_lengkap' => 'Alifa Dian Nugraha',
                'kelas' => '11 RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_lengkap' => 'Marsha Bara Suarna',
                'kelas' => '11 RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_lengkap' => 'Dikri Nur Rohmat',
                'kelas' => '11 RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
        ]);
    }
}
