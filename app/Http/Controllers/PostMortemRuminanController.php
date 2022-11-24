<?php

namespace App\Http\Controllers;

use App\Models\PostMortemRuminan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

class PostMortemRuminanController extends Controller
{
    //
    public function satu_post_mortem(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan = PostMortemRuminan::find($id);
        
        //
        
        $post_mortems = PostMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();
        
        return view('daging.satu_ruminan', compact('post_mortems','pemeriksaan','user'));
      

    }

    public function cipta_postMortem(Request $request){

        $post_mortem = New PostMortemRuminan;

        // 
        $post_mortem->kategori_post_mortem = $request->kategori_post_mortem;
        $post_mortem->bahagian = $request->bahagian;
        $post_mortem->musnah = $request->musnah;
        $post_mortem->kes_post_mortem = $request->kes_post_mortem;
        $post_mortem->nombor_tag_post = $request->nombor_tag_post;
        $post_mortem->keputusan = $request->keputusan;
        // FK
        $post_mortem->pemeriksaan_id = $request->pemeriksaan_id;
        $post_mortem->rumah_sembelih_id = $request->rumah_sembelih_id;

        $post_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan post-mortem ruminan telah disimpan.');

        return back(); 

    }

    public function kemaskini_pm(Request $request){
        $id = (int)$request->route('id');
        $pm = PostMortemRuminan::find($id);

        $pm->kategori_post_mortem = $request->kategori_post_mortem;
        $pm->bahagian = $request->bahagian;
        $pm->musnah = $request->musnah;
        $pm->kes_post_mortem = $request->kes_post_mortem;
        $pm->nombor_tag_post = $request->nombor_tag_post;
        $pm->keputusan = $request->keputusan;

        $pm->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat pemeriksaan post-mortem ruminan telah dikemaskini.');

        return back();
    }

    public function tunjuk_pm(Request $request){
        $id = (int)$request->route('id');
        $jana_pm = PostMortemRuminan::find($id);

        return view('daging.borang_pm', compact('jana_pm'));
    }

    public function jana_pm(Request $request){

        // tarik data dari cipta periksa rapi
        $id = (int)$request->route('id');
        $jana_pm = PostMortemRuminan::find($id);

        // generate pdf using DomPDF
        $pdf = Pdf::loadView('daging.final_borang_pm', compact('jana_pm'));

        return $pdf->download('borang_post-mortem.pdf');

    }
}
