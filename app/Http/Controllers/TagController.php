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
use Yajra\DataTables\Contracts\DataTable;
class TagController extends Controller
{

    public function satu_tag(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id);        
        return view('tag.satu', compact('tag'));
    }

    public function jana_tag(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id);     
        $date = $tag->created_at->format('dmy');   
        return view('tag.jana', compact('tag', 'date'));
    }    

    public function senarai_tag(Request $request) {
        // $tags = Tag::all();
        $user = $request->user();
        if($user->hasRole('pentadbir|ketua-seksyen')) {
            $tags = Tag::all();
        } else if ($user->hasRole('pengurus-rumah-sembelih')) {
            $tags = Tag::where([
                ['user_id','=', $user->id],
                ['status','!=', 'Padam']
            ])->get();
        }

        if($request->ajax()) {
            return DataTables::collection($tags)
            ->addColumn('no_rujukan', function (Tag $tag) {
                $date = $tag->created_at->format('dmy');
                if($tag->bil_kodbar_sah) {
                    $html_button = 'R'.$tag->rumah_sembelih->id.'-'.$date.'-001 <br/>R'.$tag->rumah_sembelih->id.'-'.$date.'-'.sprintf('%03d', $tag->bil_kodbar_sah);
                } else {
                    $html_button = '-';
                }
                return $html_button;
            })                
            ->addColumn('nama_premis', function (Tag $tag) {

                $html_button = '-';
                if($tag->rumah_sembelih) {
                    $html_button = $tag->rumah_sembelih->nama_rumah;
                }                 
                return $html_button;
            })    
            ->addColumn('kategori_tag', function (Tag $tag) {

                $html_button = '-';
                if($tag->rumah_sembelih) {
                    $html_button = $tag->rumah_sembelih->kategori;
                }                 
                return $html_button;
            })    
            ->addColumn('pemohon_tag', function (Tag $tag) {

                $html_button = '-';
                if($tag->user) {
                    $html_button = $tag->user->name;
                }                 
                return $html_button;
            })      
            ->addColumn('tindakan', function (Tag $tag, Request $request) {            
                $url = '/tag/'.$tag->id;
                $url2 = '/tag/'.$tag->id.'/delete';
                $url3 = '/tag/'.$tag->id.'/jana';
                $user = $request->user();
                if($tag->status == "Simpan") {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a> <a href="'.$url2.'"><button class="btn btn-danger">Padam</button></a>';    
                } else if($tag->status == "Lulus" && $user->hasRole('ketua-seksyen')) {                    
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a> <a href="'.$url3.'"><button class="btn btn-success">Jana</button></a>';    
                } else {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                }
                return $html_button;
            })                                  
            
            ->editColumn('created_at', function (Tag $tag) {
                return [
                    'display' => ($tag->created_at && $tag->created_at != '0000-00-00 00:00:00') ? with(new Carbon($tag->created_at))->format('d F Y') : '',
                    'timestamp' => ($tag->created_at && $tag->created_at != '0000-00-00 00:00:00') ? with(new Carbon($tag->created_at))->timestamp : ''
                ];
            })        
            ->rawColumns(['nama_premis', 'tindakan', 'no_rujukan'])    
            ->make(true);
        }

        return view('tag.senarai', compact('user','tags'));
    } 
 
    public function cipta_tag(Request $request) {
        $user = $request->user();
        $tags = New Tag;
        $tags->jenis_ternakan = $request->jenis_ternakan;
        $tags->bil_ternakan = $request->bil_ternakan;
        $tags->bil_kodbar = $request->bil_kodbar;
        $tags->kategori = $request->kategori;
        $tags->kodbar = $request->kodbar;
        $tags->status = $request->submitbutton;
        $tags->user_id = $user->id;
        $tags->rumah_sembelih_id = $user->rumah_sembelih->id;
        $tags->save();

        if($request->submitbutton == 'Simpan') {
            Alert::success('Tag disimpan', 'Tag anda berjaya disimpan.');
        } else {
            Alert::success('Tag dihantar', 'Tag anda berjaya dihantar dan akan disemak oleh pentadbir');
        }
        //Alert::html('Html Title', 'Html Code', 'Type');

        return back();
    } 
    
    // fungsi padam - zach buat
    public function padam_tag(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id); 
        $tag->status = 'Padam';
        $tag->save();   
        Alert::success('Tag dipadam', 'Tag anda telah dipadam.');   
        // $user = $request->user();

        // $tags->delete();        
        // alert()->success('Berjaya dipadam', 'Berjaya');
        return back();
    }

    // untuk kemaskini tag - zach tambah
    public function kemaskini_tag(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id); 
        $user = $request->user();

        if($request->submitbutton == 'Simpan' || $request->submitbutton == 'Hantar') {
            $tag->jenis_ternakan = $request->jenis_ternakan;
            $tag->bil_ternakan = $request->bil_ternakan;
            $tag->bil_kodbar = $request->bil_kodbar;
            $tag->kategori = $request->kategori;
            $tag->kodbar = $request->kodbar;                        
        }

        if($request->submitbutton == 'Sah') {
            $tag->bil_ternakan_sah = $request->bil_ternakan_sah;
            $tag->bil_kodbar_sah = $request->bil_kodbar_sah;
        }

        if($request->submitbutton == 'Tolak') {        
            $tag->catatan_tolak = $request->catatan_tolak;
        }        

        $tag->status = $request->submitbutton;

        $tag->save();

        if($request->submitbutton == 'Simpan') {
            Alert::success('Tag disimpan', 'Tag anda berjaya disimpan.');
        } else if ($request->submitbutton == 'Hantar') {
            Alert::success('Tag dihantar', 'Tag anda berjaya dihantar dan akan disemak oleh pentadbir');
        } else if ($request->submitbutton == 'Sah') {
            Alert::success('Tag disah', 'Tag telah disahkan.');
        } else if ($request->submitbutton == 'Lulus') {
            Alert::success('Tag diluluskan', 'Tag telah diluluskan.');
        }  else if ($request->submitbutton == 'Tolak') {
            Alert::error('Tag ditolak', 'Tag telah ditolak.');
        }    
                       
        return back();
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

    public function borang_tag(Request $request) {
        $user = $request->user();    
        return view('tag.borang_tag', compact('user'));
    }   

    public function senarai_stok_tag(Request $request) {

        $user = $request->user();

        $stoks = Stok_tag::all();
        if($request->ajax()) {
            return DataTables::collection($stoks)
            // ->addColumn('tindakan', function (Stok_tag $stok) {
            //     $url = '/tag/senarai_tag/stok/'.$stok->id;
            //     return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            // })

            
            
            ->make(true);
        }
        
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

    public function borang_stok(Request $request) {
        $user = $request->user();
        return view('tag.borang_stok');
    }  

}
