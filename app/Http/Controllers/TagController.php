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
        return view('tag.senarai');
    } 
 
    public function cipta_tag(Request $request) {
        $tag = New Tag;
        $tag->save();
        return back();
    }           

}
