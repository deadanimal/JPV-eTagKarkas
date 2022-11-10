<?php

namespace App\Http\Controllers;

use App\Models\AnteMortemRuminan;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

class AnteMortemRuminanController extends Controller
{
    //
    public function satu_ante_mortem(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan = AnteMortemRuminan::find($id);
        
        //
        
        $ante_mortems = AnteMortemRuminan::where([
            ['pemeriksaan_id','=', $pemeriksaan->id],
        ])->get();
        
        return view('daging.satu_ruminan', compact('ante_mortems','pemeriksaan','user'));
      

    }

    public function cipta_anteMortem(Request $request){

        $ante_mortem = New AnteMortemRuminan;

        // 
        $ante_mortem->ante_mortem = $request->ante_mortem;
        $ante_mortem->kes = $request->kes;
        $ante_mortem->nombor_tag = $request->nombor_tag;
        $ante_mortem->catatan_ante_mortem = $request->catatan_ante_mortem;
        $ante_mortem->jumlah_dikondem = $request->jumlah_dikondem;

        $ante_mortem->pemeriksaan_id = $request->pemeriksaan_id;
        $ante_mortem->rumah_sembelih_id = $request->rumah_sembelih_id;

        $ante_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ante-mortem ruminan telah disimpan.');

        return back(); 

    }
}
