@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pendaftaran Premis
                </h1>
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
                                    <option selected value="PILIH INDUK">Pilih Kategori Premis</option>
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
                            <div class="col-sm-2">
                                <label class="form-label">Nama Premis</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="nama_rumah" />
                            </div>

                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Kod Premis</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kod" />
                            </div>
                            <div class="col-2 text-end">
                                <label class="form-label">Kategori Tag</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kategori" />
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
                                <select name="zon" id="countySel" size="1" class="form-select" aria-label="Default select example" >
                                    <option selected>Pilih Zon</option>
                                    
                                </select>
                            </div>
                        </div>

                        {{-- Negeri & Daerah --}}
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Negeri</label>
                            </div>
                            <div class="col-4">
                                <select name="negeri" id="stateSel" size="1" class="form-select" aria-label="Default select example" >
                                    <option selected>Pilih Negeri</option>
                                    
                                </select>
                            </div>

                            <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                            </div>
                            <div class="col-4">
                                <select name="daerah" id="districtSel" size="1" class="form-select" aria-label="Default select example" >
                                    <option selected>Pilih Daerah</option>
                                </select>
                            </div>

                        </div>

                        {{-- Nombor Telefon --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="no_tel" />
                            </div>
                        </div>


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
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Unggas" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Babi
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Babi" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Telur
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Telur" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Susu
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Susu" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Tambah Nilai
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Susu" />
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Daftar</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>





    </main>
@endsection



@section('script')

<script>
    var stateObject = {
    "Zon Utara": { "Perak": ["Kampar", "Kuala Kangsar","Kinta"],
    "Pulau Pinang": ["Seberang Perai Selatan", "Seberang Perai Utara"],
    "Kedah": ["Kuala Muda", "Kota Setar","Langkawi"],
    "Perlis": ["Arau", "Kangar","Padang Besar"],
    },
    "Zon Tengah": {
    "Selangor": ["Kuala Selangor", "Gombak","Petaling","Sepang"],
    "WP. Kuala Lumpur": ["Kuala Lumpur", "Sentul"],
    "WP. Putrajaya": ["Putrajaya", "Sentul"],
    "Melaka": ["Melaka Tengah", "Alor Gajah","Jasin"],
    "Negeri Sembilan": ["Seremban", "Jempol","Port Dickson","Kuala Pilah"],
    }, 
    "Zon Timur": {
    "Pahang": ["Cameron Highlands", "Bentong","Kuantan","Temerloh"],
    "Terengganu": ["Kuala Terengganu", "Marang"],
    "Kelantan": ["Kota Bharu", "Pasir Mas","Kuala Krai"],
    },
    "Zon Selatan": {
        "Johor":["Johor Bahru","Batu Pahat","Kluang"],
    },
    "Sabah": {
        "Sabah":["Kota Kinabalu","Tawau","Sandakan","Lahad Datu"],
        "Labuan":["Labuan"],
    },
    "Sarawak": {
        "Sarawak": ["Kuching","Miri","Sibu","Bintulu"],
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

@endsection
