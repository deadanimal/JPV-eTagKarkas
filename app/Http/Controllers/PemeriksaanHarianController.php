<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\PemeriksaanBabiHarian;
use App\Models\PemeriksaanHarian;
use App\Models\PemeriksaanRapi;
use App\Models\PemeriksaanRapiBabi;
use App\Models\PengenalanBabi;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PemeriksaanHarianController extends Controller
{
    //

    public function satu_harian(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan = PemeriksaanHarian::find($id);
        $baki_binatang = $pemeriksaan->jumlah_binatang_layak_disembelih;
        
        
        // pass FK id       
        //
        $harians = PemeriksaanHarian::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();

        $jumlah_sembelihan_harian = PemeriksaanHarian::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->sum('jumlah_disembelih');
        //$baki_binatang - $jumlah_sembelihan_harian
            
        return view('daging.satu_ruminan', compact('pemeriksaan','harians','user','baki_binatang'));
      

    }
    public function cipta_harian(Request $request){

        // $user = $request->user();
       
        $harian = New PemeriksaanHarian;

        // pemeriksaan
        $harian->bilangan_diasingkan_pemeriksaan_rapi = $request->bilangan_diasingkan_pemeriksaan_rapi;
        $harian->jumlah_binatang_disembelih_kecemasan = $request->jumlah_binatang_disembelih_kecemasan;
        $harian->jumlah_disembelih = $request->jumlah_disembelih;
        $harian->baki_ternakan_belum_disembelih = $request->baki_ternakan_belum_disembelih;
        $harian->catatan = $request->catatan;
        // save FK
        $harian->pemeriksaan_id = $request->pemeriksaan_id;
        $harian->rumah_sembelih_id = $request->rumah_sembelih_id;

        $harian->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ruminan telah disimpan.');

        return back(); 

    }

    public function periksa_rapi(Request $request){
        $user = $request->user();
        $id = (int)$request->route('id');
        $jana_rapi = Pemeriksaan::find($id);
        $periksa_rapi = PemeriksaanRapi::find($id);

        // dd($periksa_rapis);
        
        $periksa = PemeriksaanHarian::where([
            ['pemeriksaan_id','=', $jana_rapi->id],
        ])->get();
        $periksa_rapis = PemeriksaanRapi::where([
            ['pemeriksaan_id','=', $jana_rapi->id],
        ])->get();

        return view('daging.periksa_rapi', compact('user','periksa','jana_rapi','periksa_rapis','periksa_rapi'));
    }

    public function simpan_periksa_rapi(Request $request){
        $periksa_rapi = new PemeriksaanRapi;

        $periksa_rapi->warna = $request->warna;
        $periksa_rapi->tanda = $request->tanda;
        $periksa_rapi->jumlah_ternakan = $request->jumlah_ternakan;
        $periksa_rapi->diagnosis = $request->diagnosis;
        $periksa_rapi->suhu = $request->suhu;

        $periksa_rapi->pemeriksaan_id = $request->pemeriksaan_id;
        $periksa_rapi->rumah_sembelih_id = $request->rumah_sembelih_id;

        $periksa_rapi->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan harian telah disimpan.');

        return back(); 

    }

    public function jana_rapi(Request $request){

        // tarik data dari cipta periksa rapi
        $id = (int)$request->route('id');
        $periksa_rapi = PemeriksaanRapi::find($id);

        // dd($periksa_rapi);

        // generate pdf using DomPDF
        $pdf = FacadePDF::loadView('daging.borang_rapi', compact('periksa_rapi'));
        return $pdf->download('borang_rapi.pdf');

    }

    public function satu_harian_babi(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan = PengenalanBabi::find($id);        
        
        // pass FK id       
        //
        $harians = PengenalanBabi::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();
            
        return view('daging.satu_ruminan', compact('pemeriksaan','harians'));
      

    }

    public function cipta_pemeriksaan_babi(Request $request){

        // $user = $request->user();
       
        $harian = New PemeriksaanBabiHarian;

        // pemeriksaan
        $harian->bilangan_diasingkan_pemeriksaan_rapi = $request->bilangan_diasingkan_pemeriksaan_rapi;
        $harian->jumlah_binatang_disembelih_kecemasan = $request->jumlah_binatang_disembelih_kecemasan;
        $harian->jumlah_disembelih = $request->jumlah_disembelih;
        $harian->baki_ternakan_belum_disembelih = $request->baki_ternakan_belum_disembelih;
        $harian->catatan = $request->catatan;
        // save FK
        $harian->pemeriksaan_id = $request->pemeriksaan_id;
        $harian->rumah_sembelih_id = $request->rumah_sembelih_id;

        $harian->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan babi telah disimpan.');

        return back(); 

    }

    public function periksa_rapi_babi(Request $request){
        $user = $request->user();
        $id = (int)$request->route('id');
        $jana_rapi = PengenalanBabi::find($id);
        $periksa_rapi_babi = PemeriksaanRapiBabi::find($id);

        

        $periksa = PemeriksaanBabiHarian::where([
            ['pemeriksaan_id','=', $jana_rapi->id],
        ])->get();
        $periksa_rapis = PemeriksaanRapiBabi::where([
            ['pemeriksaan_id','=', $jana_rapi->id],
        ])->get();

        return view('daging.periksa_rapi_babi', compact('user','periksa','jana_rapi','periksa_rapis','periksa_rapi_babi'));
    }

    public function simpan_periksa_rapi_babi(Request $request){
        $periksa_rapi = new PemeriksaanRapiBabi;

        $periksa_rapi->warna = $request->warna;
        $periksa_rapi->tanda = $request->tanda;
        $periksa_rapi->jumlah_ternakan = $request->jumlah_ternakan;
        $periksa_rapi->diagnosis = $request->diagnosis;
        $periksa_rapi->suhu = $request->suhu;

        $periksa_rapi->pemeriksaan_id = $request->pemeriksaan_id;
        $periksa_rapi->rumah_sembelih_id = $request->rumah_sembelih_id;

        $periksa_rapi->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan harian telah disimpan.');

        return back(); 

    }

    public function jana_rapi_babi(Request $request){

        // tarik data dari cipta periksa rapi
        $id = (int)$request->route('id');
        $periksa_rapi = PemeriksaanRapiBabi::find($id);

        dd($periksa_rapi);

        // generate pdf using DomPDF
        $pdf = FacadePDF::loadView('daging.borang_rapi_babi', compact('periksa_rapi'));
        return $pdf->download('borang_rapi.pdf');

    }

}
