<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedomanLdtk extends Model
{
    use HasFactory;
    protected $table = 'pedoman_survei_ldtk';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'no',
        'periode',
        'pdf'
    ];    
    
}
