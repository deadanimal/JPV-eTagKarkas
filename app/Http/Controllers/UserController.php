<?php

namespace App\Http\Controllers;

use App\Mail\LupaKatalaluan;
use App\Models\Pemeriksaan;
use App\Models\Sampel;
use App\Models\Tag;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\RumahSembelih;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function home(Request $request) {

        $jumlah_premis = Tag::all()->count();
        $pelawat = User::all()->count();
        $sampel = Sampel::all()->count();
        $daging = Pemeriksaan::all()->count();
        return view('home', compact('jumlah_premis','pelawat','sampel','daging'));
    }

    public function senarai(Request $request) {    
        $user = $request->user();
        $rumahs = RumahSembelih::all();
        $pengguna = User::where([
            ['id', '!=', $user->id]
        ])->orderBy('updated_at', 'desc')->get();
            if($request->ajax()) {
                return DataTables::collection($pengguna)
                ->addIndexColumn()   
                ->addColumn('rumah', function (User $user) {
                    if($user->rumah) {
                        $html_ = $user->rumah->nama;
                    } else {
                        $html_ = '-';
                    }
                    return $html_;
                })  
                // zach tambah
                ->addColumn('nama_premis', function (User $user) {

                    $html_button = '-';
                    if($user->rumah_sembelih) {
                        $html_button = $user->rumah_sembelih->nama_rumah;
                    }                 
                    return $html_button;
                })                
                ->addColumn('tindakan', function (User $user) {
                    $url = '/pengguna/'.$user->id;
                    $url2 = '/pengguna/'.$user->id.'/aktif';
                    $html_button = '';
                    if($user->status){
                        $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Kemaskini</button></a> <a href="'.$url2.'"><button class="btn btn-danger">Nyahaktif</button></a>';
                    } else {
                        $html_button = '<a href="'.$url.'"><button class="btn btn-primary">Kemaskini</button></a> <a href="'.$url2.'"><button class="btn btn-success">Aktifkan</button></a>';
                    }                          
                    return $html_button;
                })    
                ->addColumn('status', function (User $user) {
                    if($user->status) {
                        return 'Aktif';
                    } else {
                        return 'Tidak Aktif';
                    }                       
                })                      
                ->rawColumns(['tindakan', 'status', 'rumah','nama_premis','aktif'])                          
                ->make(true);
            }

        return view('pengguna.senarai', compact('pengguna', 'user'));
    }

    public function borang() {
        //zach tambah
        $rumahs = RumahSembelih::all();

        return view('pengguna.borang',compact('rumahs'));        
    }

    public function satu(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);
        $rumahs = RumahSembelih::all();

        // dd($user->gred);

        return view('pengguna.satu', compact('user','rumahs'));        
    }

    public function profil(Request $request) {
        $user = $request->user();
        $user = User::find($user->id);
        return view('pengguna.profil', compact('user'));        
    }    

    public function profil_katalaluan(Request $request) {
        $user = $request->user();
        $user = User::find($user->id);
        $user->password = Hash::make($request->password);
        $user->save();
        Alert::success('Kemaskini Katalaluan', 'Kemaskini katalaluan berjaya');   
        return back();        
    }        

    public function cipta(Request $request) {      

        $customMessages = [
            'required' => 'Kesemua info perlu diletakkan',
            'unique' => 'Email yang diberikan perlu unik.',
        ];    
        
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
        ], $customMessages);          
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $user->pejabat = $request->pejabat;
        $user->unit = $request->unit;
        $user->cawangan = $request->cawangan;
        $user->jawatan = $request->jawatan;
        $user->gred = $request->gred;
        $user->telefon = $request->telefon;
        $user->alamat = $request->alamat;
        // $user->rumah_sembelih_id = $request->rumah_sembelih_id;
        $user->status = true;      
        if($request->rumah_sembelih_id) {
            $user->rumah_sembelih_id = $request->rumah_sembelih_id;
        }          
        $role = Role::find((int)$request->peranan);
        $user->peranan = $role->display_name;
        $user->save();
        $user->attachRole($role);

        Alert::success('Daftar pengguna berjaya.', 'Pendaftaran pengguna berjaya.');   

        return redirect('/pengguna');
    }

    public function kemaskini(Request $request) {      

        $id = (int)$request->route('id');
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pejabat = $request->pejabat;
        $user->rumah_sembelih_id = $request->rumah_sembelih_id;
        $user->unit = $request->unit;
        $user->cawangan = $request->cawangan;
        $user->jawatan = $request->jawatan;
        $user->gred = $request->gred;
        $user->telefon = $request->telefon;
        $user->alamat = $request->alamat;
        $user->status = true;            
        if($request->peranan){
            $user->detachRoles();
            $role = Role::find((int)$request->peranan);
            $user->peranan = $role->display_name;
            $user->attachRole($role);
        }                 
        $user->save();

        Alert::success('Kemaskini pengguna berjaya.', 'Kemaskini pengguna berjaya.');   

        return redirect('/pengguna');
    }
    
    public function aktif_pengguna(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);
        $user->status = !$user->status;
        $user->save();
        return back();
    }  
    
    public function tunjuk_lupa(){

        return view('auth.lupa');

    }

    public function cipta_lupa(Request $request){

        $email = $request->email;
        $user = User::where('email',$email)->first();
        $user->password = Hash::make('SayaSayangEtag123');
        $user->save();

        Mail::to($user->email)->send(new LupaKatalaluan);

        Alert::error('Email tidak wujud', 'Email anda tidak dapat dikenalpasti.');   
        // dd($user);

        return redirect('/login');
        
    }
}
