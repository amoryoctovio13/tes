<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persimpangan;

class PersimpanganController extends Controller
{
    public function index()
    {
        $persimpangan = Persimpangan::all();
  
        return view ('page.dropdown6', compact('persimpangan'));
    }
    public function create()
    {
        $persimpangan = Persimpangan::all();

        return view('page.persimpangan');
    }
    public function store(Request $request)
    {
        Persimpangan::create([
            'namapersimpangan'=>$request->namapersimpangan,
            'kota'=>$request->kota,
            'utara'=>$request->utara,
            'timur'=>$request->timur,
            'barat'=>$request->barat,
            'selatan'=>$request->selatan,
        ]);
        return redirect('/persimpangan');
    }
}
