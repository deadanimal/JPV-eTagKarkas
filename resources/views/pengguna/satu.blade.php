@extends('layouts.app')

@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    <b>Profil Pengguna</b>
                </h1>
            </div>

            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <form action="/pengguna/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
    
                            <div class="mb-3">
    
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control" type="text" name="name" value="{{$user->name}}" />
                                    </div>
    
                                    <div class="col-2">
                                        <label class="col-form-label">Peranan</label>
                                    </div>
    
                                    <div class="col-4">
    
                                        <select class="form-select" name="peranan" value="{{$user->peranan}}">
                                            <option selected disabled>{{$user->peranan}}</option>
                                            <option value=1>Pengurus Rumah Sembelih</option>
                                            <option value=2>Pemeriksa Daging</option>
                                            <option value=3>Pemeriksa Daging Negeri</option>
                                            <option value=4>Pentadbir</option>
                                            <option value=5>Ketua Seksyen</option>
                                        </select>
                                    </div>
    
                                    <div class="col-2 mt-3">
    
                                        <label class="form-label">Ibu Pejabat</label>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <input class="form-control" type="text" name="pejabat" value="{{$user->pejabat}}" />
                                    </div>
    
                                    <div class="col-2 mt-3">
    
                                        <label class="form-label">Nombor Telefon</label>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <input class="form-control" type="number" name="telefon" value="{{$user->telefon}}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="col-10">
                                        <textarea class="form-control" rows=5 name="alamat">{{$user->alamat}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Unit</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="unit" value="{{$user->unit}}" />
                                </div>
                                <div class="col-2">
                                    <label class="form-label">Cawangan</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="cawangan" value="{{$user->cawangan}}" />
                                </div>
    
                            </div>
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Jawatan</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="jawatan" value="{{$user->jawatan}}" />
                                </div>
                                <div class="col-2">
                                    <label class="form-label">Gred</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" aria-label="Default select example" name="gred" value="{{$user->gred}}">
                                        <option value="G29">G29</option>
                                        <option value="G41">G41</option>
                                        <option value="G44">G44</option>
                                        <option value="G54">G54</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nombor Telefon</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="telefon" value="{{$user->telefon}}" />
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Kemaskini</button>
    
                        </form>
                    </div>
                </div>
    
       

            </div>


        </div>
    </main>

@endsection
