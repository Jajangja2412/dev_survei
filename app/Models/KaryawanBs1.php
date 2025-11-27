<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KaryawanBs1 extends Authenticatable
{
    protected $table = 'karyawanbs1';
    protected $primaryKey = 'nip'; // Set 'nip' sebagai primary key jika ini menjadi ID unik

    // Tentukan kolom-kolom yang bisa diisi
    protected $fillable = [
        'nip', 'passencrypt', 'nama', 'email', 'akses' // Tambahkan kolom yang relevan
    ];

    protected $hidden = [
        'passencrypt', 'remember_token', // Sembunyikan password
    ];

    public function getAuthPassword()
    {
        return $this->passencrypt; // Tentukan kolom password yang digunakan
    }
}
