@extends('layouts.app')



@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pendaftaran Premis
            </h1>
        </div>

        {{-- 
            1. buat selection before display senarai 
            2. Modul Pentadbiran   -- carian(by name) and datatable pagination(20)
                - Premis
                - Pengguna    
        --}}

        {{-- datatable --}}
        {{-- <div class="card">
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Position
                    </th>
                    <th class="th-sm">Office
                    </th>
                    <th class="th-sm">Age
                    </th>
                    <th class="th-sm">Start date
                    </th>
                    <th class="th-sm">Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                  </tr>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <th>Name
                    </th>
                    <th>Position
                    </th>
                    <th>Office
                    </th>
                    <th>Age
                    </th>
                    <th>Start date
                    </th>
                    <th>Salary
                    </th>
                  </tr>
                </tfoot>
              </table>

                {{ $rumahs->links() }}
        </div> --}}

        {{-- <div class="card">
            <section class="pb-4">
                <div class="bg-white border rounded-5">
                    <section class="w-100 p-4">
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" id="datatable-search-input">
                            <label class="form-label" for="datatable-search-input" style="margin-left: 0px;">Carian</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px"></div>
                                <div class="form-notch-middle" style="width: 47.2px"></div>
                                <div class="form-notch-trailing" ></div>
                            </div>
                        </div>
                        <div class="datatable" id="datatable-search">
                            <div class="datatable-inner table-responsive ps ps--active-x" style="overflow: auto; position:relative;">
                            <table class="table datatable-table">
                                <thead class="datatable-header">
                                    <tr>
                                        <th style="cursor: pointer" scope="col">
                                            <i data-mdb-sort="field_0" class="datatable-sort-icon fas fa-arrow-up" style="transform: rotate(0 deg);">Bilangan</i>
                                        </th>
                                        <th style="cursor: pointer" scope="col">
                                            <i data-mdb-sort="field_1" class="datatable-sort-icon fas fa-arrow-up" style="transform: rotate(0 deg);">Nama</i>
                                        </th>
                                        <th style="cursor: pointer" scope="col">
                                            <i data-mdb-sort="field_2" class="datatable-sort-icon fas fa-arrow-up" style="transform: rotate(0 deg);">Peranan</i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="datatable-body">
                                    <tr scope="row" data-mdb-index="1">
                                        <td style class data-mdb-field="field_0" false>1</td>
                                        <td style class data-mdb-field="field_1" false>Zach</td>
                                        <td style class data-mdb-field="field_1" false>Dev</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>

                        </div>

                    </section>
                </div>
            </section>
        </div> --}}

         {{-- Tunjuk data --}}
         <div class="card">
            <div class="card-header bg-info col-md-3 text-white d-flex justify-content-center align-self-center">
                <b>Borang Maklumat Premis</b>
            </div>
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                        <div class="card p-3  py-4">
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <input type="text" id="myInput" class="form-control" placeholder="Sila masukkan nama premis">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-info btn-block">Carian</button>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 py-4">
                            <div class="col-md-3">
                                <button class="btn btn-warning btn-block">Tambah</button>
                            </div>
                        </div>
                </div>
            </div>

            {{-- datatable --}}
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <table class="table table-bordered">
                        <thead class="text-black bg-info ">
                            <tr>
                                <th>No.</th>
                                {{-- <th scope="col">Kategori Premis</th> --}}
                                <th scope="col">Nama Premis</th>
                                {{-- <th scope="col">Zon</th> --}}
                                <th scope="col">Kod Premis</th>
                                <th scope="col">Kategori Premis</th>
                                {{-- <th scope="col">Jenis Ternakan/Produk</th> --}}
                                {{-- <th scope="col">Status</th> --}}
                                <th>Tindakan</th>
        
                            </tr>
                        </thead>
                        <tbody>
        
                            <tr>
        
                                @foreach ($rumahs as $rumah)
        
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $rumah->kategori }}</td> --}}
                                    <td>{{ $rumah->nama_rumah }}</td>
                                    {{-- <td>{{ $rumah->zon }}</td> --}}
                                    <td>{{ $rumah->kod }}</td>
                                    <td>{{ $rumah->induk }}</td>
                                    {{-- <td>{{ $rumah->akses_ternakan }}</td> --}}
                                    {{-- <td>Dihantar</td> --}}
            
                                {{-- Button edit--}}
                                <td>
                                    <div class="col-auto d-grid gap-2 d-md-flex justify-content-md-center">
                                        <a href="/rumah/{{$rumah->id}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    </div>
        
                                </td>
        
                            </tr>
        
                            @endforeach
        
        
                        </tbody>
                    </table>

                    {{ $rumahs->links() }}

                    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-info text-white">
                <b class="text-center">Pendaftaran Premis</b>
            </div>

            <form action="/rumah" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="card-body">

                    <!--Nama Pengeluar-->
                    <div class="mb-3 row">
                        <div class="col-sm-2 mb-3">
                            {{-- buat as table, editable in future --}}
                            <label class="col-form-label">Kategori Premis</label>
                        </div>
                        <div class="col-sm-10">
    
                            <select class="form-select" aria-label="Default select example" name="induk">
                                {{-- <option selected value="Rumah Sembelih Jabatan">Rumah Sembelih Jabatan</option>
                                <option value="Rumah Sembelih Selangor">Rumah Sembelih Selangor</option>
                                <option value="Rumah Sembelih Kelantan">Rumah Sembelih Kelantan</option> --}}

                                <option selected value="PILIH INDUK">PILIH PREMIS</option>
                                <option value="RSRJ -RUMAH SEMBELIH RUMINAN JABATAN">RSRJ -RUMAH SEMBELIH RUMINAN JABATAN</option>
                                <option value="RSBJ -RUMAH SEMBELIH BABI JABATAN">RSBJ -RUMAH SEMBELIH BABI JABATAN</option>
                                <option value="LPAS - LOJI PENYEMBELIHAN AYAM SWASTA">LPAS - LOJI PENYEMBELIHAN AYAM SWASTA</option>
                                <option value="RSRS - RUMAHSEMBELIH RUMINAN SWASTA">RSRS - RUMAH SEMBELIH RUMINAN SWASTA</option>
                                
                              </select>
                        </div>
                        <div class="col-sm-2">
                            <label class="form-label">Nama Premis</label>
                        </div>
                        <div class="col-sm-10">
                            <input class="form-label" type="text" name="nama_rumah"  />
                        </div>
                        
                    </div>
                    <!--Induk-->
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label class="form-label">Kod Premis</label>
                        </div>
                        <div class="col-4">
                            <input class="form-label" type="text" name="kod"  />
                        </div>
                        <div class="col-2 text-end">
                                <label class="form-label">Kategori Tag</label>
                        </div>
                        <div class="col-4">
                            <input class="form-label" type="text" name="kategori"  />
                        </div>
                    </div>

                    {{-- Alamat --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Alamat</label>
                        <div class="col-xl-10">
                            <textarea class="form-label" name="alamat" cols="93" rows="5"></textarea>
                        </div>
                    </div>

                    {{-- Zon --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Zon</label>
                        <div class="col-xl-4">
                            <select class="form-select" aria-label="Default select example" name="zon">
                                <option selected value="Zon Utara">Zon Utara</option>
                                <option value="Zon Tengah">Zon Tengah</option>
                                <option value="Zon Timur">Zon Timur</option>
                                <option value="Zon Selatan">Zon Selatan</option>
                                <option value="Zon Sabah">Zon Sabah</option>
                                <option value="Zon Sarawak">Zon Sarawak</option>
                            </select>                         
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
                                <option class="Zon Utara" value="Perak">Perak</option>
                                <option class="Zon Utara" value="Pulau Pinang">Pulau Pinang</option>
                                <option class="Zon Utara" value="Kedah">Kedah</option>
                                <option class="Zon Utara" value="Perlis">Perlis</option>
                                <option class="Zon Tengah" value="Selangor">Selangor</option>
                                <option class="Zon Tengah" value="Melaka">Melaka</option>
                                <option class="Zon Tengah" value="Negeri Sembilan">Negeri Sembilan</option>
                                <option class="Zon Tengah" value="W.P Putrajaya">W.P Putrajaya</option>
                                <option class="Zon Tengah" value="W.P Kuala Lumpur">W.P Kuala Lumpur</option>
                            </select>                                                 
                        </div>
                    
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
                        <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                        <div class="col-sm-10">
                            <input class="form-label" type="text" name="no_tel"  />
                        </div>
                    </div>

                    {{-- Emel --}}
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Emel</label>
                        <div class="col-sm-10">
                            <input class="form-label" type="text" name="emel"  />
                        </div>
                    </div> --}}
                     {{-- Orang Dihubungi --}}
                     {{-- <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Orang Dihubungi</label>
                        <div class="col-sm-10">
                            <input class="form-label" type="text" name="orang_dihubungi"  />
                        </div>
                    </div> --}}
                     
                    
                    {{-- Manual Jana Kodbar --}} 
                    {{-- only for Rumah sembelih, jana kodbar and kategori tag put into pendaftaran tag --}}
                    {{-- <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Jana Kodbar</label>
                        <div class="col-sm-2">Manual
                            <input class="form-label" type="checkbox" value="Manual" name="kod_bar" />
                        </div>
                        <label class="col-sm-2 form-label "></label>
                        <div class="col-sm-2 ">Auto
                            <input class="form-label" type="checkbox" value="Auto" name="kod_bar" />
                        </div>
                    </div> --}}
                   
    
                    <!--Akses Ternakan-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                        <div class="col ">Ruminan Besar
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Ruminan Besar" />
                        </div>
                        <label class="col"></label>
                        <div class="col ">Ruminan Kecil
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Ruminan Kecil" />
                        </div>
                        <label class="col"></label>
                        <div class="col ">Ayam/Itik
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Unggas"  />
                        </div>
                        <label class="col"></label>
                        <div class="col ">Babi
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Babi"  />
                        </div>
                        <label class="col"></label>
                        <div class="col ">Telur
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Telur"  />
                        </div>
                        <label class="col"></label>
                        <div class="col ">Susu
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Susu"  />
                        </div>
                        <label class="col"></label>
                        <div class="col ">Tambah Nilai
                            <input class="form-label" type="checkbox" name="akses_ternakan" value="Susu"  />
                        </div>
                    </div>
    
                    <!--Button-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-success" type="submit">Daftar</button>
                    </div>
                    
                   
                    </div>
    
                </div>
            </form>
        </div>
        




</main>

@endsection

<script>
    $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
</script>

<script>
    var negeri = $("[name=negeri] option").detach()
    $("[name=zon]").change(function() {
        var val = $(this).val()
        $("[name=negeri] option").detach()
        negeri.filter("." + val).clone().appendTo("[name=negeri]")
    }).change()
</script>

@section('script')


@endsection