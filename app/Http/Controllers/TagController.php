<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\RumahSembelih;


class TagController extends Controller
{

    public function satu_tag(Request $request) {
        return view('tag.satu');
    }

    public function senarai_tag(Request $request) {
        $tags = Tag::all();

        return view('tag.senarai', compact('tags'));
    } 
 
    public function cipta_tag(Request $request) {
        $tags = New Tag;
        $tags->jenis_ternakan = $request->jenis_ternakan;
        $tags->bil_ternakan = $request->bil_ternakan;
        $tags->bil_kodbar = $request->bil_kodbar;
        $tags->save();
        return back();
    }           

}
