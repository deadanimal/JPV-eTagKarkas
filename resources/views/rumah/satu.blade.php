@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                @role('pentadbir')
                <h1 class="header-title">
                    Pendaftaran Premis
                </h1>
                @endrole
            </div>

            @role('pengurus-rumah-sembelih')
            <div class="header">
                <h1 class="header-title">
                    Maklumat Premis
                </h1>
            </div>
            @endrole


            <div class="card">
                @role('pentadbir')
                <div class="card-header bg-info text-white">
                    <b class="text-center">Pendaftaran Premis</b>
                </div>
                @endrole

                @role('pengurus-rumah-sembelih')
                <div class="card-header bg-info text-white">
                    <b class="text-center">Maklumat Premis</b>
                </div>
                @endrole

                @role('pentadbir')
                <form action="/rumah/{{$rumah->id}}" method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="card-body">

                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <div class="col-xl-2 mb-3">
                                {{-- buat as table, editable in future --}}
                                <label class="col-form-label">Kategori Premis</label>
                            </div>
                            <div class="col-xl-10">
                                <select class="form-select" aria-label="Default select example" name="induk" id="induk" onclick="indOpt()" >
                                    <option selected class="ind">{{ $rumah->induk}}</option>
                                    <option value="RUMAH SEMBELIH JABATAN (RUMINAN)">RUMAH SEMBELIH JABATAN (RUMINAN)</option>
                                    <option value="RUMAH SEMBELIH JABATAN (BABI)">RUMAH SEMBELIH JABATAN (BABI)</option>
                                    <option value="RUMAH SEMBELIH SWASTA (RUMINAN)">RUMAH SEMBELIH SWASTA (RUMINAN)</option>
                                    <option value="RUMAH SEMBELIH SWASTA (BABI)">RUMAH SEMBELIH SWASTA (BABI)</option>
                                    <option value="SEMBELIHAN LUAR">SEMBELIHAN LUAR</option>
                                    <option value="LOJI PENYEMBELIHAN AYAM">LOJI PENYEMBELIHAN AYAM</option>
                                    <option value="LOJI PENYEMBELIHAN ITIK">LOJI PENYEMBELIHAN ITIK</option>
                                    <option value="LOJI PEMPROSESAN PRODUK">LOJI PEMPROSESAN PRODUK</option>
                                    <option value="LADANG MyGap">LADANG MyGap</option>
                                    <option value="LADANG MyOrganic">LADANG MyOrganic</option>
                                </select>
                            </div>
                            <div class="col-xl-2">
                                <label class="form-label">Nama Premis</label>
                            </div>
                            <div class="col-xl-10">
                                <input class="form-label" type="text" name="nama_rumah" value="{{ $rumah->nama_rumah}}" >
                            </div>

                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Kod Premis</label>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="kod" value="{{ $rumah->kod}}" >
                            </div>
                            <div class="col-2 text-end">
                                <label class="form-label">Kategori Tag</label>
                            </div>
                            <div class="col-4">
                                {{-- <input class="form-label" type="text" name="kategori" value="{{ $rumah->kategori}}" > --}}
                                <select class="form-select" aria-label="Default select example" name="kategori" id="s1" onclick="selOpt()" >
                                    <option selected="Pilih Kategori Tag" class="kat">{{ $rumah->kategori }} </option>
                                    <option value="K1">K1</option>
                                    <option value="K2">K2</option>
                                    <option value="K3">K3</option>
                                </select>
                            </div>
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Alamat</label>
                            <div class="col-xl-10">
                                <textarea class="form-control" name="alamat" cols="93" rows="5" >{{ $rumah->alamat }}</textarea>
                            </div>
                        </div>

                        {{-- Zon --}}
                       
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Zon</label>
                            <div class="col-xl-4">
                                <select name="zon" id="countySel" size="1" class="form-select" aria-label="Default select example" >
                                    <option selected>{{ $rumah->zon }}</option>
                                    
                                </select>
                            </div>
                        </div>

                     
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Negeri</label>
                            </div>
                            <div class="col-4">
                                <select name="negeri" id="stateSel" size="1" class="form-select" aria-label="Default select example" >
                                    <option selected>{{ $rumah->negeri}}</option>
                                    
                                </select>
                            </div>

                            <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                            </div>
                            <div class="col-4">
                                <select name="daerah" id="districtSel" size="1" class="form-select" aria-label="Default select example" >
                                    <option selected>{{ $rumah->daerah}}</option>
                                </select>
                            </div>

                        </div>

                        {{-- Nombor Telefon --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="no_tel" value="{{ $rumah->no_tel }}" />
                            </div>
                        </div>


                        <!--Akses Ternakan-->
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                            <div class="col ">Ruminan Besar
                                @if($rumah->jenis1) 
                                    <input class="form-label" type="checkbox" name="jenis1" checked/>
                                @else
                                    <input class="form-label" type="checkbox" name="jenis1"/>
                                @endif
                                                         
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ruminan Kecil
                                <input class="form-label" type="checkbox" name="category[]" value="Ruminan Kecil" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ayam
                                <input class="form-label" type="checkbox" name="category[]" value="Ayam" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Itik
                                <input class="form-label" type="checkbox" name="category[]" value="Itik" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Babi
                                <input class="form-label" type="checkbox" name="category[]" value="Babi" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Telur
                                <input class="form-label" type="checkbox" name="category[]" value="Telur" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Susu
                                <input class="form-label" type="checkbox" name="category[]" value="Susu" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Tambah Nilai
                                <input class="form-label" type="checkbox" name="category[]" value="Tambah Nilai" />
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>


                    </div>
                </form>
                @endrole

                @role('pengurus-rumah-sembelih')
                <form action="/rumah/{{$rumah->id}}" method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="card-body">

                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <div class="col-xl-2 mb-3">
                                {{-- buat as table, editable in future --}}
                                <label class="col-form-label">Kategori Premis</label>
                            </div>
                            <div class="col-xl-10">
                                <input class="form-label" type="text" name="induk" value="{{ $rumah->induk}}" readonly >

                            </div>
                            <div class="col-xl-2">
                                <label class="form-label">Nama Premis</label>
                            </div>
                            <div class="col-xl-10">
                                <input class="form-label" type="text" name="nama_rumah" value="{{ $rumah->nama_rumah}}" readonly >
                            </div>

                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Kod Premis</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kod" value="{{ $rumah->kod}}" readonly >
                            </div>
                            <div class="col-2 text-end">
                                <label class="form-label">Kategori Tag</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kategori" value="{{ $rumah->kategori}}" readonly >
                            </div>
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Alamat</label>
                            <div class="col-xl-10">
                                <textarea class="form-label" name="alamat" cols="93" rows="5" readonly>{{ $rumah->alamat }}</textarea>
                            </div>
                        </div>

                        {{-- Zon --}}
                       
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Zon</label>
                            <div class="col-xl-4">
                                <input class="form-label" type="text" name="zon" value="{{ $rumah->zon}}" readonly >

                              
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Negeri</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="negeri" value="{{ $rumah->negeri}}" readonly >

            
                            </div>

                            <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="daerah" value="{{ $rumah->daerah}}" readonly >

                               
                            </div>

                        </div>

                        {{-- Nombor Telefon --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="no_tel" value="{{ $rumah->no_tel }}" readonly />
                            </div>
                        </div>


                        <!--Akses Ternakan-->
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                            <div class="col ">Ruminan Besar
                                <input class="form-label" type="checkbox" name="category[]" value="Ruminan Besar" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ruminan Kecil
                                <input class="form-label" type="checkbox" name="category[]" value="Ruminan Kecil" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ayam
                                <input class="form-label" type="checkbox" name="category[]" value="Ayam" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Itik
                                <input class="form-label" type="checkbox" name="category[]" value="Itik" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Babi
                                <input class="form-label" type="checkbox" name="category[]" value="Babi" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Telur
                                <input class="form-label" type="checkbox" name="category[]" value="Telur" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Susu
                                <input class="form-label" type="checkbox" name="category[]" value="Susu" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Tambah Nilai
                                <input class="form-label" type="checkbox" name="category[]" value="Tambah Nilai" />
                            </div>
                        </div>

                        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div> --}}


                    </div>
                </form>
                @endrole
            </div>
        </div>





    </main>
@endsection



@section('script')

<script>
    var stateObject = {
    "Zon Utara": { "Perak": ["Bagan Datuk","Batang Padang","Hulu Perak","Hilir Perak","Kinta","Kampar", "Kuala Kangsar","Kerian","Muallim","Manjung","Larut,Matang & Selama","Perak Tengah"],
    "Pulau Pinang": ["Seberang Perai Utara", "Seberang Perai Selatan","Seberang Perai Tengah","Timur Laut Pulau Pinang","Barat Daya Pulau Pinang","Seberang Perai Selatan"],
    "Kedah": ["Kuala Muda", "Kota Setar","Langkawi","Sungai Petani","Kulim","Kubang Pasu","Baling","Pendang","Yan","Sik","Padang Terap","Pokok Sena","Bandar Baharu"],
    "Perlis": ["Arau", "Kangar","Padang Besar"],
    },
    "Zon Tengah": {
    "Selangor": ["Kuala Selangor", "Gombak","Petaling","Sepang","Hulu Langat","Klang","Kuala Langat","Hulu Selangor","Sabak Bernam"],
    "WP. Kuala Lumpur": ["Kuala Lumpur"],
    "WP. Putrajaya": ["Putrajaya"],
    "Melaka": ["Alor Gajah","Jasin","Melaka Tengah"],
    "Negeri Sembilan": ["Seremban", "Jempol","Port Dickson","Kuala Pilah","Tampin","Rembau","Jelebu"],
    }, 
    "Zon Timur": {
    "Pahang": ["Cameron Highlands", "Bentong","Kuantan","Temerloh","Maran","Rompin","Pekan","Bera","Raub","Jerantut","Lipis"],
    "Terengganu": ["Kuala Terengganu","Kemaman","Dungun","Besut","Marang","Hulu Terengganu","Setiu","Kuala Nerus"],
    "Kelantan": ["Kota Bharu", "Pasir Mas","Kuala Krai","Tumpat","Bachok","Tanah Merah","Pasir Puteh","Machang","Gua Musang","Jeli"],
    },
    "Zon Selatan": {
        "Johor":["Johor Bahru","Batu Pahat","Kluang","Kulai","Muar","Kota Tinggi","Segamat","Pontian","Tangkak","Mersing"],
    },
    "Sabah": {
        "Sabah":["Kota Kinabalu","Tawau","Sandakan","Lahad Datu","Keningau","Kinabatangan","Semporna","Papar","Penampang","Beluran","Tuaran","Ranau","Kota Belud","Kudat","kota Marudu","Beaufort","Kunak","Tenom","Putatan","Pitas","Tambunan","Tongod","Sipitang","Nabawan","Kuala Penyu"],
        "Labuan":["Labuan"],
    },
    "Sarawak": {
        "Sarawak": ["Kuching","Miri","Sibu","Bintulu","Serian","Kota Samarahan","Sri Aman","Marudi","Betong","Sarikei","Kapit","Bau","Limbang","Saratok","Mukah","Simunjan","Lawas","Belaga","Lundu","Asajaya"],
    },
    }
    window.onload = function () {
    var countySel = document.getElementById("countySel"),
    stateSel = document.getElementById("stateSel"),
    districtSel = document.getElementById("districtSel");
    for (var zon in stateObject) {
    countySel.options[countySel.options.length] = new Option(zon, zon);
    }
    countySel.onchange = function () {
    stateSel.length = 1; // remove all options bar first
    districtSel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) return; // done 
    for (var negeri in stateObject[this.value]) {
    stateSel.options[stateSel.options.length] = new Option(negeri, negeri);
    }
    }
    countySel.onchange(); // reset in case page is reloaded
    stateSel.onchange = function () {
    districtSel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) return; // done 
    var daerah = stateObject[countySel.value][this.value];
    for (var i = 0; i < daerah.length; i++) {
    districtSel.options[districtSel.options.length] = new Option(daerah[i], daerah[i]);
    }
    }
    }
</script>

{{-- kategori premis --}}
<script type="text/javascript">
    function indOpt() {
       selEl = document.querySelector('#induk');
       ind = selEl.value;
       document.querySelector('.ind').textContent = op;
    }
 </script>

{{-- kategori tag --}}
<script type="text/javascript">
    function selOpt() {
       selEl = document.querySelector('#s1');
       kat = selEl.value;
       document.querySelector('.kat').textContent = op;
    }
 </script>



@endsection
