<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\KaryawanBs1;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        // Cari pengguna berdasarkan NIP
        $user = KaryawanBs1::where('nip', $credentials['nip'])->first();

        // Verifikasi `password` dengan `passinter`
        if ($user && Hash::check($credentials['password'], $user->passinter)) {
            // Login manual tanpa `Auth::attempt`
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/beranda')->with('success', 'Anda berhasil login ke survei.cyber-univ.ac.id!');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Anda sudah keluar dari aplikasi!');
    }
}
