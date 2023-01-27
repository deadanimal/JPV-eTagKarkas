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
        $tags = Tag::all();
        $stoks = StokTag::all();
        // dd($stoks);
        if($request->ajax()) {
            return DataTables::collection($stoks)
            ->addIndexColumn()
            ->addColumn('tindakan', function (StokTag $stok) {
                $url = '/stok-tag/'.$stok->id;
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Kemaskini</a>';
            })
           
            ->addColumn('tarikh_tindakan', function (StokTag $stok) {

                $html_button = '-';
                if($stok->tag) {
                    $html_button = $stok->tag->bil_ternakan;
                }                 
                return $html_button;
            })           
            ->rawColumns(['tindakan','tarikh_tindakan'])              
            ->make(true);
        }
        
        return view('stok_tag.senarai', compact('stoks','user', 'tags'));
    } 

    public function cipta(Request $request) {
        $stok = New StokTag; 
        $stok->nama_rumah = $request->nama_rumah;       
        $stok->tag_diterima = $request->tag_diterima;
        $stok->tarikh_tag_terima = $request->tarikh_tag_terima;
        $stok->tag_rosak = $request->tag_rosak;
        $stok->tarikh_tag_rosak = $request->tarikh_tag_rosak;
        $stok->tag_bolehpakai = $request->tag_bolehpakai;
        $stok->catatan = $request->catatan;
        // $stok->tag_id = $request->tag_id;
        $stok->save();
        Alert::success('Stok Tag Dicipta', 'Info Stok Tag dicipta');
        return redirect('/stok-tag');
    } 

    public function satu(Request $request) {
        $id = (int)$request->route('id');
        $stok = StokTag::find($id);        
        return view('stok_tag.satu', compact('stok'));
    }

    public function kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $stok = StokTag::find($id);
        $stok->nama_rumah = $request->nama_rumah;
        $stok->tag_diterima = $request->tag_diterima;
        $stok->tag_rosak = $request->tag_rosak;
        $stok->tag_bolehpakai = $request->tag_bolehpakai;
        $stok->tarikh_tag_terima = $request->tarikh_tag_terima;
        $stok->tarikh_tag_rosak = $request->tarikh_tag_rosak;
        $stok->catatan = $request->catatan;
        $stok->save();
        Alert::success('Stok Tag Dikemaskini', 'Info Stok Tag dikemaskini');
        return redirect('stok-tag');
    } 

    public function borang(Request $request) {
        $user = $request->user(); 
        $rumahs = RumahSembelih::all();
   

        return view('stok_tag.borang', compact('user','rumahs'));
    }  

}
