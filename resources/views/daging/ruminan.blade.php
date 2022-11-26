@extends('layouts.app')


@section('content')

<main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Pendaftaran Ternakan Ruminan
            </h1>
        </div>

        {{-- align button tambah --}}
        <div class="card" style="width: fit-content">

        </div>
        
        <div class="card">

            <div class="tab mt-1" >
                <ul class="nav nav-tabs" role="tablist" >
                    <li class="nav-item" ><a class="nav-link active" href="#tab-1"
                    data-bs-toggle="tab" role="tab" style="background-color: aquamarine;">Pengenalan Ternakan</a></li>
                </ul>
        
                <div class="tab-content">
        
                    <div class="tab-pane active show" id="tab-1" role="tabpanel">
        
                        <form action="/pemeriksaan" method="POST">
                            @csrf
                
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Pemilik</label>
                                    <input class="form-control" type="text" name="nama_pemilik"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">No Kenderaan</label>
                                    <input class="form-control" type="text" name="kenderaan"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Tiba Dipremis</label>
                                    <div class="input-group date" id="datetimepicker-minimum" data-target-input="nearest">
                                        <input type="text" name="masa_tiba" class="form-control datetimepicker-input" data-target="#datetimepicker-minimum">
                                        <div class="input-group-text" data-target="#datetimepicker-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                                    </div>                            
                                    {{-- <input class="form-control" type="datetime" name="tiba"> --}}
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Disembelih</label>
                                    <div class="input-group date" id="datetimepicker-sembelih" data-target-input="nearest">
                                        <input type="text" name="masa_disembelih" class="form-control datetimepicker-input" data-target="#datetimepicker-sembelih">
                                        <div class="input-group-text" data-target="#datetimepicker-sembelih" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                                    </div>                           
                                </div>
        
                            </div>
        
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Permit</label>
                                    <input class="form-control" type="number"  name="permit" 
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Spesis Ternakan</label>
                                    <input class="form-control" type="text"  name="spesis"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan (Mengikut SKV)</label>
                                    <input class="form-control" type="number" min="0" name="bil_ternakan_skv"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">ID Premis</label>
                                    <input class="form-control" type="number" name="id_permis"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                            </div>
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Premis</label>
                                    <input class="form-control" type="text" name="nama_premis"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat Premis</label>
                                    <textarea class="form-control" name="alamat_premis" id="" cols="20" rows="3" 
                                            onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                </div>
        
                            </div>
        
                            <div class="row">
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan Yang Diterima</label>
                                    <input class="form-control" type="number" id="bil1" min="0" name="bil_ternakan_diterima" oninput="calc();"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Ternakan Yang Mati Semasa Tiba</label>
                                    <input class="form-control" type="number" id="bil2" min="0" name="ternakan_mati_semasa_tiba" oninput="calc();"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Yang Diperiksa</label>
                                    <input class="form-control" type="number" min="0" name="jumlah_ternakan_diperiksa"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Binatang Layak Disembelih</label>
                                    <input class="form-control" type="number" id="diff" min="0" name="jumlah_binatang_layak_disembelih"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                            </div>
        
                            <!--Button-->
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
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
@endsection

