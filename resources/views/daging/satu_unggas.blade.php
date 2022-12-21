@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Daging Ternakan Unggas
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
                    {{-- <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-5"
                            data-bs-toggle="tab" role="tab">Jana Laporan</a></li> --}}
                </ul>
        
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="tab-1" role="tabpanel">
        
                        <form action="">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <b>Pengenalan Ternakan > Daftar Baharu Unggas</b>
                                </div> --}}
        
                                <div class="card-body">
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Nama Ladang</label>
                                            <input class="form-control" type="text" name="nama_pemilik"
                                            onkeyup="this.value = this.value.toUpperCase();" value="{{$pemeriksaan_unggas->nama_ladang}}" readonly>
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Nombor Kenderaan</label><br>
                                            <input class="form-control" type="text" name="nombor_kenderaan" value="{{$pemeriksaan_unggas->nombor_kenderaan}}" readonly >
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">ID Ladang</label><br>
                                            <input type="number" class="form-control" name="id_ladang" value="{{$pemeriksaan_unggas->id_ladang}}" readonly>
                                        </div>
        
                                    </div>
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-6">
                                            <label for="">Alamat Ladang</label>
                                            <textarea class="form-control" name="alamat_ladang" id="alamat_ladang" cols="60" rows="5" readonly>{{$pemeriksaan_unggas->alamat_ladang}}</textarea>
                                        </div>
        
                                        <div class="mb-3 col-md-6">
                                            <label for="">Tarikh Terima Ternakan </label>
                                            <div class="input-group date" id="datetimepicker-minimum" data-target-input="nearest">
                                                <input type="text" name="tarikh_terima" class="form-control datetimepicker-input" data-target="#datetimepicker-minimum" readonly value="{{$pemeriksaan_unggas->tarikh_terima}}">
                                            </div>                                         
                                        </div>
        
                                    </div>
        
                                </div>
        
                                <!--Button-->
                                <div class="mb-3">
                                    {{-- <button class="btn btn-primary" type="submit”">Kemaskini</button> --}}
                                    {{-- <button class="btn btn-primary" type="submit" style="float: right">Simpan</button> --}}
                                </div>
        
                            </div>
                        </form>
                    </div>
        
                    <div class="tab-pane" id="tab-2" role="tabpanel">
                        @role('pengurus-rumah-sembelih')
                        <form action="/periksa-unggas" method="POST">
                            @csrf

                            <div class="card">
                                {{-- <div class="card-header">
                                    <b>Pemeriksaan Ternakan > Maklumat Unggas</b>
                                </div> --}}

                            <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                            <input type="hidden" name="unggas_id" value="{{$pemeriksaan_unggas->id}}">
        
                                <div class="card-body">
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Ternakan Yang Diterima</label>
                                            <input class="form-control" type="number" min="0" name="bilangan_ternakan"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Yang Mati Semasa Tiba(DOA)</label>
                                            <input class="form-control" type="number" min="0" name="bilangan_mati"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Ternakan Mati Sebelum Sembelih(DBS)</label>
                                            <input class="form-control" type="number" min="0" name="jumlah_mati_dbs"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                    </div>
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Runt(AM + PM)</label>
                                            <input class="form-control" type="number" min="0" name="runt"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Salah Sembelih </label>
                                            <input class="form-control" type="number" min="0" name="salah_sembelih"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
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

                        @include('daging.unggas_table')
        
                    </div>
        
                    <div class="tab-pane" id="tab-3" role="tabpanel">
                        @role('pengurus-rumah-sembelih')
                        <form action="/ante-mortem-unggas" method="POST">
                            @csrf
                            <div class="card">
                                {{-- <div class="card-header">
                                    <b>Pemeriksaan Ternakan > Pemeriksaan Ante Mortem</b>
                                </div> --}}

                                <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                                <input type="hidden" name="unggas_id" value="{{$pemeriksaan_unggas->id}}">
        
                                <div class="card-body">
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">General Condition</label>
                                            <select class="form-select" aria-label="Default select example" name="general">
                                                <option selected disabled>Pilih General Condition</option>
                                                <option value="Bruised">Bruised</option>
                                                <option value="Cyanosis">Cyanosis</option>
                                                <option value="Depressed/Lethargy">Depressed/Lethargy</option>
                                                <option value="Dirty Ruffled/Poor defethering">Dirty Ruffled/Poor defethering</option>
                                                <option value="Distended abdomen">Distended abdomen</option>
                                                <option value="Emaciation">Emaciation</option>
                                                <option value="Fracture">Fracture</option>
                                                <option value="Herrmohage">Herrmohage</option>
                                                <option value="Oedema">Oedema</option>
                                                <option value="Pox lessions">Pox lessions</option>
                                                <option value="Red eye">Red eye</option>
                                                <option value="Runt">Runt</option>
                                                <option value="Wounds">Wounds</option>

                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label><br>
                                            <input type="number" min="0" class="form-control" name="bil_kes_general"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>        
                                        </div> --}}
        
                                        <hr class="text-primary mb-3">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Respiratory System</label>
                                            <select class="form-select" aria-label="Default select example" name="respiratory">
                                                <option selected disabled>Pilih Respiratory System</option>
                                                <option value="Discharge">Discharge (Eye,Nasal)</option>
                                                <option value="Respiratory distress">Respiratory distress(Gasping,sneezing,coughing,rales,wheezing)</option>
                                                <option value="Swollen">Swollen(Head,eye,face)</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number" class="form-control" name="bil_kes_respiratory" min="0"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button> 
                                        </div> --}}
        
                                        <hr class="text-primary mb-3">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">CNS Symptoms</label>
                                            <select class="form-select" aria-label="Default select example" name="cns">
                                                <option selected disabled>Pilih CNS Symptoms</option>
                                                <option value="Ataxia">Ataxia/Coordination</option>
                                                <option value="Drooping wings">Drooping wings</option>
                                                <option value="Lameness">Lameness</option>
                                                <option value="Opisthotonus">Opisthotonus</option>
                                                <option value="Paralysis">Paralysis</option>
                                                <option value="Staggering">Staggering</option>
                                                <option value="Torticolis">Torticolis</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number" class="form-control" name="bil_kes_cns" min="0"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                        </div> --}}
        
                                        <hr class="text-primary mb-3">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Gastrointestinal Tract Symptoms</label>
                                            <select class="form-select" aria-label="Default select example" name="gastro">
                                                <option selected disabled> Pilih Gastrointestinal Tract Symptoms</option>
                                                <option value="Bloody diarrhea">Bloody diarrhea</option>
                                                <option value="Diarrhea">Diarrhea</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number" class="form-control" name="bil_kes_gastro" min="0"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
        
                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                        </div> --}}
        
                                        <hr class="text-primary mb-3">
        
        
                                        <!--Button-->
                                        <div class="mb-3">
                                            {{-- <button class="btn btn-primary" type="submit" >Kemaskini</button> --}}
                                            <button class="btn btn-primary" type="submit" style="float: right" >Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endrole

                        @include('daging.am-unggas_table')


                    </div>
        
                    <div class="tab-pane" id="tab-4" role="tabpanel">
                        @role('pengurus-rumah-sembelih')
                        <form action="/post-mortem-unggas" method="POST">
                            @csrf
                            <div class="card">
                                {{-- <div class="card-header">
                                    <b>Pemeriksaan Daging > Pemeriksaan Post Mortem</b>
                                </div> --}}

                                <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                                <input type="hidden" name="unggas_id" value="{{$pemeriksaan_unggas->id}}">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bukan Lesi Semasa Post Mortem</label>
                                            <select class="form-select" aria-label="Default select example" name="bukan_lesi">
                                                <option selected disabled> Pilih Bukan Lesi Semasa Post Mortem</option>
                                                <option value="Cadaver">Cadaver(Termasuk Red Bird)</option>
                                                <option value="Inadequate bleeding">Inadequate bleeding</option>
                                                <option value="Inadequate bleeding">Inadequate bleeding</option>
                                                <option value="Over scalded">Over scalded</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number" min="0" class="form-control" name="bil_bukan_lesi"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">                                            
                                        </div>

                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>        
                                        </div> --}}

                                        <hr class="text-primary mb-3">

                                        <div class="mb-3 col-md-4">
                                            <label for="">Lesi Semasa Post Mortem</label>
                                            <select class="form-select" aria-label="Default select example" name="lesi_semasa_carcass">
                                                <option selected disabled>Pilih CARCASS</option>
                                                <option value="Abscess">Abscess</option>
                                                <option value="Bruised">Bruised</option>
                                                <option value="Congestion">Congestion</option>
                                                <option value="Emaciation">Emaciation</option>
                                                <option value="Fracture">Fracture</option>
                                                <option value="Hemorrhage">Hemorrhage</option>
                                                <option value="Nodules">Nodules</option>
                                                <option value="Oedema">Oedema</option>
                                                <option value="Runt">Runt</option>
                                                <option value="Skin lessions">Skin lessions(scab,dermatitis)</option>
                                            </select>

                                            <label for=""></label>

                                            <select class="form-select" aria-label="Default select example" name="lesi_semasa_viscera">
                                                <option selected disabled>Pilih VISCERA</option>
                                                <option value="Abcess">Abcess</option>
                                                <option value="Air Sacculitis">Air Sacculitis</option>
                                                <option value="Ascites">Ascites</option>
                                                <option value="Congestion">Congestion</option>
                                                <option value="Fatty Liver">Fatty liver</option>
                                                <option value="Hemorrhage">Hemorrhage</option>
                                                <option value="Hepatomegaly">Hepatomegaly</option>
                                                <option value="Nodules">Nodules</option>
                                                <option value="Oedema">Oedema</option>
                                                <option value="Perihepatitis & Pericardiatis">Perihepatitis & Pericardiatis</option>
                                                <option value="Peritonitis">Peritonitis </option>
                                                <option value="Splenomegaly">Splenomegaly </option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number" min="0" class="form-control" name="bil_lesi_semasa"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>

                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                        </div> --}}

                                        <hr class="text-primary mb-3">

                                        <div class="mb-3 col-md-4">
                                            <label for="">Gastrointestinal Tract Symptoms</label>
                                            <select class="form-select" aria-label="Default select example" name="gastro_pm">
                                                <option selected disabled> Pilih Gastrointestinal Tract Symptoms</option>
                                                <option value="Bloody diarrhea">Bloody diarrhea</option>
                                                <option value="Diarrhea">Diarrhea</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number" min="0" class="form-control" name="bil_gastro_pm"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">                                        </div>
                                        {{-- <div class="mb-3 col-md-4">
                                            <label for=""></label><br>
                                            <button type="button"  class="btn btn-primary btn-circle lg">
                                                <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                        </div> --}}
        
                                        <hr class="text-primary mb-3">
        
        
                                        <!--Button-->
                                        <div class="mb-3">
                                            <button class="btn btn-primary" type="submit" style="float: right" >Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endrole
                        @include('daging.pm-unggas_table')

                    </div>

                    <div class="text-center">
                        <a href="/pemeriksaan-unggas" class="btn btn-warning" >Kembali</a>
                    </div>

        
                </div>
            </div>
        </div>


    </div>

</main>

@endsection

@section('script')


@endsection
