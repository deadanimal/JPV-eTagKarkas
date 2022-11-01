<?php

namespace App\Http\Controllers;

use App\Models\StokTag;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;
use App\Models\RumahSembelih;

use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Yajra\DataTables\Contracts\DataTable;

class StokTagController extends Controller {



    public function senarai(Request $request) {

        $user = $request->user();

        $stoks = StokTag::all();
        if($request->ajax()) {
            return DataTables::collection($stoks)
            // ->addColumn('tindakan', function (Stok_tag $stok) {
            //     $url = '/tag/senarai_tag/stok/'.$stok->id;
            //     return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            // })                        
            ->make(true);
        }
        
        return view('stok_tag.senarai', compact('stoks','user'));
    } 

    public function cipta(Request $request) {
        $stok = New StokTag;
        $stok->tarikh_tag_terima = $request->tarikh_tag_terima;
        $stok->tag_diterima = $request->tag_diterima;
        $stok->tag_rosak = $request->tag_rosak;
        $stok->tag_bolehpakai = $request->tag_bolehpakai;
        $stok->tarikh_tag_rosak = $request->tarikh_tag_rosak;
        $stok->catatan = $request->catatan;
        $stok->save();
        Alert::success('Stok Tag Dicipta', 'Info Stok Tag dicipta');
        return redirect('/stok-tag/');
    } 

    public function satu(Request $request) {
        $id = (int)$request->route('id');
        $stok = StokTag::find($id);        
        return view('stok_tag.satu', compact('stok'));
    }

    public function kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $stok = StokTag::find($id);
        $stok->tag_diterima = $request->tag_diterima;
        $stok->tag_rosak = $request->tag_rosak;
        $stok->tag_bolehpakai = $request->tag_bolehpakai;
        $stok->catatan = $request->catatan;
        $stok->save();
        return back();
    } 

    public function borang(Request $request) {
        return view('stok_tag.borang');
    }  

}
