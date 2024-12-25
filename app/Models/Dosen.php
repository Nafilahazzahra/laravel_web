<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    /** @use HasFactory<\Database\Factories\DosenFactory> */
    use HasFactory;

      // Tentukan atribut yang bisa diisi secara massal
      protected $fillable = [
        'nik',       // Menambahkan kolom nik
        'nama',      // Menambahkan kolom nama
        'email',     // Menambahkan kolom email
        'no_telp',   // Menambahkan kolom nomor telepon
        'prodi_id',  // Menambahkan kolom prodi_id
        'alamat',    // Menambahkan kolom alamat
      ];


    //    // Relasi ke tabel Prodi
    // public function prodi()
    // {
    //     return $this->belongsTo(Prodi::class, 'prodi_id');
    // }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}