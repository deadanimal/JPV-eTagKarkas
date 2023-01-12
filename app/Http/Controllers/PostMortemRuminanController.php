<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\PostMortemRuminan;
use App\Models\PostMortemUnggas;
use App\Models\PostMortemBabi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use Illuminate\Support\Facades\Auth;

class PostMortemRuminanController extends Controller
{
    //
    public function satu_post_mortem(Request $request)
    {

        $user = $request->user();
        $id = (int) $request->route('id');
        $pemeriksaan = PostMortemRuminan::find($id);

        //

        $post_mortems = PostMortemRuminan::where([
            ['pemeriksaan_id', '=', $pemeriksaan->id],
        ])->get();

        return view('daging.satu_ruminan', compact('post_mortems', 'pemeriksaan', 'user'));


    }

    public function cipta_postMortem(Request $request)
    {

        $post_mortem = new PostMortemRuminan;

        // 
        $post_mortem->kategori_post_mortem = $request->kategori_post_mortem;
        $post_mortem->bahagian = $request->bahagian;
        $post_mortem->musnah = $request->musnah;
        $post_mortem->kes_post_mortem = $request->kes_post_mortem;
        $post_mortem->nombor_tag_post = $request->nombor_tag_post;
        $post_mortem->keputusan = $request->keputusan;
        // FK
        $post_mortem->pemeriksaan_id = $request->pemeriksaan_id;
        $post_mortem->rumah_sembelih_id = $request->rumah_sembelih_id;

        $post_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat penemuan post-mortem ruminan telah disimpan.');

        session()->flash('message', 'Borang telah dijana. Anda diingatkan untuk menghantar laporan bulanan.');

        return back();

    }

    public function kemaskini_pm(Request $request)
    {
        $id = (int) $request->route('id');
        $pm = PostMortemRuminan::find($id);

        $pm->kategori_post_mortem = $request->kategori_post_mortem;
        $pm->bahagian = $request->bahagian;
        $pm->musnah = $request->musnah;
        $pm->kes_post_mortem = $request->kes_post_mortem;
        $pm->nombor_tag_post = $request->nombor_tag_post;
        $pm->keputusan = $request->keputusan;

        $pm->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat penemuan post-mortem ruminan telah dikemaskini.');

        return back();
    }

    public function tunjuk_pm(Request $request)
    {
        $id = (int) $request->route('id');
        $jana_pm = PostMortemRuminan::find($id);

        return view('daging.borang_pm', compact('jana_pm'));
    }

    public function jana_pm(Request $request)
    {

        // tarik data dari cipta periksa rapi
        $id = (int) $request->route('id');
        $jana_pm = PostMortemRuminan::find($id);

        // generate pdf using DomPDF
        $pdf = Pdf::loadView('daging.final_borang_pm', compact('jana_pm'));

        return $pdf->download('borang_post-mortem.pdf');

    }

    public function satu_post_mortem_babi(Request $request)
    {

        $user = $request->user();
        $id = (int) $request->route('id');
        $pemeriksaan = PostMortemBabi::find($id);

        //

        $post_mortems = PostMortemBabi::where([
            ['pemeriksaan_id', '=', $pemeriksaan->id],
        ])->get();

        return view('daging.satu_ruminan', compact('post_mortems', 'pemeriksaan', 'user'));


    }

    public function cipta_postMortem_babi(Request $request)
    {

        $post_mortem = new PostMortemBabi;

        // 
        $post_mortem->kategori_post_mortem = $request->kategori_post_mortem;
        $post_mortem->bahagian = $request->bahagian;
        $post_mortem->musnah = $request->musnah;
        $post_mortem->kes_post_mortem = $request->kes_post_mortem;
        $post_mortem->nombor_tag_post = $request->nombor_tag_post;
        $post_mortem->keputusan = $request->keputusan;
        // FK
        $post_mortem->pemeriksaan_id = $request->pemeriksaan_id;
        $post_mortem->rumah_sembelih_id = $request->rumah_sembelih_id;

        $post_mortem->save();

        Alert::success('Simpan berjaya.', 'Maklumat penemuan post-mortem ruminan telah disimpan.');

        session()->flash('message', 'Borang telah dijana. Anda diingatkan untuk menghantar laporan bulanan.');

        return back();

    }

    public function kemaskini_pm_babi(Request $request)
    {
        $id = (int) $request->route('id');
        $pm = PostMortemBabi::find($id);

        $pm->kategori_post_mortem = $request->kategori_post_mortem;
        $pm->bahagian = $request->bahagian;
        $pm->musnah = $request->musnah;
        $pm->kes_post_mortem = $request->kes_post_mortem;
        $pm->nombor_tag_post = $request->nombor_tag_post;
        $pm->keputusan = $request->keputusan;

        $pm->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat penemuan post-mortem ruminan telah dikemaskini.');

        return back();
    }

    public function tunjuk_pm_babi(Request $request)
    {
        $id = (int) $request->route('id');
        $jana_pm = PostMortemBabi::find($id);

        // dd($jana_pm);

        return view('daging.borang_pm_babi', compact('jana_pm'));
    }

    public function jana_pm_babi(Request $request)
    {

        // tarik data dari cipta periksa rapi
        $id = (int) $request->route('id');
        $jana_pm = PostMortemBabi::find($id);

        // generate pdf using DomPDF
        $pdf = Pdf::loadView('daging.final_borang_pm', compact('jana_pm'));

        return $pdf->download('borang_post-mortem.pdf');

    }

    public function satu_pm_unggas(Request $request)
    {

        $user = $request->user();
        $id = (int) $request->route('id');
        $pemeriksaan_unggas = PostMortemUnggas::find($id);

        //

        $post_mortems_unggas = PostMortemUnggas::where([
            ['pemeriksaan_id', '=', $pemeriksaan_unggas->id],
        ])->get();

        return view('daging.satu_unggas', compact('post_mortems_unggas', 'pemeriksaan_unggas', 'user'));


    }

    public function cipta_postMortemUnggas(Request $request)
    {

        $post_mortem_unggas = new PostMortemUnggas;

        // 
        $post_mortem_unggas->bukan_lesi = $request->bukan_lesi;
        $post_mortem_unggas->bil_bukan_lesi = $request->bil_bukan_lesi;
        $post_mortem_unggas->lesi_semasa_carcass = $request->lesi_semasa_carcass;
        $post_mortem_unggas->lesi_semasa_viscera = $request->lesi_semasa_viscera;
        $post_mortem_unggas->bil_lesi_semasa = $request->bil_lesi_semasa;
        $post_mortem_unggas->gastro_pm = $request->gastro_pm;
        $post_mortem_unggas->bil_gastro_pm = $request->bil_gastro_pm;

        $post_mortem_unggas->unggas_id = $request->unggas_id;
        $post_mortem_unggas->rumah_sembelih_id = $request->rumah_sembelih_id;

        $post_mortem_unggas->save();

        Alert::success('Simpan berjaya.', 'Maklumat penemuan post-mortem unggas telah disimpan.');

        return back();

    }

    public function kemaskini_pm_unggas(Request $request)
    {

        $id = (int) $request->route('id');
        $post_mortem_unggas = PostMortemUnggas::find($id);

        // 
        $post_mortem_unggas->bukan_lesi = $request->bukan_lesi;
        $post_mortem_unggas->bil_bukan_lesi = $request->bil_bukan_lesi;
        $post_mortem_unggas->lesi_semasa_carcass = $request->lesi_semasa_carcass;
        $post_mortem_unggas->lesi_semasa_viscera = $request->lesi_semasa_viscera;
        $post_mortem_unggas->bil_lesi_semasa = $request->bil_lesi_semasa;
        $post_mortem_unggas->gastro_pm = $request->gastro_pm;
        $post_mortem_unggas->bil_gastro_pm = $request->bil_gastro_pm;


        $post_mortem_unggas->save();

        Alert::success('Simpan berjaya.', 'Maklumat penemuan post-mortem unggas telah dikemaskini.');

        return back();

    }
}