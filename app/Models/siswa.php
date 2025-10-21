<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_lengkap','jenis_kelamin','tanggal_lahir','kelas'];
    public $timestamps = true;
}
