<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function senarai_profil(Request $request) {
        $user = $request->user;
        return view('pengguna.profil', compact('user'));
    }

    public function kemaskini_profil(Request $request) {
        $user = $request->user;

        // tambah yang nak edit
        $user->name = $request->name;


        $user->save();

        return back();        
    }

    public function senarai_pengguna(Request $request) {
        
        $user = $request->user();

        $pengguna = User::all();
        // $pengguna = User::orderBy('created_at','desc')->get();
            if($request->ajax()) {
                return DataTables::collection($pengguna)
                ->make(true);
            }

        return view('pengguna.senarai', compact('pengguna', 'user'));
    }

    public function satu_pengguna(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);

        return view('pengguna.satu', compact('user'));        
    }

    public function cipta_pengguna(Request $request) {      

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
        $user->status = (int)$request->status;        
        $user->save();

        $role = Role::find((int)$request->peranan);
        $user->attachRole($role);

        Alert::success('Daftar pengguna berjaya.', 'Pendaftaran pengguna berjaya.');   

        return back();
    }
}
