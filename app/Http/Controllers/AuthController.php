<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();
            $role = auth()->user()->role_id;

            if ($role == 1) {
                // jika user admin
                return redirect()->intended('/admin');
            } else if ($role == 2) {
                // jika user dokter
                return redirect()->intended('/dokter');
            } else {
                // jika user pasien
                return redirect()->intended('/pasien');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
