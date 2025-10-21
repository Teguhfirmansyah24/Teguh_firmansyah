<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim'];

    // relasi mahasiswa dan wali
    public function wali()
    {
        // satu mahasiswa punya satu wali
        return $this->hasOne(Wali::class, 'id_mahasiswa');
    }

    // relasi ke dosen
    public function dosen()
    {
        // mahasiswa hanya bisa memiliki saru dosen
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
}
