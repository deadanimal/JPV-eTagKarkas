<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSembelih;

class RumahSembelihController extends Controller
{

    public function senarai_rumah(Request $request) {
        $rumah = RumahSembelih::all();
        return view('rumah.senarai', compact('rumah'));
    } 
    
    public function cipta_rumah(Request $request) {
        
        $rumah = New RumahSembelih;
        $rumah->induk = $request->induk;
        $rumah->nama_rumah = $request->nama_rumah;
        $rumah->kod = $request->kod;
        $rumah->kategori = $request->kategori;
        $rumah->alamat = $request->alamat;
        $rumah->negeri = $request->negeri;
        $rumah->daerah = $request->daerah;
        $rumah->no_tel = $request->no_tel;
        $rumah->emel = $request->emel;
        $rumah->orang_dihubungi = $request->orang_dihubungi;
        $rumah->zon = $request->zon;
        $rumah->kod_bar = $request->kod_bar;
        $rumah->akses_ternakan = $request->akses_ternakan;
        $rumah->save();

        return back();
    }  
}
