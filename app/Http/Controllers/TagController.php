<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function satu_tag(Request $request) {
        return view('tag.satu');
    }

    public function senarai_tag(Request $request) {
        $tag = Tag::all();
        return view('tag.senarai', compact('tag'));
    } 
 
    public function cipta_tag(Request $request) {
        $tag = New Tag;
        $tag->jenis_ternakan = $request->jenis_ternakan;
        $tag->bil_ternakan = $request->bil_ternakan;
        $tag->bil_kodbar = $request->bil_kodbar;
        $tag->save();
        return back();
    }           

}
