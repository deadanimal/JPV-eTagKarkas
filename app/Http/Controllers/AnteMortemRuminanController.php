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

    public function cipta_anteMortem(Request $request){

        $ante_mortem = New AnteMortemRuminan;

        // 
        $ante_mortem->ante_mortem = $request->ante_mortem;
        $ante_mortem->kes = $request->kes;
        $ante_mortem->nombor_tag = $request->nombor_tag;
        $ante_mortem->catatan_ante_mortem = $request->catatan_ante_mortem;
        $ante_mortem->jumlah_dikondem = $request->jumlah_dikondem;

        $ante_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat pemeriksaan ante-mortem ruminan telah disimpan.');

        return back(); 

    }
}
