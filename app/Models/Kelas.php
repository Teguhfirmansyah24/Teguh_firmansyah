<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // kolom yang bisa di isi
    protected $fillable = ['id', 'nama_kelas'];
    public $timestamps = true;

    public function murid()
    {
        return $this->hasMany(Murid::class, 'id_kelas');
    }
}
