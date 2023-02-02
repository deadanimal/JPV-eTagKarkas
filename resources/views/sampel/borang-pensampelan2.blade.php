@extends('layouts.app')

@section('styles')
    <style>
        /* remove arrow in input number */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pensampelan
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Borang Pensampelan
                                </h5>
                            </div>

                            <div class="card-body">
                              <form action="/laporan2" method="POST" enctype="multipart/form-data">
                                  @csrf
          
                                  <div class="mb-3">
    
                                      
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Nama Ladang</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="text" name="ladang" onkeyup="this.value = this.value.toUpperCase();" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" />
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Alamat Ladang</label>
                                          </div>
                                          <div class="col-6">
                                              <textarea class="form-control" rows=5 name="alamat_ladang" onkeyup="this.value = this.value.toUpperCase();" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')"></textarea>
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">ID Ladang</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="number" name="id_ladang" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Nombor Telefon</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="number" name="telefon_ladang" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Nombor GPS</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="number" name="gps_ladang" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                          </div>
                                      </div>
    
                                      <div class="mb-3 row">
    
                                          <label class="col-xl-2 col-form-label">Jenis Ternakan</label>
                                          <div class="col ">Ayam
                                              <input type="checkbox" name="options_ladang[]" value="opl1"  />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Itik
                                              <input type="checkbox" name="options_ladang[]" value="opl2" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Lembu
                                              <input type="checkbox" name="options_ladang[]" value="opl3" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Kerbau
                                              <input type="checkbox" name="options_ladang[]" value="opl4" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Kambing
                                              <input type="checkbox" name="options_ladang[]" value="opl5" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Bebiri
                                              <input type="checkbox" name="options_ladang[]" value="opl6" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Babi
                                              <input type="checkbox" name="options_ladang[]" value="opl7" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Walit
                                              <input type="checkbox" name="options_ladang[]" value="opl8" />
                                          </div>
                                          <label class="col"></label>
                                          <div class="col ">Lain-lain
                                              <input type="checkbox" name="options_ladang[]" value="opl9" />
                                          </div>
                                          
                                      </div>
                                      <br>
                                      
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Tarikh Kutip</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="date" name="tarikh_kutip" onkeyup="this.value = this.value.toUpperCase();" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" />
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">ID Sampel</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="number" name="id_sampel" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Jenis Sampel</label>
                                          </div>
                                          <div class="col-6">
                                              <input class="form-control" type="text" name="jenis_sampel" onkeyup="this.value = this.value.toUpperCase();" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')" />
                                          </div>
                                      </div>
    
                                      <div class="row mb-3">
                                          <div class="col-2">
                                              <label class="form-label">Maklumat lain</label>
                                          </div>
                                          <div class="col-6">
                                              <textarea class="form-control" rows=5 name="maklumat" onkeyup="this.value = this.value.toUpperCase();" required
                                              oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                              oninput="this.setCustomValidity('')"></textarea>
                                          </div>
                                      </div>
    
    
                                  </div>
          
                                  <!-- Button trigger modal -->

                                  <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                    <a href="/borang-pensampelan" class="btn btn-secondary">Sebelum</a>
                                    <button class="btn btn-secondary" type="submit" title="Seterusnya">Seterusnya</button>
                                    {{-- <a href="/borang-pensampelan3">pg3</a> --}}

                                  </div>  
                              </form>
                                                
                        </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>



</main>

@endsection

@section('script')



@endsection