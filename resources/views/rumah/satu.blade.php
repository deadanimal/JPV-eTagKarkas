@extends('layouts.app')

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
                    <form action="/rumah/{{ $rumah->id }}" method="POST">
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
                                    <select class="form-select" aria-label="Default select example" name="induk"
                                        id="induk" onclick="indOpt()" onchange="changeInduk()">
                                        <option selected class="ind">{{ $rumah->induk }}</option>
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
                                    <input class="form-label" type="text" name="nama_rumah" value="{{ $rumah->nama_rumah }}" style="width: 100%"
                                    onkeyup="this.value = this.value.toUpperCase();">
                                </div>

                            </div>
                            <!--Induk-->
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Kod Premis</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="kod" value="{{ $rumah->kod }}"
                                    onkeyup="this.value = this.value.toUpperCase();">
                                </div>

                    
                                <?php
                                $t = "block";
                                if($rumah->induk == "LADANG MyOrganic" || $rumah->induk == "LADANG MyGap" || $rumah->induk == "LOJI PENYEMBELIHAN ITIK" || $rumah->induk == "LOJI PENYEMBELIHAN AYAM" || $rumah->induk == "LOJI PEMPROSESAN PRODUK"|| $rumah->induk == 'RUMAH SEMBELIH JABATAN (RUMINAN)' || $rumah->induk == 'RUMAH SEMBELIH JABATAN (BABI)' || $rumah->induk == 'RUMAH SEMBELIH SWASTA (RUMINAN)' || $rumah->induk == 'RUMAH SEMBELIH SWASTA (BABI)' || $rumah->induk == 'SEMBELIHAN LUAR' ){
                                    $t = "none";
                                }
                                ?>
                                <div class="col-2 text-end" id="tag1" style="display:{{$t}};">
                                    <label class="form-label">Kategori Tag</label>
                                </div>
                                <div class="col-4" id="tag2" style="display:{{$t}};">
                                    <select class="form-select" aria-label="Default select example" name="kategori"
                                        id="s1" onclick="selOpt()">
                                        <option selected="Pilih Kategori Tag" class="kat">{{ $rumah->kategori }} </option>
                                        <option value="K1">K1</option>
                                        <option value="K2">K2</option>
                                        <option value="K3">K3</option>
                                    </select>
                                </div>
                                {{-- @else
                                        <input name="kategori" id="tag3" value="0" type="hidden">  --}}
                                {{-- @endif --}}
                            </div>

                            {{-- Alamat --}}
                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Alamat</label>
                                <div class="col-xl-10">
                                    <textarea class="form-control" name="alamat" cols="93" rows="5" onkeyup="this.value = this.value.toUpperCase();">{{ $rumah->alamat }} </textarea>
                                </div>
                            </div>

                            {{-- Zon --}}

                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Zon</label>
                                <div class="col-xl-4">
                                    <select name="zon" id="countySel" size="1" class="form-select">
                                        <option>{{ $rumah->zon }} 	&#10003;</option>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Negeri</label>
                                </div>
                                <div class="col-4">
                                    <select name="negeri" id="stateSel" size="1" class="form-select">
                                        <option>{{ $rumah->negeri }} 	&#10003;</option>

                                    </select>
                                </div>

                                <div class="col-2 text-end">
                                    <label class="form-label">Daerah</label>
                                </div>
                                <div class="col-4">
                                    <select name="daerah" id="districtSel" size="1" class="form-select">
                                        <option>{{ $rumah->daerah }} 	&#10003;</option>
                                    </select>
                                </div>

                            </div>

                            {{-- Nombor Telefon --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                                <div class="col-sm-10">
                                    <input class="form-label" type="number" name="no_tel" value="{{ $rumah->no_tel }}" 
                                    onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"/>
                                </div>
                            </div>


                            <!--Akses Ternakan-->
                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                                <div class="col ">Ruminan Besar
                                    @if ($rumah->jenis1)
                                        <input class="form-label" type="checkbox" name="jenis1" checked />
                                    @else
                                        <input class="form-label" type="checkbox" name="jenis1" />
                                    @endif

                                </div>
                                <label class="col"></label>
                                <div class="col ">Ruminan Kecil
                                    @if ($rumah->jenis2)
                                        <input class="form-label" type="checkbox" name="jenis2" checked />
                                    @else
                                        <input class="form-label" type="checkbox" name="jenis2" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Ayam
                                    @if ($rumah->jenis3)
                                    <input class="form-label" type="checkbox" name="jenis3" checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis3" />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Itik
                                    @if ($rumah->jenis4)
                                    <input class="form-label" type="checkbox" name="jenis4" checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis4" />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Babi
                                    @if ($rumah->jenis5)
                                    <input class="form-label" type="checkbox" name="jenis5" checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis5" />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Telur
                                    @if ($rumah->jenis6)
                                    <input class="form-label" type="checkbox" name="jenis6" checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis6" />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Susu
                                    @if ($rumah->jenis7)
                                    <input class="form-label" type="checkbox" name="jenis7" checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis7" />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Tambah Nilai
                                    @if ($rumah->jenis8)
                                    <input class="form-label" type="checkbox" name="jenis8" checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis8" />
                                    @endif                                
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>


                        </div>
                    </form>
                @endrole

                @role('pengurus-rumah-sembelih')
                    <form action="/rumah/{{ $rumah->id }}" method="POST">
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
                                    <input class="form-label" type="text" name="induk" value="{{ $rumah->induk }}" style="width: 100%" readonly>

                                </div>
                                <div class="col-xl-2">
                                    <label class="form-label">Nama Premis</label>
                                </div>
                                <div class="col-xl-10">
                                    <input class="form-label" type="text" name="nama_rumah"
                                        value="{{ $rumah->nama_rumah }}" style="width: 100%" readonly>
                                </div>

                            </div>
                            <!--Induk-->
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Kod Premis</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-label" type="text" name="kod" value="{{ $rumah->kod }}" readonly>
                                </div>
                                <div class="col-2 text-end">
                                    <label class="form-label">Kategori Tag</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-label" type="text" name="kategori" value="{{ $rumah->kategori }}" readonly>
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
                                    <input class="form-label" type="text" name="zon" value="{{ $rumah->zon }}" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Negeri</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-label" type="text" name="negeri" value="{{ $rumah->negeri }}" readonly>
                                </div>

                                <div class="col-2 text-end">
                                    <label class="form-label">Daerah</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-label" type="text" name="daerah" value="{{ $rumah->daerah }}" readonly>
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
                                    @if ($rumah->jenis1)
                                        <input class="form-label" type="checkbox" name="jenis1"  onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" name="jenis1"  onclick="return false;" />
                                    @endif

                                </div>
                                <label class="col"></label>
                                <div class="col ">Ruminan Kecil
                                    @if ($rumah->jenis2)
                                        <input class="form-label" type="checkbox" name="jenis2" onclick="return false;"  checked />
                                    @else
                                        <input class="form-label" type="checkbox" name="jenis2" onclick="return false;"  />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Ayam
                                    @if ($rumah->jenis3)
                                    <input class="form-label" type="checkbox" name="jenis3" onclick="return false;"  checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis3" onclick="return false;"  />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Itik
                                    @if ($rumah->jenis4)
                                    <input class="form-label" type="checkbox" name="jenis4" onclick="return false;"  checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis4" onclick="return false;"  />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Babi
                                    @if ($rumah->jenis5)
                                    <input class="form-label" type="checkbox" name="jenis5" onclick="return false;"  checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis5" onclick="return false;"  />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Telur
                                    @if ($rumah->jenis6)
                                    <input class="form-label" type="checkbox" name="jenis6" onclick="return false;"  checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis6" onclick="return false;"  />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Susu
                                    @if ($rumah->jenis7)
                                    <input class="form-label" type="checkbox" name="jenis7" onclick="return false;"  checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis7" onclick="return false;"  />
                                    @endif                                
                                </div>
                                <label class="col"></label>
                                <div class="col ">Tambah Nilai
                                    @if ($rumah->jenis8)
                                    <input class="form-label" type="checkbox" name="jenis8" onclick="return false;"  checked />
                                    @else
                                    <input class="form-label" type="checkbox" name="jenis8" onclick="return false;"  />
                                    @endif                                
                                </div>
                            </div>

                            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div> --}}


                        </div>
                    </form>
            </div>

            <div class="card">
                <div class="card-header bg-info text-white">
                    <b class="text-center">Senarai Pengguna</b>
                </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nombor Telefon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->telefon}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->status}}</td>
                      </tr>
                      
                    </tbody>
                  </table>
            
            </div>
            @endrole

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
                console.log(stateSel.options)
                for (var negeri in stateObject[this.value]) {
                    stateSel.options[stateSel.options.length] = new Option(negeri, negeri);
                }                
            }
            //countySel.onchange(); // reset in case page is reloaded
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

    <script>
        function changeInduk() {
            var induk = document.getElementById("induk").value
            console.log(induk)
            if (induk == "LOJI PENYEMBELIHAN AYAM" || induk == "LOJI PENYEMBELIHAN ITIK" || induk ==
                "LOJI PEMPROSESAN PRODUK" || induk == "LADANG MyGap" || induk == "LADANG MyOrganic" ) {
                document.getElementById("tag1").style.display = "none";
                document.getElementById("tag2").style.display = "none";
            } else {
                document.getElementById("tag1").style.display = "block";
                document.getElementById("tag2").style.display = "block";
            }
        }
    </script>
@endsection
