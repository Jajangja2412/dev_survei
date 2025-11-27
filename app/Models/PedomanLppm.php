<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedomanLppm extends Model
{
    use HasFactory;
    protected $table = 'pedoman_survei_lppm';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'no',
        'periode',
        'pdf'
    ];    
    
}
