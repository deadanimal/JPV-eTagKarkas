@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Borang Permohonan Pemeriksaan Susu Tepung Untuk Makanan Haiwan</h5>
                            </div>

                            <div class="card-body">
                                <form action="/susu" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="mb-3">
            
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nama Premis</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                            <div class="col-2">
                                                <label class="form-label">Wakil Premis</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="wakil" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Nombor Telefon</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="telefon" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Emel</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="email" name="emel" required onkeyup="this.value = this.value.toUpperCase();"
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label class="form-label">Faks</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="faks" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Website</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="web" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                        </div>

                                       
                    
                                        
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <div class="col-10">
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>
                                        </div>
            
                                    </div>
            
                                   
                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Zon</label>
                                        </div>
                                        <div class="col-4">
                                            <select name="zon" id="countySel" size="1" class="form-select"
                                            aria-label="Default select example" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                            <option selected disabled value="">Pilih Zon</option>
        
                                        </select>
                                        </div>

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
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
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

                                        <div class="col-2">
                                            <label class="form-label">Poskod</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="number" name="poskod" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Kaedah Audit</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="kaedah" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Kaedah Audit</option>
                                                <option value="Kaedah 1">Kaedah 1</option>
                                                <option value="Kaedah 2">Kaedah 2</option>
                                                <option value="Kaedah 3">Kaedah 3</option>
                                               
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Klasifikasi Premis</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="text" name="klasifikasi" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Nombor VHM</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="number" name="vhm" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Jenis produk Untuk Dieksport</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="text" name="jenis_produk" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>

                                    <br>

                                    <h6>Maklumat Pembeli</h6>

                                    <div class="col-2">
                                        <label class="form-label">Kuantiti</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control" type="number" name="kuantiti" required placeholder="KG"
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" min="0"
                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" name="pembeli" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-10">
                                            <textarea class="form-control" rows=5 name="alamat_pembeli" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea>
                                        </div>
                                    </div>

                                    <br><br>

                                 
            
                            
            
                                    <!-- Button trigger modal -->
            
                                    <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                        <a href="/susu-tepung" class="btn btn-primary">Kembali</a>
                                        <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                            Hantar
                                        </button>
                                    </div>
  
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Adakah anda ingin menghantar permohonan pemeriksaan baharu?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button class="btn btn-success text-center" type="submit" style="float: right">Hantar</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    {{-- <button class="btn btn-success text-center" type="submit" style="float: right">Daftar</button> --}}
            
                                </form>
                            </div>
   
                        </div>
                    </div>

                </div>
            </div>
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


@endsection