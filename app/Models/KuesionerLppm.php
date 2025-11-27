<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerLppm extends Model
{
    use HasFactory;
    protected $table = 'kuesioner_lppm';

     // Tentukan primary key yang digunakan
     protected $primaryKey = 'nip';  // Gunakan nip sebagai primary key

     // Jika nip bukan auto increment
     public $incrementing = false;  // Menonaktifkan auto increment pada nip

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'nm_dosen',
        'program_studi',
        'upps',
        'f21',
        'f22',
        'f23',
        'f24',
        'f25',
        'f31',
        'f32',
        'f33',
        'f34',
        'f35',
        'f41',
        'f42',
        'f43',
        'f51',
        'f52',
        'f53',
        'f54',
        'f55',
        'f56',
        'f57',
        'f6',
        'f7',
        'stat',
    ];
    
}
