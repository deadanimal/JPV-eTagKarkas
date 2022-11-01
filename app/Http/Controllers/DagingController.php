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
                Alert::success('Haiwan dijumpai', 'Haiwan boleh dikenalpasti');
                $url = '/daging/'.$daging->id;
                return redirect($url);
            } else {
                Alert::error('Haiwan tidak dijumpai', 'Haiwan tidak dijumpai dan data boleh dicipta');
                return redirect('/daging');
            }
        } else {
            if (Haiwan::where([
                ['jenis', '=', $request->jenis],
                ['no_skv', '=', $request->no_skv],
            ])->exists()) {
                Alert::error('No SKV Unik', 'No SKV telah digunapakai');
                return back();
            }
            $haiwan = new Haiwan;
            $haiwan->jenis = $request->jenis;
            $haiwan->no_skv = $request->no_skv;
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


    public function senarai_daging(Request $request)
    {
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

    public function cipta_sebelum_sembelih(Request $request)
    {
        return back();
    }

    public function cipta_selepas_sembelih(Request $request)
    {
        return back();
    }

    public function cipta_laporan(Request $request)
    {
        return back();
    }
}
