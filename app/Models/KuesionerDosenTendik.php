<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuesionerDosenTendik extends Model
{
    use HasFactory;
    protected $table = 'kuesioner_dosen_tendik';

    // Define the columns you want to be mass assignable
    // Nonaktifkan timestamps
    public $timestamps = false;
    protected $fillable = [
        'nip', 'nama', 'status', 'nm_prodi', 'f22', 'f22h', 'f22k', 'f23h', 'f23k', 'f24h', 'f24k',
        'f25h', 'f25k', 'f26h', 'f26k', 'f27h', 'f27k', 'f28h', 'f28k', 'f29h', 'f29k', 'f210h', 'f210k',
        'f211h', 'f211k', 'f212h', 'f212k', 'f213h', 'f213k', 'f214h', 'f214k', 'f215h', 'f215k', 'f216h',
        'f216k', 'f217h', 'f217k', 'f218h', 'f218k', 'f219', 'f31h', 'f31k', 'f32h', 'f32k', 'f33h', 'f33k',
        'f34h', 'f34k', 'f35h', 'f35k', 'f41h', 'f41k', 'f42h', 'f42k', 'f43h', 'f43k', 'f44h', 'f44k',
        'f45h', 'f45k', 'f46h', 'f46k', 'f47h', 'f47k', 'f48h', 'f48k', 'f51h', 'f51k', 'f52h', 'f52k',
        'f53h', 'f53k', 'f61h', 'f61k', 'f62h', 'f62k', 'f63h', 'f63k', 'f64h', 'f64k', 'f71h', 'f71k',
        'f72h', 'f72k', 'f81h', 'f81k', 'f82h', 'f82k', 'f83h', 'f83k', 'f84h', 'f84k', 'f85h', 'f85k',
        'f91h', 'f91k', 'f92h', 'f92k', 'stat', 'tgl'
    ];
    
}
