<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek()
    {
        $role = auth()->user()->role_id;

        if ($role == 1) {
            // jika user admin
            return redirect('/admin');
        } else if ($role == 2) {
            // jika user dokter
            return redirect('/dokter');
        } else {
            // jika user pasien
            return redirect('/pasien');
        }
    }
}
