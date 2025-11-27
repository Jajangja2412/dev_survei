<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\KuesionerTimDev;
use Illuminate\Support\Facades\Storage;


class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function boot()
    {
        $nip = Auth::check() ? Auth::user()->nip : null;
        $timDevData = $nip ? KuesionerTimDev::where('nip', $nip)->first() : null;
        View::share('timDevData', $timDevData);
    }

    public function vm_lap_survei(Request $request)
    {
        $result = DB::table('laporan_survei_vm')->select('no', 'periode')->get();

        $selected = $request->input('cmbpilih');
        $detail = null;

        if ($selected) {
            $detail = DB::table('laporan_survei_vm')
                ->select('periode', 'pdf')
                ->where('no', $selected)
                ->first();
        }

        return view('laporan.survei.vm_lap_survei', compact('result', 'detail', 'selected'));
    }
    public function ldtk_lap_survei(Request $request)
    {
        $result = DB::table('laporan_survei_ldtk')->select('no', 'periode')->get();

        $selected = $request->input('cmbpilih');
        $detail = null;

        if ($selected) {
            $detail = DB::table('laporan_survei_ldtk')
                ->select('periode', 'pdf')
                ->where('no', $selected)
                ->first();
        }

        return view('laporan.survei.ldtk_lap_survei', compact('result', 'detail', 'selected'));
    }
    public function lppm_lap_survei(Request $request)
    {
        $result = DB::table('laporan_survei_lppm')->select('no', 'periode')->get();

        $selected = $request->input('cmbpilih');
        $detail = null;

        if ($selected) {
            $detail = DB::table('laporan_survei_lppm')
                ->select('periode', 'pdf')
                ->where('no', $selected)
                ->first();
        }

        return view('laporan.survei.lppm_lap_survei', compact('result', 'detail', 'selected'));
    }
    public function spsdm_lap_survei(Request $request)
    {
        $result = DB::table('laporan_survei_spsdm')->select('no', 'periode')->get();

        $selected = $request->input('cmbpilih');
        $detail = null;

        if ($selected) {
            $detail = DB::table('laporan_survei_spsdm')
                ->select('periode', 'pdf')
                ->where('no', $selected)
                ->first();
        }

        return view('laporan.survei.spsdm_lap_survei', compact('result', 'detail', 'selected'));
    }
    public function lk_lap_survei(Request $request)
    {
        $result = DB::table('laporan_survei_lk')->select('no', 'periode')->get();

        $selected = $request->input('cmbpilih');
        $detail = null;

        if ($selected) {
            $detail = DB::table('laporan_survei_lk')
                ->select('periode', 'pdf')
                ->where('no', $selected)
                ->first();
        }

        return view('laporan.survei.lk_lap_survei', compact('result', 'detail', 'selected'));
    }
    public function edom_lap_survei(Request $request)
    {
        $result = DB::table('laporan_survei_edom')->select('no', 'periode')->get();

        $selected = $request->input('cmbpilih');
        $detail = null;

        if ($selected) {
            $detail = DB::table('laporan_survei_edom')
                ->select('periode', 'pdf')
                ->where('no', $selected)
                ->first();
        }

        return view('laporan.survei.edom_lap_survei', compact('result', 'detail', 'selected'));
    }

}