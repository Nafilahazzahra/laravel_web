<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /** @use HasFactory<\Database\Factories\MahasiswaFactory> */
    use HasFactory;

    protected $table = 'mahasiswas';  // Nama tabel
    protected $primaryKey = 'id';     // Primary key tabel
    public $timestamps = true;        // Gunakan timestamps (created_at, updated_at)

    protected $fillable = ['nim', 'nama_lengkap', 'tempat_lahir', 'tgl_lahir', 'prodi', 'email', 'alamat'];

}
