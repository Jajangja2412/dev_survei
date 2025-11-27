<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerVisiMisi extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'kuesioner_vmdosen';

    // Tentukan primary key yang digunakan
    protected $primaryKey = 'nip';  // Gunakan nip sebagai primary key

    // Jika nip bukan auto increment
    public $incrementing = false;  // Menonaktifkan auto increment pada nip

    // Nonaktifkan timestamps jika tidak digunakan
    public $timestamps = false;

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nip',
        'nama',
        'unit_kerja',
        'program_studi',
        'upps',
        'f2-1',
        'f2-2',
        'f2-3',
        'f2-41',
        'F2-42',
        'F2-43',
        'F2-44',
        'F2-45',
        'F3-1',
        'F3-2',
        'F3-3',
        'F3-4',
        'F4',
        'stat'
    ];    
}
