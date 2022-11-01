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
                    @role('pentadbir')
                        Pendaftaran Premis
                    @endrole

                    @role('pengurus-rumah-sembelih')
                        Maklumat Premis
                    @endrole
                </h1>
            </div>



            <div class="card">

                <div class="card-header bg-info text-white">
                    <b class="text-center">
                        @role('pentadbir')
                            Pendaftaran Premis
                        @endrole
                        @role('pengurus-rumah-sembelih')
                            Maklumat Premis
                        @endrole
                    </b>
                </div>

                @role('pentadbir')
                    <form action="/rumah/{{ $rumah->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">


                            <div class="mb-3 row">

                                <div class="col-xl-2 mb-3">

                                    <label class="col-form-label">Kategori Premis</label>
                                </div>

                                <div class="col-xl-10">
                                    <select class="form-select" name="induk" id="induk" onchange="changeInduk()">
                                        <option value="{{ $rumah->induk }}" selected disabled>{{ $rumah->induk }}</option>
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

                                <div class="col-xl-2">
                                    <label class="form-label">Nama Premis</label>
                                </div>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="nama_rumah"
                                        value="{{ $rumah->nama_rumah }}" style="width: 100%"
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



                                <div class="col-2 text-end" id="tag1">
                                    <label class="form-label">Kategori Tag</label>
                                </div>
                                <div class="col-4" id="tag2">
                                    <select class="form-select" aria-label="Default select example" name="kategori"
                                        id="s1">
                                        <option value="{{ $rumah->kategori }}" selected disabled>{{ $rumah->kategori }}</option>
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
                                    <textarea class="form-control" name="alamat" cols="93" rows="5"
                                        onkeyup="this.value = this.value.toUpperCase();">{{ $rumah->alamat }} </textarea>
                                </div>
                            </div>

                            {{-- Zon --}}

                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Zon</label>
                                <div class="col-xl-4">
                                    <select name="zon" id="countySel" size="1" class="form-select">
                                        <option value="{{ $rumah->zon }}" selected disabled>{{ $rumah->zon }}</option>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Negeri</label>
                                </div>
                                <div class="col-4">
                                    <select name="negeri" id="stateSel" size="1" class="form-select">
                                        <option value="{{ $rumah->negeri }}" selected disabled>{{ $rumah->negeri }}</option>
                                        <option>{{ $rumah->negeri }}</option>

                                    </select>
                                </div>

                                <div class="col-2 text-end">
                                    <label class="form-label">Daerah</label>
                                </div>
                                <div class="col-4">
                                    <select name="daerah" id="districtSel" size="1" class="form-select">
                                        <option value="{{ $rumah->daerah }}" selected disabled>{{ $rumah->daerah }}</option>
                                        <option>{{ $rumah->daerah }}</option>
                                    </select>
                                </div>

                            </div>

                            {{-- Nombor Telefon --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="no_tel" value="{{ $rumah->no_tel }}"
                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
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
                                    <input class="form-control" type="text" name="induk" value="{{ $rumah->induk }}"
                                        style="width: 100%" readonly>

                                </div>
                                <div class="col-xl-2">
                                    <label class="form-label">Nama Premis</label>
                                </div>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="nama_rumah"
                                        value="{{ $rumah->nama_rumah }}" readonly>
                                </div>

                            </div>
                            <!--Induk-->
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Kod Premis</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="kod" value="{{ $rumah->kod }}"
                                        readonly>
                                </div>
                                <div class="col-2 text-end">
                                    <label class="form-label">Kategori Tag</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="kategori"
                                        value="{{ $rumah->kategori }}" readonly>
                                </div>
                            </div>

                            {{-- Alamat --}}
                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Alamat</label>
                                <div class="col-xl-10">
                                    <textarea class="form-control" name="alamat" cols="93" rows="5" readonly>{{ $rumah->alamat }}</textarea>
                                </div>
                            </div>

                            {{-- Zon --}}

                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Zon</label>
                                <div class="col-xl-4">
                                    <input class="form-control" type="text" name="zon" value="{{ $rumah->zon }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label">Negeri</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="negeri" value="{{ $rumah->negeri }}"
                                        readonly>
                                </div>

                                <div class="col-2 text-end">
                                    <label class="form-label">Daerah</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="daerah" value="{{ $rumah->daerah }}"
                                        readonly>
                                </div>

                            </div>

                            {{-- Nombor Telefon --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="no_tel" value="{{ $rumah->no_tel }}"
                                        readonly />
                                </div>
                            </div>


                            <!--Akses Ternakan-->
                            <div class="mb-3 row">
                                <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                                <div class="col ">Ruminan Besar
                                    @if ($rumah->jenis1)
                                        <input class="form-label" type="checkbox" disabled name="jenis1"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis1"
                                            onclick="return false;" />
                                    @endif

                                </div>
                                <label class="col"></label>
                                <div class="col ">Ruminan Kecil
                                    @if ($rumah->jenis2)
                                        <input class="form-label" type="checkbox" disabled name="jenis2"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis2"
                                            onclick="return false;" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Ayam
                                    @if ($rumah->jenis3)
                                        <input class="form-label" type="checkbox" disabled name="jenis3"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis3"
                                            onclick="return false;" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Itik
                                    @if ($rumah->jenis4)
                                        <input class="form-label" type="checkbox" disabled name="jenis4"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis4"
                                            onclick="return false;" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Babi
                                    @if ($rumah->jenis5)
                                        <input class="form-label" type="checkbox" disabled name="jenis5"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis5"
                                            onclick="return false;" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Telur
                                    @if ($rumah->jenis6)
                                        <input class="form-label" type="checkbox" disabled name="jenis6"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis6"
                                            onclick="return false;" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Susu
                                    @if ($rumah->jenis7)
                                        <input class="form-label" type="checkbox" disabled name="jenis7"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis7"
                                            onclick="return false;" />
                                    @endif
                                </div>
                                <label class="col"></label>
                                <div class="col ">Tambah Nilai
                                    @if ($rumah->jenis8)
                                        <input class="form-label" type="checkbox" disabled name="jenis8"
                                            onclick="return false;" checked />
                                    @else
                                        <input class="form-label" type="checkbox" disabled name="jenis8"
                                            onclick="return false;" />
                                    @endif
                                </div>
                            </div>

                            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div> --}}


                        </div>
                    </form>
                @endrole

            </div>

            @role('pentadbir|pengurus-rumah-sembelih')
                <div class="row">
                    @role('pentadbir')
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header bg-info text-white">
                                    <b class="text-center">Tambah Pengguna</b>
                                </div>
                                <div class="card-body">

                                    <form action="/rumah/{{ $rumah->id }}/tambah" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">

                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <label class="form-label">Nama</label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select" name="user_id">
                                                        @foreach ($users as $user_)
                                                            <option value="{{ $user_->id }}">{{ $user_->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-success" type="submit">Tambah</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endrole
                    <div class="col-8">
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
                                        <th scope="col">Jawatan</th>
                                        @role('pentadbir')
                                            <th scope="col"></th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($rumah->users as $usera)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $usera->name }}</td>
                                            <td>{{ $usera->telefon }}</td>
                                            <td>{{ $usera->email }}</td>
                                            <td>{{ $usera->jawatan }}</td>
                                            @role('pentadbir')
                                                <td><a href="/rumah/{{ $rumah->id }}/gugur/{{ $usera->id }}">Gugur</a></td>
                                            @endrole
                                        </tr>
                                    @empty
                                        <tr>
                                            <th scope="row">-</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            @endrole







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


    <script>
        changeInduk();

        function changeInduk() {
            var induk = document.getElementById("induk").value
            console.log(induk)
            if (induk == "LOJI PENYEMBELIHAN AYAM" || induk == "LOJI PENYEMBELIHAN ITIK" || induk ==
                "LOJI PEMPROSESAN PRODUK" || induk == "LADANG MyGap" || induk == "LADANG MyOrganic") {
                document.getElementById("tag1").style.display = "none";
                document.getElementById("tag2").style.display = "none";
            } else {
                document.getElementById("tag1").style.display = "block";
                document.getElementById("tag2").style.display = "block";
            }
        }
    </script>
@endsection
