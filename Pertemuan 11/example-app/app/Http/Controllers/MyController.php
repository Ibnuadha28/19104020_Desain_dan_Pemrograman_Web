<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller
{
    // untuk mengakses beranda
    public function index() {
        return view('beranda');
    }

    // untuk mengakses about
    public function about() {
        return view('about');
    }

    // untuk mengakses mahasiswa
    public function mahasiswa() {
        return view('mahasiswa');
    }
}
