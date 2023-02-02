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
                              <form action="/laporan3" method="POST" enctype="multipart/form-data">
                                  @csrf
      
                                  <div class="row">
                                      <div class="col md-6">
      
                                          <div class="mb-3">
      
                                              <div class="row mb-3">
                                                  <div class="col-6">
                                                      <label class="form-label">Kebersihan & Sanitasi</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Standard plate
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        E.coli
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih3" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Coliform count
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih4" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Yeast & mould count
                                                      </label>
                                                    </div>
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-4">
                                                      <label class="form-label">Patogen</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Staphyloccocus aureus - Kaedah Spread Plate
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Campylobacter jejuni. - Kaedah Isolation & Identification
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat3" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Listeria monocytogenes - Kaedah Isolation & Identification
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat4" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Sarcocysts - Kaedah Organoleptic
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat5" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Salmonella.sp  - Kaedah Isolation & Identification
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat6" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        E.coli - Kaedah Isolation & Identification
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="patogen[]" value="pat7" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Yersinia enterocolitica - Kaedah Isolation & Identification
                                                      </label>
                                                    </div>
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-8">
                                                      <label class="form-label">Kualiti & Keselamatan Mirobiologi</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kualiti[]" value="kualiti1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Lactic Acid Bacteria
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kualiti[]" value="kualiti2" id="flexCheckChecked" >
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Antimicrobial
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="kualiti[]" value="kualiti3" id="flexCheckChecked" >
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Sterility test
                                                      </label>
                                                    </div>
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-8">
                                                      <label class="form-label">Pestisid Kaedah(GC-MS/MS)</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Saringan Pestisid
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Organochlorine
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest3" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Organophosphorus
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest4" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Sintetik Pyrethroid
                                                      </label>
                                                    </div>
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-8">
                                                      <label class="form-label">Aditif(Kaedah Ion Chromatography)</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="aditif[]" value="ad1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Nitrit
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="aditif[]" value="ad2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                          Nitrat
                                                      </label>
                                                    </div>
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-8">
                                                      <label class="form-label">Logam Berat(Kaedah ICP-MS)</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="logam[]" value="log1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Arsenik
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="logam[]" value="log2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Antimoni
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="logam[]" value="log3" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Plumbum
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="logam[]" value="log4" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Kadmium
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="logam[]" value="log5" id="flexCheckChecked">
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
                                                      <input class="form-check-input" type="checkbox" name="mineral[]" value="min1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Kuprum
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="hidden" name="mineral[]" value="min2" id="flexCheckDefault" checked>
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        
                                                      </label>
                                                    </div>
                                                   
                                                    
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-4">
                                                      <label class="form-label">Identifikasi Spesis</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Babi
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Lembu
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden3" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Bebiri
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden4" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Ayam
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden5" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Kerbau
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden6" id="flexCheckChecked">
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
                                                      <input class="form-check-input" type="checkbox" name="ketulenan[]" value="tulen1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Profil FTIR
                                                      </label>
                                                    </div>
                                                    <div class="form-check" >
                                                      <input class="form-check-input" type="hidden" name="ketulenan[]" value="tulen2" id="flexCheckDefault" checked>
                                                      <label class="form-check-label" for="flexCheckDefault" >
                                                        
                                                      </label>
                                                    </div>
                                                    
                                                    
                                              </div>
      
                                              <div class="row mb-3">
                                                  <div class="col-4">
                                                      <label class="form-label">Ubatan Veterinar</label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Antibacterials
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Anticoccidial
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat3" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Amphenicol
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat4" id="flexCheckChecked">
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
                                                      <input class="form-check-input" type="checkbox" name="hormon[]" value="hormon1" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                        Beta agonist
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="hormon[]" value="hormon2" id="flexCheckChecked">
                                                      <label class="form-check-label" for="flexCheckChecked">
                                                        Stilbene
                                                      </label>
                                                    </div>
                                              </div>
      
                                          </div>
      
                                      </div>
                                  </div>
          
            
                                  <!-- Button -->
          
                                  <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                    <a href="/tunjuk" class="btn btn-primary">Kembali</a>
                                    <a href="/borang-pensampelan2" class="btn btn-secondary">Sebelum</a>
                                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                        Hantar
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
                                              Adakah anda ingin menghantar borang ini?
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
                    </div>

                </div>
            </div>
        </div>



    </div>



</main>

@endsection

@section('script')


@endsection