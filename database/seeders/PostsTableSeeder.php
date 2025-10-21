<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Teguh',
                'content' => 'Cara menjadi anak yang baik',
            ],
            [
                'title' => 'Aku',
                'content' => 'Cara menjadi anak yang Berbakti',
            ],
        ]);
    }
}
