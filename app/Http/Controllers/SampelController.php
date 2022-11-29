<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampelController extends Controller
{
    public function tunjuk(){
        return view('sampel.tunjuk');
    }

    public function borang_sampel(Request $request) {
        $user = $request->user();    
        return view('sampel.borang-sampel', compact('user'));
    }
}
