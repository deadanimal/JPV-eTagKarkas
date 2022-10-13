<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSembelih;

class RumahSembelihController extends Controller
{

    public function senarai_rumah(Request $request) {
        return view('rumah.senarai');
    } 
    
    public function cipta_rumah(Request $request) {
        
        $rumah = New RumahSembelih;
        $rumah->save();

        return back();
    }  
}
