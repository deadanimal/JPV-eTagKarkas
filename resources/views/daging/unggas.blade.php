@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Pendaftaran Unggas
            </h1>
        </div>

        <div class="card">
            <div class="tab mt-1">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" style="background-color: aquamarine"><a class="nav-link active" href="#tab-1"
                            data-bs-toggle="tab" role="tab" style="background-color: aquamarine;">Pendaftaran Unggas</a></li>      
                </ul>
        
                <div class="tab-content">
                   
                    <div class="tab-pane active" id="tab-1" role="tabpanel">
        
                        <form action="" method="POST">
                            @csrf
                            
                                    <div class="row">
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Nama Ladang</label>
                                            <select class="form-select" aria-label="Default select example" name="nama_ladang">
                                                <option selected disabled>Pilih Ladang</option>
                                                <option value="Ladang A">Ladang A</option>
                                                <option value="Ladang B">Ladang B</option>
                                                <option value="Ladang C">Ladang C</option>
                                            </select>
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">Nombor Kenderaan</label><br>
                                            <input class="form-control" type="text" name="nombor_kenderaan"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
        
                                        <div class="mb-3 col-md-4">
                                            <label for="">ID Ladang</label><br>
                                            
                                            <input class="form-control" type="text" name="id_ladang"
                                            onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
        
                                    </div>
        
                                    <div class="row">
        
                                        <div class="mb-3 col-md-6">
                                            <label for="">Alamat Ladang</label><br>
                                            <textarea name="alamat_ladang" id="alamat_ladang" cols="60" rows="5" placeholder="Setiawan,Perak"></textarea>
                                        </div>
        
                                        <div class="mb-3 col-md-6">
                                            <label for="">Tarikh Terima Ternakan </label><br>
                                            <div class="input-group date" id="datetimepicker-minimum" data-target-input="nearest">
                                                <input type="text" name="masa_tiba" class="form-control datetimepicker-input" data-target="#datetimepicker-minimum">
                                                <div class="input-group-text" data-target="#datetimepicker-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                                            </div>  
                                        </div>
        
                                    </div>
        
                                
        
                                <!--Button-->
                                <div class="mb-3">
                                    {{-- <button class="btn btn-primary" type="submit" >Kemaskini</button> --}}
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
@endsection
