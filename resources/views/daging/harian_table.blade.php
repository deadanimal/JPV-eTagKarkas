
<main class="content">
    <div class="container-fluid">
        <div class="card">

            <div class="card-body">
                <h4>Jadual Pemeriksaan Harian </h4>
        
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Bilangan Pemeriksaan Rapi</th>
                        <th scope="col">Jumlah Disembelih Kerana Kecemasan</th>
                        <th scope="col">Jumlah Disembelih</th>
                        <th scope="col">Baki Belum Disembelih</th>
                        <th scope="col">Catatan</th>
                      </tr>
                    </thead>
                    <tbody>

                      {{-- <tr>
                        @foreach ($harians as $harian)

                        <td>{{$loop->iteration}}</td>
                        <td>{{$harian->bilangan_diasingkan_pemeriksaan_rapi}}</td>
                        <td>{{$harian->jumlah_binatang_disembelih_kecemasan}}</td>
                        <td>{{$harian->jumlah_disembelih}}</td>
                        <td>{{$harian->baki_ternakan_belum_disembelih}}</td>
                            
                        @endforeach
                      </tr> --}}

                      <tr>
                        <th scope="row">1</th>
                        <td>5</td>
                        <td>2</td>
                        <td>2</td>
                        <td>3</td>
                        <td>Baik</td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</main>