<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanDalamNegara;
use Illuminate\Http\Request;
use Alert;


class PemeriksaanDalamNegaraController extends Controller
{
    //
    public function senarai(){

        $jaduals = PemeriksaanDalamNegara::all();
        return view('pdn.senarai', compact('jaduals'));
    }

    public function borang_survelan() {

        $survelans = PemeriksaanDalamNegara::all();

        return view('pdn.borang-survelan',compact('survelans'));        
    }

    public function cipta_survelan(Request $request){

        // $user = $request->user();
       
        $survelan = New PemeriksaanDalamNegara;

        // 
        $survelan->zon = $request->zon;
        $survelan->pensijilan = $request->pensijilan;
        $survelan->operasi = $request->operasi;
        $survelan->ternakan = $request->ternakan;
       
        $survelan->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual survelan telah disimpan.');

        return redirect('/pdn'); 

    }

    public function jadual(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');

        $jadual = PemeriksaanDalamNegara::find($id);

        // jadual survelan probably using same blade for VHM and MyGap and display
        // depends on selected jenis operasi, p4(semak) and p6(isi) will update the borang status
        // and pass to p1

        return view('pdn.jadual-survelan');        
    }

    public function borang_pemeriksa(){
        return view('pdn.borang-pemeriksa');
    }

    public function borang_log(){
        return view('pdn.borang-log');
    }

    
}
