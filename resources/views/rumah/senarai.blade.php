@extends('layouts.app')



@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Rumah Sembelih
            </h1>
        </div>

        <div class="card">
            <div class="card-header">
                <b>Pendaftaran Rumah Sembelih</b>
            </div>

            <form action="/rumah" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="card-body">

                    <!--Nama Pengeluar-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Induk</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="induk">
                                <option selected>Rumah Sembelih Jabatan</option>
                                <option value="1">Rumah Sembelih Selangor</option>
                                <option value="2">Rumah Sembelih Kelantan</option>
                                <option value="3">Rumah Sembelih Perak</option>
                              </select>
                        </div>
                    </div>
                    <!--Induk-->
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nama Rumah Sembelih</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nama_rumah"  />
                        </div>
                    </div>
    
                    <!--Kod & Kategori-->
                    <div class="row " >
                        <div class="col col-form-label">
                            <label class="col-sm-2 col-form-label">Kod</label>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" name="kod"  />
                            </div>
                        </div>
                        <!--Kategori-->
                        <div class="col">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" name="kategori"  />
                            </div>
                        </div>
                    </div>
                    <!--Alamat,Daerah, Negeri-->
                    <div class="row g-2 col-form-label" >
                        <div class="col">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                {{-- <input class="form-control" type="text" name="alamat"  /> --}}
                                <textarea name="alamat" cols="50" rows="5"></textarea>
                            </div>
                        </div>
                        <!--Kategori-->
                        <div class="col">
                            
                            <label class="col-sm-2 col-form-label">Negeri</label>
                            <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example" name="negeri">
                                    <option selected>Pilih Negeri</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Terengganu">Terengganu</option>
                                </select>                            
                            </div>
                            <label class="col-sm-2 col-form-label">Daerah</label>
                            <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example" name="daerah">
                                    <option selected value="Shah Alam">Shah Alam</option>
                                    <option value="Kuala Selangor">Kuala Selangor</option>
                                    <option value="Kuantan">Kuantan</option>
                                    <option value="Pasir Mas">Pasir Mas</option>
                                </select>                            
                            </div>
                        </div>
                    </div>
                    
                     {{-- Nombor Telefon --}}
                     <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nombor Telefon</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="no_tel"  />
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
                        <label class="col-sm-2 col-form-label">Orang Dihubungi</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="orang_dihubungi"  />
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
            </form>
        </div>



        {{-- Tunjuk data --}}
        <div class="card-header">
            <b>Borang Maklumat Rumah Sembelih</b>
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

                        @foreach ($rumahs as $rumah)

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rumah->kategori }}</td>
                            <td>{{ $rumah->nama_rumah }}</td>
                            <td>{{ $rumah->zon }}</td>
                            <td>{{ $rumah->kod_bar }}</td>
                            <td>{{ $rumah->akses_ternakan }}</td>
                            <td></td>
                            {{-- <td>{{ -asd }}</td> --}}
                            

                            {{-- <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td> --}}

                        {{-- Button edit & hapus --}}
                        <td>
                            <div class="col-auto">
                                <a href="/rumah/{{$rumah->id}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </div>

                        </td>



                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>
    </div>



</main>

@endsection

@section('script')


@endsection