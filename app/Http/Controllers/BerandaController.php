<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\KuesionerDosenTendik;
use App\Models\KuesionerVisiMisi;
use App\Models\KuesionerBukaTutup;
use App\Models\KuesionerTimDev;
use App\Models\KuesionerTimRiset;
use App\Models\KuesionerLppm;
use App\Models\KuesionerSpsdm;
use Carbon\Carbon;

class BerandaController extends Controller
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

    public function index()
    {
        return view('beranda.beranda');
    }
    public function ldtk()
    {
        $email = Auth::user()->nip;
        $karyawan = DB::table('karyawanbs1')->where('nip', $email)->get();
        $jrs = DB::table('jrskampus')->get();
        $kue_ldtk = DB::table('kuesioner_dosen_tendik')->where('nip', $karyawan->first()->nip)->get();


        // Ambil data tgl_mulai dan tgl_tutup berdasarkan id
        $menu = KuesionerBukaTutup::find(3); // Ganti `1` dengan ID yang sesuai
        $today = Carbon::now()->toDateString(); // Format "Y-m-d"

        // Periksa apakah tanggal hari ini berada dalam rentang tanggal buka dan tutup
        $isEnabled = false;
        if ($menu) {
            $isEnabled = ($today >= $menu->tgl_mulai && $today <= $menu->tgl_tutup);
        }

        // dd($kue_ldtk);
        // die;

        return view('survei.ldtk',compact('karyawan','jrs','kue_ldtk','isEnabled'));
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
    public function visimisi()
    {
        $email = Auth::user()->nip;
        $karyawan = DB::table('karyawanbs1')->where('nip', $email)->get();
        $jrs = DB::table('jrskampus')->get();
        $kue_vm = DB::table('kuesioner_vmdosen')->where('nip', $karyawan->first()->nip)->get();

        // Ambil data tgl_mulai dan tgl_tutup berdasarkan id
        $menu = KuesionerBukaTutup::find(1); // Ganti `1` dengan ID yang sesuai
        $today = Carbon::now()->toDateString(); // Format "Y-m-d"

        // Periksa apakah tanggal hari ini berada dalam rentang tanggal buka dan tutup
        $isEnabled = false;
        if ($menu) {
            $isEnabled = ($today >= $menu->tgl_mulai && $today <= $menu->tgl_tutup);
        }

        // dd($kue_ldtk);
        // die;

        return view('survei.visimisi',compact('karyawan','jrs','kue_vm','isEnabled'));
    }
    public function simpan_vm(Request $request)
    {
        // dd($request->all()); // Lihat semua data yang dikirim
        // die;
       

         // Validasi data yang diterima
         $validatedData = $request->validate([
            'nip' => 'required|string',
            'nama' => 'required|string',
            'unit_kerja' => 'required|string',
            'program_studi' => 'required|string',
            'upps' => 'required|string',
            'f2_2' => 'nullable|array',
            'f2_2_others' => 'nullable|string|max:100',
            'f2-1' => 'nullable|string',
            'f2-3' => 'nullable|string',
            'f2-41' => 'nullable|string',
            'F2-42' => 'nullable|string',
            'F2-43' => 'nullable|string',
            'F2-44' => 'nullable|string',
            'F2-45' => 'nullable|string',
            'F3-1' => 'nullable|string',
            'F3-2' => 'nullable|string',
            'F3-3' => 'nullable|string',
            'F3-4' => 'nullable|string',
            'F3-5' => 'nullable|string',
            'F3-6' => 'nullable|string',
            'F4' => 'nullable|string',
            'stat' => 'nullable|string',
        ]);
    
        // Mengambil data f2_2 dan menggabungkannya jika "Lainnya" dipilih
        $f2_2 = $validatedData['f2_2'] ?? [];
        $f2_2_others = $validatedData['f2_2_others'] ?? null;
    
        // Jika ada pilihan 'Lainnya', tambahkan ke array f2_2
        if ($f2_2_others) {
            $f2_2[] = 'Lainnya: ' . $f2_2_others;
        }
    
        // Menyimpan data menggunakan Query Builder
        DB::table('survei-bri.kuesioner_vmdosen')->insert([
            'nip' => $validatedData['nip'],
            'nama' => $validatedData['nama'],
            'unit_kerja' => $validatedData['unit_kerja'],
            'program_studi' => $validatedData['program_studi'],
            'upps' => $validatedData['upps'],
            'f2-2' => json_encode($f2_2), // Menyimpan sebagai JSON untuk array
            'f2-1' => $validatedData['f2-1'] ?? null,
            'f2-3' => $validatedData['f2-3'] ?? null,
            'f2-41' => $validatedData['f2-41'] ?? null,
            'F2-42' => $validatedData['F2-42'] ?? null,
            'F2-43' => $validatedData['F2-43'] ?? null,
            'F2-44' => $validatedData['F2-44'] ?? null,
            'F2-45' => $validatedData['F2-45'] ?? null,
            'F3-1' => $validatedData['F3-1'] ?? null,
            'F3-2' => $validatedData['F3-2'] ?? null,
            'F3-3' => $validatedData['F3-3'] ?? null,
            'F3-4' => $validatedData['F3-4'] ?? null,
            'F3-5' => $validatedData['F3-5'] ?? null,
            'F3-6' => $validatedData['F3-6'] ?? null,
            'F4' => $validatedData['F4'] ?? null,
            'stat' => $validatedData['stat'] ?? null,
        ]);

        // Redirect atau kembalikan response
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    public function survei_lppm()
    {
        $email = Auth::user()->nip;
        $karyawan = DB::table('karyawanbs1')->where('nip', $email)->get();
        $jrs = DB::table('jrskampus')->get();
        $kue_lppm = DB::table('kuesioner_lppm')->where('nip', $karyawan->first()->nip)->get();

        // Ambil data tgl_mulai dan tgl_tutup berdasarkan id
        $menu = KuesionerBukaTutup::find(4); // Ganti `1` dengan ID yang sesuai
        $today = Carbon::now()->toDateString(); // Format "Y-m-d"

        // Periksa apakah tanggal hari ini berada dalam rentang tanggal buka dan tutup
        $isEnabled = false;
        if ($menu) {
            $isEnabled = ($today >= $menu->tgl_mulai && $today <= $menu->tgl_tutup);
        }
        return view('survei.lppm',compact('karyawan','jrs','kue_lppm','isEnabled'));
    }
    
    public function simpan_lppm(Request $request)
    {
        // dd('test');
        // die;

        // Data untuk disimpan
        $data = $request->all();

        // Simpan data ke database
        KuesionerLppm::create($data);

        // Redirect atau kembalikan response
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    public function survei_spsdm()
    {
        $email = Auth::user()->nip;
        $karyawan = DB::table('karyawanbs1')->where('nip', $email)->get();
        $jrs = DB::table('jrskampus')->get();
        $kue_spsdm = DB::table('kuesioner_spsdm')->where('nip', $karyawan->first()->nip)->get();

        // Ambil data tgl_mulai dan tgl_tutup berdasarkan id
        $menu = KuesionerBukaTutup::find(4); // Ganti `1` dengan ID yang sesuai
        $today = Carbon::now()->toDateString(); // Format "Y-m-d"

        // Periksa apakah tanggal hari ini berada dalam rentang tanggal buka dan tutup
        $isEnabled = false;
        if ($menu) {
            $isEnabled = ($today >= $menu->tgl_mulai && $today <= $menu->tgl_tutup);
        }
        return view('survei.spsdm',compact('karyawan','jrs','kue_spsdm','isEnabled')); 
    }
    public function simpan_spsdm(Request $request)
    {
        // dd('test');
        // die;

        // Data untuk disimpan
        $data = $request->all();

        // Simpan data ke database
        KuesionerSpsdm::create($data);

        // Redirect atau kembalikan response
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    public function buka_tutup_vm()
    {
        // dd('tets');
        // die;
        $data = KuesionerBukaTutup::all();
        return view('survei.buka_tutup_menu',compact('data'));
    }
    public function update_buka_tutup(Request $request)
    {
        $item = KuesionerBukaTutup::find($request->id);
        $item->tgl_mulai = $request->tgl_mulai;
        $item->tgl_tutup = $request->tgl_tutup;
        $item->link = $request->link;
        $item->save();
    
        return redirect()->back()->with('success', 'Data berhasil diupdate!');
    }
    public function akses_riset()
    {
        $data = KuesionerTimRiset::all();
        return view('survei.akses_riset',compact('data'));
    }
    public function destroy($nip)
    {
        // Temukan data berdasarkan NIP
        $karyawan = KuesionerTimRiset::where('nip', $nip)->first();

        if ($karyawan) {
            $karyawan->delete();
            return redirect('/akses-riset')->with('success', 'Data berhasil dihapus.');
        }

        return redirect('/akses-riset')->with('error', 'Data tidak ditemukan.');
    }
    public function tambah_riset()
    {
        return view('survei.tambah_akses_riset');
    }
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nip' => 'required|string',
            'kd_dosen' => 'required|string',
            'nama' => 'required|string'
        ]);

        // Simpan data ke database
        KuesionerTimRiset::create([
            'nip' => $request->nip,
            'kd_dosen' => $request->kd_dosen,
            'nama' => $request->nama,
        ]);

        return redirect('/akses-riset')->with('success', 'Data berhasil ditambahkan.');
    }
    public function data_vm()
    {
        $data = KuesionerVisiMisi::all();
        return view('survei.data_vm',compact('data'));
    }
    public function hapus_survei_vm($nip)
    {
        // Temukan data berdasarkan NIP
        $vm = KuesionerVisiMisi::where('nip', $nip)->first();

        if ($vm) {
            $vm->delete();
            return redirect('/data-vm')->with('success', 'Data berhasil dihapus.');
        }

        return redirect('/data-vm')->with('error', 'Data tidak ditemukan.');
    }
    public function proses_backup_vm()
    {
        // Query untuk menyalin data dari kuesioner_vmdosen ke kuesioner_vmdosen_all
        $insertQuery = "INSERT INTO kuesioner_vmdosen_all SELECT * FROM kuesioner_vmdosen";

        // Menjalankan query INSERT
        DB::statement($insertQuery); // Menggunakan DB::statement() untuk menjalankan query INSERT INTO ... SELECT

        // Query untuk menghapus seluruh data di kuesioner_vmdosen
        $truncateQuery = "TRUNCATE TABLE kuesioner_vmdosen";

        // Menjalankan query TRUNCATE
        DB::statement($truncateQuery); // Menggunakan DB::statement() untuk menjalankan query TRUNCATE

        // Redirect ke halaman '/data-vm' dengan pesan sukses
        return redirect('/data-vm')->with('success', 'Data berhasil dibackup dan dihapus.');
    }
    public function data_ldtk()
    {
        $data = KuesionerDosenTendik::all();
        return view('survei.data_ldtk',compact('data'));
    }
    public function hapus_survei_ldtk($nip)
    {
        // Temukan data berdasarkan NIP
        $ldtk = KuesionerDosenTendik::where('nip', $nip)->first();

        if ($ldtk) {
            $ldtk->delete();
            return redirect('/data-ldtk')->with('success', 'Data berhasil dihapus.');
        }

        return redirect('/data-ldtk')->with('error', 'Data tidak ditemukan.');
    }
    public function proses_backup_ldtk(request $request)
    {
        $periode = $request->input('periode');
        // Query untuk menyalin data dari kuesioner_vmdosen ke kuesioner_vmdosen_all
        $insertQuery = "INSERT INTO kuesioner_dosen_tendik_all SELECT *,'$periode' FROM kuesioner_dosen_tendik";

        // Menjalankan query INSERT
        DB::statement($insertQuery); // Menggunakan DB::statement() untuk menjalankan query INSERT INTO ... SELECT

        // Query untuk menghapus seluruh data di kuesioner_dosen_tendik
        $truncateQuery = "TRUNCATE TABLE kuesioner_dosen_tendik";

        // Menjalankan query TRUNCATE
        DB::statement($truncateQuery); // Menggunakan DB::statement() untuk menjalankan query TRUNCATE

        // Redirect ke halaman '/data-vm' dengan pesan sukses
        return redirect('/data-ldtk')->with('success', 'Data berhasil dibackup dan dihapus.');
    }
    public function data_lppm()
    {
        $data = KuesionerLppm::all();
        return view('survei.data_lppm',compact('data'));
    }
    public function hapus_survei_lppm($nip)
    {
        // Temukan data berdasarkan NIP
        $lppm = KuesionerLppm::where('nip', $nip)->first();

        if ($lppm) {
            $lppm->delete();
            return redirect('/data-lppm')->with('success', 'Data berhasil dihapus.');
        }

        return redirect('/data-lppm')->with('error', 'Data tidak ditemukan.');
    }
    public function proses_backup_lppm()
    {
        // Query untuk menyalin data dari kuesioner_vmdosen ke kuesioner_vmdosen_all
        $insertQuery = "INSERT INTO kuesioner_lppm_all SELECT * FROM kuesioner_lppm";

        // Menjalankan query INSERT
        DB::statement($insertQuery); // Menggunakan DB::statement() untuk menjalankan query INSERT INTO ... SELECT

        // Query untuk menghapus seluruh data di kuesioner_lppm
        $truncateQuery = "TRUNCATE TABLE kuesioner_lppm";

        // Menjalankan query TRUNCATE
        DB::statement($truncateQuery); // Menggunakan DB::statement() untuk menjalankan query TRUNCATE

        // Redirect ke halaman '/data-vm' dengan pesan sukses
        return redirect('/data-lppm')->with('success', 'Data berhasil dibackup dan dihapus.');
    }
    public function data_spsdm()
    {
        $data = KuesionerSpsdm::all();
        return view('survei.data_spsdm',compact('data'));
    }
    public function hapus_survei_spsdm($nip)
    {
        // Temukan data berdasarkan NIP
        $spsdm = KuesionerSpsdm::where('nip', $nip)->first();

        if ($spsdm) {
            $spsdm->delete();
            return redirect('/data-spsdm')->with('success', 'Data berhasil dihapus.');
        }

        return redirect('/data-spsdm')->with('error', 'Data tidak ditemukan.');
    }
    public function proses_backup_spsdm()
    {
        // Query untuk menyalin data dari kuesioner_vmdosen ke kuesioner_vmdosen_all
        $insertQuery = "INSERT INTO kuesioner_spsdm_all SELECT * FROM kuesioner_spsdm";

        // Menjalankan query INSERT
        DB::statement($insertQuery); // Menggunakan DB::statement() untuk menjalankan query INSERT INTO ... SELECT

        // Query untuk menghapus seluruh data di kuesioner_spsdm
        $truncateQuery = "TRUNCATE TABLE kuesioner_spsdm";

        // Menjalankan query TRUNCATE
        DB::statement($truncateQuery); // Menggunakan DB::statement() untuk menjalankan query TRUNCATE

        // Redirect ke halaman '/data-vm' dengan pesan sukses
        return redirect('/data-spsdm')->with('success', 'Data berhasil dibackup dan dihapus.');
    }

}