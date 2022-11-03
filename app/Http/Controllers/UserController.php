<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Carbon\Carbon;
use Alert;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\RumahSembelih;

class UserController extends Controller
{

    public function home(Request $request) {    
        return view('home');
    }

    public function senarai(Request $request) {    
        $user = $request->user();
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
                ->addColumn('tindakan', function (User $user) {
                    $url = '/pengguna/'.$user->id;
                    return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Kemaskini</a>';
                })    
                ->addColumn('status', function (User $user) {
                    if($user->status) {
                        return 'Aktif';
                    } else {
                        return 'Tidak Aktif';
                    }                        
                })                      
                ->rawColumns(['tindakan', 'status', 'rumah'])                          
                ->make(true);
            }

        return view('pengguna.senarai', compact('pengguna', 'user'));
    }

    public function borang() {
        return view('pengguna.borang');        
    }

    public function satu(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);
        return view('pengguna.satu', compact('user'));        
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
        $user->alamat = $request->alamat;
        $user->unit = $request->unit;
        $user->cawangan = $request->cawangan;
        $user->jawatan = $request->jawatan;
        $user->gred = $request->gred;
        $user->telefon = $request->telefon;
        $user->status = true;                
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
        $user->pejabat = $request->pejabat;
        $user->alamat = $request->alamat;
        $user->unit = $request->unit;
        $user->cawangan = $request->cawangan;
        $user->jawatan = $request->jawatan;
        $user->gred = $request->gred;
        $user->telefon = $request->telefon;
        $user->status = true;            
        if($request->peranan){
            $user->detachRoles();
            $role = Role::find((int)$request->peranan);
            $user->peranan = $role->display_name;
            $user->attachRole($role);
        }                 
        $user->save();

        Alert::success('Kemaskini pengguna berjaya.', 'Kemaskini pengguna berjaya.');   

        return back();
    }    
}
