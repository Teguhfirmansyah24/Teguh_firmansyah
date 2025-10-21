<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'Teguh Firmansyah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-4-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'KP Nusa RT01 RW15 Desa Rancamanyar',
                'telepon' => 88200121,
                'email' => 'Teguh123@gmail.com',
            ],
        ]);
    }
}
