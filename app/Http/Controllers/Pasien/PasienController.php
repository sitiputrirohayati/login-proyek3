<?php

namespace App\Http\Controllers\Pasien;
use App\Http\Controllers\Controller;

class PasienController extends Controller
{
    public function view() {
        return view('pasien.index');
    }
}
