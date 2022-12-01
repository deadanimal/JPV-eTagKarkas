<?php

namespace App\Http\Controllers;

use App\Models\RumahSembelih;
use App\Models\Sampel;
use App\Models\User;
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
            ->addColumn('tindakan', function (Sampel $sampel) {
                $url = '/pensampelan-pilihan/'.$sampel->id;
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Lihat</a>';
            }) 
            ->editColumn('created_at', function (Sampel $sampels) {
                return [
                    'display' => ($sampels->created_at && $sampels->created_at != '0000-00-00 00:00:00') ? with(new Carbon($sampels->created_at))->format('d F Y') : '',
                    'timestamp' => ($sampels->created_at && $sampels->created_at != '0000-00-00 00:00:00') ? with(new Carbon($sampels->created_at))->timestamp : ''
                ];
            })
            ->rawColumns(['tindakan'])                          
            ->make(true);
        }
        return view('sampel.senarai',compact('sampels','user'));
    }
    public function pilihan(){
        return view('sampel.pilihan');
    }

    public function satu_pilihan(Request $request) {
        $user = $request->user();
        $id = (int)$request->route('id');
        $sampel = Sampel::find($id);
        $users = User::where([
            ['id','=', null]
        ])->get();
        return view('sampel.satu_pilihan', compact('sampel', 'user', 'users'));
    }  


    public function borang_sampel(Request $request, $pilihan) {

        $id = (int)$request->route('id');
        
        $user = $request->user();
        // $sampel = Sampel::find($id); 
        $rumahs = RumahSembelih::all();
        // $sampels = Sampel::find($id);
        // $params = $request->query->all();
        // foreach ($params as $key => $p) {
        //     $jenis_haiwan = $p;
        // }

        $sampels = Sampel::where('pilihan', $pilihan)->get();
        
        // if ($sampel->jenis == 'ayam' && 'ruminan_besar' && 'ruminan_kecil' && 'babi'){
        //     return view('sampel.borang-sampel', compact('sampel'));
        // } else if ($sampel->jenis == 'vhm' && 'mygap' && 'gvhp'){
        //     return view('sampel.borang-sampel2', compact('sampel'));

        // }

       
        
        return view('sampel.borang-sampel', compact('user','rumahs','sampels', 'pilihan'));
    }

    public function cipta_sampel(Request $request){

      

        $user = $request->user();
        $rumahs = RumahSembelih::all();

        $sampel = New Sampel;

        $sampel->tahun = $request->tahun;
        $sampel->zon = $request->zon;
        $sampel->kod_premis = $request->kod_premis;
        $sampel->premis = $request->premis;
        $sampel->ujian = $request->ujian;
        $sampel->sampel = $request->sampel;
        $sampel->pilihan = $request->pilihan;

        $sampel->save();

        Alert::success('Simpan berjaya.', 'Maklumat pensampelan telah disimpan.');

        // $utara['zon'] = $request->zon; 
        // $selatan['premis'] = $request->premis; 

        // return view('sampel.borang-sampel', compact('user','rumahs','utara'));
        return redirect('/pensampelan-pilihan');

    }
}
