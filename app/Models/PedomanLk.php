<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedomanLk extends Model
{
    use HasFactory;
    protected $table = 'pedoman_survei_lk';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'no',
        'periode',
        'pdf'
    ];    
    
}
