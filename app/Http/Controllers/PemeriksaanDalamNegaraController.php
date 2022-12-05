<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanDalamNegara;
use Illuminate\Http\Request;
use Alert;
use App\Models\SurvelanAudit;

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

    public function cipta_survelan_audit(Request $request){

        $survelans = New SurvelanAudit();
        $survelans->nombor = $request->nombor;
        $survelans->premis = $request->premis;
        $survelans->telefon = $request->telefon;
        $survelans->email = $request->email;
        $survelans->fax = $request->fax;
        $survelans->web = $request->web;
        $survelans->jenis_produk = $request->jenis_produk;
        $survelans->alamat = $request->alamat;
        $survelans->negeri = $request->negeri;
        $survelans->kaedah_audit = $request->kaedah_audit;
        $survelans->pemeriksa_1 = $request->pemeriksa_1;
        $survelans->pemeriksa_2 = $request->pemeriksa_2;
        $survelans->pemeriksa_3 = $request->pemeriksa_3;
        $survelans->pemeriksa_4 = $request->pemeriksa_4;
        $survelans->catatan = $request->catatan;

        $survelans->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual survelan telah disimpan.');

        return redirect('/pdn');
    }

    public function kemaskini_jadual_survelan(Request $request){

        $id = (int)$request->route('id'); 
        $survelans = SurvelanAudit::find($id);

        return view('pdn.kemaskini_jadual_survelan', compact('survelans'));
    }

    public function simpan_kemaskini_jadual_survelan(Request $request){

        $id = (int)$request->route('id'); 
        $survelans = SurvelanAudit::find($id);

        $survelans->nombor = $request->nombor;
        $survelans->premis = $request->premis;
        $survelans->telefon = $request->telefon;
        $survelans->email = $request->email;
        $survelans->fax = $request->fax;
        $survelans->web = $request->web;
        $survelans->jenis_produk = $request->jenis_produk;
        $survelans->alamat = $request->alamat;
        $survelans->negeri = $request->negeri;
        $survelans->kaedah_audit = $request->kaedah_audit;
        $survelans->pemeriksa_1 = $request->pemeriksa_1;
        $survelans->pemeriksa_2 = $request->pemeriksa_2;
        $survelans->pemeriksa_3 = $request->pemeriksa_3;
        $survelans->pemeriksa_4 = $request->pemeriksa_4;
        $survelans->catatan = $request->catatan;

        $survelans->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual survelan telah dikemaskini.');

        return redirect('/pdn');
    }

    public function padam_survelan(Request $request){
        $id = (int)$request->route('id'); 
        $survelans = PemeriksaanDalamNegara::find($id);
        $survelans->delete();
        alert()->success('Maklumat telah dibuang', 'Berjaya');
        return back();
    }

    public function borang_pemeriksa(){
        return view('pdn.borang-pemeriksa');
    }

    public function borang_log(){
        return view('pdn.borang-log');
    }

    
}
