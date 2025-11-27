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
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
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

    public function upload_survei_vm()
    {
        $results = DB::table('laporan_survei_vm')->get();
        
        return view('upload.upload_survei_vm', [
            'result' => $results,
        ]);
    }
    public function tambah_hasil_survei_vm()
    {
        $title = 'Upload menu survei vm';
        return view('upload.tambah_hasil_survei_vm', [
            'title' => $title,
        ]);
    }
    public function simpan_hasil_survei_vm(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('laporan_survei_vm')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_survei_vm')->with('success', 'Laporan berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_hasil_survei_vm($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('laporan_survei_vm')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_vm/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('laporan_survei_vm')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }

    public function upload_survei_ldtk()
    {
        $results = DB::table('laporan_survei_ldtk')->get();
        
        return view('upload.upload_survei_ldtk', [
            'result' => $results,
        ]);
    }

    public function tambah_hasil_survei_ldtk()
    {
        $title = 'Upload menu survei ldtk';
        return view('upload.tambah_hasil_survei_ldtk', [
            'title' => $title,
        ]);
    }
    public function simpan_hasil_survei_ldtk(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('laporan_survei_ldtk')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_survei_ldtk')->with('success', 'Laporan berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_hasil_survei_ldtk($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('laporan_survei_ldtk')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_ldtk/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('laporan_survei_ldtk')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }


    public function upload_survei_lppm()
    {
        $results = DB::table('laporan_survei_lppm')->get();
        
        return view('upload.upload_survei_lppm', [
            'result' => $results,
        ]);
    }
    public function tambah_hasil_survei_lppm()
    {
        $title = 'Upload menu survei lppm';
        return view('upload.tambah_hasil_survei_lppm', [
            'title' => $title,
        ]);
    }
    public function simpan_hasil_survei_lppm(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('laporan_survei_lppm')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_survei_lppm')->with('success', 'Laporan berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_hasil_survei_lppm($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('laporan_survei_lppm')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_lppm/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('laporan_survei_lppm')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }

    public function upload_survei_spsdm()
    {
        $results = DB::table('laporan_survei_spsdm')->get();
        
        return view('upload.upload_survei_spsdm', [
            'result' => $results,
        ]);
    }
    public function tambah_hasil_survei_spsdm()
    {
        $title = 'Upload menu survei spsdm';
        return view('upload.tambah_hasil_survei_spsdm', [
            'title' => $title,
        ]);
    }
    public function simpan_hasil_survei_spsdm(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('laporan_survei_spsdm')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_survei_spsdm')->with('success', 'Laporan berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_hasil_survei_spsdm($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('laporan_survei_spsdm')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_spsdm/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('laporan_survei_spsdm')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }
    public function upload_survei_lk()
    {
        $results = DB::table('laporan_survei_lk')->get();
        
        return view('upload.upload_survei_lk', [
            'result' => $results,
        ]);
    }
    public function tambah_hasil_survei_lk()
    {
        $title = 'Upload menu survei lk';
        return view('upload.tambah_hasil_survei_lk', [
            'title' => $title,
        ]);
    }
    public function simpan_hasil_survei_lk(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('laporan_survei_lk')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_survei_lk')->with('success', 'Laporan berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_hasil_survei_lk($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('laporan_survei_lk')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_lk/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('laporan_survei_lk')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }
    public function upload_survei_edom()
    {
        $results = DB::table('laporan_survei_edom')->get();
        
        return view('upload.upload_survei_edom', [
            'result' => $results,
        ]);
    }
    public function tambah_hasil_survei_edom()
    {
        $title = 'Upload menu survei edom';
        return view('upload.tambah_hasil_survei_edom', [
            'title' => $title,
        ]);
    }
    public function simpan_hasil_survei_edom(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('laporan_survei_edom')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_survei_edom')->with('success', 'Laporan berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_hasil_survei_edom($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('laporan_survei_edom')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_edom/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('laporan_survei_edom')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }


// ini mulai upload pedoman








    public function upload_pedoman_survei_vm()
    {
        $results = DB::table('pedoman_survei_vm')->get();
        
        return view('upload.upload_pedoman_survei_vm', [
            'result' => $results,
        ]);
    }
    public function tambah_pedoman_survei_vm()
    {
        $title = 'Upload menu survei vm';
        return view('upload.tambah_pedoman_survei_vm', [
            'title' => $title,
        ]);
    }
    public function simpan_pedoman_survei_vm(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('pedoman_survei_vm')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_pedoman_survei_vm')->with('success', 'Pedoman berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_pedoman_survei_vm($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('pedoman_survei_vm')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_vm/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('pedoman_survei_vm')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }

    public function upload_pedoman_survei_ldtk()
    {
        $results = DB::table('pedoman_survei_ldtk')->get();
        
        return view('upload.upload_pedoman_survei_ldtk', [
            'result' => $results,
        ]);
    }

    public function tambah_pedoman_survei_ldtk()
    {
        $title = 'Upload menu survei ldtk';
        return view('upload.tambah_pedoman_survei_ldtk', [
            'title' => $title,
        ]);
    }
    public function simpan_pedoman_survei_ldtk(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('pedoman_survei_ldtk')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_pedoman_survei_ldtk')->with('success', 'pedoman berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_pedoman_survei_ldtk($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('pedoman_survei_ldtk')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_ldtk/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('pedoman_survei_ldtk')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }


    public function upload_pedoman_survei_lppm()
    {
        $results = DB::table('pedoman_survei_lppm')->get();
        
        return view('upload.upload_pedoman_survei_lppm', [
            'result' => $results,
        ]);
    }
    public function tambah_pedoman_survei_lppm()
    {
        $title = 'Upload menu survei lppm';
        return view('upload.tambah_pedoman_survei_lppm', [
            'title' => $title,
        ]);
    }
    public function simpan_pedoman_survei_lppm(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('pedoman_survei_lppm')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_pedoman_survei_lppm')->with('success', 'pedoman berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_pedoman_survei_lppm($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('pedoman_survei_lppm')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_lppm/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('pedoman_survei_lppm')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }

    public function upload_pedoman_survei_spsdm()
    {
        $results = DB::table('pedoman_survei_spsdm')->get();
        
        return view('upload.upload_pedoman_survei_spsdm', [
            'result' => $results,
        ]);
    }
    public function tambah_pedoman_survei_spsdm()
    {
        $title = 'Upload menu survei spsdm';
        return view('upload.tambah_pedoman_survei_spsdm', [
            'title' => $title,
        ]);
    }
    public function simpan_pedoman_survei_spsdm(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('pedoman_survei_spsdm')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_pedoman_survei_spsdm')->with('success', 'pedoman berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_pedoman_survei_spsdm($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('pedoman_survei_spsdm')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_spsdm/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('pedoman_survei_spsdm')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }
    public function upload_pedoman_survei_lk()
    {
        $results = DB::table('pedoman_survei_lk')->get();
        
        return view('upload.upload_pedoman_survei_lk', [
            'result' => $results,
        ]);
    }
    public function tambah_pedoman_survei_lk()
    {
        $title = 'Upload menu survei lk';
        return view('upload.tambah_pedoman_survei_lk', [
            'title' => $title,
        ]);
    }
    public function simpan_pedoman_survei_lk(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('pedoman_survei_lk')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_pedoman_survei_lk')->with('success', 'pedoman berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_pedoman_survei_lk($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('pedoman_survei_lk')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_lk/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('pedoman_survei_lk')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }
    public function upload_pedoman_survei_edom()
    {
        $results = DB::table('pedoman_survei_edom')->get();
        
        return view('upload.upload_pedoman_survei_edom', [
            'result' => $results,
        ]);
    }
    public function tambah_pedoman_survei_edom()
    {
        $title = 'Upload menu survei edom';
        return view('upload.tambah_pedoman_survei_edom', [
            'title' => $title,
        ]);
    }
    public function simpan_pedoman_survei_edom(Request $request)
    {
        $request->validate([
        'periode' => 'required|string|max:255',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Maks 2MB
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('download'), $pdf_name); // Simpan ke /public/download

            DB::table('pedoman_survei_edom')->insert([
                'periode' => $request->periode,
                'pdf' => $pdf_name
            ]);

            return redirect()->route('upload_pedoman_survei_edom')->with('success', 'pedoman berhasil disimpan.');
        } else {
            return back()->with('error', 'File tidak valid.');
        }

    }
    public function hapus_pedoman_survei_edom($no)
    {
        // Ambil data berdasarkan nomor
        $data = DB::table('pedoman_survei_edom')->where('no', $no)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada pdf, hapus file dari storage (disesuaikan dengan lokasi penyimpanan)
        if (!empty($data->pdf)) {
            // Misal file disimpan di: storage/app/public/survei_edom/
            $filePath = 'public/download/' . $data->pdf;

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        // Hapus data dari database
        DB::table('pedoman_survei_edom')->where('no', $no)->delete();

        return redirect()->back()->with('success', 'Data dan file berhasil dihapus.');
    }
 

}