
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body">
              <u><h4 class="text-center">Jadual Pemeriksaan Ante Mortem Ruminan </h4></u>
                <table class="table table-center text-center" >
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Penemuan Ante Mortem</th>
                        <th scope="col">Bilangan Kes</th>
                        <th scope="col">Nombor Tag</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Jumlah Binatang Dikondem</th>
                        <th scope="col">Jana</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        @foreach ($ante_mortems as $ante_mortem)

                        <td>{{$loop->iteration}}</td>
                        <td>{{$ante_mortem->ante_mortem}}</td>
                        <td>{{$ante_mortem->kes}}</td>
                        <td>{{$ante_mortem->nombor_tag}}</td>
                        <td>{{$ante_mortem->catatan_ante_mortem}}</td>
                        <td>{{$ante_mortem->jumlah_dikondem}}</td>
                        <td><a href="#"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a>
                        </td>
                            
                      </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</main>