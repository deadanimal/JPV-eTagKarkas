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
            <div class="card-header bg-info text-black">
                <b>Pendaftaran Rumah Sembelih</b>
            </div>

            <form action="/rumah" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="card-body">

                    <!--Nama Pengeluar-->
                    <div class="mb-3 row">
                        <div class="col-sm-2 mb-3">
                            <label class="col-form-label">Induk</label>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="induk">
                                <option selected>Rumah Sembelih Jabatan</option>
                                <option value="1">Rumah Sembelih Selangor</option>
                                <option value="2">Rumah Sembelih Kelantan</option>
                                <option value="3">Rumah Sembelih Perak</option>
                              </select>
                        </div>
                        <div class="col-sm-2">
                            <label class="form-label">Nama Rumah Sembelih</label>
                        </div>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nama_rumah"  />
                        </div>
                        
                    </div>
                    <!--Induk-->
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label class="form-label">Kod</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="kod"  />
                        </div>
                        <div class="col-2 text-end">
                                <label class="form-label">Kategori</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="kategori"  />
                        </div>
                    </div>

                    {{-- Alamat --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" cols="93" rows="5"></textarea>
                        </div>
                    </div>

                    {{-- Negeri & Daerah --}}
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label class="form-label">Negeri</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="negeri">
                                <option selected>Pilih Negeri</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>                                                 </div>
                        <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" name="daerah">
                                <option selected>Pilih Daerah</option>
                                <option value="Selangor">Shah Alam</option>
                                <option value="Kelantan">Kuantan</option>
                                <option value="Terengganu">Pasir Mas</option>
                            </select> 
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
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-success" type="submit">Cipta</button>
                    </div>
                    
                   
                    </div>
    
                </div>
            </form>
        </div>



        {{-- Tunjuk data --}}
        <div class="card-header bg-info col-md-5 text-black">
            <b>Borang Maklumat Rumah Sembelih</b>
        </div>
        <div class="row d-flex justify-content-center">
            <table class="table table-bordered">
                <thead class="text-black bg-info ">
                    <tr>
                        <th>Bil.</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Rumah Sembelih</th>
                        <th scope="col">Zon</th>
                        <th scope="col">Jana Kod Bar</th>
                        <th scope="col">Akses Ternakan</th>
                        <th scope="col">Status</th>
                        <th>Tindakan</th>

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
                            <td>Dihantar</td>
                            {{-- <td>{{ -asd }}</td> --}}
                            

                            {{-- <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td>
                            <td>-asd</td> --}}

                        {{-- Button edit & hapus --}}
                        <td>
                            <div class="col-auto d-grid gap-2 d-md-flex justify-content-md-center">
                                <a href="/rumah/{{$rumah->id}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
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