<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerTimDev extends Model
{
    use HasFactory;
    protected $table = 'tim_dev';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'kd_dosen',
        'nama'
    ];    
    
}
