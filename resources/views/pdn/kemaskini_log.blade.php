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
                                <h5 class="card-title">Jadual Borang Log</h5>
                            </div>

                            <div class="card-body">
                                <form action="/simpan_kemaskini_jadual_log/{{$log->id}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nama Premis: </label>
                                            </div>
                                            <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$log->premis}}"/>
                                          

                                            <div class="col-6">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <input class="form-control" type="text" name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$log->alamat}}"/>

                                            
                                           

                                            <div class="col-6">
                                                <label class="form-label">Jenis Produk</label>
                                            </div>
                                            <input class="form-control" type="text" name="produk" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$log->produk}}"/>

                                            <div class="col-6">
                                                <label class="form-label">No. Est</label>
                                            </div>
                                            <input class="form-control" type="number" name="no_est" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$log->no_est}}"/>

                                        </div>
                                   
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 mt-3">
                                            <button class="btn btn-success" type="submit" title="Hantar" style="float: center">Hantar</button>
                                        </div>
                                        
                                    </div> 
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


@endsection