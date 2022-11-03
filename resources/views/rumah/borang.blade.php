@extends('layouts.app')

@section('styles')
    <style>
        /* remove arrow in input number */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection



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

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif

                <form action="/rumah" method="post" enctype="multipart/form-data" id="perlu">
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

                                <select class="form-select" id="induk" name="induk" required onchange="changeInduk()"
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')">
                                    <option selected disabled value="">Pilih Kategori Premis</option>
                                    <option value="RUMAH SEMBELIH JABATAN (RUMINAN)">RUMAH SEMBELIH JABATAN (RUMINAN)
                                    </option>
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
                                <input class="form-control" type="text" name="nama_rumah" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();" />
                            </div>



                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Kod Premis</label>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="kod" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"/>
                            </div>
                            
                            <div class="col-2 text-end" id="tag1">
                                <label class="form-label">Kategori Tag</label>
                            </div>
                            <div class="col-4" id="tag2">
                                <select class="form-select" aria-label="Default select example" name="kategori" >
                                    <option selected disabled value="">Pilih Kategori Tag</option>                                    
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
                                <textarea class="form-control" name="alamat" cols="93" rows="5" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                            </div>
                        </div>

                        {{-- Zon --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Zon</label>
                            <div class="col-xl-4">
                                <select name="zon" id="countySel" size="1" class="form-select"
                                    aria-label="Default select example" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')">
                                    <option selected disabled value="">Pilih Zon</option>

                                </select>
                            </div>
                        </div>

                        {{-- Negeri & Daerah --}}
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Negeri</label>
                            </div>
                            <div class="col-4">
                                <select name="negeri" id="stateSel" size="1" class="form-select"
                                    aria-label="Default select example" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')">
                                    <option selected disabled value="">Pilih Negeri</option>

                                </select>
                            </div>

                            <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                            </div>
                            <div class="col-4">
                                <select name="daerah" id="districtSel" size="1" class="form-select"
                                    aria-label="Default select example"required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')">
                                    <option selected disabled value="">Pilih Daerah</option>
                                </select>
                            </div>

                        </div>

                        {{-- Nombor Telefon --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="no_tel" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')"
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                            </div>
                        </div>


                        <!--Akses Ternakan-->
                        <div class="mb-3 row">

                            <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                            <div class="col ">Ruminan Besar
                                <input type="checkbox" name="jenis1"/>
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ruminan Kecil
                                <input type="checkbox" name="jenis2"/>
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ayam
                                <input type="checkbox" name="jenis3"/>
                            </div>
                            <label class="col"></label>
                            <div class="col ">Itik
                                <input type="checkbox" name="jenis4"/>
                            </div>
                            <label class="col"></label>
                            <div class="col ">Babi
                                <input type="checkbox" name="jenis5"/>
                            </div>
                            <label class="col"></label>
                            <div class="col">Telur
                                <input type="checkbox" name="jenis6"/>
                            </div>
                            <label class="col"></label>
                            <div class="col">Susu
                                <input type="checkbox" name="jenis7"/>
                            </div>
                            <label class="col"></label>
                            <div class="col">Tambah Nilai
                                <input type="checkbox" name="jenis8"/>                            
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Daftar
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Adakah anda ingin mendaftar permohonan baru?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                <button class="btn btn-success " type="submit" value="submit">Ya</button>
                            </div>
                            </div>
                            </div>
                        </div>

                        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit" value="submit">Daftar</button>
                        </div> --}}


                    </div>
                </form>
            </div>
        </div>





    </main>
@endsection



@section('script')
    <script>
        var stateObject = {
            "Zon Utara": {
                "Perak": ["Bagan Datuk", "Batang Padang", "Hulu Perak", "Hilir Perak", "Kinta", "Kampar",
                    "Kuala Kangsar", "Kerian", "Muallim", "Manjung", "Larut,Matang & Selama", "Perak Tengah"
                ],
                "Pulau Pinang": ["Seberang Perai Utara", "Seberang Perai Selatan", "Seberang Perai Tengah",
                    "Timur Laut Pulau Pinang", "Barat Daya Pulau Pinang", "Seberang Perai Selatan"
                ],
                "Kedah": ["Kuala Muda", "Kota Setar", "Langkawi", "Sungai Petani", "Kulim", "Kubang Pasu", "Baling",
                    "Pendang", "Yan", "Sik", "Padang Terap", "Pokok Sena", "Bandar Baharu"
                ],
                "Perlis": ["Arau", "Kangar", "Padang Besar"],
            },
            "Zon Tengah": {
                "Selangor": ["Kuala Selangor", "Gombak", "Petaling", "Sepang", "Hulu Langat", "Klang", "Kuala Langat",
                    "Hulu Selangor", "Sabak Bernam"
                ],
                "WP. Kuala Lumpur": ["Kuala Lumpur"],
                "WP. Putrajaya": ["Putrajaya"],
                "Melaka": ["Alor Gajah", "Jasin", "Melaka Tengah"],
                "Negeri Sembilan": ["Seremban", "Jempol", "Port Dickson", "Kuala Pilah", "Tampin", "Rembau", "Jelebu"],
            },
            "Zon Timur": {
                "Pahang": ["Cameron Highlands", "Bentong", "Kuantan", "Temerloh", "Maran", "Rompin", "Pekan", "Bera",
                    "Raub", "Jerantut", "Lipis"
                ],
                "Terengganu": ["Kuala Terengganu", "Kemaman", "Dungun", "Besut", "Marang", "Hulu Terengganu", "Setiu",
                    "Kuala Nerus"
                ],
                "Kelantan": ["Kota Bharu", "Pasir Mas", "Kuala Krai", "Tumpat", "Bachok", "Tanah Merah", "Pasir Puteh",
                    "Machang", "Gua Musang", "Jeli"
                ],
            },
            "Zon Selatan": {
                "Johor": ["Johor Bahru", "Batu Pahat", "Kluang", "Kulai", "Muar", "Kota Tinggi", "Segamat", "Pontian",
                    "Tangkak", "Mersing"
                ],
            },
            "Sabah": {
                "Sabah": ["Kota Kinabalu", "Tawau", "Sandakan", "Lahad Datu", "Keningau", "Kinabatangan", "Semporna",
                    "Papar", "Penampang", "Beluran", "Tuaran", "Ranau", "Kota Belud", "Kudat", "kota Marudu",
                    "Beaufort", "Kunak", "Tenom", "Putatan", "Pitas", "Tambunan", "Tongod", "Sipitang", "Nabawan",
                    "Kuala Penyu"
                ],
                "Labuan": ["Labuan"],
            },
            "Sarawak": {
                "Sarawak": ["Kuching", "Miri", "Sibu", "Bintulu", "Serian", "Kota Samarahan", "Sri Aman", "Marudi",
                    "Betong", "Sarikei", "Kapit", "Bau", "Limbang", "Saratok", "Mukah", "Simunjan", "Lawas",
                    "Belaga", "Lundu", "Asajaya"
                ],
            },
        }
        window.onload = function() {
            var countySel = document.getElementById("countySel"),
                stateSel = document.getElementById("stateSel"),
                districtSel = document.getElementById("districtSel");
            for (var zon in stateObject) {
                countySel.options[countySel.options.length] = new Option(zon, zon);
            }
            countySel.onchange = function() {
                stateSel.length = 1; // remove all options bar first
                districtSel.length = 1; // remove all options bar first
                if (this.selectedIndex < 1) return; // done 
                for (var negeri in stateObject[this.value]) {
                    stateSel.options[stateSel.options.length] = new Option(negeri, negeri);
                }
            }
            countySel.onchange(); // reset in case page is reloaded
            stateSel.onchange = function() {
                districtSel.length = 1; // remove all options bar first
                if (this.selectedIndex < 1) return; // done 
                var daerah = stateObject[countySel.value][this.value];
                for (var i = 0; i < daerah.length; i++) {
                    districtSel.options[districtSel.options.length] = new Option(daerah[i], daerah[i]);
                }
            }
        }

    </script>

    {{-- required checkbox --}}
    <script>
        // $('#perlu').on("submit", function(e) {
        //     var arr = $(this).serialize().toString();
        //     if (arr.indexOf("akses_ternakan") < 0) {
        //         e.preventDefault();
        //         alert("Sila pilih jenis ternakan.");
        //     }
        // });
    </script>

    <script>
        function changeInduk() {
            var induk = document.getElementById("induk").value
            if (induk == "LOJI PENYEMBELIHAN AYAM" || induk == "LOJI PENYEMBELIHAN ITIK" || induk == "LOJI PEMPROSESAN PRODUK" || induk == "LADANG MyGap" || induk == "LADANG MyOrganic") {
                document.getElementById("tag1").style.display = "none";
                document.getElementById("tag2").style.display = "none";
            } else {
                document.getElementById("tag1").style.display = "block";
                document.getElementById("tag2").style.display = "block";
            }
        }        
    </script>
@endsection
