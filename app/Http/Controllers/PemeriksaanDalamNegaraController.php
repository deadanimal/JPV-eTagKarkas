<?php

namespace App\Http\Controllers;

use App\Models\Keratan;
use App\Models\PemeriksaanDalamNegara;
use App\Models\SijilVeterinar;
use App\Models\SusuTepung;
use Illuminate\Http\Request;
use Alert;
use App\Models\Exsport;
use App\Models\JadualNcsObr;
use App\Models\NcsObr;
use App\Models\SurvelanAudit;

class PemeriksaanDalamNegaraController extends Controller
{
    //
    public function senarai(){
        
        // $jaduals = SurvelanAudit::where('pdn_id')->get();
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

        $user = $request->user();
        $id = (int)$request->route('id');
       
        $survelan = New PemeriksaanDalamNegara;

        // 
        $survelan->zon = $request->zon;
        $survelan->pensijilan = $request->pensijilan;
        $survelan->operasi = $request->operasi;
        $survelan->ternakan = $request->ternakan;
        $survelan->jenis_borang = $request->jenis_borang;
        $survelan->save();


        $survelan2  = New SurvelanAudit;
        $survelan2->pdn_id = $survelan->id;

        $survelan3  = New JadualNcsObr;
        $survelan3->pdn_id = $survelan->id;
       
        // dd($survelan);
        $survelan2->save();
        // dd($survelan2->pdn->id);
        $survelan3->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual survelan telah disimpan.');

        return redirect('/pdn'); 

    }

    public function jadual(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');
        

        $jaduals = SurvelanAudit::all();
        // dd($jadual);

        // jadual survelan probably using same blade for VHM and MyGap and display
        // depends on selected jenis operasi, p4(semak) and p6(isi) will update the borang status
        // and pass to p1

        return view('pdn.jadual-survelan', compact('jaduals', 'id'));        
    }

    public function cipta_survelan_audit(Request $request){

        $id = (int)$request->route('id'); 
        // $survelans = PemeriksaanDalamNegara::find($id);
        $survelans = SurvelanAudit::where('pdn_id', $id)->first();
        // dd($survelans);

        // $survelans = New SurvelanAudit();
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
        // $survelans->pdn_id = $request->pdn_id;


        $survelans->save();
        // $survelan2->save();

        Alert::success('Simpan berjaya.', 'Maklumat jadual survelan telah disimpan.');

        return redirect('/pdn');
    }

    public function kemaskini_jadual_survelan(Request $request){

        $id = (int)$request->route('id'); 
        $survelans = SurvelanAudit::find($id);
        // dd($survelans);

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

    //exsport
    public function senarai_eksport_luar(){

        $exsports = Exsport::where('jenis','SINGAPURA')->get();
        $exsports1 = Exsport::where('jenis','!=','SINGAPURA')->get();


        return view('pdn.senarai_luar', compact('exsports','exsports1'));
    }

    public function borang_adequacy(){

        $exsports = Exsport::all();

        return view('pdn.borang-adequacy', compact('exsports'));
    }

    public function cipta_exsport(Request $request){

        $exsp = New Exsport();
        $exsp->nama = $request->nama;
        $exsp->nombor = $request->nombor;
        $exsp->tarikh = $request->tarikh;
        $exsp->produk = $request->produk;
        $exsp->daerah = $request->daerah;
        $exsp->negeri = $request->negeri;
        $exsp->zon = $request->zon;
        $exsp->poskod = $request->poskod;
        $exsp->alamat = $request->alamat;
        $exsp->premis = $request->premis;
        $exsp->tujuan = $request->tujuan;
        $exsp->pemeriksa_1 = $request->pemeriksa_1;
        $exsp->pemeriksa_2 = $request->pemeriksa_2;
        $exsp->dokumen = $request->dokumen;
        $exsp->jenis = $request->jenis;


        $exsp->save();

        Alert::success('Hantar berjaya.', 'Maklumat permohonan eksport telah dihantar.');

        return redirect('/eksport-luar');
    }

    public function kemaskini_exsport(Request $request){

        $id = (int)$request->route('id'); 
        $exsports = Exsport::find($id);
        // dd($survelans);

        return view('pdn.kemaskini_exsport', compact('exsports'));
    }

    public function simpan_kemaskini_exsport(Request $request){

        $id = (int)$request->route('id'); 
        $exsp = Exsport::find($id);

        $exsp->nama = $request->nama;
        $exsp->nombor = $request->nombor;
        $exsp->tarikh = $request->tarikh;
        $exsp->produk = $request->produk;
        $exsp->daerah = $request->daerah;
        $exsp->negeri = $request->negeri;
        $exsp->zon = $request->zon;
        $exsp->poskod = $request->poskod;
        $exsp->alamat = $request->alamat;
        $exsp->premis = $request->premis;
        $exsp->tujuan = $request->tujuan;
        $exsp->pemeriksa_1 = $request->pemeriksa_1;
        $exsp->pemeriksa_2 = $request->pemeriksa_2;
        $exsp->dokumen = $request->dokumen;
        $exsp->jenis = $request->jenis;

        $exsp->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat permohonan eksport telah dikemaskini.');

        return redirect('/eksport-luar');
    }


    public function padam_exsport(Request $request){
        $id = (int)$request->route('id'); 
        $exsport = Exsport::find($id);
        $exsport->delete();
        alert()->success('Maklumat telah dibuang', 'Berjaya');
        return back();
    }

    public function senarai_veterinar(){

        $vets = SijilVeterinar::all();
        return view('pdn.senarai_veterinar', compact('vets'));
    }

    

    public function borang_sijil(){
        return view('pdn.borang-sijil');
    }

    public function cipta_sijil(Request $request){

        $sijil = New SijilVeterinar();
        $sijil->premis = $request->premis;
        $sijil->telefon = $request->telefon;
        $sijil->emel = $request->emel;
        $sijil->faks = $request->faks;
        $sijil->web = $request->web;
        $sijil->alamat = $request->alamat;
        $sijil->zon = $request->zon;
        $sijil->negeri = $request->negeri;
        $sijil->daerah = $request->daerah;
        $sijil->poskod = $request->poskod;
        $sijil->klasifikasi = $request->klasifikasi;
        $sijil->kaedah = $request->kaedah;
        $sijil->jenis_produk = $request->jenis_produk;
        $sijil->negara_eksport = $request->negara_eksport;
        $sijil->pemeriksa_1 = $request->pemeriksa_1;
        $sijil->pemeriksa_2 = $request->pemeriksa_2;
        $sijil->pemeriksa_3 = $request->pemeriksa_3;
        $sijil->pemeriksa_4 = $request->pemeriksa_4;
        $sijil->catatan = $request->catatan;

        $sijil->save();

        Alert::success('Hantar berjaya.', 'Maklumat permohonan pemeriksaan veterinar telah dihantar.');

        return redirect('/sijil-veterinar');

    }

    public function padam_sijil(Request $request){
        $id = (int)$request->route('id'); 
        $sijil = SijilVeterinar::find($id);
        $sijil->delete();
        alert()->success('Maklumat berjaya dipadam', 'Berjaya');
        return back();
    }

    public function satu_sijil(Request $request) {
        $id = (int)$request->route('id');
        $sijil = SijilVeterinar::find($id);        
        return view('pdn.satu-sijil', compact('sijil'));
    }

    public function kemaskini_sijil(Request $request){
        $id = (int)$request->route('id'); 

        $sijil = SijilVeterinar::find($id);        

        $sijil->premis = $request->premis;
        $sijil->telefon = $request->telefon;
        $sijil->emel = $request->emel;
        $sijil->faks = $request->faks;
        $sijil->web = $request->web;
        $sijil->alamat = $request->alamat;
        $sijil->zon = $request->zon;
        $sijil->negeri = $request->negeri;
        $sijil->daerah = $request->daerah;
        $sijil->poskod = $request->poskod;
        $sijil->klasifikasi = $request->klasifikasi;
        $sijil->kaedah = $request->kaedah;
        $sijil->jenis_produk = $request->jenis_produk;
        $sijil->negara_eksport = $request->negara_eksport;
        $sijil->pemeriksa_1 = $request->pemeriksa_1;
        $sijil->pemeriksa_2 = $request->pemeriksa_2;
        $sijil->pemeriksa_3 = $request->pemeriksa_3;
        $sijil->pemeriksa_4 = $request->pemeriksa_4;
        $sijil->catatan = $request->catatan;

        $sijil->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat permohonan pemeriksaan veterinar telah dikemaskini.');

        return redirect('/sijil-veterinar');

    }

    public function borang_semak(){
        return view('pdn.borang-semak');
    }

    public function senarai_keratan(){
        $keratans = Keratan::all();

        return view('pdn.senarai_keratan', compact('keratans'));
    }

    public function borang_keratan(){
        return view('pdn.borang-keratan');
    }

    public function cipta_keratan(Request $request){

        $keratan = New Keratan();
        $keratan->premis = $request->premis;
        $keratan->telefon = $request->telefon;
        $keratan->emel = $request->emel;
        $keratan->faks = $request->faks;
        $keratan->web = $request->web;
        $keratan->alamat = $request->alamat;
        $keratan->zon = $request->zon;
        $keratan->negeri = $request->negeri;
        $keratan->daerah = $request->daerah;
        $keratan->poskod = $request->poskod;
        $keratan->klasifikasi = $request->klasifikasi;
        $keratan->kaedah = $request->kaedah;
        $keratan->jenis_produk = $request->jenis_produk;
        // $keratan->negara_eksport = $request->negara_eksport;
        $keratan->pemeriksa_1 = $request->pemeriksa_1;
        $keratan->pemeriksa_2 = $request->pemeriksa_2;
        $keratan->pemeriksa_3 = $request->pemeriksa_3;
        $keratan->pemeriksa_4 = $request->pemeriksa_4;
        $keratan->catatan = $request->catatan;

        $keratan->save();

        Alert::success('Hantar berjaya.', 'Maklumat permohonan pemeriksaan veterinar telah dihantar.');

        return redirect('/keratan');

    }

    public function padam_keratan(Request $request){
        $id = (int)$request->route('id'); 
        $keratan = Keratan::find($id);
        $keratan->delete();
        alert()->success('Maklumat berjaya dipadam', 'Berjaya');
        return back();
    }

    public function satu_keratan(Request $request) {
        $id = (int)$request->route('id');
        $keratan = Keratan::find($id);        
        return view('pdn.satu-keratan', compact('keratan'));
    }

    public function kemaskini_keratan(Request $request){
        $id = (int)$request->route('id'); 

        $keratan = Keratan::find($id);        

        $keratan->premis = $request->premis;
        $keratan->telefon = $request->telefon;
        $keratan->emel = $request->emel;
        $keratan->faks = $request->faks;
        $keratan->web = $request->web;
        $keratan->alamat = $request->alamat;
        $keratan->zon = $request->zon;
        $keratan->negeri = $request->negeri;
        $keratan->daerah = $request->daerah;
        $keratan->poskod = $request->poskod;
        $keratan->klasifikasi = $request->klasifikasi;
        $keratan->kaedah = $request->kaedah;
        $keratan->jenis_produk = $request->jenis_produk;
        // $keratan->negara_eksport = $request->negara_eksport;
        $keratan->pemeriksa_1 = $request->pemeriksa_1;
        $keratan->pemeriksa_2 = $request->pemeriksa_2;
        $keratan->pemeriksa_3 = $request->pemeriksa_3;
        $keratan->pemeriksa_4 = $request->pemeriksa_4;
        $keratan->catatan = $request->catatan;

        $keratan->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat permohonan pemeriksaan veterinar telah dikemaskini.');

        return redirect('/keratan');

    }

    public function borang_verifikasi(){
        return view('pdn.borang-verifikasi');
    }

    public function senarai_susu(){

        $susus = SusuTepung::all();

        return view('pdn.senarai_susu', compact('susus'));
    }

    public function borang_susu(){
        return view('pdn.borang_susu');
    }

    public function cipta_susu(Request $request){

        $susu = New SusuTepung();
        $susu->premis = $request->premis;
        $susu->wakil = $request->wakil;
        $susu->telefon = $request->telefon;
        $susu->emel = $request->emel;
        $susu->faks = $request->faks;
        $susu->web = $request->web;
        $susu->alamat = $request->alamat;
        $susu->zon = $request->zon;
        $susu->negeri = $request->negeri;
        $susu->daerah = $request->daerah;
        $susu->poskod = $request->poskod;
        $susu->kaedah = $request->kaedah;
        $susu->klasifikasi = $request->klasifikasi;
        $susu->vhm = $request->vhm;
        $susu->jenis_produk = $request->jenis_produk;
        $susu->kuantiti = $request->kuantiti;
        $susu->pembeli = $request->pembeli;
        $susu->alamat_pembeli = $request->alamat_pembeli;
    
        $susu->save();

        Alert::success('Hantar berjaya.', 'Maklumat permohonan pemeriksaan susu tepung telah dihantar.');

        return redirect('/susu-tepung');

    }

    public function padam_susu(Request $request){
        $id = (int)$request->route('id'); 
        $susu = SusuTepung::find($id);
        $susu->delete();
        alert()->success('Maklumat berjaya dipadam', 'Berjaya');
        return back();
    }

    public function satu_susu(Request $request) {
        $id = (int)$request->route('id');
        $susu = SusuTepung::find($id);        
        return view('pdn.satu-susu', compact('susu'));
    }

    public function kemaskini_susu(Request $request){

        $id = (int)$request->route('id'); 


        $susu = SusuTepung::find($id);
        $susu->premis = $request->premis;
        $susu->wakil = $request->wakil;
        $susu->telefon = $request->telefon;
        $susu->emel = $request->emel;
        $susu->faks = $request->faks;
        $susu->web = $request->web;
        $susu->alamat = $request->alamat;
        $susu->zon = $request->zon;
        $susu->negeri = $request->negeri;
        $susu->daerah = $request->daerah;
        $susu->poskod = $request->poskod;
        $susu->kaedah = $request->kaedah;
        $susu->klasifikasi = $request->klasifikasi;
        $susu->vhm = $request->vhm;
        $susu->jenis_produk = $request->jenis_produk;
        $susu->kuantiti = $request->kuantiti;
        $susu->pembeli = $request->pembeli;
        $susu->alamat_pembeli = $request->alamat_pembeli;
    
        $susu->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat permohonan pemeriksaan susu tepung telah dikemaskini.');

        return redirect('/susu-tepung');

    }


    public function borang_perakuan(){
        return view('pdn.borang-perakuan');
    }

    
}
