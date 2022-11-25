@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Daging
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
                            data-bs-toggle="tab" role="tab">Pemeriksaan Ante Mortem</a></li>
                    <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-4"
                            data-bs-toggle="tab" role="tab">Pemeriksaan Post Mortem</a></li>
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
        
                        <form action="/periksa-unggas" method="POST">
                            @csrf

                            <div class="card">
                                {{-- <div class="card-header">
                                    <b>Pemeriksaan Ternakan > Maklumat Unggas</b>
                                </div> --}}

                            {{-- <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                            <input type="hidden" name="pemeriksaan_id" value="{{$unggas->id}}"> --}}
        
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

                        @include('daging.unggas_table')
        
                    </div>
        
                    <div class="tab-pane" id="tab-3" role="tabpanel">
        
                        <form action="">
                            <div class="card">
                                <div class="card-header">
                                    <b>Pemeriksaan Ternakan > Pemeriksaan Ante Mortem</b>
                                </div>
        
                                <div class="card-body">
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">General Condition</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
        
                                        <hr class="text-primary mb-3">
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Respiratory System</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
        
                                        <hr class="text-primary mb-3">
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">CNS Symptoms</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
        
                                        <hr class="text-primary mb-3">
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Gastrointestinal Tract System</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
        
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
        
                                        <hr class="text-primary mb-3">
        
        
                                        <!--Button-->
                                        <div>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
        
                    <div class="tab-pane" id="tab-4" role="tabpanel">
                        <form action="">
                            <div class="card">
                                <div class="card-header">
                                    <b>Pemeriksaan Daging > Pemeriksaan Post Mortem</b>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bukan Lesi Semasa Post Mortem</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
                                        <hr class="text-primary mb-3">
                                        <div class="mb-3 col-md-3">
                                            <label for="">Lesi Semasa Post Mortem</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected>Carcass</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected>Abcess</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
                                        <hr class="text-primary mb-3">
                                        <div class="mb-3 col-md-3">
                                            <label for="">Gastrointestinal Tract System</label>
                                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                <option selected></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label for="">Bilangan Kes</label>
                                            <input type="number">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <button>Tambah</button>
                                        </div>
        
                                        <hr class="text-primary mb-3">
        
        
                                        <!--Button-->
                                        <div>
                                            <button class="btn btn-primary" type="submit">Kemaskini</button>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
        
                </div>
            </div>
        </div>

    </div>

</main>

   
    
@endsection

@section('script')
@endsection
