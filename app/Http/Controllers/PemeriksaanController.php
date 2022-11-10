<?php

namespace App\Http\Controllers;

use App\Models\AnteMortemRuminan;
use App\Models\PemeriksaanHarian;
use App\Models\PostMortemRuminan;
use App\Models\RumahSembelih;
use Illuminate\Http\Request;
use App\Models\Pemeriksaan;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

class PemeriksaanController extends Controller
{

    public function senarai(Request $request) {
        
        // call all pemeriksaan into datatable
        $pemeriksaans = Pemeriksaan::all();
        $user = $request->user();

        // pass rumah_sembelih_id
        $rumah_sembelih_id = $user->rumah_sembelih_id;
        $pemeriksaans = Pemeriksaan::where([
            ['rumah_sembelih_id','=', $rumah_sembelih_id],
        ])->orderBy('updated_at','desc')->get();
        
        // datatable
        if($request->ajax()) {
            return DataTables::collection($pemeriksaans)
            ->addIndexColumn()
            ->addColumn('tindakan', function (Pemeriksaan $pemeriksaan) {
                $url = '/pemeriksaan/'.$pemeriksaan->id;
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Kemaskini</a>';
            })
            // ->editColumn('masa_tiba', function (Pemeriksaan $pemeriksaan) {
            //     return [
            //         'display' => ($pemeriksaan->masa_tiba && $pemeriksaan->masa_tiba != '0000-00-00 00:00:00') ? with(new Carbon($pemeriksaan->masa_tiba))->format('d F Y') : '',
            //         'timestamp' => ($pemeriksaan->masa_tiba && $pemeriksaan->masa_tiba != '0000-00-00 00:00:00') ? with(new Carbon($pemeriksaan->masa_tiba))->timestamp : ''
            //     ];
            // })
            ->rawColumns(['tindakan'])                                  
            ->make(true);
        }
        
        return view('daging.senarai_ruminan', compact('pemeriksaans','user'));
      

    }

    public function cipta_pemeriksaan(Request $request){
        
        $user = $request->user();

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
        //save rumah_sembelih_id
        $pemeriksaan->rumah_sembelih_id = $user->rumah_sembelih->id;

        $pemeriksaan->bil_ternakan_diterima = $request->bil_ternakan_diterima;
        $pemeriksaan->ternakan_mati_semasa_tiba = $request->ternakan_mati_semasa_tiba;
        $pemeriksaan->jumlah_ternakan_diperiksa = $request->jumlah_ternakan_diperiksa;
        $pemeriksaan->jumlah_binatang_layak_disembelih = $request->jumlah_binatang_layak_disembelih;


        $pemeriksaan->save();


        Alert::success('Simpan berjaya.', 'Maklumat pengenalan ternakan ruminan telah disimpan.');

        return redirect('/pemeriksaan'); 

    }

    public function satu_pemeriksaan(Request $request) {
        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan = Pemeriksaan::find($id); 
        $harians = PemeriksaanHarian::where([
            ['pemeriksaan_id','=', $pemeriksaan->id]
        ])->get();
        $ante_mortems = AnteMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();
        $post_mortems = PostMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();       
        return view('daging.satu_ruminan', compact('pemeriksaan','harians', 'user','ante_mortems','post_mortems'));
    }

    
}
