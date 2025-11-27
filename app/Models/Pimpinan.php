<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    use HasFactory;
    protected $table = 'pimpinan';
     // Tentukan bahwa `nip` adalah primary key
     protected $primaryKey = 'nip';

     // Jika `nip` bukan auto-increment, tambahkan properti ini
     public $incrementing = false;
 
     // Jika tipe data `nip` bukan integer, ubah ke string
     protected $keyType = 'string';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'kd_dosen',
        'nama'
    ];    
    
}
