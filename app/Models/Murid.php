<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'alamat',
        'email',
        'id_kelas'
    ];
    public $timestamps = true;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
