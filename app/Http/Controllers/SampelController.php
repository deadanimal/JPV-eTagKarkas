<?php

namespace App\Http\Controllers;

use App\Models\Sampel;
use Illuminate\Http\Request;
use Alert;


class SampelController extends Controller
{
    public function tunjuk(){
        return view('sampel.tunjuk');
    }

    public function borang_sampel(Request $request) {
        $id = (int)$request->route('id');

        $user = $request->user();
        $sampel = Sampel::find($id); 
        
        // if ($sampel->jenis == 'ayam' || 'ruminan_besar' || 'ruminan_kecil' || 'babi'){
        //     return view('sampel.borang-sampel', compact('sampel'));
        // } else if ($sampel->jenis == 'vhm' && 'mygap' && 'gvhp'){
        //     return view('sampel.borang-sampel2', compact('sampel'));

        // }
        
        return view('sampel.borang-sampel', compact('user','sampel'));
    }

    public function cipta_sampel(Request $request){

        $user = $request->user();

        $sampel = New Sampel;

        $sampel->tahun = $request->tahun;
        $sampel->zon = $request->zon;
        $sampel->kod_premis = $request->kod_premis;
        $sampel->premis = $request->premis;
        $sampel->ujian = $request->ujian;
        $sampel->sampel = $request->sampel;

        $sampel->save();

        Alert::success('Simpan berjaya.', 'Maklumat pensampelan telah disimpan.');

        return back();

    }
}
