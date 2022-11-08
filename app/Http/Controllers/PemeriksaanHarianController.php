<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanHarian;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

class PemeriksaanHarianController extends Controller
{
    //
    public function cipta_harian(Request $request){

        $harian = New PemeriksaanHarian;

        // pemeriksaan
        $harian->bilangan_diasingkan_pemeriksaan_rapi = $request->bilangan_diasingkan_pemeriksaan_rapi;
        $harian->jumlah_binatang_disembelih_kecemasan = $request->jumlah_binatang_disembelih_kecemasan;
        $harian->jumlah_disembelih = $request->jumlah_disembelih;
        $harian->baki_ternakan_belum_disembelih = $request->baki_ternakan_belum_disembelih;
        $harian->catatan = $request->catatan;

        $harian->save();

        //pengenalan
        // $id = (int)$request->route('id');
        $pemeriksaan = Pemeriksaan::find($request->id);  

        $pemeriksaan->bil_ternakan_diterima = $request->bil_ternakan_diterima;
        $pemeriksaan->ternakan_mati_semasa_tiba = $request->ternakan_mati_semasa_tiba;
        $pemeriksaan->jumlah_ternakan_diperiksa = $request->jumlah_ternakan_diperiksa;
        $pemeriksaan->jumlah_binatang_layak_disembelih = $request->jumlah_binatang_layak_disembelih;

        $pemeriksaan->save();

        

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ruminan telah disimpan.');

        return back(); 

    }
}
