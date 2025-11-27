<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerBukaTutup extends Model
{
    use HasFactory;
    protected $table = 'menu_buka_tutup';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'nama_menu',
        'tgl_mulai',
        'tgl_tutup',
        'pesan',
        'link'
    ];    
    
}
