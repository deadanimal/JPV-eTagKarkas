<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{

    public function home(Request $request) {
        return view('home');
    }

    public function senarai_profil(Request $request) {
        $user = $request->user;
        return view('user.profil', compact('user'));
    }

    public function kemaskini_profil(Request $request) {
        $user = $request->user;

        $user->name = $request->name;

        $user->save();

        return back();        
    }

    public function senarai_pengguna(Request $request) {
        $users = User::all();
        return view('user.senarai', compact('users'));
    }

    public function satu_pengguna(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);
        return view('user.satu', compact('user'));        
    }

    public function cipta_pengguna(Request $request) {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('PipelineForever'),
        ]); 

        $user->organisasi_id = $request->organisasi_id;
        $user->save();

        $role = Role::find($request->role_id);
        $user->attachRole($role);

        return back();
    }
}
