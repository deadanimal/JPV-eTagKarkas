
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body" >
              <u><h4 class="text-center ">Jadual Pemeriksaan Unggas </h4></u>
                <table class="table text-center" style="border-width: 10px; border-color:green;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Bilangan Ternakan Yang Diterima</th>
                        <th scope="col">Bilangan Mati Semasa Tiba(DOA)</th>
                        <th scope="col">Ternakan Mati Sebelum Disembelih(DBS)</th>
                        <th scope="col">Runt(AM+PM)</th>
                        <th scope="col">Salah Sembelih</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        @if($periksas)
                        @foreach ($periksas as $periksa)
                        

                        <td>{{$loop->iteration}}</td>
                        <td>{{$periksa->bilangan_ternakan}}</td>
                        <td>{{$periksa->bilangan_mati}}</td>
                        <td>{{$periksa->jumlah_mati_dbs}}</td>
                        <td>{{$periksa->runt}}</td>
                        <td>{{$periksa->salah_sembelih}}</td>
                       
                            
                        
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


</main>