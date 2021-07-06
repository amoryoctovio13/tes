<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanInsidenController extends Controller
{
    public function index()
    {
        $laporan_insiden = LaporanInsiden::all();
        return view('page.dropdown5', compact('submitlaporaninsiden'));
    }
}
