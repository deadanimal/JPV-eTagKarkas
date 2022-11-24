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
            /* resize: both; */
            overflow: auto;
            }
        </style>
    </head>
    <div class="container-fluid" >
        <div class="card">
            <div class="card-body cb">
                {{-- h1 dynamic --}}
                <h1>Borang 3</h1>
                <strong>
                    <div class="p1 div1">
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
                    </div>
                </strong>
               
                
                
                    <body class="content">
                        {{-- dynamic --}}
                    
                        <div>
                            <br> Tarikh: <b>{{$jana_pm->created_at->format('d/m/Y')}}</b>
                            <br><br> Nama dan alamat tuan punya ternakan : <b>{{$jana_pm->pemeriksaan->nama_pemilik}}</b>
                            <br><br> Kamu adalah dengan ini diberitahu bahawa karkas/bahagian/organ yang berikut
                            adalah ditetapkan sebagai :
                            <br><br> Dikenalpasti oleh : 
                            <br><br> Dikatakan berasal dari : <b>{{$jana_pm->pemeriksaan->nama_premis}}</b>
                            <br><br> Dan dipunyai oleh : 
                            <br><br> Sementara menunggu perlupusan selanjutnya. Tindakan ini telah diambil
                            sebab :  <b>{{$jana_pm->musnah}}</b>
                            <br><br> Kamu adalah dilarang daripada mejual, memindahkan, melupuskan atau selainnya
                            membuat urusan dengan barang-barang yang ditahan itu tanpa kebenaran bertulis
                            daripada seorang pemeriksa
    
         
                        </div>

                        <div class="container" style="width: 100%; display: table">
                            <div style="display: table-row; height: 100px;">
                                <div style="width: 50%; display: table-cell">
                                    <br><br>Tandatangan penerima notis : 
                                    <br><br>Nama penerima notis : 
                                    <br><br>Disahkan oleh : Pemeriksa Daging
                                    <br><br>Pengurus Rumah Sembelih
                                </div>
                                <div style="display: table-cell">
                                    <br><br>Tandatangan pemeriksa : 
                                    <br><br>Nama  : 
                                    <br><br>Jawatan :    
                                </div>
                            </div>         
                       </div>

                        <div class="mb-3">
                            <a href="/jana-pm/{{$jana_pm->id}}"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a>
                        </div>
                        
                    </body>

            </div>
        </div>
    </div>
    
   
</html>
