<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Qrcodepengumuman;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda.beranda');
    }
    public function ldtk()
    {
        return view('survei.ldtk');
    }
}