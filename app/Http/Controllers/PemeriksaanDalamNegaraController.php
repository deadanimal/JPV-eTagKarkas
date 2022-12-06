<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanDalamNegara;
use Illuminate\Http\Request;
use Alert;
use App\Models\JadualNcsObr;
use App\Models\NcsObr;
use App\Models\SurvelanAudit;

class PemeriksaanDalamNegaraController extends Controller
{
    //
    public function senarai(){

        $jaduals = PemeriksaanDalamNegara::where('jenis_borang','survelan')->get();
        $ncsobr = PemeriksaanDalamNegara::where('jenis_borang','ncr')->get();
        $ncsobr2 = PemeriksaanDalamNegara::where('jenis_borang','obr')->get();

        return view('pdn.senarai', compact('jaduals','ncsobr','ncsobr2'));
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

    public function borang_ncsobr() {

        return view('pdn.borang_ncsobr');        
    }

    public function cipta_ncsobr(Request $request){

        // $user = $request->user();
       
        $ncsobr =  New NcsObr;

        // 
        $ncsobr->zon = $request->zon;
        $ncsobr->jenis_operasi = $request->jenis_operasi;
        $ncsobr->jenis_borang = $request->jenis_borang;
       
        $ncsobr->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual NCS/OBR telah disimpan.');

        return redirect('/pdn'); 

    }

    public function borang_pemeriksa(Request $request){
        $id = (int)$request->route('id'); 
        $ncrobr = NcsObr::find($id);
        $ncr = JadualNcsObr::all();
        return view('pdn.borang-pemeriksa',compact('ncr'));
    }

    public function cipta_jadual_ncr(Request $request){

        $ncr = New JadualNcsObr();
        $ncr->nombor_ic = $request->nombor_ic;
        $ncr->company = $request->company;
        $ncr->audit = $request->audit;
        $ncr->categori = $request->categori;
        $ncr->standard_reference = $request->standard_reference;
        $ncr->clause = $request->clause;
        $ncr->NC_statement = $request->NC_statement;
        $ncr->objective_evidence = $request->objective_evidence;
        $ncr->auditee_acknowledgement = $request->auditee_acknowledgement;
        $ncr->auditor1_signature = $request->auditor1_signature;
        $ncr->auditor2_signature = $request->auditor2_signature;
        $ncr->auditor3_signature = $request->auditor3_signature;
        $ncr->auditor4_signature = $request->auditor4_signature;

        $ncr->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual NCR telah disimpan.');

        return redirect('/pdn');
    }

    public function borang_log(){
        return view('pdn.borang-log');
    }

    public function senarai_eksport_luar(){
        return view('pdn.senarai_luar');
    }

    public function borang_adequacy(){
        return view('pdn.borang-adequacy');
    }

    public function senarai_veterinar(){
        return view('pdn.senarai_veterinar');
    }

    public function borang_sijil(){
        return view('pdn.borang-sijil');
    }

    public function borang_semak(){
        return view('pdn.borang-semak');
    }

    
}
