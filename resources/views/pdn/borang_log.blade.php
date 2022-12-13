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
                                <form action="/cipta_borang_log" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nama Premis: </label>
                                            </div>
                                            <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                          

                                            <div class="col-6">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <input class="form-control" type="text" name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />

                                            
                                           

                                            <div class="col-6">
                                                <label class="form-label">Jenis Produk</label>
                                            </div>
                                            <input class="form-control" type="text" name="produk" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">No. Est</label>
                                            </div>
                                            <input class="form-control" type="number" name="no_est" min="0" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                        </div>
                                   
                                    </div> 

                                    <div class="row">
                                        <div class="mb-3 mt-3">
                                            <button class="btn btn-success" type="submit" title="Hantar" style="float: right">Hantar</button>
                                            <a href="/pdn" class="btn btn-primary mx-2" style="float: right">Kembali</a>
                                        </div>
                                        
                                    </div> 
                                </form>
                            </div>

                            {{-- table --}}

                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="16" class="text-center">LOG PEMERIKSAAN VETERINAR</th>
                                            {{-- after AUDIT, need to specify MyGap or VHM --}}
                                        </tr>
                                        <tr style="vertical-align: middle">
                                            <th>Tarikh</th>
                                            <th>Nama Pemeriksa</th>
                                            <th>Tujuan Pemeriksaan</th>  
                                            <th>Catatan</th>  
                                            <th>Tandatangan Pengurus Loji</th>  
                                            <th>Tandatangan Pemeriksa</th>  
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
    
                                    </tbody>
                                </table>
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