<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = ['nama', 'nipd'];

    // relasi ke dosen 
    public function mahasiswas()
    {
        // dosen bisa memiliki banyak murid
        return $this->hasMany(Mahasiswa::class, 'id_dosen');
    }
}
