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
        
                            {{-- <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan Yang Diterima</label>
                                    <input class="form-control" type="number" min="0" name="bil_ternakan_diterima" value="{{$pemeriksaan->bil_ternakan_diterima}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Ternakan Yang Mati Semasa Tiba</label>
                                    <input class="form-control" type="number" min="0" name="ternakan_mati_semasa_tiba" value="{{$pemeriksaan->ternakan_mati_semasa_tiba}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Yang Diperiksa</label>
                                    <input class="form-control" type="number" min="0" name="jumlah_ternakan_diperiksa" value="{{$pemeriksaan->jumlah_ternakan_diperiksa}}" readonly>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Binatang Layak Disembelih</label>
                                    <input class="form-control" type="number" min="0" name="jumlah_binatang_layak_disembelih" value="{{$pemeriksaan->jumlah_binatang_layak_disembelih}}" readonly>
                                </div>
        
                            </div> --}}
        
        
        
                            <!--Button-->
                            <div class="mb-3">
                                {{-- <button class="btn btn-primary" type="submit" style="float: right">Simpan</button> --}}
                            </div>
        
                        </form>
        
                    </div>
                  
                  
        
                    <div class="tab-pane" id="tab-2" role="tabpanel">
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

                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Ternakan Yang Diterima</label>
                                            <input class="form-control" type="number" id="bil1" min="0" name="ternakan_diterima_babi" oninput="calc();"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Ternakan Mati Semasa Tiba</label>
                                            <input class="form-control" type="number" id="bil2" min="0" name="ternakan_mati_tiba_babi" oninput="calc();"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="">Jumlah Ternakan Diperiksa</label><br>
                                            <input class="form-control" type="number" id="diff" min="0" name="jumlah_diperiksa_babi"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                    </div>
        
                                    <div class="row">

                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Diasingkan Untuk Pemeriksaan Rapi </label>
                                            <input class="form-control" type="number" min="0" name="pemeriksaan_rapi_babi"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                            <a href="/periksa-rapi/{{$periksa_harian->id}}" style="color: red">*Sekiranya terdapat pemeriksaan rapi, sila lengkapkan borang ini.</a>

                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Jumlah Binatang Disembelih Kerana Kecemasan</label>
                                            <input class="form-control" type="number" min="0" name="jumlah_disembelih_kecemasan_babi"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                    </div>
        
                       
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Jumlah Binatang Yang Dikondem</label>
                                            <input class="form-control" type="number" id="bil3" min="0" name="jumlah_dikondem_babi" oninput="calc2();"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Jumlah Yang Disembelih </label><br>
                                            <input class="form-control" type="number" id="bil4" min="0" name="jumlah_sembelih_babi" oninput="calc2();"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Baki Ternakan Belum Disembelih</label>
                                            <input class="form-control" type="number" id="diff2" min="0" name="baki_belum_babi"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                    </div>
        
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="">Catatan</label>
                                            <textarea class="form-control" name="catatan_pemeriksaan_babi"cols="200" rows="5" 
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

                        @include('daging.harian_table')
        
                    </div>
        
                    <div class="tab-pane" id="tab-3" role="tabpanel">
        
                        @role('pengurus-rumah-sembelih')
                        <form action="/ante-mortem" method="POST">
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
                        <form action="/post-mortem" method="POST">
                        @csrf
        
                            <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                            <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan_babi->id}}">
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori_post_mortem">
                                        <option selected disabled>Pilih Kategori</option>
                                        <option value="1">Karkass(Carcass)</option>
                                        <option value="2">Esofagus(Esophagus)</option>
                                        <option value="3">Jantung(Heart)</option>
                                        <option value="4">Peparu(Lungs) & Trachea(Trakea)</option>
                                        <option value="5">Hati(Liver)</option>
                                        <option value="6">Buah Pinggang(Kidney)</option>
                                        <option value="7">Limba(Spleen)</option>
                                        <option value="8">Perut,Usus Kecil,Usus Besar(Guts-Stomach,Small & Large Intestine)</option>
                                        <option value="9">Sistem Pembiakan Betina</option>
                                        <option value="10">Udder</option>
                                        <option value="11">Sistem Pembiakan Jantan</option>

                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Bahagian</label>
                                    <select class="form-select" aria-label="Default select example" name="bahagian">
                                        <option selected disabled>Pilih Bahagian</option>
                                        <option value="Generalized">Generalized</option>
                                        <option value="Head">Head</option>
                                        <option value="Tongue">Tongue</option>
                                        <option value="Thoracic Cavity">Thoracic Cavity</option>
                                        <option value="Abdominal cavity">Abdominal cavity</option>
                                        <option value="Pelvic cavity">Pelvic cavity</option>
                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Sebab Musnah</label>
                                    <select class="form-select" aria-label="Default select example" name="musnah">
                                        <option selected>Pilih Sebab Musnah</option>
                                        <option value="Cysts">Cysts</option>
                                        <option value="Hernia">Hernia</option>
                                        <option value="Tumor">Tumor</option>
                                    </select>
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input class="form-control" type="number" min="0" name="kes_post_mortem"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
            
                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Tag</label>
                                    <input class="form-control" type="text" min="0" name="nombor_tag"
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
        
                        @include('daging.post_mortem_table')
        
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
        
                                                        <tr>
        
                                                            <td>1</td>
                                                            <td>XXXX</td>
                                                            <td>Betina</td>
                                                            <td>XXXX</td>
                                                            <td>20/7/2022</td>
                                                            <td>
                                                                <select class="form-select" aria-label="Default select example"
                                                                    name="catatan_penggunaan">
                                                                    <option selected>Sila Pilih</option>
                                                                    <option value="1">R3-180722-0035</option>
                                                                    <option value="2">R3-180722-0035</option>
                                                                    <option value="3">R3-180722-0035</option>
                                                                </select>
                                                            </td>
        
                                                        </tr>
        
                                                        <tr>
        
                                                            <td>2</td>
                                                            <td>XXXX</td>
                                                            <td>Jantan</td>
                                                            <td>XXXX</td>
                                                            <td>20/7/2022</td>
                                                            <td>
                                                                <select class="form-select" aria-label="Default select example"
                                                                    name="catatan_penggunaan">
                                                                    <option selected>Sila Pilih</option>
                                                                    <option value="1">R3-180722-0035</option>
                                                                    <option value="2">R3-180722-0035</option>
                                                                    <option value="3">R3-180722-0035</option>
                                                                </select>
                                                            </td>
        
                                                        </tr>
        
        
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
                                        <!--Button-->
                                        <div class="mb-3">
                                            <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                                        </div>
        
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

@endsection
