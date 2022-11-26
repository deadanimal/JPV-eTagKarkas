<?php

namespace App\Http\Controllers;

use App\Models\AnteMortemRuminan;
use App\Models\AnteMortemUnggas;
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


    public function kemaskini_am(Request $request){
        $id = (int)$request->route('id');
        $am = AnteMortemRuminan::find($id);

        $am->ante_mortem = $request->ante_mortem;
        $am->kes = $request->kes;
        $am->nombor_tag = $request->nombor_tag;
        $am->catatan_ante_mortem = $request->catatan_ante_mortem;
        $am->jumlah_dikondem = $request->jumlah_dikondem;

        $am->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat pemeriksaan ante-mortem ruminan telah dikemaskini.');

        return back();
    }

    public function satu_am_unggas(Request $request) {

        $user = $request->user();
        $id = (int)$request->route('id');
        $pemeriksaan_unggas = AnteMortemUnggas::find($id);
        
        //
        
        $ante_mortems_unggas = AnteMortemUnggas::where([
            ['unggas_id','=', $pemeriksaan_unggas->id],
        ])->get();
        
        return view('daging.satu_unggas', compact('ante_mortems_unggas','pemeriksaan_unggas','user'));
      

    }

    public function cipta_anteMortemUnggas(Request $request){

        $ante_mortem_unggas = New AnteMortemUnggas;

        // 
        $ante_mortem_unggas->general = $request->general;
        $ante_mortem_unggas->bil_kes_general = $request->bil_kes_general;
        $ante_mortem_unggas->respiratory = $request->respiratory;
        $ante_mortem_unggas->bil_kes_respiratory = $request->bil_kes_respiratory;
        $ante_mortem_unggas->cns = $request->cns;
        $ante_mortem_unggas->bil_kes_cns = $request->bil_kes_cns;
        $ante_mortem_unggas->gastro = $request->gastro;
        $ante_mortem_unggas->bil_kes_gastro = $request->bil_kes_gastro;

        $ante_mortem_unggas->unggas_id = $request->unggas_id;
        $ante_mortem_unggas->rumah_sembelih_id = $request->rumah_sembelih_id;

        $ante_mortem_unggas->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ante-mortem unggas telah disimpan.');

        return back(); 

    }

    public function kemaskini_am_unggas(Request $request){
        $id = (int)$request->route('id');
        $ante_mortem_unggas = AnteMortemUnggas::find($id);

        $ante_mortem_unggas->general = $request->general;
        $ante_mortem_unggas->bil_kes_general = $request->bil_kes_general;
        $ante_mortem_unggas->respiratory = $request->respiratory;
        $ante_mortem_unggas->bil_kes_respiratory = $request->bil_kes_respiratory;
        $ante_mortem_unggas->cns = $request->cns;
        $ante_mortem_unggas->bil_kes_cns = $request->bil_kes_cns;
        $ante_mortem_unggas->gastro = $request->gastro;
        $ante_mortem_unggas->bil_kes_gastro = $request->bil_kes_gastro;

        $ante_mortem_unggas->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat penemuan ante-mortem unggas telah dikemaskini.');

        return back();
    }

    
}
