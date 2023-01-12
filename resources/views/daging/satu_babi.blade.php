@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Daging Ternakan Babi
            </h1>
        </div>
           {{-- align button tambah --}}
        <div class="card" style="width: fit-content">

        </div>

        <div class="card">
            <div class="tab mt-1">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" style="background-color: aquamarine"><a class="nav-link active" href="#tab-1"
                            data-bs-toggle="tab" role="tab">Pengenalan Ternakan</a></li>
                    <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-2"
                            data-bs-toggle="tab" role="tab">Pemeriksaan Ternakan</a></li>
                    <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-3"
                            data-bs-toggle="tab" role="tab">Penemuan Ante Mortem</a></li>
                    <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-4"
                            data-bs-toggle="tab" role="tab">Penemuan Post Mortem</a></li>
                    <li class="nav-item" style="background-color: aquamarine;width: 20%"><a class="nav-link " href="#tab-5"
                        data-bs-toggle="tab" role="tab">Tag Karkas</a></li>
                </ul>
        
                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1" role="tabpanel">
        
                        <form action="/pemeriksaan-babi/{{$pemeriksaan_babi->id}}" method="POST">
                            @method('PUT')
                            @csrf
                
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Pemilik</label>
                                    <input class="form-control" type="text" name="nama_pemilik"
                                    onkeyup="this.value = this.value.toUpperCase();" value="{{$pemeriksaan_babi->nama_pemilik}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">No Kenderaan</label>
                                    <input class="form-control" type="text" name="kenderaan"
                                    onkeyup="this.value = this.value.toUpperCase();" value="{{$pemeriksaan_babi->kenderaan}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Tiba Dipremis</label>
                                    <div class="input-group date" id="datetimepicker-minimum" data-target-input="nearest">
                                        <input type="text" name="masa_tiba" class="form-control datetimepicker-input" data-target="#datetimepicker-minimum" value="{{$pemeriksaan_babi->masa_tiba}}" readonly>
                                        {{-- <div class="input-group-text" data-target="#datetimepicker-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div> --}}
                                    </div>                            
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Disembelih</label>
                                    <div class="input-group date" id="datetimepicker-sembelih" data-target-input="nearest">
                                        <input type="text" name="masa_disembelih" class="form-control datetimepicker-input" data-target="#datetimepicker-sembelih" value="{{$pemeriksaan_babi->masa_disembelih}}" readonly>
                                        {{-- <div class="input-group-text" data-target="#datetimepicker-sembelih" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div> --}}
                                    </div>                           
                                </div>
        
                            </div>
        
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Permit</label>
                                    <input class="form-control" type="number" name="permit" value="{{$pemeriksaan_babi->permit}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Spesis Ternakan</label>
                                    <input class="form-control" type="text"  name="spesis"
                                    onkeyup="this.value = this.value.toUpperCase();" value="{{$pemeriksaan_babi->spesis}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan (Mengikut SKV)</label>
                                    <input class="form-control" type="number" min="0" name="bil_ternakan_skv" value="{{$pemeriksaan_babi->bil_ternakan_skv}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">ID Premis</label>
                                    <input class="form-control" type="number" name="id_permis" value="{{$pemeriksaan_babi->id_permis}}" readonly>
                                </div>
        
                            </div>
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Premis</label>
                                    <input class="form-control" type="text" name="nama_premis"
                                     value="{{$pemeriksaan_babi->nama_premis}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat Premis</label>
                                    <textarea class="form-control" name="alamat_premis" id="" cols="20" rows="3" 
                                    onkeyup="this.value = this.value.toUpperCase();" readonly>{{$pemeriksaan_babi->alamat_premis}}</textarea>
                                </div>
        
                            </div>
           
                            <!--Button-->
                            <div class="mb-3">
                                {{-- <button class="btn btn-primary" type="submit" style="float: right">Simpan</button> --}}
                            </div>
        
                        </form>
        
                    </div>
                  
                  
        
                    <div class="tab-pane" id="tab-2" role="tabpanel">
                        @role('pengurus-rumah-sembelih')
                        <form action="/periksa-babi" method="POST">
                            @csrf
                            <div class="card">
                                {{-- <div class="card-header">
                                    <b>Pemeriksaan Ternakan > Maklumat Haiwan Ternakan</b>
                                </div> --}}
        
                                <div class="card-body">

                                    <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                                    <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan_babi->id}}">
        
                                    <div class="row">

                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Ternakan Yang Diterima</label>
                                            <input class="form-control" type="number" min="0" name="bil_ternakan_diterima" value="{{$pemeriksaan_babi->bil_ternakan_diterima}}" readonly>
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Ternakan Mati Semasa Tiba</label>
                                            <input class="form-control" type="number" min="0" name="ternakan_mati_semasa_tiba" value="{{$pemeriksaan_babi->ternakan_mati_semasa_tiba}}" readonly>
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="">Jumlah Ternakan Diperiksa</label><br>
                                            <input class="form-control" type="number" min="0" name="jumlah_ternakan_diperiksa" value="{{$pemeriksaan_babi->jumlah_ternakan_diperiksa}}" readonly>
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="">Jumlah Binatang Disembelih</label>
                                            <input class="form-control" type="number" min="0" name="jumlah_binatang_layak_disembelih" value="{{$pemeriksaan_babi->jumlah_binatang_layak_disembelih}}" readonly>
                                        </div>
        
                                    </div>
        
                                    <div class="row">

                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Diasingkan Untuk Pemeriksaan Rapi </label>
                                            <input class="form-control" type="number" min="0" name="bilangan_diasingkan_pemeriksaan_rapi"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <a href="/periksa-rapi-babi/{{$periksa_harian->id}}" style="color: red">*Sekiranya terdapat pemeriksaan rapi, sila lengkapkan borang ini.</a>

                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Jumlah Binatang Disembelih Sebab Kecemasan</label><br>
                                            <input class="form-control" type="number" min="0" name="jumlah_binatang_disembelih_kecemasan"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>

                                        <div class="mb-3 col-md-3"><br>
                                            <label for="">Jumlah Yang Disembelih </label>
                                            <input class="form-control" type="number" id="bil4" min="0" name="jumlah_disembelih" oninput="calc2();"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>

                                        <input class="form-control" type="hidden" id="bil3" min="0" name="jumlah_binatang_layak_disembelih" value="{{$pemeriksaan_babi->jumlah_binatang_layak_disembelih}}" oninput="calc2()" readonly>

        
                                        <div class="mb-3 col-md-3"><br>
                                            <label for="">Baki Ternakan Belum Disembelih</label>
                                            <input class="form-control" type="number" id="diff2" min="0" name="baki_ternakan_belum_disembelih"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                    </div>
        
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="">Catatan</label>
                                            <textarea class="form-control" name="catatan"cols="200" rows="5" 
                                            onkeyup="this.value = this.value.toUpperCase();"></textarea>

                                        </div>
        
                                    </div>
        
                                </div>
        
                                <!--Button-->
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                                </div>
        
                            </div>
                        </form>
                        @endrole           
                        @include('daging.harian_babi_table')
        
                    </div>
        
                    <div class="tab-pane" id="tab-3" role="tabpanel">
        
                        @role('pengurus-rumah-sembelih')
                        <form action="/ante-mortem-babi" method="POST">
                        @csrf
        
                            <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                            <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan_babi->id}}">
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Penemuan Ante Mortem</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected disabled>Pilih Penemuan Ante Mortem </option>
                                        <option value="Abnormal">Abnormal CNS signs</option>
                                        <option value="Anaemia">Anaemia</option>
                                        <option value="Comatose">Comatose</option>
                                        <option value="Dead Before Slaughter">Dead Before Slaughter</option>
                                        <option value="Diarrhea">Diarrhea</option>
                                        <option value="Dull & depressed">Dull & depressed</option>
                                        <option value="Emaciation(body score)">Emaciation(body score)</option>
                                        <option value="Heat stress">Heat stress</option>
                                        <option value="Jaundice on mucosal">Jaundice on mucosal</option>
                                        <option value="Lameness/Fracture">Lameness/Fracture</option>
                                        <option value="Localized abscess">Localized abscess</option>
                                        <option value="Oedema">Oedema</option>
                                        <option value="Poor body condition">Poor body condition</option>
                                        <option value="Post vaccination/treatment">Post vaccination/treatment(injection site)</option>
                                        <option value="Runt">Runt(stunted growths)</option>
                                        <option value="Skin lesions">Skin lesions</option>
                                        <option value="Wounds">Wounds</option>
                                        <option value="Others">Others(perlu sertakan gambar penemuan)</option>
                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-2">
                                    <label for="">Bilangan Kes</label>
                                    <input class="form-control" type="number" min="0" name="kes"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Tag</label>
                                    <input class="form-control" type="text" min="0" name="nombor_tag"
                                    onkeyup="this.value = this.value.toUpperCase();">
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea class="form-control" name="catatan_ante_mortem" cols="30" rows="5" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    {{-- <button class="fas fa-upload" style="float: right"></button> --}}
                                </div>
        
                                <hr>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah binatang yang dikondem pada pemeriksaan ante
                                        mortem</label>
                                    <input class="form-control" type="number" min="0" name="jumlah_dikondem"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
                            </div>
        
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                            </div>
        
                        </form>
                        @endrole
        
                        @include('daging.ante_mortem_table')
        
                    </div>
        
        
                    <div class="tab-pane" id="tab-4" role="tabpanel">
                        
                        @role('pengurus-rumah-sembelih')
                        <form action="/post-mortem-babi" method="POST">
                        @csrf
        
                            <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                            <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan_babi->id}}">
        
                            <div class="row">

                                {{-- Message --}}
                                @if (session()->has('message'))
                                <div class="alert alert-danger alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="far fa-fw fa-bell"></i>
                                    </div>
                                    <div class="alert-message">
                                        <strong>{{session('message')}}</strong>
                                    </div>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori_post_mortem" id="countySel">
                                        <option selected >Pilih Kategori</option>
                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Bahagian</label>
                                    <select class="form-select" aria-label="Default select example" name="bahagian" id="stateSel">
                                        <option selected>Pilih Bahagian</option>
                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Sebab Musnah</label>
                                    <select class="form-select" aria-label="Default select example" name="musnah" id="districtSel">
                                        <option selected>Pilih Sebab Musnah</option>      
                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input class="form-control" type="number" min="0" name="kes_post_mortem"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Tag</label>
                                    <input class="form-control" type="text" min="0" name="nombor_tag_post"
                                    onkeyup="this.value = this.value.toUpperCase();">
                                    {{-- <select class="form-select" aria-label="Default select example" name="nombor_tag_post">
                                        <option selected>XXXX</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select> --}}
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Keputusan</label>
                                    <select class="form-select" aria-label="Default select example" name="keputusan">
                                        <option selected>Pilih Keputusan</option>
                                        <option value="Kondem Keseluruhan">Kondem Keseluruhan</option>
                                        <option value="Kondem Sebahagian">Kondem Sebahagian</option>
                                    </select>
                                </div>
            
                            </div>
        
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                            </div>
                        </form>
                        @endrole
                        
                        <br><br>
                        @include('daging.post_mortem_babi_table')
        
                    </div>
        
                    <div class="tab-pane" id="tab-5" role="tabpanel">
        
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Catatan Penggunaan Tag Karkas</b>
                                        </div>
        
                                        <div class="card-body">
        
                                            <div class="row d-flex justify-content-center">
                                                <table class="table table-bordered">
                                                    <thead class="text-black ">
                                                        <tr>
                                                            <th>Bil.</th>
                                                            <th scope="col">No. Tag</th>
                                                            <th scope="col">Jantina</th>
                                                            <th scope="col">Baka</th>
                                                            <th scope="col">Tarikh Disembelih</th>
                                                            <th scope="col">Penggunaan Tag Karkas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
        
                                                        @foreach($catatans as $catatan)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$catatan->tag}}</td>
                                                            <td>{{$catatan->jantina}}</td>
                                                            <td>{{$catatan->baka}}</td>
                                                            <td>{{$catatan->tarikh}}</td>
                                                            <td></td>
                                    
                                                        </tr>
                                                        @endforeach
                            
        
        
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
                                        <!--Button-->
                                        {{-- <div class="mb-3">
                                            <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                                        </div> --}}
        
                                    </div>
                                </form>

                            </div>
        
                        </div>
        
                    </div>
                    
                    <div class="text-center">
                        <a href="/pemeriksaan-babi" class="btn btn-warning" >Kembali</a>
                    </div>
        
        
                </div>

               
            </div>
        </div>

    </div>
</main>

 
@endsection

@section('script')

<script>console.log('otak dia')</script>
<script>
    $('#datepicker').datepicker({
    uiLibrary: 'bootstrap5'
    });
</script>

<script>
    function calc() {
  var bil1 = document.getElementById("bil1").value;
  var bil1 = parseInt(bil1, 10);
  var bil2 = document.getElementById("bil2").value;
  var bil2 = parseInt(bil2, 10);
  var diff = bil1 - bil2;
  document.getElementById("diff").value = diff;
    }
</script>

<script>
    function calc2() {
  var bil3 = document.getElementById("bil3").value;
  var bil3 = parseInt(bil3, 10);
  var bil4 = document.getElementById("bil4").value;
  var bil4 = parseInt(bil4, 10);
  var diff2 = bil3 - bil4;
  document.getElementById("diff2").value = diff2;
    }
</script>

<script>
    var stateObject = {
        "Karkass(Carcass)": {
            "Generalized": ["Abnormal odours", "Abscess", "Bruising", "Cysts", "Discolored carcass(e.g. PSE,DFD)", "Emaciated carcass",
                "Generalized congestion", "Generalized lymph node enlargement", "Hemorrhages", "Jaundice", "Pigmentation", "Polyarthritis",
                "Serous athropy of fat", "Skin lessions", "Others(e.g. physical contamination due to negligence,hairy carcass,machine damage)",
            ],
            "Head": ["Lumps", "Lymph node enlargement", "Swelling",
            ],
            "Tongue": ["Abscess", "Cysts", "Discoloration", "Loss of texture", "Nodules", "Ulceration", "Vesicle lesions",
                "Wounds",
            ],
            "Thoracic Cavity": ["Abscess(Cysts)", "Adhesions", "Blood splashing", "Bruising","Cysts", "Fracture(rib,cage,spinal)", "Hemorrhages",
            "Hydrothorax", "Nodules(abnormal growth)", "Pleurisy","Tumors","Wounds","Others"
            ],
            "Abdominal Cavity": ["Abscess(Cysts)", "Adhesions", "Blood splashing","Cysts", "Fracture(rib,cage,spinal)", "Hemorrhages",
            "Hernia", "Nodules(abnormal growth)", "Peritonitis","Wounds","Others"
            ],
            "Pelvic Cavity": ["Abscess", "Adhesions","Cysts", "Fracture(rib,cage,spinal)", "Hemorrhages",
            "Nodules(abnormal growth)","Wounds(e.g. tail sore","Others"
            ],
        },
        "Esofagus(Esophagus)": {
            "Esofagus(Esophagus)": ["Abscess", "Blood splashing", "Nodules(abnormal growth)", "Parasites(e.g. Trichinella Spiralis)", "Others"
            ],
            
        },
        "Jantung(Heart)": {
            "Jantung(Heart)": ["Abscess", "Congestion", "Endocarditis", "Hemorrhages", "Hydropericardium",
            "Hypertrophy myocardium", "Infarction/necrosis", "Parasitic cysts","Pericarditis","Others"
            ],
        },
        "Peparu(Lungs) & Trachea(Trakea)": {
            "Peparu(Lungs) & Trachea(Trakea)": ["Abscess", "Atelactasis", "Blood splashing", "Congestion", "Discoloration",
            "Emphysema", "Infarction/necrosis","Nodules(abnormal growth)", "Parasites(e.g. Lungworms)","Pleurisy","Pneumonia",
            "Pulmonary edema", "Others"
            ],
        },
        "Hati(Liver)": {
            "Hati(Liver)": ["Abscess", "Adhesions", "Cirrhosis", "Congestion", "Cysts","Discoloration",
            "Fatty liver", "Hepatitis","Hepatomegaly", "Infarction/necrosis","Jaundice","Lymph node enlarged/congested",
            "Milkspots","Nodules(abnormal growth)","Parasites(e.g. Taenia solium)","Telangiectasis", "Others"
            ],
        },
        "Buah Pinggang(Kidney)": {
            "Buah Pinggang(Kidney)": ["Abscess", "Congestion", "Cysts","Discoloration", "Hemorrhages", "Hydronephrosis",
           "Infarction/necrosis", "Nephritis","Nephromegaly","Nodules(abnormal growth)","Parasites(e.g. Kidney worms)","Others"
            ],
        },
        "Limpa(Spleen)": {
            "Limpa(Spleen)": ["Abscess","Adhesions", "Congestion","Discoloration","Haematoma", "Hemorrhages",
           "Infarction/necrosis","Nodules(abnormal growth)","Splenomegaly","Others"
            ],
        },
        "Perut,usus kecil,Usus Besar(Guts-stomach,Small & Large intestines": {
            "Perut,usus kecil,Usus Besar(Guts-stomach,Small & Large intestines": ["Abscess","Adhesions","Button ulceration","Congestion","Cysts","Discoloration","Enteritis", "Gastroenteritis",
            "Hemorrhages","Jaundice","Lymph node enlarged/congested","Nodules(abnormal growth)","Oedema","Parasites(e.g. Taenia solium)",
            "Peritonitis","Pimply guts","Traumatic wounds","Others"
            ],
        },
        "Sistem Pembiakan Betina": {
            "Sistem Pembiakan Betina": ["Abscess", "Congestion", "Cysts","Foetus", "Metritis", "Mummified Foetus",
            "Nodules(abnormal growth)","Pyometra","Others"
            ],
        },
        "Udder": {
            "Udder": ["Abscess", "Mastitis", "Wounds","Others"
            ],
        },
        "Sistem Pembiakan Jantan": {
            "Sistem Pembiakan Jantan": ["Abscess", "Congestion", "Cysts","Nodules", "Orchitis", "Testicular enlargement",
            "Wounds","Others"
            ],
        },
    }
    window.onload = function() {
        var countySel = document.getElementById("countySel"),
            stateSel = document.getElementById("stateSel"),
            districtSel = document.getElementById("districtSel");
        for (var kategori_post_mortem in stateObject) {
            countySel.options[countySel.options.length] = new Option(kategori_post_mortem, kategori_post_mortem);
        }
        countySel.onchange = function() {
            stateSel.length = 1; // remove all options bar first
            districtSel.length = 1; // remove all options bar first
            if (this.selectedIndex < 1) return; // done 
            for (var bahagian in stateObject[this.value]) {
                stateSel.options[stateSel.options.length] = new Option(bahagian, bahagian);
            }
        }
        countySel.onchange(); // reset in case page is reloaded
        stateSel.onchange = function() {
            districtSel.length = 1; // remove all options bar first
            if (this.selectedIndex < 1) return; // done 
            var musnah = stateObject[countySel.value][this.value];
            for (var i = 0; i < musnah.length; i++) {
                districtSel.options[districtSel.options.length] = new Option(musnah[i], musnah[i]);
            }
        }

        var kPM = document.getElementById("kPM"),
                  bH = document.getElementById("bH"),
                  sM = document.getElementById("sM");
              for (var kategori_post_mortem in stateObject) {
                  kPM.options[kPM.options.length] = new Option(kategori_post_mortem, kategori_post_mortem);
              }
              kPM.onchange = function() {
                  bH.length = 1; // remove all options bar first
                  sM.length = 1; // remove all options bar first
                  if (this.selectedIndex < 1) return; // done 
                  for (var bahagian in stateObject[this.value]) {
                      bH.options[bH.options.length] = new Option(bahagian, bahagian);
                  }
              }
              kPM.onchange(); // reset in case page is reloaded
              bH.onchange = function() {
                  sM.length = 1; // remove all options bar first
                  if (this.selectedIndex < 1) return; // done 
                  var musnah = stateObject[kPM.value][this.value];
                  for (var i = 0; i < musnah.length; i++) {
                      sM.options[sM.options.length] = new Option(musnah[i], musnah[i]);
                  }
              }
    }
</script>

@endsection
