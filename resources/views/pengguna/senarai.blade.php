@extends('layouts.app')



@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Senarai Pengguna
                </h1>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <main class="content">

                <div class="container-fluid">

                    {{-- <div class="header">
                    <h1 class="header-title">
                        Pendaftaran Pengguna
                    </h1>
                </div> --}}

                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <b>Daftar Profil Pengguna</b>
                        </div>


                        <div class="card-body">
                            <form action="/pengguna" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!--Nama Pengeluar-->
                                <div class="mb-3 row">
                                    <div class="col-xl-2 col-md-auto mb-3">
                                        <label class="form-label">Nama Pengguna</label>
                                    </div>
                                    <div class="col-xl-10 ">
                                        <input class="form-control" type="text" name="name" />
                                    </div>
                                    <div class="col-xl-2 mb-3">
                                        <label class="col-form-label">Peranan</label>
                                    </div>
                                    <div class="col-xl-10">
                                        {{-- peranan adalah name dalam DB --}}
                                        <select class="form-select" aria-label="Default select example" name="peranan">
                                            {{-- <option value="1">Pengurus Rumah Sembelih</option>
                                        <option value="2">Pemeriksa Daging</option>
                                        <option value="3">Pemeriksa Daging Negeri</option>                                        
                                        <option value="4">Pentadbir</option>
                                        <option value="5">Ketua Seksyen</option> --}}
                                            <option value="Pengurus Rumah Sembelih">Pengurus Rumah Sembelih</option>
                                            <option value="Pemeriksa Daging">Pemeriksa Daging</option>
                                            <option value="Pemeriksa Daging Negeri">Pemeriksa Daging Negeri</option>
                                            <option value="Pentadbir">Pentadbir</option>
                                            <option value="Ketua Seksyen">Ketua Seksyen</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2">

                                        <label class="form-label">Ibu Pejabat</label>
                                    </div>
                                    <div class="col-xl-10 mb-3">
                                        <input class="form-control" type="text" name="pejabat" />
                                    </div>
                                    <div class="col-xl-2">
                                        <label class="form-label">Alamat Tempat Bertugas</label>
                                    </div>
                                    <div class="col-xl-10 mb-3">
                                        <input class="form-control" type="text" name="alamat" />
                                    </div>
                                    <div class="col-xl-2">
                                        <label class="form-label">Emel</label>
                                    </div>
                                    <div class="col-xl-10 mb-3">
                                        {{-- emel adalah email dalam DB --}}
                                        <input class="form-control" type="email" name="email" />
                                    </div>
                                    <div class="col-xl-2">
                                        <label class="form-label">Katalaluan</label>
                                    </div>
                                    <div class="col-xl-10">
                                        {{-- emel adalah email dalam DB --}}
                                        <input class="form-control" type="password" name="password" />
                                    </div>

                                </div>

                                <!--Induk-->
                                <div class="mb-3 row">
                                    <div class="col-2">
                                        <label class="form-label">Unit</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control" type="text" name="unit" />
                                    </div>
                                    <div class="col-2 text-end">
                                        <label class="form-label">Cawangan</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control" type="text" name="cawangan" />
                                    </div>
                                </div>

                                {{-- Negeri & Daerah --}}
                                <div class="mb-3 row">
                                    <div class="col-2">
                                        <label class="form-label">Jawatan</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control" type="text" name="jawatan" />
                                    </div>
                                    <div class="col-2 text-end">
                                        <label class="form-label">Gred</label>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select" aria-label="Default select example" name="gred">
                                            <option value="G29">G29</option>
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
                                        <input class="form-control" type="tel" id="telefon" name="telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
                                    </div>
                                </div>



                                {{-- Manual Jana Kodbar --}}
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Aktif</label>
                                    <div class="col-sm-2">
                                        {{-- <input type="checkbox" value=1 name="status" /> --}}
                                        <input type="checkbox" value="Aktif" name="status" checked/>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Tidak Aktif</label>
                                    <div class="col-sm-2">
                                        {{-- <input type="checkbox" value=0 name="status" /> --}}
                                        <input type="checkbox" value="Tidak Aktif" name="status" />
                                    </div>

                                </div>



                                <!--Button-->

                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button class="btn btn-success" type="submit">Daftar</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>



                {{-- Tunjuk data --}}
                <div class="card ">
                    <div class="card-header bg-info col-md-3 text-white d-flex justify-content-center align-self-center">
                        <b>Butiran Maklumat Senarai Pengguna</b>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <table class="table table-bordered">
                                <thead class="text-black bg-info ">
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
                                        <th>Kemaskini</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        @foreach ($users as $user)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->peranan }}</td>
                                            <td>{{ $user->pejabat }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->telefon }}</td>
                                            <td>{{ $user->jawatan }}</td>
                                            <td>{{ $user->status }}</td>
                                            <td>
                                                <div class="col-auto">
                                                    <a href="/pengguna/{{ $user->id }}"
                                                        class="btn btn-xl btn-success"><i class="fas fa-edit"></i></a>
                                                </div>
                                            </td>


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
        </div>

    </main>


@endsection

@section('script')
@endsection
