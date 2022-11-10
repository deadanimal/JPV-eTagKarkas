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
        
        //need to pass pemeriksaan_id?

        // pass FK id
        $pemeriksaan_id = $user->pemeriksaan_id;
        $rumah_sembelih_id = $user->rumah_sembelih_id;
        $harians = PemeriksaanHarian::where([
            ['pemeriksaan_id','=', $pemeriksaan_id],
            ['rumah_sembelih_id','=', $rumah_sembelih_id]
        ])->get();
        
            
        return view('daging.satu_ruminan', compact('pemeriksaan','harians','user'));
      

    }
    public function cipta_harian(Request $request){

        $user = $request->user();
       
        $harian = New PemeriksaanHarian;

        // pemeriksaan
        $harian->bilangan_diasingkan_pemeriksaan_rapi = $request->bilangan_diasingkan_pemeriksaan_rapi;
        $harian->jumlah_binatang_disembelih_kecemasan = $request->jumlah_binatang_disembelih_kecemasan;
        $harian->jumlah_disembelih = $request->jumlah_disembelih;
        $harian->baki_ternakan_belum_disembelih = $request->baki_ternakan_belum_disembelih;
        $harian->catatan = $request->catatan;
        // save FK
        $harian->pemeriksaan_id = $user->pemeriksaan->id;
        $harian->rumah_sembelih_id = $user->rumah_sembelih->id;

        $harian->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ruminan telah disimpan.');

        return back(); 

    }

    // public function jadual_harian(){
    //     $harians = PemeriksaanHarian::all();
    //     return view('daging.harian_table',[
    //         'harians'->$harians,
    //     ]);
    // }
}
