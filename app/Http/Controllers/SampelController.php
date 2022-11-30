<?php

namespace App\Http\Controllers;

use App\Models\RumahSembelih;
use App\Models\Sampel;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Yajra\DataTables\Contracts\DataTable;



class SampelController extends Controller
{
    public function senarai(Request $request){

        $user = $request->user();

        $sampels = Sampel::all();
        if($request->ajax()) {
            return DataTables::collection($sampels)
            ->addIndexColumn()
            ->editColumn('created_at', function (Sampel $sampels) {
                return [
                    'display' => ($sampels->created_at && $sampels->created_at != '0000-00-00 00:00:00') ? with(new Carbon($sampels->created_at))->format('d F Y') : '',
                    'timestamp' => ($sampels->created_at && $sampels->created_at != '0000-00-00 00:00:00') ? with(new Carbon($sampels->created_at))->timestamp : ''
                ];
            })             
            ->make(true);
        }
        return view('sampel.senarai',compact('sampels','user'));
    }
    public function tunjuk(){
        return view('sampel.tunjuk');
    }

    public function borang_sampel(Request $request) {
        $id = (int)$request->route('id');

        $user = $request->user();
        // $sampel = Sampel::find($id); 
        $rumahs = RumahSembelih::all();

        // $kod = RumahSembelih::where([
        //     ['kod', '=', ]
        // ])

        
        // if ($sampel->jenis == 'ayam' && 'ruminan_besar' && 'ruminan_kecil' && 'babi'){
        //     return view('sampel.borang-sampel', compact('sampel'));
        // } else if ($sampel->jenis == 'vhm' && 'mygap' && 'gvhp'){
        //     return view('sampel.borang-sampel2', compact('sampel'));

        // }

        // dd($rumahs);
        
        return view('sampel.borang-sampel', compact('user','rumahs'));
    }

    public function cipta_sampel(Request $request){

        $user = $request->user();

        $sampel = New Sampel;

        $sampel->tahun = $request->tahun;
        $sampel->zon = $request->zon;
        $sampel->kod_premis = $request->kod_premis;
        $sampel->premis = $request->premis;
        $sampel->ujian = $request->ujian;
        $sampel->sampel = $request->sampel;

        $sampel->save();

        Alert::success('Simpan berjaya.', 'Maklumat pensampelan telah disimpan.');

        return back();

    }
}
