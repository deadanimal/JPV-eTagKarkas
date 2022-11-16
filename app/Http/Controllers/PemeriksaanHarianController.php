<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\PemeriksaanHarian;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

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
        $periksa_harian = PemeriksaanHarian::find($id);

        // $periksa = PemeriksaanHarian::where([
        //     ['pemeriksaan_id','=', $periksa_harian->id],
        // ])->get();

        return view('daging.periksa_rapi', compact('user','periksa_harian'));
    }

    public function jana_borang_satu(){
        return view('daging.jana_borang');
    }

}
