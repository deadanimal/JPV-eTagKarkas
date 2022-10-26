<?php

namespace App\Http\Controllers;

use App\Models\Stok_tag;
use Illuminate\Cache\TaggedCache;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\RumahSembelih;

use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
class TagController extends Controller
{

    public function satu_tag(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id);        
        return view('tag.satu', compact('tag'));
    }

    public function senarai_tag(Request $request) {
        // $tags = Tag::all();
        $user = $request->user();

        $tags = Tag::all();
        if($request->ajax()) {
            return DataTables::collection($tags)

            
            
            ->make(true);
        }

        return view('tag.senarai', compact('user','tags'));
    } 
 
    public function cipta_tag(Request $request) {
        $tags = New Tag;
        $tags->jenis_ternakan = $request->jenis_ternakan;
        $tags->bil_ternakan = $request->bil_ternakan;
        $tags->bil_kodbar = $request->bil_kodbar;
        $tags->save();
        //Alert::html('Html Title', 'Html Code', 'Type');

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
        $stoks = Stok_tag::all();
        $user = $request->user();
        
        return view('tag.senarai_stok', compact('stoks','user'));
    } 

    public function cipta_stok_tag(Request $request) {
        $stoks = New Stok_tag;
        // dd($stoks);
        $stoks->tarikh = $request->tarikh;
        $stoks->tag_diterima = $request->tag_diterima;
        $stoks->tag_rosak = $request->tag_rosak;
        $stoks->tarikh_tag_rosak = $request->tarikh_tag_rosak;
        $stoks->catatan = $request->catatan;
        $stoks->save();
        return back();
    } 


    public function satu_stok_tag(Request $request) {
        $id = (int)$request->route('id');
        $stoks = Stok_tag::find($id);        
        return view('tag.satu_stok', compact('stoks'));
    }

    public function kemaskini_stok_tag(Request $request) {
        $id = (int)$request->route('id');

        $stoks = Stok_tag::find($id);
        // dd($stoks);

        $stoks->tag_diterima = $request->tag_diterima;
        $stoks->tag_rosak = $request->tag_rosak;
        $stoks->catatan = $request->catatan;
        $stoks->save();
        return back();
    } 

}
