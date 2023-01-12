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
                <h1>Borang 2</h1>
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
                
    
                <body class="content">
                    {{-- dynamic --}}
                
                    <div>
                        {{-- <br> Tarikh: {{$periksa_rapi->created_at}} --}}
                        <br> Tarikh: 
                        {{-- <br><br> 1. Rumah Sembelih : {{$periksa_rapi->pemeriksaan->nama_premis}} --}}
                        <br><br> 1. Rumah Sembelih : 
                        <br><br> 2. Perihal Binatang-Binatang :
                        <br><br><div style="text-align: center">
                            <table style="width: 100%">
                                <tr>
                                    <th>Spesis: </th>
                                    <th>Baka: </th>
                                </tr>
                                <tr>
                                    <th>Warna: </th>
                                    <th>Jantina: </th>
                                </tr>
                            </table>
                        </div>
                        <br> Tanda dikenal pasti :
                        <br><br> 3. Keputusan Klinikal :
                        <br><br><div style="text-align: center">
                            <table style="width: 30%">
                                <tr>
                                    <th>Suhu badan : </th>
                                </tr>
                                <tr>
                                    <th>Diagnosis : </th>
                                </tr>
                        
                            </table>
                        </div>
                        <br><br> 4. Penentuan :
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">Dibenarkan untuk disembelih dibawah pemeriksaan rapi.</li>
                                <li class="list-group-item">Ditahan daripada disembelih.</li>
                                <li class="list-group-item">Dikondem sebagai tidak layak untuk makanan manusia pada pemeriksaan ante mortem.</li>      
                            </ul>
                        </div>
    
                        <br><br>Tandatangan : 
                        <br><br>Nama : 
                        <br><br>Nama Jawatan : 
    
                    </div>
                    
                </body>
    
            </div>
        </div>
    </div>
    
   
</html>

<script>
   
    //   window.print();
   
</script>