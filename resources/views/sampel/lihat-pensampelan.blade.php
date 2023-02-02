@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <h5>Borang Pensampelan</h5>

                    <div class="card-body border border-dark">

                        @if (isset($pensampel))

                        <form action="#" method="POST" enctype="multipart/form-data">
                            
                        @else

                        <form action="/kemaskini-laporan/{{$pensampelan->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            
                        @endif

                            <div class="mb-3">

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Makmal</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control" type="text" name="makmal"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->makmal }}" readonly
                                        @else

                                        onkeyup="this.value = this.value.toUpperCase();" required
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" value="{{$pensampelan->makmal}}"
                                        @endif />
                            
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nama Penghantar</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" name="nama"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->nama }}" readonly
                                        @else

                                        onkeyup="this.value = this.value.toUpperCase();" required value="{{$pensampelan->nama}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Alamat Penghantar</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" name="alamat" required 
                                        @if (isset($pensampel))
                                        value="{{ $pensampel->alamat }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->alamat }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />

                                        {{-- <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')"></textarea> --}}
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nombor Telefon</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="telefon"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->telefon }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->telefon}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nombor Faks</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="faks"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->faks }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->faks}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Emel</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="email" name="emel"

                                        @if (isset($pensampel))
                                        value="{{ $pensampel->emel }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->emel }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />
                                       
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nombor HP</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="handphone"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->handphone }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->handphone}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="mb-3 row">

                                    <label class="col-xl-2 col-form-label">Tujuan Penghantaran</label>
                                    <div class="col ">Monitoring
                                        <input type="checkbox" name="options[]" value="opt1" />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Surveillance
                                        <input type="checkbox" name="options[]" value="opt2" />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Import
                                        <input type="checkbox" name="options[]" value="opt3" />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Eksport
                                        <input type="checkbox" name="options[]" value="opt4" />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Luar <span>Program</span> 
                                        <input type="checkbox" name="options[]" value="opt5" />
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

                            {{-- 2nd page --}}
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

                            {{-- 3rd page --}}
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

                            <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                {{-- <a href="/borang-pensampelan2" class="btn btn-secondary">Sebelum</a> --}}

                                @if (isset($pensampel))

                                <a href="/tunjuk" class="btn btn-primary">Kembali</a>

                                    
                                @else

                                <a href="/tunjuk" class="btn btn-primary">Kembali</a>
                                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                    Kemaskini
                                </button>
                                    
                                @endif
                               
                              </div>
  
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          Adakah anda ingin mengemaskini borang ini?
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

</main>

@endsection

@section('script')




@endsection