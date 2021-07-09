<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanInsiden;

class LaporanInsidenController extends Controller
{
    public function index()
    {
        $laporan_insiden = LaporanInsiden::all();
  
        return view ('page.dropdown5', compact('laporan_insiden'));
    }
    public function create()
    {
        $laporan_insiden = LaporanInsiden::all();

        return view('page.submitlaporaninsiden');
    }
    public function store(Request $request)
    {
        LaporanInsiden::create([
            'nama'=>$request->nama,
            'nomor_telpon'=>$request->nomor_telpon,
            'lokasi_insiden'=>$request->lokasi_insiden,
            'jenis_kendaraan'=>$request->roda,
            'keterangan'=>$request->keterangan,
        ]);
        return redirect('/laporan_insiden');
    }
}
