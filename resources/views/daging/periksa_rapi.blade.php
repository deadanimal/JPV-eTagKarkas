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
               
                <div class="tab-content">
        
                    <div class="tab-pane active show" id="tab-1" role="tabpanel">
        
                        <form action="#" method="POST">
                            @csrf
                
        
                            <div class="row">

                                <div>
                                    <h4>Pemeriksaan Rapi: Perihal Haiwan</h4>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Warna</label>
                                    <input class="form-control" type="text" name="warna" onkeyup="this.value = this.value.toUpperCase();"  >
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Tanda Dikenalpasti</label>
                                    <input class="form-control" type="number"  name="tanda_kenalpasti">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Yang Diperiksa</label>
                                    <input class="form-control" type="number" min="0" name="ternakan_diperiksa" >
                                </div>
        
                            </div>

                            <div class="row">

                                <div>
                                    <h4>Keputusan Klinikal:</h4>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Diagnosis</label>
                                    <input class="form-control" type="text" name="diagnosis" onkeyup="this.value = this.value.toUpperCase();"  >
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Suhu Badan</label>
                                    <input class="form-control" type="number"  name="suhu_badan">
                                </div>
        
                            </div>

                            <div class="row">

                                <div>
                                    <h4>Penemuan:</h4>
                                </div>
        
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                      <input class="form-check-input mt-0" type="checkbox"  value="1" aria-label="Checkbox for following text input" >
                                    </div>
                                    <input type="text"  class="form-control text-black" aria-label="Text input with checkbox"
                                    value="Dibenarkan untuk disembelih dibawah pemeriksaan rapi." readonly >
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox" value="2" aria-label="Checkbox for following text input" >
                                    </div>
                                      <input type="text"  class="form-control text-black" aria-label="Text input with checkbox"
                                      value="Ditahan daripada disembelih." readonly >
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox"  value="3" aria-label="Checkbox for following text input" >
                                      </div>
                                      <input type="text" class="form-control text-black" aria-label="Text input with checkbox"
                                      value="Dikondem sebagai tidak layak untuk makanan manusia pada pemeriksaan ante mortem." readonly >
                                </div>
        
                            </div>
        
        
        
        
                            <!--Button-->
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                                <a href="/jana-rapi"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a>
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

