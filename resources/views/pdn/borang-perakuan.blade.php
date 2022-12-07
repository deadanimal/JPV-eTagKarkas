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
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nama Syarikat</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />
                                          

                                            
                                        </div>

                                        

                                       
                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Alamat Syarikat</label>
                                            </div>
                                            <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>

                                            <br>

                                            

                                        </div>
                                        
                                    
                                    </div>

                                    <hr>

                                    <strong>Dengan ini kami pihak kami mengaku bahawa susu tepung yang berkuantiti <input type="text" placeholder="KG">
                                        dengan Batch No: <input type="text"> adalah disingkirkan disebabkan oleh:
                                    </strong>

                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Proses Pembersihan Mesin</th>
                                            <th></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Semasa Pengendalian Yang Tidak Cermat</td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Penyimpanan Yang Tidak Baik</td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
        
                                    {{-- Button --}}
                                    {{-- <div class="row">
                                        <div class="mb-3">
                                            <button class="btn btn-success" type="submit" title="Hantar" style="float: right">Hantar</button>
                                        </div>
                                    </div>   --}}
                                            
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