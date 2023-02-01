<?php

namespace App\Http\Controllers;

use App\Models\JadualSampel;
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

        $sampels = Sampel::orderBy('created_at', 'desc')->get();
        
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

    public function tunjuk_jadual(){

        $sampels = Sampel::all();

        return view('sampel.tunjuk', compact('sampels'));
    }

    public function borang_pensampelan(){

        // $sampels = Sampel::all();

        return view('sampel.borang-pensampelan');
    }

    public function satu_pilihan(Request $request, $pilihan) {
        $user = $request->user();
        $id = (int)$request->route('id');
        $rumahs = RumahSembelih::all();
        $sampel = Sampel::find($id);
        $sampels = Sampel::where('pilihan', $pilihan)->get();
        $users = User::where([
            ['id','=', null]
        ])->get();
        return view('sampel.jadual', compact('sampel', 'user', 'users','pilihan','sampels','rumahs'));
    }  


    public function borang_sampel(Request $request, $pilihan) {
        // dd($pilihan);
        $id = (int)$request->route('id');
        
        $user = $request->user();
        // $sampel = Sampel::find($id); 
        $users = User::all();
        $rumahs = RumahSembelih::all();
        $sampels = Sampel::where('pilihan', $pilihan)->get();
        $jaduals = JadualSampel::find($id);

        // $sampels = Sampel::find($id);
        // $params = $request->query->all();
        // foreach ($params as $key => $p) {
        //     $jenis_haiwan = $p;
        // }

        
        if ($pilihan == "Ayam" || $pilihan =="Ruminan Besar" || $pilihan =="Ruminan Kecil" || $pilihan =="Babi"){
            return view('sampel.borang-sampel', compact('user','users','rumahs','sampels', 'pilihan','jaduals'));
        } else {
            return view('sampel.borang-sampel2', compact('users','rumahs','sampels', 'pilihan'));
        }
        
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
        $sampel->pemeriksa_1 = $request->pemeriksa_1;
        $sampel->pemeriksa_2 = $request->pemeriksa_2;

        $sampel->save();

        Alert::success('Simpan berjaya.', 'Maklumat pensampelan telah disimpan.');

        return redirect('/pensampelan');

    }

    public function cipta_jadual(Request $request){

      

        $user = $request->user();

        $id = (int)$request->route('id'); 
        $jadual = Sampel::find($id);

        $jadual = New JadualSampel;

        $jadual->bil_sampel = $request->bil_sampel;
        $jadual->jan = $request->jan;
        $jadual->feb = $request->feb;
        $jadual->mac = $request->mac;
        $jadual->apr = $request->apr;
        $jadual->mei = $request->mei;
        $jadual->jun = $request->jun;
        $jadual->jul = $request->jul;
        $jadual->aug = $request->aug;
        $jadual->sep = $request->sep;
        $jadual->oct = $request->oct;
        $jadual->nov = $request->nov;
        $jadual->dec = $request->dec;
        $jadual->jumlah = $request->jumlah;
        $jadual->sampel_id = $request->sampel_id;
      

        $jadual->save();

        Alert::success('Simpan berjaya.', 'Maklumat penjadualan telah dihantar.');

        return back();

    }

}
