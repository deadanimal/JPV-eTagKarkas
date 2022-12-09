
<main class="content">
    <div class="container-fluid">
        <div class="card" style="border-width: 1px; border-color:black;">



            <div class="card-body" >
              <u><h4 class="text-center ">Jadual Penemuan Ante-Mortem Unggas </h4></u>
                <table class="table table-bordered text-center" style="border-width: 10px; border-color:green;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Kes</th>
                        <th scope="col">Bilangan Kes</th>
                        <th scope="col">Tindakan</th>
                        
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        @if($am_unggas)
                        @foreach ($am_unggas as $am)
                        

                        <tr>
                          <td scope="row" rowspan="4" style="vertical-align : middle;text-align:center;">{{$loop->iteration}}</td>
                          <td>General Condition - {{$am->general}} </td>
                          <td>{{$am->bil_kes_general}}</td>
                          <td rowspan="4" style="vertical-align : middle;text-align:center;">
                            <a class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->iteration}}">Kemaskini</a></td>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: aquamarine">
                                  <h5 class="modal-title" id="exampleModalLabel">Kemaskini Penemuan Ante Mortem</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form action="/ante-mortem-unggas/{{$am->id}}" method="POST">
                                    @method('PUT')
                                    @csrf

                                      <div class="row">
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">General Condition</label>
                                              <select class="form-select" aria-label="Default select example" name="general">
                                                  <option selected >{{ $am->general }}</option>
                                                  <option value="Bruised">Bruised</option>
                                                  <option value="Cyanosis">Cyanosis</option>
                                                  <option value="Depressed/Lethargy">Depressed/Lethargy</option>
                                                  <option value="Dirty Ruffled/Poor defethering">Dirty Ruffled/Poor defethering</option>
                                                  <option value="Distended abdomen">Distended abdomen</option>
                                                  <option value="Emaciation">Emaciation</option>
                                                  <option value="Fracture">Fracture</option>
                                                  <option value="Herrmohage">Herrmohage</option>
                                                  <option value="Oedema">Oedema</option>
                                                  <option value="Pox lessions">Pox lessions</option>
                                                  <option value="Red eye">Red eye</option>
                                                  <option value="Runt">Runt</option>
                                                  <option value="Wounds">Wounds</option>
  
                                              </select>
                                          </div>
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">Bilangan Kes</label><br>
                                              <input type="number" min="0" class="form-control" name="bil_kes_general" value="{{ $am->bil_kes_general }}"
                                              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                          </div>
          
                                          {{-- <div class="mb-3 col-md-4">
                                              <label for=""></label><br>
                                              <button type="button"  class="btn btn-primary btn-circle lg">
                                                  <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>        
                                          </div> --}}
          
                                          <hr class="text-primary mb-3">
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">Respiratory System</label>
                                              <select class="form-select" aria-label="Default select example" name="respiratory">
                                                  <option selected >{{ $am->respiratory }}</option>
                                                  <option value="Discharge">Discharge (Eye,Nasal)</option>
                                                  <option value="Respiratory distress">Respiratory distress(Gasping,sneezing,coughing,rales,wheezing)</option>
                                                  <option value="Swollen">Swollen(Head,eye,face)</option>
                                              </select>
                                          </div>
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">Bilangan Kes</label>
                                              <input type="number" class="form-control" name="bil_kes_respiratory" min="0" value="{{ $am->bil_kes_respiratory }}"
                                              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                          </div>
          
                                          {{-- <div class="mb-3 col-md-4">
                                              <label for=""></label><br>
                                              <button type="button"  class="btn btn-primary btn-circle lg">
                                                  <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button> 
                                          </div> --}}
          
                                          <hr class="text-primary mb-3">
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">CNS Symptoms</label>
                                              <select class="form-select" aria-label="Default select example" name="cns">
                                                  <option selected >{{ $am->cns }}</option>
                                                  <option value="Ataxia">Ataxia/Coordination</option>
                                                  <option value="Drooping wings">Drooping wings</option>
                                                  <option value="Lameness">Lameness</option>
                                                  <option value="Opisthotonus">Opisthotonus</option>
                                                  <option value="Paralysis">Paralysis</option>
                                                  <option value="Staggering">Staggering</option>
                                                  <option value="Torticolis">Torticolis</option>
                                              </select>
                                          </div>
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">Bilangan Kes</label>
                                              <input type="number" class="form-control" name="bil_kes_cns" min="0" value="{{ $am->bil_kes_cns }}"
                                              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                          </div>
{{--           
                                          <div class="mb-3 col-md-4">
                                              <label for=""></label><br>
                                              <button type="button"  class="btn btn-primary btn-circle lg">
                                                  <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                          </div> --}}
          
                                          <hr class="text-primary mb-3">
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">Gastrointestinal Tract System</label>
                                              <select class="form-select" aria-label="Default select example" name="gastro">
                                                  <option selected > {{ $am->gastro }}</option>
                                                  <option value="Bloody diarrhea">Bloody diarrhea</option>
                                                  <option value="Diarrhea">Diarrhea</option>
                                              </select>
                                          </div>
          
                                          <div class="mb-3 col-md-4">
                                              <label for="">Bilangan Kes</label>
                                              <input type="number" class="form-control" name="bil_kes_gastro" min="0" value="{{ $am->bil_kes_gastro }}"
                                              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                          </div>
          
                                          {{-- <div class="mb-3 col-md-4">
                                              <label for=""></label><br>
                                              <button type="button"  class="btn btn-primary btn-circle lg">
                                                  <i class="align-middle me-2 fas fa-fw fa-circle-plus"></i>Tambah</button>
                                          </div> --}}
          
                                          <hr class="text-primary mb-3">

                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                          </div>
      
                                      </div>
                                        
                                    
                                </form>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                            
                        </tr>
                        <tr>
                          <td>Respiratory System - {{$am->respiratory}}</td>
                          <td>{{$am->bil_kes_respiratory}}</td>   
                        </tr>
                        <tr>
                          <td>CNS Symptoms - {{$am->cns}}</td>
                          <td>{{$am->bil_kes_cns}}</td>   
                        </tr>
                        <tr>
                          <td>Gastrointestinal Tract System - {{$am->gastro}}</td>
                          <td>{{$am->bil_kes_gastro}}</td>   
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