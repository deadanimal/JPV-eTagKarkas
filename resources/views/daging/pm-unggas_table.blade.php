
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body" >
              <u><h4 class="text-center ">Jadual Penemuan Post-Mortem Unggas </h4></u>
                <table class="table table-bordered table-striped text-center" style="border-width: 10px; border-color:green;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Kes</th>
                        <th scope="col">Bilangan Kes</th>
                        @role('pengurus-rumah-sembelih')
                        <th scope="col">Tindakan</th>
                        @endrole
                        
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        @if($pm_unggas)
                        @foreach ($pm_unggas as $pm)
                        

                        <tr>
                          <td scope="row" rowspan="4" style="vertical-align : middle;text-align:center;">{{$loop->iteration}}</td>
                          <td>Bukan Lesi Semasa Post Mortem - {{$pm->bukan_lesi}} </td>
                          <td>{{$pm->bil_bukan_lesi}}</td>
                          @role('pengurus-rumah-sembelih')
                          <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Kemaskini
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kemaskini Penemuan Post Mortem</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="/post-mortem-unggas/{{$pm->id}}" method="POST">
                                      @method('PUT')
                                      @csrf
                                      <div class="card">
                                          {{-- <div class="card-header">
                                              <b>Pemeriksaan Daging > Pemeriksaan Post Mortem</b>
                                          </div> --}}
          
                                          <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                                          <input type="hidden" name="unggas_id" value="{{$pemeriksaan_unggas->id}}">
          
                                          <div class="card-body">
                                              <div class="row">
                                                  <div class="mb-3 col-md-4">
                                                      <label for="">Bukan Lesi Semasa Post Mortem</label>
                                                      <select class="form-select" aria-label="Default select example" name="bukan_lesi">
                                                          <option selected > {{ $pm->bukan_lesi }} </option>
                                                          <option value="Cadaver">Cadaver(Termasuk Red Bird)</option>
                                                          <option value="Inadequate bleeding">Inadequate bleeding</option>
                                                          <option value="Inadequate bleeding">Inadequate bleeding</option>
                                                          <option value="Over scalded">Over scalded</option>
                                                      </select>
                                                  </div>
          
                                                  <div class="mb-3 col-md-4">
                                                      <label for="">Bilangan Kes</label>
                                                      <input type="number" min="0" class="form-control" name="bil_bukan_lesi" value="{{ $pm->bil_bukan_lesi }}"
                                                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">                                            
                                                  </div>
          
                                                  {{-- <div class="mb-3 col-md-4">
                                                      <label for=""></label><br>
                                                      <button type="button"  class="btn btn-primary btn-circle lg">
                                                          <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>        
                                                  </div> --}}
          
                                                  <hr class="text-primary mb-3">
          
                                                  <div class="mb-3 col-md-4">
                                                      <label for="">Lesi Semasa Post Mortem</label>
                                                      <select class="form-select" aria-label="Default select example" name="lesi_semasa_carcass">
                                                          <option selected >{{ $pm->lesi_semasa_carcass }}</option>
                                                          <option value="Abscess">Abscess</option>
                                                          <option value="Bruised">Bruised</option>
                                                          <option value="Congestion">Congestion</option>
                                                          <option value="Emaciation">Emaciation</option>
                                                          <option value="Fracture">Fracture</option>
                                                          <option value="Hemorrhage">Hemorrhage</option>
                                                          <option value="Nodules">Nodules</option>
                                                          <option value="Oedema">Oedema</option>
                                                          <option value="Runt">Runt</option>
                                                          <option value="Skin lessions">Skin lessions(scab,dermatitis)</option>
                                                      </select>
          
                                                      <label for=""></label>
          
                                                      <select class="form-select" aria-label="Default select example" name="lesi_semasa_viscera">
                                                          <option selected >{{ $pm->lesi_semasa_viscera }}</option>
                                                          <option value="Abcess">Abcess</option>
                                                          <option value="Air Sacculitis">Air Sacculitis</option>
                                                          <option value="Ascites">Ascites</option>
                                                          <option value="Congestion">Congestion</option>
                                                          <option value="Fatty Liver">Fatty liver</option>
                                                          <option value="Hemorrhage">Hemorrhage</option>
                                                          <option value="Hepatomegaly">Hepatomegaly</option>
                                                          <option value="Nodules">Nodules</option>
                                                          <option value="Oedema">Oedema</option>
                                                          <option value="Perihepatitis & Pericardiatis">Perihepatitis & Pericardiatis</option>
                                                          <option value="Peritonitis">Peritonitis </option>
                                                          <option value="Splenomegaly">Splenomegaly </option>
                                                      </select>
                                                  </div>
          
                                                  <div class="mb-3 col-md-4">
                                                      <label for="">Bilangan Kes</label>
                                                      <input type="number" min="0" class="form-control" name="bil_lesi_semasa" value="{{ $pm->bil_lesi_semasa }}"
                                                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                  </div>
          
                                                  {{-- <div class="mb-3 col-md-4">
                                                      <label for=""></label><br>
                                                      <button type="button"  class="btn btn-primary btn-circle lg">
                                                          <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                                  </div> --}}
          
                                                  <hr class="text-primary mb-3">
          
                                                  <div class="mb-3 col-md-4">
                                                      <label for="">Gastrointestinal Tract Symptoms</label>
                                                      <select class="form-select" aria-label="Default select example" name="gastro_pm">
                                                          <option selected > {{ $pm->gastro_pm }}</option>
                                                          <option value="Bloody diarrhea">Bloody diarrhea</option>
                                                          <option value="Diarrhea">Diarrhea</option>
                                                      </select>
                                                  </div>
                                                  <div class="mb-3 col-md-4">
                                                      <label for="">Bilangan Kes</label>
                                                      <input type="number" min="0" class="form-control" name="bil_gastro_pm" value="{{ $pm->bil_gastro_pm }}"
                                                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">                                        </div>
                                                  {{-- <div class="mb-3 col-md-4">
                                                      <label for=""></label><br>
                                                      <button type="button"  class="btn btn-primary btn-circle lg">
                                                          <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                                  </div> --}}
                  
                                                  <hr class="text-primary mb-3">
       
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                          </div>
                                      </div>
                                  
                                            
                                    </form>
                                  </div>
                                  {{-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div> --}}
                                </div>
                              </div>
                            </div></td>
                        
                          @endrole

                        

                            
                        </tr>
                        <tr>
                          <td>Lesi Semasa Post Mortem(CARCASS) - {{$pm->lesi_semasa_carcass}}</td>
                          <td>{{$pm->bil_lesi_semasa}}</td>   
                        </tr>
                        <tr>
                          <td>Lesi Semasa Post Mortem(VISCERA) - {{$pm->lesi_semasa_viscera}}</td>
                          <td>{{$pm->bil_lesi_semasa}}</td>   
                        </tr>
                        <tr>
                          <td>Gastrointestinal Tract System - {{$pm->gastro_pm}}</td>
                          <td>{{$pm->bil_gastro_pm}}</td>   
                        </tr>
                       
                            
                        
                      </tr>
                        @endforeach
                        @endif

                     
                     
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>


</main>