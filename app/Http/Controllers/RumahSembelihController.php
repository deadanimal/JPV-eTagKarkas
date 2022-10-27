<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSembelih;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;

class RumahSembelihController extends Controller
{

    public function senarai_rumah(Request $request) {

        $user = $request->user();

        if ($user->hasRole('pengurus-rumah-sembelih')) {
            $id = $user->rumah_sembelih->id;
            $rumah = RumahSembelih::find($id);
            return view('rumah.satu', compact('rumah'));
        } else {
            $rumahs = RumahSembelih::all();
                if($request->ajax()) {
                    return DataTables::collection($rumahs)
                    ->addIndexColumn()
                    ->addColumn('aktif', function (RumahSembelih $rumah) {
                        if($rumah->aktif){
                            $html_button = 'Aktif';
                        } else {
                            $html_button = 'Tidak Aktif';
                        }                
                        return $html_button;
                    })            
                    ->addColumn('tindakan', function (RumahSembelih $rumah) {
                        $url = '/rumah/'.$rumah->id;
                        $url2 = '/rumah/'.$rumah->id.'/aktif';
                        if($rumah->aktif){
                            $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Kemaskini</button></a> <a href="'.$url2.'"><button class="btn btn-danger">Nyahaktif</button></a>';
                        } else {
                            $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Kemaskini</button></a> <a href="'.$url2.'"><button class="btn btn-success">Aktifkan</button></a>';
                        }                    
                        return $html_button;
                    })
                    ->editColumn('created_at', function (RumahSembelih $rumah) {
                        return [
                            'display' => ($rumah->created_at && $rumah->created_at != '0000-00-00 00:00:00') ? with(new Carbon($rumah->created_at))->format('d F Y') : '',
                            'timestamp' => ($rumah->created_at && $rumah->created_at != '0000-00-00 00:00:00') ? with(new Carbon($rumah->created_at))->timestamp : ''
                        ];
                    })
                    ->rawColumns(['tindakan', 'aktif'])
                    ->make(true);
                }

            return view('rumah.senarai', compact('rumahs'));
        }
    } 
    
    public function cipta_rumah(Request $request) {
        
        $rumah = New RumahSembelih;
        $rumah->induk = $request->induk;
        $rumah->nama_rumah = $request->nama_rumah;
        $rumah->kod = $request->kod;
        $rumah->kategori = $request->kategori;
        $rumah->alamat = $request->alamat;
        $rumah->negeri = $request->negeri;
        $rumah->daerah = $request->daerah;
        $rumah->no_tel = $request->no_tel;
        $rumah->emel = $request->emel;
        $rumah->orang_dihubungi = $request->orang_dihubungi;
        $rumah->zon = $request->zon;
        // $rumah['akses_ternakan'] = $request->akses_ternakan;
        $rumah->save();

        return back();
    }  

    public function kemaskini_rumah(Request $request) {
        
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);

        $rumah->induk = $request->induk;
        $rumah->nama_rumah = $request->nama_rumah;
        $rumah->kod = $request->kod;
        $rumah->kategori = $request->kategori;
        $rumah->alamat = $request->alamat;
        $rumah->negeri = $request->negeri;
        $rumah->daerah = $request->daerah;
        $rumah->no_tel = $request->no_tel;
        $rumah->emel = $request->emel;
        $rumah->orang_dihubungi = $request->orang_dihubungi;
        $rumah->zon = $request->zon;
        $rumah->category = $request->input('category');
        
        $rumah->save();

        return back();
    }   

    public function satu_rumah(Request $request) {
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);
        return view('rumah.satu', compact('rumah'));
    }  
    
    public function borang_rumah(Request $request) {
        $user = $request->user();
        return view('rumah.borang');
    }   
    
    public function aktif_rumah(Request $request) {
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);
        $rumah->aktif = !$rumah->aktif;
        $rumah->save();
        return back();
    }      
}
