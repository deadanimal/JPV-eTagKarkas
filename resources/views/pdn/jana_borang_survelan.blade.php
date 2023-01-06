<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {text-align: center;}
            .p1 {text-align: center;}
            .p2{text-align: center}
            .div1 {text-align: center;}
            .content {
            max-width: 900px;
            margin: auto;
            }
            .cb {
            border: 2px solid;
            padding: 50px; 
            width: 600px;
            resize: both;
            overflow: auto;
            }
        </style>
    </head>
    <div class="container-fluid" >
        <div class="card">
            <div class="card-body cb">
                {{-- h1 dynamic --}}
                <h1>Borang Survelan</h1>
                {{-- <div class="p1 div1">
                    <p>(Perenggan 6[1], Seksyen C, Bahagian 1)
                        <br>Ordinan Binatang 1953
                        <br>Kaedah-kaedah Pemeriksaan Daging 1985
                        <br>Jabatan Perkhidmatan Haiwan
                        <br>Kementerian Haiwan
                        <br>Kementerian Pertanian
                        <br>(Semenanjung Malaysia)
                        <br>Perakuan Pemeriksaan Ante-Mortem
                        <br>(Perenggan 6[1], Seksyen C, Bahagian 1, Jadual Ketiga)
                    </p>
                </div> --}}
                
    
                <body class="content">
                    {{-- dynamic --}}
                
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            {{-- @method('PUT') --}}
                            @csrf
    
                            <div class="mb-3">
    
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label"><b>Nombor VHM/MyGAP:</b> {{$survelans->nombor}}</label>
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label"><b>Premis: </b>{{$survelans->premis}}</label>
                                    </div>
       
    
                                    <div class="col-2 mt-3">
                                        <label class="form-label"><b>Nombor Telefon: </b> {{$survelans->telefon}}</label>
                                    </div>
     
    
                                    <div class="col-2 mt-3">
                                        <label class="form-label"><b>Emel:</b> {{$survelans->email}}</label>
                                    </div>
                                  

                                    <div class="col-2 mt-3">
                                        <label class="form-label"><b>Faks:</b> {{$survelans->fax}}</label>
                                    </div>
                                  
    
                                    <div class="col-2 mt-3">
                                        <label class="form-label"><b>Website:</b> {{$survelans->web}}</label>
                                    </div>
                                    

                                </div>

                               
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label"><b>Jenis Produk:</b> {{$survelans->jenis_produk}}</label>
                                    </div>
                                  
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label"><b>Alamat:</b> {{$survelans->alamat}}</label>
                                    </div>
                     
                                </div>
    
                            </div>
    
                           
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label"><b>Negeri:</b> {{$survelans->negeri}}</label>
                                </div>
                               

                                <div class="col-2">
                                    <label class="form-label"><b>Kaedah Audit:</b>  {{$survelans->kaedah_audit}}</label>
                                </div>
                             
                            </div>

                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label"><b>Nama Pemeriksa 1:</b>  {{$survelans->pemeriksa_1}}</label>
                                </div>
                            

                                <div class="col-2">
                                    <label class="form-label"><b>Nama Pemeriksa 2:</b> {{$survelans->pemeriksa_2}}</label>
                                </div>
                              
                            </div>

                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label class="form-label"><b>Nama Pemeriksa 3:</b>  {{$survelans->pemeriksa_3}}</label>
                                </div>
                              

                                <div class="col-2">
                                    <label class="form-label"><b>Nama Pemeriksa 4:</b> {{$survelans->pemeriksa_4}}</label>
                                </div>
                             
                            </div>

                            <div class="row mb-3">
                                <div class="col-2">
                                    <label class="form-label"><b>Catatan:</b> {{$survelans->catatan}}</label>
                                </div>
                            </div>
        
                        </form>
                    </div>
                    
                </body>
    
            </div>
        </div>
    </div>
    
   
</html>

<script>
   
    //   window.print();
   
</script>