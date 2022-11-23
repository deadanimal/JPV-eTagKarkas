
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
                        <th scope="col">Tindakan</th>
                        <th scope="col">Jana Borang</th>
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
                        <td><button class="btn btn-info" data-toggle="modal" data-target="#pmModal{{$loop->iteration}}" type="button" style="float: right">Kemaskini</button></td>

                            <!-- Modal -->
                            <div class="modal fade" id="pmModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: aquamarine">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Kemaskini Penemuan Post Mortem</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <form action="/post-mortem/{{$post_mortem->id}}" method="POST">
                                      @method('PUT')
                                      @csrf
                      
                                      <div class="row">
        
                                                  <div class="mb-3 col-md-3">
                                                      <label for="">Kategori</label>
                                                      <select class="form-select" aria-label="Default select example" name="kategori_post_mortem" >
                                                          <option selected value="{{ $post_mortem->kategori_post_mortem }}">{{ $post_mortem->kategori_post_mortem }}</option>
                                                          <option>Karkass(Carcass)</option>
                                                          <option>Esofagus(Esophagus)</option>
                                                          <option value="3">Jantung(Heart)</option>
                                                          <option value="4">Peparu(Lungs) & Trachea(Trakea)</option>
                                                          <option value="5">Hati(Liver)</option>
                                                          <option value="6">Buah Pinggang(Kidney)</option>
                                                          <option value="7">Limba(Spleen)</option>
                                                          <option value="8">Perut,Usus Kecil,Usus Besar(Guts-Stomach,Small & Large Intestine)</option>
                                                          <option value="9">Sistem Pembiakan Betina</option>
                                                          <option value="10">Udder</option>
                                                          <option value="11">Sistem Pembiakan Jantan</option>
                  
                                                      </select>
                                                  </div>
                              
                                                  <div class="mb-3 col-md-3">
                                                      <label for="">Bahagian</label>
                                                      <select class="form-select" aria-label="Default select example" name="bahagian">
                                                        <option selected>{{ $post_mortem->bahagian }}</option>
                                                          <option value="Generalized">Generalized</option>
                                                          <option value="Head">Head</option>
                                                          <option value="Tongue">Tongue</option>
                                                          <option value="Thoracic Cavity">Thoracic Cavity</option>
                                                          <option value="Abdominal cavity">Abdominal cavity</option>
                                                          <option value="Pelvic cavity">Pelvic cavity</option>
                                                      </select>
                                                  </div>
                              
                                                  <div class="mb-3 col-md-3">
                                                      <label for="">Sebab Musnah</label>
                                                      <select class="form-select" aria-label="Default select example" name="musnah">
                                                          <option selected>{{ $post_mortem->musnah }}</option>
                                                          <option value="Cysts">Cysts</option>
                                                          <option value="Hernia">Hernia</option>
                                                          <option value="Tumor">Tumor</option>
                                                      </select>
                                                  </div>
                              
                                                  <div class="mb-3 col-md-3">
                                                      <label for="">Bilangan Kes</label>
                                                      <input class="form-control" type="number" min="0" name="kes_post_mortem" value="{{ $post_mortem->kes_post_mortem }}"
                                                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                  </div>
                              
                                                  <div class="mb-3 col-md-3">
                                                      <label for="">Nombor Tag</label>
                                                      <select class="form-select" aria-label="Default select example" name="nombor_tag_post">
                                                          <option selected>{{ $post_mortem->nombor_tag_post }}</option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                      </select>
                                                  </div>
                              
                                                  <div class="mb-3 col-md-3">
                                                      <label for="">Keputusan</label>
                                                      <select class="form-select" aria-label="Default select example" name="keputusan">
                                                          <option selected>{{ $post_mortem->keputusan }}</option>
                                                          <option value="">Partial Condemn</option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                      </select>
                                                  </div>
                              
                                              </div>

                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                          </div>
                      
                                      </form>
                                    
                                  </div>
                                
                                </div>
                              </div>
                            </div> 
                            
                        <td><a href="#"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a></td>
                            
                      </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</main>