<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda.beranda');
    }
    public function ldtk()
    {
        $email = Auth::user()->email;
        $karyawan = DB::table('karyawanbs1')->where('email_bsi', $email)->get();

        // dd($karyawan);
        // die;

        return view('survei.ldtk',compact('karyawan'));
    }
}