<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSembelih;
use App\Models\User;
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
            $url = '/rumah/'.$rumah->id;
            return redirect($url);
        } else {
            $rumahs = RumahSembelih::orderBy('created_at', 'desc')->get();
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

        $customMessages = [
            'required' => 'Kesemua info perlu diletakkan',
            'unique' => 'Kod yang diberikan perlu unik.',
        ];    
        
        $request->validate([
            'induk' => 'required',
            'kod' => 'required|unique:rumah_sembelihs',
        ], $customMessages);              


        $rumah = New RumahSembelih;
        $rumah->induk = $request->induk;
        $rumah->nama_rumah = $request->nama_rumah;
        $rumah->kod = $request->kod;
        if($request->kategori) {
            $rumah->kategori = $request->kategori;
        }    
        $rumah->alamat = $request->alamat;
        $rumah->zon = $request->zon;
        $rumah->negeri = $request->negeri;
        $rumah->daerah = $request->daerah;
        $rumah->no_tel = $request->no_tel;
        if($request->jenis1 == "on") {
            $rumah->jenis1 = true;
        } else {
            $rumah->jenis1 = false;
        };
        if($request->jenis2 == "on") {
            $rumah->jenis2 = true;
        } else {
            $rumah->jenis2 = false;
        };
        if($request->jenis3 == "on") {
            $rumah->jenis3 = true;
        } else {
            $rumah->jenis3 = false;
        };
        if($request->jenis4 == "on") {
            $rumah->jenis4 = true;
        } else {
            $rumah->jenis4 = false;
        };
        if($request->jenis5 == "on") {
            $rumah->jenis5 = true;
        } else {
            $rumah->jenis5 = false;
        };
        if($request->jenis6 == "on") {
            $rumah->jenis6 = true;
        } else {
            $rumah->jenis6 = false;
        };
        if($request->jenis7 == "on") {
            $rumah->jenis7 = true;
        } else {
            $rumah->jenis7 = false;
        };
        if($request->jenis8 == "on") {
            $rumah->jenis8 = true;
        } else {
            $rumah->jenis8 = false;
        };
       
        $rumah->save();
        Alert::success('Daftar berjaya.', 'Pendaftaran anda telah berjaya.');   

        return redirect('/rumah');
    }  

    public function kemaskini_rumah(Request $request) {
        
        
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);
        if($request->kod != $rumah->kod) {
            if(RumahSembelih::where('kod',$request->kod)->exists()) {
                Alert::error('Kod tidak unik', 'Kemaskini anda tidak berjaya.');   
                return back();
            }
        }

        if($request->kategori) {
            $rumah->kategori = $request->kategori;
        } 
        if($request->induk) {
            $rumah->induk = $request->induk;
        }
        $rumah->nama_rumah = $request->nama_rumah;
        $rumah->alamat = $request->alamat;
        if($request->negeri) {
            $rumah->negeri = $request->negeri;
        }
        if($request->daerah) {
            $rumah->daerah = $request->daerah;
        }
        $rumah->daerah = $request->daerah;
        $rumah->no_tel = $request->no_tel;
        $rumah->emel = $request->emel;
        $rumah->orang_dihubungi = $request->orang_dihubungi;
        if($request->zon) {
            $rumah->zon = $request->zon;
        }        
        if($request->jenis1 == "on") {
            $rumah->jenis1 = true;
        } else {
            $rumah->jenis1 = false;
        };
        if($request->jenis2 == "on") {
            $rumah->jenis2 = true;
        } else {
            $rumah->jenis2 = false;
        };
        if($request->jenis3 == "on") {
            $rumah->jenis3 = true;
        } else {
            $rumah->jenis3 = false;
        };
        if($request->jenis4 == "on") {
            $rumah->jenis4 = true;
        } else {
            $rumah->jenis4 = false;
        };
        if($request->jenis5 == "on") {
            $rumah->jenis5 = true;
        } else {
            $rumah->jenis5 = false;
        };
        if($request->jenis6 == "on") {
            $rumah->jenis6 = true;
        } else {
            $rumah->jenis6 = false;
        };
        if($request->jenis7 == "on") {
            $rumah->jenis7 = true;
        } else {
            $rumah->jenis7 = false;
        };
        if($request->jenis8 == "on") {
            $rumah->jenis8 = true;
        } else {
            $rumah->jenis8 = false;
        };
        
        
        $rumah->save();

        Alert::success('Kemaskini berjaya.', 'Kemaskini anda telah berjaya.');   


        return redirect('/rumah');
    }   

    public function satu_rumah(Request $request) {
        $user = $request->user();
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);
        $users = User::where([
            ['rumah_sembelih_id','=', null]
        ])->get();
        return view('rumah.satu', compact('rumah', 'user', 'users'));
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
    
    public function tambah_pengguna(Request $request) {
        $id = (int)$request->route('id');
        $rumah = RumahSembelih::find($id);
        $user = User::find($request->user_id);
        $user->rumah_sembelih_id = $id;
        $user->save();
        Alert::success('Kemaskini berjaya.', 'Kemaskini anda telah berjaya.');   
        return back();
    }   
    
    public function gugur_pengguna(Request $request) {
        $pengguna_id = (int)$request->route('pengguna_id');
        $user = User::find($pengguna_id);
        $user->rumah_sembelih_id = null;
        $user->save();
        Alert::success('Kemaskini berjaya.', 'Kemaskini anda telah berjaya.');   
        return back();
    }      
}
