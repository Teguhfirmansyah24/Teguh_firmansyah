<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $fillable = ['nama', 'id_mahasiswa'];

    // relasi wali ke mahasiswa
    public function mahasiswa()
    {
        // menyatakan wali dimiliki satu mahasiswa
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}
