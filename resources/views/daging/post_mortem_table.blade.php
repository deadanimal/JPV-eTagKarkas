
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body">
              <u><h4 class="text-center">Jadual Pemeriksaan Post Mortem Ruminan </h4></u>
                <table class="table table-center text-center">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Bahagian</th>
                        <th scope="col">Sebab Musnah</th>
                        <th scope="col">Bilangan Kes</th>
                        <th scope="col">Nombor Tag</th>
                        <th scope="col">Keputusan</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        @foreach ($post_mortems as $post_mortem)

                        <td>{{$loop->iteration}}</td>
                        <td>{{$post_mortem->kategori_post_mortem}}</td>
                        <td>{{$post_mortem->bahagian}}</td>
                        <td>{{$post_mortem->musnah}}</td>
                        <td>{{$post_mortem->kes_post_mortem}}</td>
                        <td>{{$post_mortem->nombor_tag_post}}</td>
                        <td>{{$post_mortem->keputusan}}</td>
                            
                      </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</main>