<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeriksaan;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

class PemeriksaanController extends Controller
{

    public function senarai(Request $request) {
      

    }

    public function cipta_pemeriksaan(Request $request){

        $pemeriksaan = New Pemeriksaan;

        // pengenalan
        $pemeriksaan->nama_pemilik = $request->nama_pemilik;
        $pemeriksaan->kenderaan = $request->kenderaan;
        $pemeriksaan->masa_tiba = $request->masa_tiba;
        $pemeriksaan->masa_disembelih = $request->masa_disembelih;
        $pemeriksaan->permit = $request->permit;
        $pemeriksaan->spesis = $request->spesis;
        $pemeriksaan->bil_ternakan_skv = $request->bil_ternakan_skv;
        $pemeriksaan->id_permis = $request->id_permis;
        $pemeriksaan->nama_premis = $request->nama_premis;
        $pemeriksaan->alamat_premis = $request->alamat_premis;

        $pemeriksaan->save();

        Alert::success('Simpan berjaya.', 'Maklumat pengenalan ruminan telah disimpan.');

        return back(); 

    }
    
}
