<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSembelih;

class RumahSembelihController extends Controller
{

    public function senarai_rumah(Request $request) {
        $rumahs = RumahSembelih::all();
        return view('rumah.senarai', compact('rumahs'));
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

    public function kemaskini_rumah(Request $request) {
        
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);

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

    public function satu_rumah(Request $request) {
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);
        return view('rumah.satu', compact('rumah'));
    }     
}
