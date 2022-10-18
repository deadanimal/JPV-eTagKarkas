<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

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
        $users = User::all();
        return view('pengguna.senarai', compact('users'));
    }

    public function satu_pengguna(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);
        return view('pengguna.satu', compact('user'));        
    }

    public function cipta_pengguna(Request $request) {

        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('PipelineForever'),

            // zach tambah
            'nama_pengguna' => $request->nama_pengguna,
            'ibu_pejabat' => $request->ibu_pejabat,
            'alamat' => $request->alamat,
            'unit' => $request->unit,
            'cawangan' => $request->cawangan,
            'jawatan' => $request->jawatan,
            'gred' => $request->gred,
            'nombor_telefon' => $request->nombor_telefon,
            'status' => $request->status,

        ]); 


        $user->organisasi_id = $request->organisasi_id;
        $user->save();

        $role = Role::find($request->role_id);
        $user->attachRole($role);

        // simpan cipta pengguna - zach buat
        // $users = New User;

        // $users->nama_pengguna = $request->nama_pengguna;
        // $users->ibu_pejabat = $request->ibu_pejabat;
        // $users->alamat = $request->alamat;
        // $users->unit = $request->unit;
        // $users->cawangan = $request->cawangan;
        // $users->jawatan = $request->jawatan;
        // $users->gred = $request->gred;
        // $users->nombor_telefon = $request->nombor_telefon;
        // $users->status = $request->status;
        // $users->save();

        return back();
    }
}
