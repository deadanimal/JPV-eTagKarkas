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
    public function cipta_postMortem(Request $request){

        $ante_mortem = New PostMortemRuminan;

        // 
        $ante_mortem->kategori_post_mortem = $request->kategori_post_mortem;
        $ante_mortem->bahagian = $request->bahagian;
        $ante_mortem->musnah = $request->musnah;
        $ante_mortem->kes_post_mortem = $request->kes_post_mortem;
        $ante_mortem->nombor_tag_post = $request->nombor_tag_post;
        $ante_mortem->keputusan = $request->keputusan;

        $ante_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan post-mortem ruminan telah disimpan.');

        return back(); 

    }
}
