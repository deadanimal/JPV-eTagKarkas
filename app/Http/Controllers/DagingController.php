<?php

namespace App\Http\Controllers;

use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use App\Models\Daging;
use App\Models\Haiwan;

use App\Models\DagingBabi;
use App\Models\DagingRuminan;
use App\Models\DagingUnggas;

class DagingController extends Controller
{
    public function satu_daging(Request $request)
    {

        $jenis = $request->query('jenis');
        $id = (int)$request->route('id');

        if ($jenis == 'unggas') {

            $daging = DagingUnggas::find($id);
            return view('daging.satu_unggas', compact('daging'));
        } else if ($jenis == 'babi') {

            $daging = DagingBabi::find($id);
            return view('daging.satu_babi', compact('daging'));
        } else {

            $daging = DagingRuminan::find($id);
            return view('daging.satu_ruminan', compact('daging'));
        }
    }

    public function semak(Request $request)
    {

        if ($request->action == "semak") {
            if (Haiwan::where([
                ['jenis', '=', $request->jenis],
                ['no_skv', '=', $request->no_skv],
            ])->exists()) {
                $daging = Haiwan::where([
                    ['jenis', '=', $request->jenis],
                    ['no_skv', '=', $request->no_skv],
                ])->first();
                Alert::success('SKV dijumpai', 'SKV boleh dikenalpasti');
                $url = '/daging/'.$daging->id;
                return redirect($url);
            } else {
                Alert::error('SKV Tidak dijumpai', 'SKV Tidak dijumpai');
                return redirect('/daging');
            }
        } else {
            $user = $request->user();
            $rumah_id = $user->rumah_sembelih_id;
            $haiwan = new Haiwan;
            $haiwan->jenis = $request->jenis;
            $haiwan->rumah_sembelih_id = $rumah_id;
            $haiwan->save();
            Alert::success('Daftar Berjaya', 'Haiwan berjaya didaftarkan');
            $url = '/daging/'.$haiwan->id;
            return redirect($url);
        }
    }



    public function satu(Request $request)
    {
        $id = (int)$request->route('id');
        $haiwan = Haiwan::find($id);
        if ($haiwan->jenis == 'Unggas') {
            return view('daging.unggas', compact('haiwan'));
        } else if ($haiwan->jenis == 'Babi') {
            return view('daging.babi', compact('haiwan'));
        } else {
            return view('daging.ruminan', compact('haiwan'));
        }
    }

    public function kemaskini(Request $request)
    {
        $id = (int)$request->route('id');
        $haiwan = Haiwan::find($id);
        if($request->nama_pemilik) {
            $haiwan->nama_pemilik = $request->nama_pemilik;
        }      
        $haiwan->save();  
        Alert::success('Kemaskini Berjaya', 'Kemaskini berjaya');
        return back();;
    }    


    public function senarai(Request $request)
    {
        $user_id = $request->user()->id;
        $haiwans = Haiwan::where([
            ['rumah_sembelih_id', '=', $user_id]
        ])->get();
        return view('daging.senarai');
    }

    public function cipta_daging(Request $request)
    {

        $jenis = $request->jenis;

        if ($jenis == 'unggas') {
            $daging = new DagingUnggas;
        } else if ($jenis == 'babi') {
            $daging = new DagingBabi;
        } else {
            $daging = new DagingRuminan;

        }

        $daging->no_skv = $request->no_skv;
        $daging->save();

        return back();
    }

}
