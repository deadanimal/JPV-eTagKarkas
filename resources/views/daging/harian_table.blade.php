
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

    @role('pengurus-rumah-sembelih')
    {{-- Catatan Senarai Ternakan - daily editable table --}}
    <div class="container-fluid">
      <div class="card" style="border-width: 1px; border-color:black;">



          <div class="card-body" >
            <u><h4 class="text-center ">Catatan Senarai Ternakan </h4></u>

              <a href="/catatan/{{$pemeriksaan->id}}" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right">Tambah</a>
              <!-- Button trigger modal -->

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Catatan Senarai Ternakan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="/catatan" method="POST">
                        @csrf

                        <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                        <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan->id}}">
        
                          <div class="col-md-6">

                            <div class="col-6">
                                <label class="form-label">Nombor Tag</label>
                            </div>
                            <input class="form-control" type="text" name="tag" onkeyup="this.value = this.value.toUpperCase();" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />
                          

                            <div class="col-6">
                                <label class="form-label">Jantina</label>
                            </div>
                            <input class="form-control" type="text" name="jantina" onkeyup="this.value = this.value.toUpperCase();" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />

                              <div class="col-6">
                                <label class="form-label">Baka</label>
                              </div>
                              <input class="form-control" type="text" name="baka" onkeyup="this.value = this.value.toUpperCase();" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />

                              <div class="col-6">
                                <label class="form-label">Tarikh</label>
                              </div>
                              <input class="form-control" type="date" name="tarikh" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />

                                <br>

                              

                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
        
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>

              <table class="table text-center" style="border-width: 10px; border-color:green;">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nombor Tag</th>
                      <th scope="col">Jantina</th>
                      <th scope="col">Baka</th>
                      <th scope="col">Tarikh Disembelih</th>
                      <th scope="col">Tindakan</th>

                    </tr>
                  </thead>
                  <tbody>

                    @foreach($catatans as $catatan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$catatan->tag}}</td>
                        <td>{{$catatan->jantina}}</td>
                        <td>{{$catatan->baka}}</td>
                        <td>{{$catatan->tarikh}}</td>
                        <td><!-- Button trigger modal -->
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->iteration}}">
                            Kemaskini
                          </button> </td>
                          
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Kemaskini Tag Karkas</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form action="/catatan/{{$catatan->id}}" method="POST">
                                    @method('PUT')
                                    @csrf
            
                                    <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                                    <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan->id}}">
                    
                                      <div class="col-md-6">
            
                                        <div class="col-6">
                                            <label class="form-label">Nombor Tag</label>
                                        </div>
                                        <input class="form-control" type="text" name="tag" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$catatan->tag}}" />
                                      
            
                                        <div class="col-6">
                                            <label class="form-label">Jantina</label>
                                        </div>
                                        <input class="form-control" type="text" name="jantina" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$catatan->jantina}}"/>
            
                                          <div class="col-6">
                                            <label class="form-label">Baka</label>
                                          </div>
                                          <input class="form-control" type="text" name="baka" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$catatan->baka}}" />
            
                                          <div class="col-6">
                                            <label class="form-label">Tarikh</label>
                                          </div>
                                          <input class="form-control" type="date" name="tarikh" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$catatan->tarikh}}" />
            
                                            <br>
            
                                          
            
                                    </div>
            
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                    
                                  </form>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                       

                    </tr>
                    @endforeach

                    
                  </tbody>
                </table>
          </div>
      </div>
  </div>

  @endrole

</main>

{{-- <script>
  $('#datepicker').datepicker({
  uiLibrary: 'bootstrap5'
  });
</script> --}}