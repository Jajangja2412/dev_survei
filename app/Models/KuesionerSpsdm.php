<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerSpsdm extends Model
{
    use HasFactory;
    protected $table = 'kuesioner_spsdm';

     // Tentukan primary key yang digunakan
     protected $primaryKey = 'nip';  // Gunakan nip sebagai primary key

     // Jika nip bukan auto increment
     public $incrementing = false;  // Menonaktifkan auto increment pada nip

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'nama',
        'unit_kerja',
        'upps',
        'program_studi',
        'f21',
        'f22',
        'f23',
        'f24',
        'f25',
        'f26',
        'f31',
        'f32',
        'f33',
        'f34',
        'f35',
        'f36',
        'f41',
        'f42',
        'f43',
        'f44',
        'f51',
        'f52',
        'f53',
        'f54',
        'f55',
        'f56',
        'f57',
        'f58',
        'f61',
        'f62',
        'f63',
        'f64',
        'f71',
        'f72',
        'f73',
        'f74',
        'f75',
        'f76',
        'f81',
        'f82',
        'f83',
        'f84',
        'f91',
        'f92',
        'f93',
        'f94',
        'f95',
        'f96',
        'stat',
    ];
    
    
}
