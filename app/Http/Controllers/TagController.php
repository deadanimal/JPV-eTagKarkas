<?php

namespace App\Http\Controllers;

use App\Models\StokTag;
use Illuminate\Cache\TaggedCache;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\RumahSembelih;

use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Yajra\DataTables\Contracts\DataTable;
use Barryvdh\DomPDF\Facade\Pdf;

class TagController extends Controller
{

    public function satu(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id);        
        return view('tag.satu', compact('tag'));
    }

    

    public function senarai(Request $request) {
        $tags = Tag::all();
        $user = $request->user();
        if($user->hasRole('pentadbir')) {

            $tags = Tag::where([
                ['status','!=', 'Padam']
            ])->orderBy('updated_at', 'desc')->get();

            // notifikasi kad
            $jumlah_permohonan = Tag::all()->count();
            $jumlah_permohonan_hantar = Tag::where([
                ['status','=', 'Hantar']
            ])->count();
            $jumlah_permohonan_sah = Tag::where([
                ['status','=', 'Sah']
            ])->count();
            $jumlah_permohonan_lulus = Tag::where([
                ['status','=', 'Lulus']
            ])->count(); 
            $jumlah_permohonan_tolak = Tag::where([
                ['status','=', 'Tolak']
            ])->count();                        

        } else if ($user->hasRole('ketua-seksyen')) {

            $tags = Tag::where([
                ['status','=', 'Sah'],
            ])->orWhere([
                ['status','=', 'Lulus']
            ])->orWhere([
                ['status','=', 'Tolak']
            ])->orderBy('updated_at','desc')->get();

            // notifikasi kad
            $jumlah_permohonan = Tag::all()->count();
            $jumlah_permohonan_hantar = Tag::where([
                ['status','=', 'Hantar']
            ])->count();
            $jumlah_permohonan_sah = Tag::where([
                ['status','=', 'Sah']
            ])->count();
            $jumlah_permohonan_lulus = Tag::where([
                ['status','=', 'Lulus']
            ])->count(); 
            $jumlah_permohonan_tolak = Tag::where([
                ['status','=', 'Tolak']
            ])->count(); 

        } else if ($user->hasRole('pengurus-rumah-sembelih')) {

            $rumah_sembelih_id = $user->rumah_sembelih_id;
            $tags = Tag::where([
                ['rumah_sembelih_id','=', $rumah_sembelih_id],
                ['status','!=', 'Padam']
            ])->orderBy('updated_at','desc')->get();

            $jumlah_permohonan = Tag::all()->count();
            $jumlah_permohonan_hantar = Tag::where([
                ['rumah_sembelih_id','=', $rumah_sembelih_id],
                ['status','=', 'Hantar']
            ])->count();
            $jumlah_permohonan_sah = Tag::where([
                ['rumah_sembelih_id','=', $rumah_sembelih_id],
                ['status','=', 'Sah']
            ])->count();
            $jumlah_permohonan_lulus = Tag::where([
                ['rumah_sembelih_id','=', $rumah_sembelih_id],
                ['status','=', 'Lulus']
            ])->count(); 
            $jumlah_permohonan_tolak = Tag::where([
                ['rumah_sembelih_id','=', $rumah_sembelih_id],
                ['status','=', 'Tolak']
            ])->count();             

        } 

        if($request->ajax()) {
            return DataTables::collection($tags)
            ->addColumn('no_rujukan', function (Tag $tag) {
                $date = $tag->created_at->format('Y');
                if($tag->bil_kodbar) {
                    $html_button = 'RS-'.$date.'-'.sprintf('%03d', $tag->id);
                } else {
                    $html_button = '-';
                }
                return $html_button;
            })             
            ->addColumn('no_tag', function (Tag $tag) {
                $date = $tag->created_at->format('dmy');
                if($tag->bil_ternakan_sah_ketua) {
                    $html_button = 'R'.$tag->rumah_sembelih->id.'-'.$date.'-001 <br/>R'.$tag->rumah_sembelih->id.'-'.$date.'-'.sprintf('%03d', $tag->bil_ternakan_sah_ketua);
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
            ->addColumn('kodbar', function (Tag $tag) {

                $html_button = '-';
                if($tag->user) {
                    $html_button = $tag->rumah_sembelih->jana_tag;
                }                 
                return $html_button;
            })       
            ->addColumn('tindakan', function (Tag $tag, Request $request) {            
                $url = '/tag/'.$tag->id;
                $url2 = '/tag/'.$tag->id.'/delete';
                $url3 = '/tag/'.$tag->id.'/jana';
                $user = $request->user();
                if($tag->status == "Simpan") {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Kemaskini</button></a> <a href="'.$url2.'"><button class="btn btn-danger">Padam</button></a>';    
                } else if($tag->status == "Lulus" && $tag->kodbar == 'Manual') {                    
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a> <a href="';    
                } else if($user->hasRole('pentadbir') && $tag->status == "Lulus") {                    
                    // $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a> <a href="'.$url3.'"><button class="btn btn-success">Cetak</button></a>';    
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a> <a href="'.$url3.'"><button class="btn btn-success">Cetak</button></a>';    
                } else if($tag->status == "Tolak" ) {                    
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';    
                } else if($tag->status == "Sah" && $user->hasRole('ketua-seksyen')) {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Sahkan</button></a>';
                } else if($tag->status == "Sah" && $user->hasRole('pentadbir' || 'pengurus-rumah-sembelih')) {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                } else if($tag->status == "Hantar") {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Kemaskini</button></a>';
                } else {
                    $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Lihat</button></a>';
                }
                return $html_button;
            })                                  
            ->editColumn('updated_at', function (Tag $tag) {
                return [
                    'display' => ($tag->updated_at && $tag->updated_at != '0000-00-00 00:00:00') ? with(new Carbon($tag->updated_at))->format('d F Y') : '',
                    'timestamp' => ($tag->updated_at && $tag->updated_at != '0000-00-00 00:00:00') ? with(new Carbon($tag->updated_at))->timestamp : ''
                ];
            })              
            ->editColumn('created_at', function (Tag $tag) {
                return [
                    'display' => ($tag->created_at && $tag->created_at != '0000-00-00 00:00:00') ? with(new Carbon($tag->created_at))->format('d F Y') : '',
                    'timestamp' => ($tag->created_at && $tag->created_at != '0000-00-00 00:00:00') ? with(new Carbon($tag->created_at))->timestamp : ''
                ];
            })        
            ->rawColumns(['nama_premis', 'tindakan', 'no_tag', 'no_rujukan','kodbar'])    
            ->make(true);
        }

        return view('tag.senarai', compact('user','tags','jumlah_permohonan','jumlah_permohonan_hantar','jumlah_permohonan_sah',
        'jumlah_permohonan_lulus','jumlah_permohonan_tolak'));
    } 
 
    public function cipta(Request $request) {
        $user = $request->user();
        $tags = New Tag;
        $tags->jenis_ternakan = $request->jenis_ternakan;
        $tags->bil_ternakan = $request->bil_ternakan;
        $tags->bil_kodbar = $request->bil_kodbar;
        $tags->kategori = $request->kategori;
        // $tags->kodbar = $request->kodbar;
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

        return redirect('/tag');
    } 
    
    // fungsi padam - zach buat
    public function padam(Request $request) {
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
    public function kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id); 
        $user = $request->user();

        if($request->submitbutton == 'Simpan' || $request->submitbutton == 'Hantar') {
            $tag->jenis_ternakan = $request->jenis_ternakan;
            $tag->bil_ternakan = $request->bil_ternakan;
            $tag->bil_kodbar = $request->bil_kodbar;
            $tag->kategori = $request->kategori;
            $tag->kodbar = $request->kodbar;                        
        } else if($request->submitbutton == 'Sah') {
            $tag->bil_ternakan_sah = $request->bil_ternakan_sah;
            $tag->bil_kodbar_sah = $request->bil_kodbar_sah;
        } else if($request->submitbutton == 'Lulus') {
            $tag->bil_ternakan_sah_ketua = $request->bil_ternakan_sah_ketua;
            $tag->bil_kodbar_sah_ketua = $request->bil_kodbar_sah_ketua;
        }else if($request->submitbutton == 'Tolak') {        
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
                       
        return redirect('/tag');
    }



    public function borang(Request $request) {
        $user = $request->user();    
        return view('tag.borang_tag', compact('user'));
    }
    
    public function jana(Request $request) {
        $id = (int)$request->route('id');
        $tag = Tag::find($id);     
        $date = $tag->created_at->format('dmy'); 
    
        return view('tag.jana', compact('tag', 'date'));
    } 

    // public function jana_tag(Request $request) {
    //     $id = (int)$request->route('id');
    //     $tag = Tag::find($id);     
    //     $date = $tag->created_at->format('dmy'); 
        
    //     generate pdf using DomPDF
    //     $pdf = Pdf::loadView('tag.jana', compact('tag', 'date'));
    //     return $pdf->download('cetak_tags.pdf');

    // } 


    
   

}
