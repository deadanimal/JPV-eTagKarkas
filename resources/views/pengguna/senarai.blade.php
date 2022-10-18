@extends('layouts.app')


@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Senarai Pengguna
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
                    <div class="card-header">
                        <b>Daftar Profil Pengguna</b>
                    </div>
        
                    
                        <div class="card-body">
                            <form action="/pengguna" method="post" enctype="multipart/form-data">
                                @csrf
        
                            <!--Nama Pengeluar-->
                            <div class="mb-3 row">
                                <div class="col-sm-2">
                                    <label class="form-label">Nama Pengguna</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama_pengguna"  />
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label class="col-form-label">Peranan</label>
                                </div>
                                <div class="col-sm-10">
                                    {{-- peranan adalah name dalam DB --}}
                                    <select class="form-select" aria-label="Default select example" name="name">
                                        <option selected value="Pengurus Rumah Sembelih">Pengurus Rumah Sembelih</option>
                                        <option value="Pemeriksa Daging">Pemeriksa Daging</option>
                                        <option value="Pemeriksa Daging Negeri">Pemeriksa Daging Negeri</option>
                                        <option value="Ketua Seksyen">Ketua Seksyen</option>
                                        <option value="Pentadbir">Pentadbir</option>
                                      </select>
                                </div>
                                <div class="col-sm-2">
                
                                    <label class="form-label">Ibu Pejabat</label>
                                </div>
                                <div class="col-sm-10 mb-3">
                                    <input class="form-control" type="text" name="ibu_pejabat"  />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Alamat Tempat Bertugas</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat"  />
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Emel</label>
                                </div>
                                <div class="col-sm-10">
                                    {{-- emel adalah email dalam DB --}}
                                    <input class="form-control" type="text" name="email"  />
                                </div>
                                
                            </div>

                            <!--Induk-->
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Unit</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="unit"  />
                                </div>
                                <div class="col-2 text-end">
                                        <label class="form-label">Cawangan</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="cawangan"  />
                                </div>
                            </div>
        
                            {{-- Negeri & Daerah --}}
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Jawatan</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="jawatan"  />
                                </div>
                                <div class="col-2 text-end">
                                        <label class="form-label">Gred</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" aria-label="Default select example" name="gred">
                                        <option selected value="G29">G29</option>
                                        <option value="G41">G41</option>
                                        <option value="G44">G44</option>
                                        <option value="G54">G54</option>
                                    </select> 
                                </div>
                               
                            </div>

                               {{-- Nombor Telefon --}}
                              <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Nombor Telefon</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nombor_telefon"  />
                                    </div>
                                </div>
    
                             
                            
                            {{-- Manual Jana Kodbar --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Aktif</label>
                                <div class="col-sm-2">
                                    <input type="checkbox" value="Aktif" name="status" />
                                </div>
                                <label class="col-sm-2 col-form-label">Tidak Aktif</label>
                                <div class="col-sm-2">
                                    <input type="checkbox" value="Tidak Aktif" name="status" />
                                </div>
                               
                            </div>
                           
            
            
                            <!--Button-->

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </div>
                            
                            </form>
                           
                            </div>
            
                        </div>
                    
                </div>
        
        
        
                {{-- Tunjuk data --}}
                <div class="card-body">
                    <div class="card-header">
                        <b>Butiran Maklumat Senarai Pengguna</b>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <table class="table table-bordered">
                            <thead class="text-black " style="background-color: rgb(80, 159, 255)">
                                <tr>
                                    <th>Bil.</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Peranan</th>
                                    <th scope="col">Ibu Pejabat</th>
                                    {{-- rumah sembelih sama dengan alamat dalam DB --}}
                                    <th scope="col">Rumah Sembelih</th>
                                    <th scope="col">E-mel</th>
                                    <th scope="col">Nombor Telefon</th>
                                    <th scope="col">Jawatan</th>
                                    <th scope="col">Status</th>
                                    <th></th>
            
                                </tr>
                            </thead>
                            <tbody>
            
                                <tr>
            
                                    @foreach ($users as $user)
            
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama_pengguna }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->ibu_pejabat }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->nombor_telefon }}</td>
                                        <td>{{ $user->jawatan }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>
                                            <div class="col-auto">
                                                <a href="/pengguna/{{$user->id}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            </div>
                                        </td>
                                        
            
                                        {{-- <td>-asd</td>
                                        <td>-asd</td>
                                        <td>-asd</td>
                                        <td>-asd</td>
                                        <td>-asd</td>
                                        <td>-asd</td>
                                        <td>-asd</td>
                                        <td>-asd</td> --}}
            
                                    {{-- Button edit & hapus --}}
                                    {{-- <td>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        </div>
            
                                    </td> --}}
            
                                </tr>
            
                                    @endforeach
            
            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        
        
        </main>


    </div>



</main>

@endsection

@section('script')


@endsection