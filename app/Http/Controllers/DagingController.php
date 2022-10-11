<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DagingController extends Controller
{
    public function satu_daging(Request $request) {
        return view('daging.satu');
    }

    public function senarai_daging(Request $request) {
        return view('daging.senarai');
    } 
    
    public function borang_daging(Request $request) {
        return view('daging.borang');
    }  
    
    public function cipta_daging(Request $request) {
        dd($request);
        return back();
    }  
}
