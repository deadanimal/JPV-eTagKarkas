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
                        <br> Tarikh: {{$jana_harian->created_at->format('d/m/Y')}}
                        <br><br> 1. Rumah Sembelih : {{$jana_harian->pemeriksaan->nama_premis}}
                        <br><br> 2. Perihal Binatang-Binatang :
                        <br><br><div style="text-align: left">
                            <table style="width: 100%">
                                <tr>
                                    <th>Spesis: Ruminan Besar</th>
                                    <th>Baka: </th>
                                </tr>
                            </table>
                        </div>
                        <br><br> 3. Keputusan Pemeriksaan : {{$jana_harian->ante_mortem}}
                        <br><br> a. Jumlah Binatang Yang Diperiksa :  {{$jana_harian->pemeriksaan->bil_ternakan_diterima}}
                        <br><br> b. Jumlah Binatang Yang Diluluskan Sebagai Layak Untuk Disembelih : {{$jana_harian->pemeriksaan->jumlah_binatang_layak_disembelih}}
                        <br><br> c. Jumlah Binatang Yang Dibenarkan Untuk Disembelih tetapi Berada Dibawah Pemeriksaan Rapi : {{$jana_harian->pemeriksaan->bilangan_diasingkan_pemeriksaan_rapi}}
                        {{-- trying to call data from pemeriksaan_harian table --}}
                        {{-- <br><br> c. Jumlah Binatang Yang Dibenarkan Untuk Disembelih tetapi Berada Dibawah Pemeriksaan Rapi : 
                        <ul>
                            @foreach ($jana_harian->pemeriksaan->pemeriksaan_harian as $abc)
                                <li>{{$abc->bilangan_diasingkan_pemeriksaan_rapi}}</li>
                            @endforeach
                        </ul> --}}
                        <br><br> d. Jumlah-Jumlah Binatang Yang Disembelih Kerana Sebab-Sebab Kecemasan : {{$jana_harian->jumlah_binatang_disembelih_kecemasan}}
                        <br><br> e. Jumlah-Jumlah Binatang Yang Dikondem Pada Pemeriksaan Ante-Mortem : {{$jana_harian->jumlah_dikondem}}
                        <br><br> f. Lampiran A Disertakan (Individu) 
                       
    
                        <br><br>Diperiksa Oleh : 
                        <br><br>Nama : {{$jana_harian->pemeriksaan->nama_pemilik}}
                        <br><br>Jawatan : Pemeriksa Daging
                        <br><br>Tarikh : {{$jana_harian->created_at->format('d/m/Y')}}
    
                    </div>
                    

                    <div class="mb-3">
                        <a href="/jana-harian/{{$jana_harian->id}}"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a>
                    </div>
                </body>
    
            </div>
        </div>
    </div>
    
   
</html>

<script>
   
    //   window.print();
   
</script>