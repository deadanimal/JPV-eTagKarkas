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
        
                <div class="header">
                    <h1 class="header-title">
                        Pendaftaran Pengguna
                    </h1>
                </div>
        
                <div class="card">
                    <div class="card-header">
                        <b>Daftar Profil Pengguna</b>
                    </div>
        
                    <form action="/pengguna" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="card-body">
        
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
                                    <select class="form-select" aria-label="Default select example" name="peranan">
                                        <option selected>Pemeriksa Daging</option>
                                        <option value="1">Pengurus</option>
                                        <option value="2">Ketua Seksyen</option>
                                        <option value="3">Pentadbir</option>
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
                                    <input class="form-control" type="text" name="emel"  />
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
                                    <select class="form-select" aria-label="Default select example" name="daerah">
                                        <option selected value="G29">G29</option>
                                        <option value="G41">G41</option>
                                        <option value="G44">G44</option>
                                        <option value="G54">G54</option>
                                    </select> 
                                </div>
                                 {{-- Nombor Telefon --}}
                              <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Nombor Telefon</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="no_tel"  />
                                    </div>
                                </div>
                               
                            </div>
        
                             
        
                            {{-- Emel --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Emel</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="emel"  />
                                </div>
                            </div>
                             {{-- Orang Dihubungi --}}
                             <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Kata Laluan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kata_laluan"  />
                                </div>
                            </div>
                             {{-- Zon --}}
                             <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Zon</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="zon">
                                        <option selected value="Zon Utara">Zon Utara</option>
                                        <option value="Zon Selatan">Zon Selatan</option>
                                        <option value="Zon Tengah">Zon Tengah</option>
                                        <option value="Zon Timur">Zon Timur</option>
                                        <option value="Zon Barat">Zon Barat</option>
                                    </select>                         
                                </div>
                            </div>
                            
                            {{-- Manual Jana Kodbar --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jana Kodbar</label>
                                <div class="col-sm-2">Manual
                                    <input type="checkbox" value="Manual" name="kod_bar" />
                                </div>
                                <label class="col-sm-2 "></label>
                                <div class="col-sm-2">Auto
                                    <input type="checkbox" value="Auto" name="kod_bar" />
                                </div>
                            </div>
                           
            
                            <!--Akses Ternakan-->
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Akses Ternakan</label>
                                <div class="col">Ruminan Besar
                                    <input type="checkbox" name="akses_ternakan" value="Ruminan Besar" />
                                </div>
                                <label class="col"></label>
                                <div class="col">Ruminan Kecil
                                    <input type="checkbox" name="akses_ternakan" value="Ruminan Kecil" />
                                </div>
                                <label class="col"></label>
                                <div class="col">Unggas
                                    <input type="checkbox" name="akses_ternakan" value="Unggas"  />
                                </div>
                                <label class="col"></label>
                                <div class="col">Babi
                                    <input type="checkbox" name="akses_ternakan" value="Babi"  />
                                </div>
                            </div>
            
                            <!--Button-->
                            <div align="right">
                                <button class=“btn btn-primary” type=“submit”>Cipta</button>
                            </div>
                            
                           
                            </div>
            
                        </div>
                    </form>
                </div>
        
        
        
                {{-- Tunjuk data --}}
                <div class="card-header">
                    <b>Butiran Maklumat Senarai Pengguna</b>
                </div>
                <div class="row d-flex justify-content-center">
                    <table class="table table-bordered">
                        <thead class="text-black ">
                            <tr>
                                <th>Bil.</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nama Rumah Sembelih</th>
                                <th scope="col">Zon</th>
                                <th scope="col">Jana Kod Bar</th>
                                <th scope="col">Akses Ternakan</th>
                                <th scope="col">Status</th>
                                <th></th>
        
                            </tr>
                        </thead>
                        <tbody>
        
                            <tr>
        
                                {{-- @foreach ($rumahs as $rumah)
        
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rumah->kategori }}</td>
                                    <td>{{ $rumah->nama_rumah }}</td>
                                    <td>{{ $rumah->zon }}</td>
                                    <td>{{ $rumah->kod_bar }}</td>
                                    <td>{{ $rumah->akses_ternakan }}</td>
                                    <td>Dihantar</td> --}}
                                    {{-- <td>{{ -asd }}</td> --}}
                                    
        
                                    <td>-asd</td>
                                    <td>-asd</td>
                                    <td>-asd</td>
                                    <td>-asd</td>
                                    <td>-asd</td>
                                    <td>-asd</td>
        
                                {{-- Button edit & hapus --}}
                                <td>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </div>
        
                                </td>
        
        
        
                            </tr>
        
                            {{-- @endforeach --}}
        
        
                        </tbody>
                    </table>
                </div>
            </div>
        
        
        
        </main>


    </div>



</main>

@endsection

@section('script')


@endsection