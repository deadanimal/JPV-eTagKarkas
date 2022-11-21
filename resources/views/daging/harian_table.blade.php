
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body" >
              <u><h4 class="text-center ">Jadual Pemeriksaan Harian </h4></u>
                <table class="table text-center" style="border-width: 10px; border-color:green;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Bilangan Pemeriksaan Rapi</th>
                        <th scope="col">Jumlah Disembelih Kerana Kecemasan</th>
                        <th scope="col">Jumlah Disembelih</th>
                        <th scope="col">Baki Belum Disembelih</th>
                        <th scope="col">Catatan</th>
                        <th>Jana</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        @if($harians)
                        @foreach ($harians as $harian)
                        

                        <td>{{$loop->iteration}}</td>
                        <td>{{$harian->bilangan_diasingkan_pemeriksaan_rapi}}</td>
                        <td>{{$harian->jumlah_binatang_disembelih_kecemasan}}</td>
                        <td>{{$harian->jumlah_disembelih}}</td>
                        <td>{{$harian->baki_ternakan_belum_disembelih}}</td>
                        <td>{{$harian->catatan}}</td>
                        <td><a href="/tunjuk-harian/{{$jana_harian->id}}"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a>
                        </td>
                            
                        
                      </tr>
                        @endforeach
                        @endif

                      {{-- <tr>
                        <th scope="row">1</th>
                        <td>5</td>
                        <td>2</td>
                        <td>2</td>
                        <td>3</td>
                        <td>Baik</td>
                      </tr> --}}
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


    {{-- Catatan Senarai Ternakan - daily editable table --}}
    <div class="container-fluid">
      <div class="card" style="border-width: 1px; border-color:black;">



          <div class="card-body" >
            <u><h4 class="text-center ">Catatan Senarai Ternakan </h4></u>
              <table class="table text-center" style="border-width: 10px; border-color:green;">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nombor Tag</th>
                      <th scope="col">Jantina</th>
                      <th scope="col">Baka</th>
                      <th scope="col">Tarikh Disembelih</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th scope="row">1</th>
                      <td><input type="number"></td>
                      <td><input type="text"></td>
                      <td><input type="number"></td>
                      <td><input type="date"></td>
                    </tr>
                    
                  </tbody>
                </table>
          </div>
      </div>
  </div>

</main>