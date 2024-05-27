<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\KuesionerDosenTendik;

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
        $jrs = DB::table('jrskampus')->get();
        $kue_ldtk = DB::table('kuesioner_dosen_tendik')->where('nip', $karyawan->first()->nip)->get();

        // dd($kue_ldtk);
        // die;

        return view('survei.ldtk',compact('karyawan','jrs','kue_ldtk'));
    }
    public function simpan_ldtk(Request $request)
    {
        // dd('test');
        // die;

        // Data untuk disimpan
        $data = $request->all();

        // Simpan data ke database
        KuesionerDosenTendik::create($data);

        // Redirect atau kembalikan response
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}