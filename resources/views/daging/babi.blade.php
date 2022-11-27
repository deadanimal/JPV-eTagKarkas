@extends('layouts.app')

@section('content')


<main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Pendaftaran Ternakan Babi
            </h1>
        </div>

         {{-- align button tambah --}}
         <div class="card" style="width: fit-content">

        </div>

        <div class="card">
            <div class="tab mt-1">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#tab-1"
                        style="background-color: aquamarine;" data-bs-toggle="tab" role="tab">Pengenalan Ternakan</a></li>
                    
                </ul>
        
                <div class="tab-content">
                   
                    <div class="tab-pane active" id="tab-1" role="tabpanel">
        
                        <form action="/pemeriksaan-babi" method="POST">
                            @csrf

                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Nama Pemilik </label><br>
                                            <input class="form-control" type="text" name="nama_pemilik_babi"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Nombor Kenderaan</label><br>
                                            <input class="form-control" type="text" name="kenderaan_babi"
                                            onkeyup="this.value = this.value.toUpperCase();"></div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Masa Ternakan Tiba</label><br>
                                            <div class="input-group date" id="datetimepicker-minimum" data-target-input="nearest">
                                                <input type="text" name="masa_tiba_babi" class="form-control datetimepicker-input" data-target="#datetimepicker-minimum">
                                                <div class="input-group-text" data-target="#datetimepicker-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                                            </div> 
                                        </div>
                                    </div>
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">ID Premis</label><br>
                                            <input class="form-control" type="number" name="id_premis_babi"
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
