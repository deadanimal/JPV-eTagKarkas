<?php

namespace App\Http\Controllers;

use App\Models\Keratan;
use App\Models\PemeriksaanDalamNegara;
use App\Models\PerakuanSusuTepung;
use App\Models\semak_borangA;
use App\Models\semak_borangB;
use App\Models\semak_borangC;
use App\Models\semak_borangD;
use App\Models\SijilVeterinar;
use App\Models\SusuTepung;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Alert;
use App\Models\Exsport;
use App\Models\JadualNcsObr;
use App\Models\Log;
use App\Models\NcsObr;
use App\Models\SurvelanAudit;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;


class PemeriksaanDalamNegaraController extends Controller
{
    //
    public function senarai(){
        
        // $jaduals = SurvelanAudit::where('pdn_id')->get();
        $jaduals = PemeriksaanDalamNegara::all();
        $survelans = SurvelanAudit::all();
        $ncr = JadualNcsObr::where('jenis','ncr')->get();
        $obr = JadualNcsObr::where('jenis','obr')->get();
        $log = Log::all();


        return view('pdn.senarai', compact('jaduals','survelans','ncr','obr','log'));
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
        // $survelan->jenis_borang = $request->jenis_borang;
        $survelan->save();

        Alert::success('Hantar berjaya.', 'Maklumat jadual survelan telah dihantar.');

        return redirect('/pdn'); 

    }

    public function kemaskini_pdn(Request $request){

        // $user = $request->user();
        $id = (int)$request->route('id'); 
        $pdn = PemeriksaanDalamNegara::find($id);
        // dd($survelans);

        return view('pdn.satu_pdn', compact('pdn'));
    }

    public function lihat_pdn(Request $request) {
        $id = (int)$request->route('id');
        $jaduals = PemeriksaanDalamNegara::find($id);        
        $pdn = PemeriksaanDalamNegara::find($id);        
        return view('pdn.lihat-pdn', compact('jaduals','pdn'));
    }

    public function simpan_kemaskini_pdn(Request $request) {  
        $id = (int)$request->route('id'); 
        $pdn = PemeriksaanDalamNegara::find($id); 
        $pdn->zon = $request->zon;
        $pdn->pensijilan = $request->pensijilan;
        $pdn->operasi = $request->operasi;
        $pdn->ternakan = $request->ternakan;
        // $pdn->jenis_borang = $request->jenis_borang;
        $pdn->save();
        alert()->success('Maklumat telah dikemaskini', 'Berjaya');
        return redirect('/pdn');

    } 

    public function padam_pdn(Request $request){
        $id = (int)$request->route('id'); 
        $pdn = PemeriksaanDalamNegara::find($id);
        $pdn->delete();
        alert()->success('Maklumat telah dipadam', 'Berjaya');
        return back();
    }

    public function jadual(Request $request) {

        $user = $request->user();

        $id = (int)$request->route('id'); 
        $jaduals = PemeriksaanDalamNegara::find($id);
        // $survelans = SurvelanAudit::find($id);

        $survelans = SurvelanAudit::where([
            ['pdn_id','=', $jaduals->id],
        ])->get();

        // dd($survelans);

        // jadual survelan probably using same blade for VHM and MyGap and display
        // depends on selected jenis operasi, p4(semak) and p6(isi) will update the borang status
        // and pass to p1

        return view('pdn.jadual-survelan', compact('user','jaduals','survelans'));        
    }

    public function jana_jadual_survelan(Request $request){
        $id = (int)$request->route('id');

        $survelans = SurvelanAudit::find($id);

        // dd( $survelans);
        $pdf = FacadePDF::loadView('pdn.jana_borang_survelan', compact('survelans'));
        return $pdf->download('borang_survelan.pdf');


    }

    public function cipta_survelan_audit(Request $request){

        $id = $request->pdn_id;
        // $pdn = PemeriksaanDalamNegara::find($id);
        // $survelans = SurvelanAudit::where('pdn_id', $id)->first();
        // dd($survelans);


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
        $survelans->pdn_id = $id;


        $survelans->save();
        // $survelan2->save();

        Alert::success('Hantar berjaya.', 'Maklumat jadual survelan telah dihantar.');

        return back();
    }

    public function kemaskini_jadual_survelan(Request $request){

        // $user = $request->user();
        $id = (int)$request->route('id'); 
        $survelans = SurvelanAudit::find($id);
        // dd($survelans);

        return view('pdn.kemaskini_jadual_survelan', compact('survelans'));
    }

    public function simpan_kemaskini_jadual_survelan(Request $request){

        $id = (int)$request->route('id'); 
        // $survelans = SurvelanAudit::find($id);
        $survelans = SurvelanAudit::find($id);
        // dd($survelans);

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

        Alert::success('Kemaskini berjaya.', 'Maklumat jadual survelan telah dikemaskini.');

        return redirect('/pdn');
    }

    public function padam_survelan(Request $request){
        $id = (int)$request->route('id'); 
        $survelans = SurvelanAudit::find($id);
        $survelans->delete();
        alert()->success('Maklumat telah dipadam', 'Berjaya');
        return back();
    }

    // public function borang_ncsobr() {

    //     return view('pdn.borang_ncsobr');        
    // }

    // public function cipta_ncsobr(Request $request){

    //     // $user = $request->user();
       
    //     $ncsobr =  New NcsObr;

    //     // 
    //     $ncsobr->zon = $request->zon;
    //     $ncsobr->jenis_operasi = $request->jenis_operasi;
    //     $ncsobr->jenis_borang = $request->jenis_borang;
       
    //     $ncsobr->save();

    //     Alert::success('Simpan berjaya.', 'Maklumat jadual NCS/OBR telah disimpan.');

    //     return redirect('/pdn'); 

    // }

    // ncr
    public function borang_pemeriksa(Request $request){
        return view('pdn.borang-pemeriksa');
    }

    public function cipta_jadual_ncr(Request $request){

        $ncr = New JadualNcsObr();
        $ncr->nombor_ic = $request->nombor_ic;
        $ncr->company = $request->company;
        $ncr->audit = $request->audit;
        $ncr->categori = $request->categori;
        $ncr->standard_reference = $request->standard_reference;
        $ncr->clause = $request->clause;
        $ncr->jenis = $request->jenis;
        $ncr->NC_statement = $request->NC_statement;
        $ncr->objective_evidence = $request->objective_evidence;
        $ncr->auditee_acknowledgement = $request->auditee_acknowledgement;
        $ncr->auditor1_signature = $request->auditor1_signature;
        $ncr->auditor2_signature = $request->auditor2_signature;
        $ncr->auditor3_signature = $request->auditor3_signature;
        $ncr->auditor4_signature = $request->auditor4_signature;

        $ncr->save();

        Alert::success('Jana borang NCR berjaya.', 'Maklumat jadual NCR telah dihantar.');

        return redirect('/pdn');
    }

    public function kemaskini_jadual_ncr(Request $request){

        // $user = $request->user();
        $id = (int)$request->route('id'); 
        $ncr = JadualNcsObr::find($id);
        // dd($survelans);

        return view('pdn.borang_pemeriksaan2', compact('ncr'));
    }

    public function simpan_kemaskini_jadual_ncr(Request $request){

        $id = (int)$request->route('id'); 
        // $survelans = SurvelanAudit::find($id);
        $ncr = JadualNcsObr::find($id);
        // dd($survelans);

        $ncr->nombor_ic = $request->nombor_ic;
        $ncr->company = $request->company;
        $ncr->audit = $request->audit;
        $ncr->categori = $request->categori;
        $ncr->standard_reference = $request->standard_reference;
        $ncr->clause = $request->clause;
        $ncr->jenis = $request->jenis;
        $ncr->NC_statement = $request->NC_statement;
        $ncr->objective_evidence = $request->objective_evidence;
        $ncr->auditee_acknowledgement = $request->auditee_acknowledgement;
        $ncr->auditor1_signature = $request->auditor1_signature;
        $ncr->auditor2_signature = $request->auditor2_signature;
        $ncr->auditor3_signature = $request->auditor3_signature;
        $ncr->auditor4_signature = $request->auditor4_signature;

        $ncr->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat jadual NCR telah dikemaskini.');

        return redirect('/pdn');
    }

    public function padam_ncr(Request $request){
        $id = (int)$request->route('id'); 
        $ncr = JadualNcsObr::find($id);
        $ncr->delete();
        alert()->success('Maklumat telah dipadam', 'Berjaya');
        return back();
    }

    public function jana_ncr(Request $request){
        $id = (int)$request->route('id');

        $ncr = JadualNcsObr::find($id);

        // dd( $survelans);
        $pdf = FacadePDF::loadView('pdn.jana_borang_ncr', compact('ncr'));
        return $pdf->download('borang_NCR.pdf');
    }

    //obr
    public function borang_obr(){
        return view('pdn.borang_obr');
    }

    public function cipta_jadual_obr(Request $request){

        $obr = New JadualNcsObr();
        $obr->nombor_ic = $request->nombor_ic;
        $obr->company = $request->company;
        $obr->audit = $request->audit;
        $obr->jenis = $request->jenis;
        $obr->objective_evidence = $request->objective_evidence;
        $obr->auditee_acknowledgement = $request->auditee_acknowledgement;
        $obr->auditor1_signature = $request->auditor1_signature;
        $obr->auditor2_signature = $request->auditor2_signature;
        $obr->auditor3_signature = $request->auditor3_signature;
        $obr->auditor4_signature = $request->auditor4_signature;

        $obr->save();

        Alert::success('Jana borang OBS berjaya.', 'Maklumat OBS telah dihantar.');

        return redirect('/pdn');
    }

    public function kemaskini_jadual_obr(Request $request){

        // $user = $request->user();
        $id = (int)$request->route('id'); 
        $obr = JadualNcsObr::find($id);
        // dd($survelans);

        return view('pdn.kemaskini_borang_obr', compact('obr'));
    }

    public function simpan_kemaskini_jadual_obr(Request $request){

        $id = (int)$request->route('id'); 
        // $survelans = SurvelanAudit::find($id);
        $obr = JadualNcsObr::find($id);
        // dd($survelans);

        $obr->nombor_ic = $request->nombor_ic;
        $obr->company = $request->company;
        $obr->audit = $request->audit;
        $obr->jenis = $request->jenis;
        $obr->objective_evidence = $request->objective_evidence;
        $obr->auditee_acknowledgement = $request->auditee_acknowledgement;
        $obr->auditor1_signature = $request->auditor1_signature;
        $obr->auditor2_signature = $request->auditor2_signature;
        $obr->auditor3_signature = $request->auditor3_signature;
        $obr->auditor4_signature = $request->auditor4_signature;

        $obr->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat borang OBS telah dikemaskini.');

        return redirect('/pdn');
    }

    public function padam_obr(Request $request){
        $id = (int)$request->route('id'); 
        $obr = JadualNcsObr::find($id);
        $obr->delete();
        alert()->success('Maklumat telah dipadam', 'Berjaya');
        return back();
    }

    public function jana_obs(Request $request){
        $id = (int)$request->route('id');

        $obr = JadualNcsObr::find($id);

        // dd( $survelans);
        $pdf = FacadePDF::loadView('pdn.jana_borang_obs', compact('obr'));
        return $pdf->download('borang_OBS.pdf');
    }

//log
    public function borang_log(){
        return view('pdn.borang_log');
    }

    public function cipta_log(Request $request){

        // $id = (int)$request->route('id'); 
        // $survelans = PemeriksaanDalamNegara::find($id);
        // $survelans = SurvelanAudit::where('pdn_id', $id)->first();
        // dd($survelans);

        $log = New Log();
        $log->premis = $request->premis;
        $log->alamat = $request->alamat;
        $log->produk = $request->produk;
        $log->no_est = $request->no_est;
        
        // $survelans->pdn_id = $request->pdn_id;


        $log->save();
        // $survelan2->save();

        Alert::success('Jana borang Log berjaya.', 'Maklumat borang log telah dihantar.');

        return redirect('/pdn');
    }

    public function kemaskini_jadual_log(Request $request){

        // $user = $request->user();
        $id = (int)$request->route('id'); 
        $log = log::find($id);
        // dd($survelans);

        return view('pdn.kemaskini_log', compact('log'));
    }

    public function simpan_kemaskini_jadual_log(Request $request){

        $id = (int)$request->route('id'); 
        // $survelans = SurvelanAudit::find($id);
        $log = Log::find($id);
        // dd($survelans);

        $log->premis = $request->premis;
        $log->alamat = $request->alamat;
        $log->produk = $request->produk;
        $log->no_est = $request->no_est;

        $log->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat borang log telah dikemaskini.');

        return redirect('/pdn');
    }

    public function padam_log(Request $request){
        $id = (int)$request->route('id'); 
        $log = Log::find($id);
        $log->delete();
        alert()->success('Maklumat telah dipadam', 'Berjaya');
        return back();
    }

    public function jana_log(Request $request){
        $id = (int)$request->route('id');

        $log = log::find($id);

        // dd($log);

        $pdf = FacadePDF::loadView('pdn.jana_borang_log', compact('log'));
        return $pdf->download('borang_Log.pdf');

        // return view('pdn.jana_borang_log', compact('log'));
    }

    //exsport
    public function senarai_eksport_luar(){

        $exsports = Exsport::where('jenis','SINGAPURA')->get();
        $exsports1 = Exsport::where('jenis','!=','SINGAPURA')->get();


        return view('pdn.senarai_luar', compact('exsports','exsports1'));
    }

    public function borang_adequacy(){
        return view('pdn.borang-adequacy');
    }
    public function borang_adequacy1(){
        return view('pdn.borang_adequacy1');
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

    public function cipta_exsport1(Request $request){

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

    public function kemaskini_exsport1(Request $request){

        $id = (int)$request->route('id'); 
        $exsports = Exsport::find($id);
        // dd($survelans);

        return view('pdn.kemaskini_adequacy1', compact('exsports'));
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

    public function simpan_kemaskini_exsport1(Request $request){

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

        Alert::success('Kemaskini berjaya.', 'Maklumat maklumat eksport  telah dikemaskini.');

        return redirect('/eksport-luar');
    }


    public function padam_exsport(Request $request){
        $id = (int)$request->route('id'); 
        $exsport = Exsport::find($id);
        $exsport->delete();
        alert()->success('Maklumat telah dipadam', 'Berjaya');
        return back();
    }

    public function jana_eksport(Request $request){
        $id = (int)$request->route('id');

        $exsports = Exsport::find($id);

        // dd($eksport);

        $pdf = FacadePDF::loadView('pdn.jana_eksport', compact('exsports'));
        return $pdf->download('Borang_Adequacy_Audit.pdf');

        // return view('pdn.jana_borang_log', compact('log'));
    }

    public function senarai_veterinar(){

        $vets = SijilVeterinar::all();

        $semaks = semak_borangA::all();
        return view('pdn.senarai_veterinar', compact('vets','semaks'));
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

    public function cipta_borang_semak_A(Request $request){

        $semak = New semak_borangA();
        $semak->tarikh = $request->tarikh;
        $semak->rujukan = $request->rujukan;
        $semak->establishment = $request->establishment;
        $semak->telefon = $request->telefon;
        $semak->alamat = $request->alamat;
        $semak->jenis = $request->jenis;
        $semak->tujuan = $request->tujuan;
        $semak->premis = $request->premis;
        $semak->pemeriksa_dvs = $request->pemeriksa_dvs;
        $semak->pemeriksa1 = $request->pemeriksa1;
        $semak->pemeriksa2 = $request->pemeriksa2;
        $semak->pemeriksa3 = $request->pemeriksa3;
        $semak->pemeriksa4 = $request->pemeriksa4;

        $semak->save();

        Alert::success('Hantar berjaya.', 'Maklumat pemeriksaan telah disimpan.');

        return redirect('/sijil-veterinar');

    }

    public function cipta_borang_semak_B(Request $request){

        $semak = New semak_borangB();
        $semak->keperluan = $request->keperluan;
        $semak->jenis = $request->jenis;
        $semak->senarai = $request->senarai;
        $semak->negara_haiwan = $request->negara_haiwan;
        $semak->produk_haiwan = $request->produk_haiwan;
        $semak->negara_non_haiwan = $request->negara_non_haiwan;
        $semak->maklumat_pemeriksaan_id = $request->maklumat_pemeriksaan_id;

    
        $semak->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan telah disimpan.');

        return back();

    }

    public function cipta_borang_semak_C(Request $request){

        $semak = New semak_borangC();
        $semak->bahan = $request->bahan;
        $semak->punca = $request->punca;
        $semak->nombor = $request->nombor;
        $semak->dokumen = $request->dokumen;
        $semak->carta = $request->carta;
        $semak->jenis = $request->jenis;
        $semak->jabatan = $request->jabatan;
        $semak->tarikh = $request->tarikh;
        $semak->manual = $request->manual;
        $semak->sistem_manual = $request->sistem_manual;
        $semak->rekod = $request->rekod;
        $semak->haccp = $request->haccp;
        $semak->maklumat_pemeriksaan_id = $request->maklumat_pemeriksaan_id;

    
        $semak->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan telah disimpan.');

        return back();

    }

    public function cipta_borang_semak_D(Request $request){

        $semak = New semak_borangD();
        $semak->keputusan = $request->keputusan;
        $semak->penemuan = $request->penemuan;
        $semak->pengesyoran = $request->pengesyoran;
        $semak->pemeriksa1 = $request->pemeriksa1;
        $semak->pemeriksa2 = $request->pemeriksa2;
        $semak->pemeriksa3 = $request->pemeriksa3;
        $semak->pemeriksa4 = $request->pemeriksa4;
        $semak->cop1 = $request->cop1;
        $semak->cop2 = $request->cop2;
        $semak->cop3 = $request->cop3;
        $semak->cop4 = $request->cop4;
        $semak->maklumat_pemeriksaan_id = $request->maklumat_pemeriksaan_id;

    
        $semak->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan telah disimpan.');

        return back();

    }

    public function satu_borang_semak(Request $request) {
        $id = (int)$request->route('id');
        $semak = semak_borangA::find($id);        
        $semak_borangB = semak_borangB::find($id);        
        $semak_borangC = semak_borangC::find($id);        
        $semak_borangD = semak_borangD::find($id);        
        return view('pdn.borang-satu-semak', compact('semak','semak_borangB','semak_borangC','semak_borangD'));
    }

    public function jana_semak(Request $request){
        $id = (int)$request->route('id');

        $semak = semak_borangA::find($id);
        $semak_borangB = semak_borangB::find($id);        
        $semak_borangC = semak_borangC::find($id);        
        $semak_borangD = semak_borangD::find($id); 

        // dd($log);

        $pdf = FacadePDF::loadView('pdn.jana_semak', compact('semak','semak_borangB','semak_borangC','semak_borangD'));
        return $pdf->download('borang_semak.pdf');

        // return view('pdn.jana_semak', compact('semak','semak_borangB','semak_borangC','semak_borangD'));
    }

    public function senarai_keratan(){
        $keratans = Keratan::all();
        $verifikasis = Verifikasi::all();

        return view('pdn.senarai_keratan', compact('keratans','verifikasis'));
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

    public function lihat_keratan(Request $request) {
        $id = (int)$request->route('id');
        $keratan = Keratan::find($id);        
        return view('pdn.lihat-keratan', compact('keratan'));
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

     public function jana_keratan(Request $request){
        $id = (int)$request->route('id');

        $keratan = Keratan::find($id);

        $pdf = FacadePDF::loadView('pdn.jana_keratan', compact('keratan'));
        return $pdf->download('Borang_Permohonan_Verifikasi_Import_Keratan_Ayam.pdf');

        // return view('pdn.jana_keratan', compact('keratan'));
    }


    public function borang_verifikasi(Request $request){

        $verifikasi = $request->session()->get('verifikasi'); 
        return view('pdn.borang-verifikasi', compact('verifikasi'));
    }

    public function cipta_borang_verifikasi(Request $request){

        $validatedData = $request->all();

        $verifikasi = new Verifikasi();
        $verifikasi->fill($validatedData);
        $request->session()->put('verifikasi', $verifikasi);
    
        return redirect('/borang-verifikasi2');

    }

    public function borang_verifikasi2(Request $request ){

        $verifikasi = $request->session()->all(); 

        return view('pdn.borang-verifikasi2', compact('verifikasi'));
    }

    public function cipta_borang_verifikasi2(Request $request){

        $validatedData = $request->all();

        $verifikasi = $request->session()->get('verifikasi'); 
        $verifikasi->fill($validatedData);
        $request->session()->put('verifikasi', $verifikasi);

        // $verifikasi->save();

        // Alert::success('Hantar berjaya.', 'Maklumat laporan verifikasi telah dihantar.');

        // dd($verifikasi);

        return redirect('/borang-verifikasi3');

    }

    public function borang_verifikasi3(Request $request ){

        $verifikasi = $request->session()->all(); 

        return view('pdn.borang-verifikasi3', compact('verifikasi'));
    }

    public function cipta_borang_verifikasi3(Request $request){

        $validatedData = $request->all();

        $verifikasi = $request->session()->get('verifikasi'); 

        $verifikasi->fill($validatedData);
        $request->session()->put('verifikasi', $verifikasi);

        // dd($verifikasi);

        $verifikasi->save();

        // Alert::success('Hantar berjaya.', 'Maklumat laporan verifikasi telah dihantar.');
    
        return redirect('/borang-verifikasi4');
    }

    public function borang_verifikasi4(Request $request ){

        $verifikasi = $request->session()->all(); 

        return view('pdn.borang-verifikasi4', compact('verifikasi'));
    }

    public function cipta_borang_verifikasi4(Request $request){

        $validatedData = $request->all();

        $verifikasi = $request->session()->get('verifikasi'); 
        $verifikasi->fill($validatedData);
        $request->session()->put('verifikasi', $verifikasi);

        // dd($verifikasi);

        $verifikasi->save();

        Alert::success('Hantar berjaya.', 'Maklumat laporan verifikasi telah dihantar.');


        return redirect('/keratan');

    }


    public function satu_verifikasi(Request $request) {
        $id = (int)$request->route('id');
        $verify = Verifikasi::find($id);        
        return view('pdn.lihat-verifikasi', compact('verify'));
    }

    public function kemaskini_verifikasi(Request $request){

        $id = (int)$request->route('id');

        $verify = Verifikasi::find($id);        

        $verify = $request->all();

        // $verify->fill($validatedData);

        dd($verify);

        // $verify->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat laporan verifikasi telah dikemaskini.');


        return redirect('/keratan');

    }

    public function lihat_verifikasi(Request  $request) {
        $id = (int)$request->route('id');
        $verifikasi = Verifikasi::find($id);        
        return view('pdn.lihat-verifikasi', compact('verifikasi'));
    }

    public function padam_verifikasi(Request $request){
        $id = (int)$request->route('id'); 
        $verifikasi = Verifikasi::find($id);
        $verifikasi->delete();
        alert()->success('Maklumat berjaya dipadam', 'Berjaya');
        return back();
    }

    public function jana_verifikasi(Request $request){
        $id = (int)$request->route('id');

        $verifikasi = Verifikasi::find($id);

        $pdf = FacadePDF::loadView('pdn.jana_verifikasi', compact('verifikasi'));
        return $pdf->download('Borang_Laporan_Verifikasi.pdf');

        // return view('pdn.jana_verifikasi', compact('verifikasi'));
    }

    public function senarai_susu(){

        $susus = SusuTepung::all();
        $perakuans = PerakuanSusuTepung::all();


        return view('pdn.senarai_susu', compact('susus','perakuans'));
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

        $perakuans = PerakuanSusuTepung::all();

        return view('pdn.borang-perakuan', compact('perakuans'));
    }

    public function cipta_perakuan(Request $request){

        $perakuan = New PerakuanSusuTepung();
        $perakuan->syarikat = $request->syarikat;
        $perakuan->alamat = $request->alamat;
        $perakuan->kg = $request->kg;
        $perakuan->batch = $request->batch;
        $perakuan->proses = $request->proses;
        $perakuan->pengendalian = $request->pengendalian;
        $perakuan->penyimpanan = $request->penyimpanan;
        $perakuan->pembungkusan = $request->pembungkusan;
        $perakuan->lain = $request->lain;
        
    
        $perakuan->save();

        Alert::success('Hantar berjaya.', 'Maklumat perakuan pengesahan susu tepung telah dihantar.');

        return redirect('/susu-tepung');

    }

    public function satu_perakuan(Request $request) {
        $id = (int)$request->route('id');
        $perakuan = PerakuanSusuTepung::find($id);        
        return view('pdn.satu-perakuan', compact('perakuan'));
    }

    public function kemaskini_perakuan(Request $request){

        $id = (int)$request->route('id'); 

        $perakuan = PerakuanSusuTepung::find($id);
        $perakuan->syarikat = $request->syarikat;
        $perakuan->alamat = $request->alamat;
        $perakuan->kg = $request->kg;
        $perakuan->batch = $request->batch;
        $perakuan->proses = $request->proses;
        $perakuan->pengendalian = $request->pengendalian;
        $perakuan->penyimpanan = $request->penyimpanan;
        $perakuan->pembungkusan = $request->pembungkusan;
        $perakuan->lain = $request->lain;
        
    
        $perakuan->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat perakuan pengesahan susu tepung telah dikemaskini.');

        return redirect('/susu-tepung');

    }

    public function lihat_perakuan(Request $request) {
        $id = (int)$request->route('id');
        $perakuan = PerakuanSusuTepung::find($id);        
        return view('pdn.lihat-perakuan', compact('perakuan'));
    }

    public function padam_perakuan(Request $request){
        $id = (int)$request->route('id'); 
        $perakuan = PerakuanSusuTepung::find($id);
        $perakuan->delete();
        alert()->success('Maklumat berjaya dipadam', 'Berjaya');
        return back();
    }

    
}
