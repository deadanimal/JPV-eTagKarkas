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
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make('PipelineForever'),
        ]);
        
        $user->ibu_pejabat = $request->pejabat;
        $user->alamat = $request->alamat;
        $user->unit = $request->unit;
        $user->cawangan = $request->cawangan;
        $user->jawatan = $request->jawatan;
        $user->gred = $request->gred;
        $user->nombor_telefon = $request->elefon;
        $user->status = (int)$request->status;

        $user->save();

        $role = Role::find((int)$request->peranan);
        $user->attachRole($role);

        return back();
    }
}
