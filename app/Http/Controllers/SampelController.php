<?php

namespace App\Http\Controllers;

use App\Models\BorangPensampelan;
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
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;




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
        $pensampelans = BorangPensampelan::all();

        return view('sampel.tunjuk', compact('sampels', 'pensampelans'));
    }

    public function borang_pensampelan(Request $request){

        $pensampelan = $request->session()->get('pensampelan'); 


        return view('sampel.borang-pensampelan', compact('pensampelan'));
    }

    public function cipta_borang_pensampelan(Request $request){

        $validatedData = $request->all();
        $checkbox = $validatedData['options'];
        $checkbox = implode(',', $checkbox);
        $validatedData['options'] = $checkbox;

        $pensampelan = new BorangPensampelan();
        $pensampelan->fill($validatedData);
        $request->session()->put('pensampelan', $pensampelan);
    
        return redirect('/borang-pensampelan2');

    }


    public function borang_pensampelan2(Request $request){

        $pensampelan = $request->session()->all(); 

        return view('sampel.borang-pensampelan2', compact('pensampelan'));
    }

    public function cipta_borang_pensampelan2(Request $request){

        $validatedData = $request->all();
        $checkbox = $validatedData['options_ladang'];
        $checkbox = implode(',', $checkbox);
        $validatedData['options_ladang'] = $checkbox;

        $pensampelan = $request->session()->get('pensampelan'); 
        $pensampelan->fill($validatedData);
        $request->session()->put('pensampelan', $pensampelan);

        // $pensampelan->save();

        // Alert::success('Hantar berjaya.', 'Maklumat laporan pensampelan telah dihantar.');

        // dd($pensampelan);

        return redirect('/borang-pensampelan3');

    }

    public function borang_pensampelan3(Request $request){

        $pensampelan = $request->session()->all(); 

        return view('sampel.borang-pensampelan3', compact('pensampelan'));
    }

    public function cipta_borang_pensampelan3(Request $request){

        $validatedData = $request->all();
        $checkbox = $validatedData['kebersihan'];
        $checkbox = implode(',', $checkbox);
        $validatedData['kebersihan'] = $checkbox;

        $patogen = $validatedData['patogen'];
        $patogen = implode(',', $patogen);
        $validatedData['patogen'] = $patogen;

        $kualiti = $validatedData['kualiti'];
        $kualiti = implode(',', $kualiti);
        $validatedData['kualiti'] = $kualiti;

        $pestisid = $validatedData['pestisid'];
        $pestisid = implode(',', $pestisid);
        $validatedData['pestisid'] = $pestisid;

        $aditif = $validatedData['aditif'];
        $aditif = implode(',', $aditif);
        $validatedData['aditif'] = $aditif;

        $logam = $validatedData['logam'];
        $logam = implode(',', $logam);
        $validatedData['logam'] = $logam;

        $mineral = $validatedData['mineral'];
        $mineral = implode(',', $mineral);
        $validatedData['mineral'] = $mineral;

        $identifikasi = $validatedData['identifikasi'];
        $identifikasi = implode(',', $identifikasi);
        $validatedData['identifikasi'] = $identifikasi;

        $ketulenan = $validatedData['ketulenan'];
        $ketulenan = implode(',', $ketulenan);
        $validatedData['ketulenan'] = $ketulenan;

        $ubatan = $validatedData['ubatan'];
        $ubatan = implode(',', $ubatan);
        $validatedData['ubatan'] = $ubatan;

        $hormon = $validatedData['hormon'];
        $hormon = implode(',', $hormon);
        $validatedData['hormon'] = $hormon;

        $pensampelan = $request->session()->get('pensampelan'); 
        $pensampelan->fill($validatedData);
        $request->session()->put('pensampelan', $pensampelan);

        // dd($pensampelan);
        $pensampelan->save();

        Alert::success('Hantar berjaya.', 'Maklumat laporan pensampelan telah dihantar.');

        

        return redirect('/tunjuk');

    }

    public function padam_pensampelan(Request $request){
        $id = (int)$request->route('id'); 
        $pensampelan = BorangPensampelan::find($id);
        $pensampelan->delete();
        alert()->success('Maklumat berjaya dipadam', 'Berjaya');
        return back();
    }

    public function lihat_pensampelan(Request  $request) {
        $id = (int)$request->route('id');
        $pensampel = BorangPensampelan::find($id);        
        return view('sampel.lihat-pensampelan', compact('pensampel'));
    }

    public function satu_pensampelan(Request $request) {
        $id = (int)$request->route('id');
        $pensampelan = BorangPensampelan::find($id);        
        return view('sampel.lihat-pensampelan', compact('pensampelan'));
    }

    public function kemaskini_pensampelan(Request $request){

        $id = (int)$request->route('id');

        $pensampelan = BorangPensampelan::find($id);        

        $pensampelan = $request->all();

        // $pensampelan->fill($validatedData);

        dd($pensampelan);

        // $pensampelan->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat borang pensampelan telah dikemaskini.');


        return redirect('/tunjuk');

    }

    public function jana_pensampelan(Request $request){
        $id = (int)$request->route('id');

        $pensampelan = BorangPensampelan::find($id);

        $pdf = FacadePDF::loadView('sampel.jana-pensampelan', compact('pensampelan'));
        return $pdf->download('Borang_Pensampelan');

        // return view('sampel.jana-pensampelan', compact('pensampelan'));
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
