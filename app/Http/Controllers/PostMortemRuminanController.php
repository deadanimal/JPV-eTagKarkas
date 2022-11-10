<?php

namespace App\Http\Controllers;

use App\Models\PostMortemRuminan;
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

        $ante_mortem = New PostMortemRuminan;

        // 
        $ante_mortem->kategori_post_mortem = $request->kategori_post_mortem;
        $ante_mortem->bahagian = $request->bahagian;
        $ante_mortem->musnah = $request->musnah;
        $ante_mortem->kes_post_mortem = $request->kes_post_mortem;
        $ante_mortem->nombor_tag_post = $request->nombor_tag_post;
        $ante_mortem->keputusan = $request->keputusan;
        // FK
        $ante_mortem->pemeriksaan_id = $request->pemeriksaan_id;
        $ante_mortem->rumah_sembelih_id = $request->rumah_sembelih_id;

        $ante_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan post-mortem ruminan telah disimpan.');

        return back(); 

    }
}
