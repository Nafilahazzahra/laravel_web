<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    /** @use HasFactory<\Database\Factories\ProdiFactory> */
    use HasFactory;

    protected $fillable = [
        
        'nama',      // Menambahkan kolom nama prodi
       
      ];
      public function dosens()
    {
        return $this->hasMany(Dosen::class, 'prodi_id');
    }
}