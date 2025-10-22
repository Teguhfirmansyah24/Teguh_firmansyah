<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\TeleponController;
use App\Models\siswa;
use App\Models\Wali;
use App\Models\Mahasiswa;
use App\Models\Hobi;
use App\Models\Telepon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halaman1', function () {
    $siswa = ["Teguh", "Bara", "Dikri", "Reihan", "Alif", "Teguh", "Bara", "Dikri", "Reihan", "Alif"];
    return view('tampil1', compact('siswa'));
});

Route::get('halaman2', function () {
    $hobi = ["Hiking", "Baca Komik", "Lari", "Main Game", "Futsal", "Hiking", "Baca Komik", "Lari", "Main Game", "Futsal"];
    return view('tampil2', compact('hobi'));
});

Route::get('halaman3', function () {
    $umur = [17, 16, 16, 17, 16, 17, 16, 16, 17, 16];
    return view('tampil3', compact('umur'));
});

// Route::get ('post', [PostsController::class, 'menampilkan']);

// return $post = post::find(2);

// $post = post::find(1);
// $post->content = "Belajar dengan baik ya";
// $post->save();
// return $post;

// $post = post::find(1);
// $post->delete();
// return $post;

// $post = new post;
// $post->title = "Menjadi diri yang disiplin";
// $post->content = "agar bisa menjadi orang yang disiplin";
// $post->save();
// return $post;

Route::get('siswa', function () {
    $siswa = siswa::all();
    return view('siswa', compact('siswa'));
});

Route::get('biodata', [BiodatasController::class, 'menampilkan']);

//merubah data
// $biodata = post::find(1);
// $biodata->nama_lengkap = "Belajar dengan baik ya";
// $biodata->save();
// return $biodata;

// menambahkan data
// $biodata = new Biodata;
// $biodata->nama_lengkap = "Kami";
// $biodata->jenis_kelamin = "Perempuan";
// $biodata->tanggal_lahir = "2008-8-23";
// $biodata->tempat_lahir = "Bandung";
// $biodata->agama = "Islam";
// $biodata->alamat = "Baleendah";
// $biodata->telepon = 886565454;
// $biodata->email = "aku123@gmail.com";
// $biodata->save();
// return $biodata;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostsController::class);
Route::resource('biodata', BiodatasController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('telepon', TeleponController::class);

// route mengambil method oneToOne
Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();

    // jika ingin menampilkan semua data
    // $walis = Wali::with('mahasiswa')->get();
    // foreach ($walis as $wali) {
    //     echo "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama} <br>";
    // }

    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

// route mengambil method OneToMany
Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});

Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);
Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});

Route::get('eloquent', [RelasiController::class, 'eloquent']);
