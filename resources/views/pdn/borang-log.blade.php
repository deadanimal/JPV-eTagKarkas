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
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nama Premis: </label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                          

                                            <div class="col-6">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />

                                            
                                           

                                            <div class="col-6">
                                                <label class="form-label">Jenis Produk</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">No. Est</label>
                                            </div>
                                            <input class="form-control" type="number" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                        </div>
                                   
                                    </div> 
                                    
                                    <div class="card-body">
                                        <div class="col">
                                            <table class="table table-bordered line-table text-center" style="width: 100%">
                                                <thead class="text-black">
                
                                                    <tr>
                                                        <th colspan="16">LOG PEMERIKSAAN VETERINAR JABATAN PERKHIDMATAN VETERINAR MALAYSIA</th>
                                                    </tr>
                                                    <tr style="vertical-align: middle">
                                                        <th rowspan="2">TARIKH</th>
                                                        <th rowspan="2">NAMA PEMERIKSA</th>
                                                        <th>TUJUAN PEMERIKSAAN</th>
                                                        <th>CATATAN</th>
                                                        <th>TANDATANGAN PENGURUS LOJI</th>
                                                        <th>TANDATANGAN PEMERIKSA</th>
                                                        
                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                
                                                    <tr class="text-center">
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        
                                                    </tr>

                                                
                
                
                                                </tbody>
                                            </table>
            
                
                                            <div class="mb-3 text-center">
                                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                            </div>
                
                
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