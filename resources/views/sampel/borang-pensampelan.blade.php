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

                            <div id="smartwizard-default-success" class="wizard wizard-success mb-4">
								<ul class="nav">
									<li class="nav-item"><a class="nav-link" href="#default-success-step-1">Borang Pensampelan<br /><small>MKAV01A</small></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="#default-success-step-2">Borang Pensampelan<br /><small>Salak Tinggi</small></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="#default-success-step-3">Borang Pensampelan<br /><small>Salak Tinggi</small></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="#default-success-step-4">Borang Pensampelan<br /><small>Salak Tinggi</small></a>
									</li>
								</ul>

								<div class="tab-content">
									<div id="default-success-step-1" class="tab-pane" role="tabpanel">
                                        
                                        <div class="card-body">
                                            <form action="/laporan-pensampelan" method="POST" enctype="multipart/form-data">
                                                @csrf
                        
                                                <div class="mb-3">
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Makmal</label>
                                                        </div>
                                                        <div class="col-4">
                                                            <input class="form-control" type="text" name="makmal" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nama Penghantar</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Alamat Penghantar</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nombor Telefon</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="telefon" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nombor Faks</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="faks" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Emel</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="email" name="emel" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nombor HP</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="handphone" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="mb-3 row">
            
                                                        <label class="col-xl-2 col-form-label">Tujuan Penghantaran</label>
                                                        <div class="col ">Monitoring
                                                            <input type="checkbox" name="jenis1" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Surveillance
                                                            <input type="checkbox" name="jenis2" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Import
                                                            <input type="checkbox" name="jenis3" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Eksport
                                                            <input type="checkbox" name="jenis4" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Luar <span>Program</span> 
                                                            <input type="checkbox" name="jenis5" />
                                                        </div>
                                                        
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">ID Premis</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="id_premis" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                   
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nama Premis</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="text" name="nama_premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Alamat Premis</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <textarea class="form-control" rows=5 name="alamat_premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
                                                    </div>
            
            
                        
                                                   
                        
                                                </div>
                        
                                               
                                            
                        
                                        
                        
                                                <!-- Button trigger modal -->
                        
                                                <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                                    <a href="/tunjuk" class="btn btn-primary">Kembali</a>
                                                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                                        Simpan
                                                    </button>
                                                </div>
              
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Adakah anda ingin menyimpan borang ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                            <button class="btn btn-success text-center" type="submit" style="float: right">Ya</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                
                                            </form>

                                        </div>
									</div>
									<div id="default-success-step-2" class="tab-pane" role="tabpanel">
										<div class="card-body">
                                            <form action="/laporan-pensampelan" method="POST" enctype="multipart/form-data">
                                                @csrf
                        
                                                <div class="mb-3">
            
                                                    
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nama Ladang</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Alamat Ladang</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">ID Ladang</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="id_premis" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nombor Telefon</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="telefon" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="row mb-3">
                                                        <div class="col-2">
                                                            <label class="form-label">Nombor GPS</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="number" name="faks" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                        </div>
                                                    </div>
            
                                                    <div class="mb-3 row">
            
                                                        <label class="col-xl-2 col-form-label">Jenis Ternakan</label>
                                                        <div class="col ">Ayam
                                                            <input type="checkbox" name="jenis1" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Itik
                                                            <input type="checkbox" name="jenis2" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Lembu
                                                            <input type="checkbox" name="jenis3" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Kerbau
                                                            <input type="checkbox" name="jenis4" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Kambing
                                                            <input type="checkbox" name="jenis5" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Bebiri
                                                            <input type="checkbox" name="jenis5" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Babi
                                                            <input type="checkbox" name="jenis5" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Walit
                                                            <input type="checkbox" name="jenis5" />
                                                        </div>
                                                        <label class="col"></label>
                                                        <div class="col ">Lain-lain
                                                            <input type="checkbox" name="jenis5" />
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
                                                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                                        Simpan
                                                    </button>
                                                </div>
              
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Adakah anda ingin menyimpan borang ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                            <button class="btn btn-success text-center" type="submit" style="float: right">Ya</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            
                                        </div>
									</div>
									<div id="default-success-step-3" class="tab-pane" role="tabpanel">
										<div class="card-body">
                                            <form action="/laporan-pensampelan" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">
                                                    <div class="col md-6">

                                                        <div class="mb-3">
            
                                                            <div class="row mb-3">
                                                                <div class="col-6">
                                                                    <label class="form-label">Kebersihan & Sanitasi</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Standard Plate
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      E.coli
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Coliform
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Yeast & mould
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Patogen</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Staphyloccocus
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Campylobacter
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Lysteria
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Sarcocysts
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Salmonella.sp
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-6">
                                                                    <label class="form-label">Kualiti & Keselamatan Mirobiologi</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Lactic Acid Bacteria
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Antimicrobial
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Sterility test
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Pestisid</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Saringan Pestisid
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Organochlorine
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Organophosphorus
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Sintetik Pyrethroid
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Aditif</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Nitrit
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Nitrat
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Logam Berat</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Arsenik
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Antimoni
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Plumbum
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Kadmium
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Merkuri
                                                                    </label>
                                                                  </div>
                                                            </div>
    
                                                        </div>

                                                    </div>

                                                    <div class="col md-6">

                                                        <div class="mb-3">
            
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Mineral</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Kuprum
                                                                    </label>
                                                                  </div>
                                                                 
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Identifikasi Spesis</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Babi
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Lembu
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Bebiri
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Ayam
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Kerbau
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Kambing
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Ketulenan</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Profil FTIR
                                                                    </label>
                                                                  </div>
                                                                 
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Ubatan Veterinar</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Antibacterials
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Anticoccidial
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Amphenicol
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      B-lactam
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                                            <div class="row mb-3">
                                                                <div class="col-4">
                                                                    <label class="form-label">Hormon</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                      Beta agonist
                                                                    </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Stilbene
                                                                    </label>
                                                                  </div>
                                                            </div>
        
                                    
        
        
                                                        </div>

                                                    </div>
                                                </div>
                        
                                               
                        
                                               
                                            
                        
                                        
                        
                                                <!-- Button trigger modal -->
                        
                                                <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                                        Simpan
                                                    </button>
                                                </div>
              
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Adakah anda ingin menyimpan borang ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                            <button class="btn btn-success text-center" type="submit" style="float: right">Ya</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                
                                            </form>

                                        </div>
									</div>
									<div id="default-success-step-4" class="tab-pane" role="tabpanel">
										Step Content 4
									</div>
								</div>
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
<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$("#smartwizard-default-primary").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-success").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-danger").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-warning").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-primary").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-success").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-danger").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-warning").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			// Validation
			var $validationForm = $("#smartwizard-validation");
			$validationForm.validate({
				errorPlacement: function errorPlacement(error, element) {
					$(element).parents(".error-placeholder").append(
						error.addClass("invalid-feedback small d-block")
					)
				},
				highlight: function(element) {
					$(element).addClass("is-invalid");
				},
				unhighlight: function(element) {
					$(element).removeClass("is-invalid");
				},
				rules: {
					"wizard-confirm": {
						equalTo: "input[name=\"wizard-password\"]"
					}
				}
			});
			$validationForm
				.smartWizard({
					autoAdjustHeight: false,
					backButtonSupport: false,
					useURLhash: false,
					showStepURLhash: false,
					toolbarSettings: {
						toolbarExtraButtons: [$("<button class=\"btn btn-submit btn-primary\" type=\"button\">Finish</button>")]
					}
				})
				.on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
					if (stepDirection === 1) {
						return $validationForm.valid();
					}
					return true;
				});
			$validationForm.find(".btn-submit").on("click", function() {
				if (!$validationForm.valid()) {
					return;
				}
				alert("Great! The form is valid and ready to submit.");
				return false;
			});
		});
	</script>


@endsection