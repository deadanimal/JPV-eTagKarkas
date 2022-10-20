@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Satu Pengguna
            </h1>
        </div>

        <main class="content">

            <div class="container-fluid">
        
                {{-- <div class="header">
                    <h1 class="header-title">
                        Pendaftaran Pengguna
                    </h1>
                </div> --}}
        
                <div class="card">
                    <div class="card-header bg-info text-black">
                        <b> Profil Pengguna</b>
                    </div>
        
                    
                        <div class="card-body">
    
        
                            <!--Nama Pengeluar-->
                            <div class="mb-3 row">
                                <div class="col-sm-2">
                                    <label class="form-label">Nama Pengguna</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{ $user->nama_pengguna }}"  />
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label class="col-form-label">Peranan</label>
                                </div>
                                <div class="col-sm-10">
                                    {{-- peranan adalah name dalam DB --}}
                                    <input class="form-control" type="text" value="{{ $user->name }}"  />

                                  
                                </div>
                                <div class="col-sm-2">
                
                                    <label class="form-label">Ibu Pejabat</label>
                                </div>
                                <div class="col-sm-10 mb-3">
                                    <input class="form-control" type="text" name="ibu_pejabat" value="{{ $user->ibu_pejabat }}"  />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Alamat Tempat Bertugas</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat" value="{{ $user->alamat }}"  />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Emel</label>
                                </div>
                                <div class="col-sm-10">
                                    {{-- emel adalah email dalam DB --}}
                                    <input class="form-control" type="text" name="email" value="{{ $user->email }}"  />
                                </div>
                                
                            </div>

                            <!--Induk-->
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Unit</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="unit" value="{{ $user->unit }}"  />
                                </div>
                                <div class="col-2 text-end">
                                        <label class="form-label">Cawangan</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="cawangan" value="{{ $user->cawangan }}"  />
                                </div>
                            </div>
        
                            {{-- Negeri & Daerah --}}
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Jawatan</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="jawatan" value="{{ $user->jawatan }}"  />
                                </div>
                                <div class="col-2 text-end">
                                        <label class="form-label">Gred</label>
                                </div>
                                <div class="col-4">
                                   <input class="form-control" type="text" value="{{ $user->gred }}">
                                </div>
                               
                            </div>

                               {{-- Nombor Telefon --}}
                              <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Nombor Telefon</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nombor_telefon" value="{{ $user->nombor_telefon }}"  />
                                    </div>
                                </div>
    
                             
                            
                            {{-- Manual Jana Kodbar --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-2">
                                    <input type="text" name="status" value="{{ $user->status }}"   />
                                </div>
                            </div>
                                                   
                           
                            </div>

                        
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <a href="/pengguna" type="button" class="btn btn-success">Simpan</a>
                        </div>
                    
                </div>
            </div>
        
        
        
        </main>


    </div>



</main>

@endsection

@section('script')


@endsection