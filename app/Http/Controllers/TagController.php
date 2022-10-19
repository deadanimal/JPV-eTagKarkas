<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\RumahSembelih;


class TagController extends Controller
{

    public function satu_tag(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id);        
        return view('tag.satu', compact('tag'));
    }

    public function senarai_tag(Request $request) {
        $tags = Tag::all();
        $user = $request->user();

        return view('tag.senarai', compact('user','tags'));
    } 
 
    public function cipta_tag(Request $request) {
        $tags = New Tag;
        $tags->jenis_ternakan = $request->jenis_ternakan;
        $tags->bil_ternakan = $request->bil_ternakan;
        $tags->bil_kodbar = $request->bil_kodbar;
        $tags->save();
        return back();
    } 
    
    // fungsi padam - zach buat
    public function padam_tag(Request $request) {
        $id = (int)$request->route('id');
        $tags = Tag::find($id); 
        $user = $request->user();

        $tags->delete();        
        alert()->success('Berjaya dipadam', 'Berjaya');
        return back();
    }

    // untuk kemaskini tag - zach tambah
    public function kemaskini_tag(Request $request) {
        dd('masuk');
        $id = (int)$request->route('id');
        $tag = Tag::find($id); 
               
        return view('tag.senarai', compact('tag'));
    }

    // public function cipta_kemaskini_tag(Request $request) {
    //     $id = (int)$request->route('id');

    //     $tag = Tag::find($id);
    //     // dd($tag);

    //     $tag->jenis_ternakan = $request->jenis_ternakan;
    //     $tag->bil_ternakan = $request->bil_ternakan;
    //     $tag->bil_kodbar = $request->bil_kodbar;
    //     $tag->save();
    //     return back();
    // } 

    public function senarai_stok_tag(Request $request) {
        $tags = Tag::all();
        $user = $request->user();
        
        return view('tag.senarai_stok', compact('tags','user'));
    } 

}
