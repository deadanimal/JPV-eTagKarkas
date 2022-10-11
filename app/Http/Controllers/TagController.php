<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{

    public function satu_tag(Request $request) {
        return view('tag.satu');
    }

    public function senarai_tag(Request $request) {
        return view('tag.senarai');
    } 
    
    public function borang_tag(Request $request) {
        return view('tag.borang');
    }  
    
    public function cipta_tag(Request $request) {
        dd($request);
        return back();
    }           

}
