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
                <h1>Borang 1</h1>
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
                        <br> Tarikh: <b>{{$jana_harian->created_at->format('d/m/Y')}}</b>
                        <br><br> 1. Rumah Sembelih : <b>{{$jana_harian->pemeriksaan->nama_premis}}</b>
                        <br><br> 2. Perihal Binatang-Binatang :
                        <br><br><div style="text-align: left">
                            <table style="width: 100%">
                                <tr>
                                    <th style="width: 50%">Spesis: Ruminan Besar</th>
                                    <th style="width: 50%">Baka: </th>
                                </tr>
                            </table>
                        </div>
                        <br><br> 3. Keputusan Pemeriksaan : <b>{{$jana_harian->ante_mortem}}</b>
                        <br><br> a. Jumlah Binatang Yang Diperiksa :  <b>{{$jana_harian->pemeriksaan->bil_ternakan_diterima}}</b>
                        <br><br> b. Jumlah Binatang Yang Diluluskan Sebagai Layak Untuk Disembelih : <b>{{$jana_harian->pemeriksaan->jumlah_binatang_layak_disembelih}}</b>
                        <br><br> c. Jumlah Binatang Yang Dibenarkan Untuk Disembelih tetapi Berada Dibawah Pemeriksaan Rapi : <b>{{$jana_harian->pemeriksaan->bilangan_diasingkan_pemeriksaan_rapi}}</b>
                        {{-- trying to call data from pemeriksaan_harian table --}}
                        {{-- <br><br> c. Jumlah Binatang Yang Dibenarkan Untuk Disembelih tetapi Berada Dibawah Pemeriksaan Rapi : 
                        <ul>
                            @foreach ($jana_harian->pemeriksaan->pemeriksaan_harian as $abc)
                                <li>{{$abc->bilangan_diasingkan_pemeriksaan_rapi}}</li>
                            @endforeach
                        </ul> --}}
                        <br><br> d. Jumlah-Jumlah Binatang Yang Disembelih Kerana Sebab-Sebab Kecemasan : <b>{{$jana_harian->jumlah_binatang_disembelih_kecemasan}}</b>
                        <br><br> e. Jumlah-Jumlah Binatang Yang Dikondem Pada Pemeriksaan Ante-Mortem : <b>{{$jana_harian->jumlah_dikondem}}</b>
                        <br><br> f. Lampiran A Disertakan (Individu) 
                       
    
                        <br><br>Diperiksa Oleh : 
                        <br><br>Nama : <b>{{$jana_harian->pemeriksaan->nama_pemilik}}</b>
                        <br><br>Jawatan : Pemeriksa Daging
                        <br><br>Tarikh : <b>{{$jana_harian->created_at->format('d/m/Y')}}</b>
    
                    </div>
                    
                </body>
    
            </div>
        </div>
    </div>
    
   
</html>
