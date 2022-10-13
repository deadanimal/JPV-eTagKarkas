<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daging;

use App\Models\DagingBabi;
use App\Models\DagingRuminan;
use App\Models\DagingUnggas;

class DagingController extends Controller
{
    public function satu_daging(Request $request) {

        $jenis = $request->query('jenis');
        $id = (int)$request->route('id'); 

        if ($jenis == 'unggas') {
            
            $daging = DagingUnggas::find($id);
            return view('daging.satu_unggas', compact('daging'));

        } else if ($jenis == 'babi') {
            
            $daging = DagingBabi::find($id);
            return view('daging.satu_babi', compact('daging'));

        } else {
            
            $daging = DagingRuminan::find($id);
            return view('daging.satu_ruminan', compact('daging'));

        }         
        
    }

    public function senarai_daging(Request $request) {
        return view('daging.senarai');
    } 
    
    public function cipta_daging(Request $request) {
        
        $jenis = $request->jenis;

        if ($jenis == 'unggas') {            
            $daging = New DagingUnggas;
        } else if ($jenis == 'babi') {        
            $daging = New DagingBabi;
        } else {            
            $daging = New DagingRuminan;
        }

        $daging->no_skv = $request->no_skv;
        $daging->save();

        return back();
    }  
}
