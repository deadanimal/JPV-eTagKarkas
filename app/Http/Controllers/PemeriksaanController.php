<?php

namespace App\Http\Controllers;

use App\Models\AnteMortemRuminan;
use App\Models\AnteMortemUnggas;
use App\Models\Babi;
use App\Models\Catatan;
use App\Models\Haiwan;
use App\Models\PemeriksaanBabi;
use App\Models\PemeriksaanHarian;
use App\Models\PemeriksaanUnggas;
use App\Models\PengenalanBabi;
use App\Models\PostMortemRuminan;
use App\Models\PostMortemUnggas;
use App\Models\RumahSembelih;
use App\Models\Unggas;
use Illuminate\Http\Request;
use App\Models\Pemeriksaan;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Barryvdh\DomPDF\Facade\Pdf;


class PemeriksaanController extends Controller
{

    public function senarai(Request $request) {
        
        $id = (int)$request->route('id');
        // call all pemeriksaan into datatable
        $pemeriksaans = Pemeriksaan::all();
        $user = $request->user();
        $haiwans = Haiwan::find($id);

        // tambah column jenis_ternakan

        if ($user->hasRole('pentadbir')) {
            $rumah_sembelih_id = $user->rumah_sembelih_id;
            $pemeriksaans = Pemeriksaan::all();

                // datatable
            if($request->ajax()) {
                return DataTables::collection($pemeriksaans)
                ->addIndexColumn()
                ->addColumn('nama_premis', function (Pemeriksaan $pemeriksaan) {

                    $html_button = '-';
                    if($pemeriksaan->rumah_sembelih) {
                        $html_button = $pemeriksaan->rumah_sembelih->nama_rumah;
                    }                 
                    return $html_button;
                })
                ->addColumn('tindakan', function (Pemeriksaan $pemeriksaan) {
                    $url = '/pemeriksaan/'.$pemeriksaan->id;
                    return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Lihat</a>';
                })
                ->rawColumns(['tindakan'])                                  
                ->make(true);
            }

        } else{
            // pass rumah_sembelih_id
            $rumah_sembelih_id = $user->rumah_sembelih_id;

            $pemeriksaans = Pemeriksaan::where([
                ['rumah_sembelih_id','=', $rumah_sembelih_id],
            ])->orderBy('updated_at','desc')->get();
            
        
             // datatable
            if($request->ajax()) {
                // $pemeriksaans = Pemeriksaan::where('jenis', 'Ruminan')->get();
               
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
            // elseif($request->ajax() && $haiwans->jenis == 'Unggas' ) {
            //     $unggass = Unggas::where([
            //         ['rumah_sembelih_id','=', $rumah_sembelih_id],
            //     ])->orderBy('updated_at','desc')->get();
            //     return DataTables::collection($unggass)
            //     ->addIndexColumn()
            //     ->addColumn('tindakan', function (Unggas $unggas) {
            //         $url = '/pemeriksaan-unggas/'.$unggas->id;
            //         return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Kemaskini unggas</a>';
            //     })
            //     ->rawColumns(['tindakan'])                                  
            //     ->make(true);
            // }

        }
        // dd($pemeriksaans);
        return view('daging.senarai_ruminan', compact('pemeriksaans','user','haiwans'));
      
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
        $periksa_harian = Pemeriksaan::find($id);
        // $catatans = Catatan::find($id);

 
        $harians = PemeriksaanHarian::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
            ['pemeriksaan_id','=', $periksa_harian->id],
        ])->get();
        $ante_mortems = AnteMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();
        $post_mortems = PostMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();  
        $catatans = Catatan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();      
        return view('daging.satu_ruminan', compact('pemeriksaan','harians', 'user','ante_mortems','post_mortems','periksa_harian','catatans'));
    }

    public function catatan(Request $request){
        $id = (int)$request->route('id');

        $user = $request->user();
        $pemeriksaan = Pemeriksaan::find($id);
        $catatans = Catatan::find($id);


        return view('daging.catatan', compact('user','catatans','pemeriksaan'));
    }

    public function cipta_catatan(Request $request){

        $user = $request->user();

        $catatan = New Catatan;

        $catatan->tag = $request->tag;
        $catatan->jantina = $request->jantina;
        $catatan->baka = $request->baka;
        $catatan->tarikh = $request->tarikh;
        $catatan->pemeriksaan_id = $request->pemeriksaan_id;
        $catatan->rumah_sembelih_id = $user->rumah_sembelih->id;

        $catatan->save();

        Alert::success('Simpan berjaya.', 'Maklumat catatan telah disimpan.');

        return back(); 

    }

    public function tunjuk_harian(Request $request){

        // tarik data dari cipta periksa rapi
        $id = (int)$request->route('id');
        $jana_harian = AnteMortemRuminan::find($id);
        // dd($jana_harian->pemeriksaan->pemeriksaan_harian);
    
        return view('daging.borang_harian', compact('jana_harian'));
    }

    public function jana_harian(Request $request){

        // tarik data dari cipta periksa rapi
        $id = (int)$request->route('id');
        $jana_harian = AnteMortemRuminan::find($id);

        // generate pdf using DomPDF
        // $customPaper = array(0,0,720,1440);
        // $pdf = Pdf::loadView('daging.borang_harian', compact('jana_harian'))->setPaper($customPaper,'portrait');
        $pdf = Pdf::loadView('daging.final_borang_harian', compact('jana_harian'));

        return $pdf->download('borang_harian.pdf');

    }

    // Unggas

    public function senarai_unggas(Request $request) {
        
        $id = (int)$request->route('id');
        // call all pemeriksaan into datatable
        $unggas = Unggas::all();
        $user = $request->user();

        // pass rumah_sembelih_id
        $rumah_sembelih_id = $user->rumah_sembelih_id;

        $unggass = Unggas::where([
            ['rumah_sembelih_id','=', $rumah_sembelih_id],
        ])->orderBy('updated_at','desc')->get();
           
     
             // datatable
            if($request->ajax()) {
               
                return DataTables::collection($unggass)
                ->addIndexColumn()
                ->addColumn('tindakan', function (Unggas $unggas) {
                    $url = '/pemeriksaan-unggas/'.$unggas->id;
                    return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Kemaskini</a>';
                })
               
                ->rawColumns(['tindakan'])                                  
                ->make(true);
            }
           

        
        // dd($pemeriksaans);
        return view('daging.senarai_unggas', compact('unggass','user'));
      
    }


    public function cipta_unggas(Request $request){
        
        $user = $request->user();

        $unggas = New Unggas;

        // pengenalan
        $unggas->nama_ladang = $request->nama_ladang;
        $unggas->nombor_kenderaan = $request->nombor_kenderaan;
        $unggas->id_ladang = $request->id_ladang;
        $unggas->alamat_ladang = $request->alamat_ladang;
        $unggas->tarikh_terima = $request->tarikh_terima;
        $unggas->rumah_sembelih_id = $user->rumah_sembelih->id;
 
        $unggas->save();


        Alert::success('Simpan berjaya.', 'Maklumat pengenalan ternakan unggas telah disimpan.');

        return redirect('/pemeriksaan-unggas'); 

    }

    public function satu_pemeriksaan_unggas(Request $request) {
        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan_unggas = Unggas::find($id);
        // $periksa_harian = PemeriksaanHarian::find($id);
 
         $periksas = PemeriksaanUnggas::where([
             ['unggas_id','=', $pemeriksaan_unggas->id],
         ])->get();
        $am_unggas = AnteMortemUnggas::where([
            ['unggas_id','=', $pemeriksaan_unggas->id],
        ])->get();
        $pm_unggas = PostMortemUnggas::where([
            ['unggas_id','=', $pemeriksaan_unggas->id],
        ])->get();       
        return view('daging.satu_unggas', compact('user','pemeriksaan_unggas','periksas','am_unggas','pm_unggas'));
    }

    public function cipta_pemeriksaan_unggas(Request $request){
        
        $user = $request->user();

        $periksa_unggas = New PemeriksaanUnggas;

        // pengenalan
        $periksa_unggas->bilangan_ternakan = $request->bilangan_ternakan;
        $periksa_unggas->bilangan_mati = $request->bilangan_mati;
        $periksa_unggas->jumlah_mati_dbs = $request->jumlah_mati_dbs;
        $periksa_unggas->runt = $request->runt;
        $periksa_unggas->salah_sembelih = $request->salah_sembelih;
        $periksa_unggas->unggas_id = $request->unggas_id;

        $periksa_unggas->rumah_sembelih_id = $user->rumah_sembelih->id;
 
        $periksa_unggas->save();


        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ternakan unggas telah disimpan.');

        return back(); 

    }

    // babi

    public function senarai_babi(Request $request) {
        
        $id = (int)$request->route('id');
        // call all pemeriksaan into datatable
        $babi = PengenalanBabi::all();
        $user = $request->user();

        // pass rumah_sembelih_id
        $rumah_sembelih_id = $user->rumah_sembelih_id;

        $babis = PengenalanBabi::where([
            ['rumah_sembelih_id','=', $rumah_sembelih_id],
        ])->orderBy('updated_at','desc')->get();
           
     
             // datatable
            if($request->ajax()) {
               
                return DataTables::collection($babis)
                ->addIndexColumn()
                ->addColumn('tindakan', function (PengenalanBabi $babi) {
                    $url = '/pemeriksaan-babi/'.$babi->id;
                    return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Kemaskini</a>';
                })
               
                ->rawColumns(['tindakan'])                                  
                ->make(true);
            }
           

        
        // dd($pemeriksaans);
        return view('daging.senarai_babi', compact('babis','user'));
      
    }

    public function cipta_babi(Request $request){
        
        $user = $request->user();

        $babi = New PengenalanBabi;

        // pengenalan
        $babi->nama_pemilik = $request->nama_pemilik;
        $babi->kenderaan = $request->kenderaan;
        $babi->masa_tiba = $request->masa_tiba;
        $babi->masa_disembelih = $request->masa_disembelih;
        $babi->permit = $request->permit;
        $babi->spesis = $request->spesis;
        $babi->bil_ternakan_skv = $request->bil_ternakan_skv;
        $babi->id_permis = $request->id_permis;
        $babi->nama_premis = $request->nama_premis;
        $babi->alamat_premis = $request->alamat_premis;
        //save rumah_sembelih_id
        $babi->rumah_sembelih_id = $user->rumah_sembelih->id;

        $babi->bil_ternakan_diterima = $request->bil_ternakan_diterima;
        $babi->ternakan_mati_semasa_tiba = $request->ternakan_mati_semasa_tiba;
        $babi->jumlah_ternakan_diperiksa = $request->jumlah_ternakan_diperiksa;
        $babi->jumlah_binatang_layak_disembelih = $request->jumlah_binatang_layak_disembelih;

        $babi->save();


        Alert::success('Simpan berjaya.', 'Maklumat pengenalan ternakan babi telah disimpan.');

        return redirect('/pemeriksaan-babi'); 

    }

    public function satu_pemeriksaan_babi(Request $request) {
        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan = Pemeriksaan::find($id);

        $pemeriksaan_babi = PengenalanBabi::find($id);
        $periksa_harian = Pemeriksaan::find($id);
 
         $harians = PemeriksaanHarian::where([
             ['pemeriksaan_id','=', $pemeriksaan_babi->id],
             ['pemeriksaan_id','=', $periksa_harian->id],

         ])->get();
         $ante_mortems = AnteMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan_babi->id],
        ])->get();
        $post_mortems = PostMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan_babi->id],
        ])->get(); 
        $catatans = Catatan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get(); 
        // $am_unggas = AnteMortemUnggas::where([
        //     ['unggas_id','=', $pemeriksaan_babi->id],
        // ])->get();
        // $pm_unggas = PostMortemUnggas::where([
        //     ['unggas_id','=', $pemeriksaan_babi->id],
        // ])->get();       
        return view('daging.satu_babi', compact('user','pemeriksaan_babi','harians','periksa_harian','ante_mortems','post_mortems','catatans','pemeriksaan'));
    }

    // tambah model notifikasi - id,message,user
    // satu pemeriksaan & catatan ternakan has many p.rapi



    

    
}
