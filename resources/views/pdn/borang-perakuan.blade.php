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

                    <h5>Perakuan Pengesahan Status Susu Tepung Untuk Kegunaan Makanan Haiwan Sahaja</h5>

                    <div class="col-12 col-xl-12">
                        <div class="card border border-dark">
                           

                            <div class="card-body">
                                <form action="/borang-perakuan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nama Syarikat</label>
                                            </div>
                                            <textarea class="form-control" rows=5 name="syarikat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')"></textarea>
                                          

                                            
                                        </div>
 
                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Alamat Syarikat</label>
                                            </div>
                                            <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')"></textarea>
                                        </div>
                                        
                                    
                                    </div>

                                    <hr>

                                    <strong>Dengan ini kami pihak kami mengaku bahawa susu tepung yang berkuantiti <input type="number" name="kg" placeholder="KG" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" min="0">
                                        dengan Batch No: <input type="text" name="batch" onkeyup="this.value = this.value.toUpperCase();"> adalah disingkirkan disebabkan oleh:
                                    </strong>

                                    {{-- table --}}
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"></h5>
                                        </div>
                                        <table class="table table-bordered">
                                            {{-- <thead>
                                                <tr>
                                                    <th style="width:25%"></th>
                                                    <th></th>
                                                </tr>
                                            </thead> --}}
                                            <tbody>
                                                <tr>
                                                    <td><strong>1.</strong></td>
                                                    <td><strong>Proses Pembersihan Mesin</strong></td>
                                                    <td><input type="text" name="proses" id="" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>2.</strong></td>
                                                    <td><strong>Pengendalian yang tidak cermat</strong></td>
                                                    <td><input type="text" name="pengendalian" id="" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>3.</strong></td>
                                                    <td><strong>Penyimpanan yang tidak baik</strong></td>
                                                    <td><input type="text" name="penyimpanan" id="" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>4.</strong></td>
                                                    <td><strong>Pembungkusan yang telah rosak</strong></td>
                                                    <td><input type="text" name="pembungkusan" id="" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>5.</strong></td>
                                                    <td><strong>Lain - lain</strong></td>
                                                    <td><input type="text" name="lain" id="" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                        <br>

                                        <strong>Dan bukan sebab tercemar oleh kandungan kimia(antibiotik, pesticid atau apa-apa bahan yang diketahui memudaratkan 
                                            manusia dan haiwan) atau bendasing(foreign object).
                                        </strong>

                                        <br> 

                                        <strong>Dengan ini pihak kami akan mematuhi arahan syarat-syarat yang ditetapkan dan berjanji akan menjual dan mengedarkan susu tepung
                                            tersebut hanya untuk kegunaan makanan haiwan sahaja
                                        </strong>
                                    </div>

                                    <br>

                                    <hr>

                                    <div>
                                        <strong>Tandatangan wakil syarikat</strong>
                                        <textarea class="form-control" rows=5 cols="3" name="tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')"></textarea>
                                        <br>

                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Nama: <input type="text"></label>
                                            </div>
                                           
                                        </div>

                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Jawatan: <input type="text" name="" id=""></label>
                                            </div>
                        
                                        </div>
                                    </div>

                                    {{-- Button --}}

                                    <div class="row">
                                        <div class="mb-3 text-center">
                                            <a href="/susu-tepung" class="btn btn-primary">Kembali</a>
                                            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                                Hantar
                                            </button>
                    
                                        </div>
                                    </div>  

                                     <!-- Modal -->
                                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Adakah anda ingin menghantar perakuan pengesahan baharu?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button class="btn btn-success text-center" type="submit" style="float: right">Ya</button>
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
        </div>

    </div>



</main>

@endsection

@section('script')




@endsection