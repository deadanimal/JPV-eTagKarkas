
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body">
              <u><h4 class="text-center">Jadual Pemeriksaan Ante Mortem Babi </h4></u>
                <table class="table table-center text-center" >
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Penemuan Ante Mortem</th>
                        <th scope="col">Bilangan Kes</th>
                        <th scope="col">Nombor Tag</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Jumlah Binatang Dikondem</th>
                        @role('pengurus-rumah-sembelih')
                        <th scope="col">Tindakan</th>
                        <th scope="col">Jana Borang</th>
                        @endrole
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
                        @role('pengurus-rumah-sembelih')
                        <td><a class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModalCenter{{$loop->iteration}}" style="float: right">Kemaskini</a></td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: aquamarine">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Kemaskini Penemuan Ante Mortem</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <form action="/ante-mortem-babi/{{$ante_mortem->id}}" method="POST">
                                      @method('PUT')
                                      @csrf
                      
                                          <div class="row">
                      
                                              <div class="mb-3 col-md-4">
                                                  <label for="">Penemuan Ante Mortem</label>
                                                  <select class="form-select" aria-label="Default select example" name="ante_mortem" value="{{ $ante_mortem->ante_mortem }}">
                                                    <option selected>{{ $ante_mortem->ante_mortem }}</option>
                                                    <option value="Abnormal">Abnormal CNS signs</option>
                                                      <option value="Anaemia">Anaemia</option>
                                                      <option value="Comatose">Comatose</option>
                                                      <option value="Dead Before Slaughter">Dead Before Slaughter</option>
                                                      <option value="Diarrhea">Diarrhea</option>
                                                      <option value="Dull & depressed">Dull & depressed</option>
                                                      <option value="Emaciation(body score)">Emaciation(body score)</option>
                                                      <option value="Heat stress">Heat stress</option>
                                                      <option value="Jaundice on mucosal">Jaundice on mucosal</option>
                                                      <option value="Lameness/Fracture">Lameness/Fracture</option>
                                                      <option value="Localized abscess">Localized abscess</option>
                                                      <option value="Oedema">Oedema</option>
                                                      <option value="Poor body condition">Poor body condition</option>
                                                      <option value="Post vaccination/treatment">Post vaccination/treatment(injection site)</option>
                                                      <option value="Runt">Runt(stunted growths)</option>
                                                      <option value="Skin lesions">Skin lesions</option>
                                                      <option value="Wounds">Wounds</option>
                                                      <option value="Others">Others(perlu sertakan gambar penemuan)</option>
                                                  </select>
                                              </div>
                          
                                              <div class="mb-3 col-md-3">
                                                  <label for="">Bilangan Kes</label>
                                                  <input class="form-control" type="number" min="0" name="kes" value="{{ $ante_mortem->kes }}"
                                                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                              </div>
                          
                                              <div class="mb-3 col-md-4">
                                                  <label for="">Nombor Tag</label>
                                                  <input class="form-control" type="text" min="0" name="nombor_tag" value="{{ $ante_mortem->nombor_tag }}"
                                                  onkeyup="this.value = this.value.toUpperCase();">
                                              </div>
                          
                                              <div class="mb-3 col-md-4">
                                                  <label for="">Catatan</label>
                                                  <textarea class="form-control" name="catatan_ante_mortem" cols="100" rows="5" onkeyup="this.value = this.value.toUpperCase();">{{ $ante_mortem->catatan_ante_mortem }}</textarea>
                                                  {{-- <button class="fas fa-upload" style="float: right"></button> --}}
                                              </div>
                      
                                              <hr>
                          
                                              <div class="mb-3 col-md-3">
                                                  <label for="">Jumlah binatang yang dikondem pada pemeriksaan ante
                                                      mortem</label>
                                                  <input class="form-control" type="number" min="0" name="jumlah_dikondem" value="{{ $ante_mortem->jumlah_dikondem }}"
                                                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
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

                        <td><a href="/tunjuk-harian/{{$ante_mortem->id}}"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a>
                        </td>
                        @endrole
                            
                      </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</main>