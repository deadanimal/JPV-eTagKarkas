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
                                        <input type="checkbox" name="options[]" value="opt1" 
                                        @foreach ($cbds as $cbd)
                                            @if ($cbd == "opt1")
                                                checked
                                            @endif
                                        @endforeach
                                        />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Surveillance
                                        <input type="checkbox" name="options[]" value="opt2"
                                        @foreach ($cbds as $cbd)
                                        @if ($cbd == "opt2")
                                            checked
                                        @endif
                                    @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Import
                                        <input type="checkbox" name="options[]" value="opt3"
                                        @foreach ($cbds as $cbd)
                                        @if ($cbd == "opt3")
                                            checked
                                        @endif
                                    @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Eksport
                                        <input type="checkbox" name="options[]" value="opt4"
                                        @foreach ($cbds as $cbd)
                                        @if ($cbd == "opt4")
                                            checked
                                        @endif
                                    @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Luar <span>Program</span> 
                                        <input type="checkbox" name="options[]" value="opt5"
                                        @foreach ($cbds as $cbd)
                                        @if ($cbd == "opt5")
                                            checked
                                        @endif
                                    @endforeach />
                                    </div>

                                        
                                    
                                    
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">ID Premis</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="id_premis"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->id_premis }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->id_premis}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                               
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nama Premis</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" name="nama_premis"

                                        @if (isset($pensampel))
                                        value="{{ $pensampel->nama_premis }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->nama_premis }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />
                                       
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Alamat Premis</label>
                                    </div>
                                    <div class="col-6">

                                        <input class="form-control" type="text" name="alamat" required
                                         
                                        @if (isset($pensampel))
                                        value="{{ $pensampel->alamat_premis }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->alamat_premis }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />

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
                                        <input class="form-control" type="text" name="ladang" 

                                        @if (isset($pensampel))
                                        value="{{ $pensampel->ladang }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->ladang }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />
                                       
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Alamat Ladang</label>
                                    </div>
                                    <div class="col-6">

                                        <input class="form-control" type="text" name="ladang" 

                                        @if (isset($pensampel))
                                        value="{{ $pensampel->alamat_ladang }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->alamat_ladang }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">ID Ladang</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="id_ladang" 

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->id_ladang }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->id_ladang}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nombor Telefon</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="telefon_ladang"

                                         @if (isset($pensampel))
                                            value="{{ $pensampel->telefon_ladang }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->telefon_ladang}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Nombor GPS</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="gps_ladang"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->gps_ladang }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->gps_ladang}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="mb-3 row">

                                    <label class="col-xl-2 col-form-label">Jenis Ternakan</label>
                                    <div class="col ">Ayam
                                        <input type="checkbox" name="options_ladang[]" value="opl1"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl1")
                                                checked
                                            @endif
                                        @endforeach  />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Itik
                                        <input type="checkbox" name="options_ladang[]" value="opl2"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl2")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Lembu
                                        <input type="checkbox" name="options_ladang[]" value="opl3"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl3")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Kerbau
                                        <input type="checkbox" name="options_ladang[]" value="opl4"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl4")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Kambing
                                        <input type="checkbox" name="options_ladang[]" value="opl5"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl5")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Bebiri
                                        <input type="checkbox" name="options_ladang[]" value="opl6"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl6")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Babi
                                        <input type="checkbox" name="options_ladang[]" value="opl7"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl7")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Walit
                                        <input type="checkbox" name="options_ladang[]" value="opl8"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl8")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    <label class="col"></label>
                                    <div class="col ">Lain-lain
                                        <input type="checkbox" name="options_ladang[]" value="opl9"
                                        @foreach ($ladangs as $cbd)
                                            @if ($cbd == "opl9")
                                                checked
                                            @endif
                                        @endforeach />
                                    </div>
                                    
                                </div>
                                <br>
                                
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Tarikh Kutip</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="date" name="tarikh_kutip"

                                        @if (isset($pensampel))
                                        value="{{ $pensampel->tarikh_kutip }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->tarikh_kutip }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">ID Sampel</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="number" name="id_sampel"

                                        @if (isset($pensampel))
                                            value="{{ $pensampel->id_sampel }}" readonly
                                        @else

                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required value="{{$pensampelan->id_sampel}}"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')" 
                                        @endif />
                                       
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Jenis Sampel</label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" type="text" name="jenis_sampel"

                                        @if (isset($pensampel))
                                        value="{{ $pensampel->jenis_sampel }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->jenis_sampel }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label class="form-label">Maklumat lain</label>
                                    </div>
                                    <div class="col-6">

                                        <input class="form-control" type="text" name="maklumat" required
                                         
                                        @if (isset($pensampel))
                                        value="{{ $pensampel->maklumat }}" readonly
                                        @else
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $pensampelan->maklumat }}"
                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                        @endif />

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
                                                <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih1" id="flexCheckDefault"
                                                @foreach ($kebersihans as $bersih)
                                                @if ($bersih == "bersih1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Standard plate
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih2" id="flexCheckChecked" 
                                                @foreach ($kebersihans as $bersih)
                                                @if ($bersih == "bersih2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  E.coli
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih3" id="flexCheckChecked"
                                                @foreach ($kebersihans as $bersih)
                                                @if ($bersih == "bersih3")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Coliform count
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kebersihan[]" value="bersih4" id="flexCheckChecked" 
                                                @foreach ($kebersihans as $bersih)
                                                @if ($bersih == "bersih4")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat1" id="flexCheckDefault" 
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Staphyloccocus aureus - Kaedah Spread Plate
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat2" id="flexCheckChecked"
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Campylobacter jejuni. - Kaedah Isolation & Identification
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat3" id="flexCheckChecked" 
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat3")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Listeria monocytogenes - Kaedah Isolation & Identification
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat4" id="flexCheckChecked" 
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat4")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Sarcocysts - Kaedah Organoleptic
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat5" id="flexCheckChecked" 
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat5")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Salmonella.sp  - Kaedah Isolation & Identification
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat6" id="flexCheckChecked"
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat6")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  E.coli - Kaedah Isolation & Identification
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="patogen[]" value="pat7" id="flexCheckChecked" 
                                                @foreach ($patogens as $patogen)
                                                @if ($patogen == "pat7")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="kualiti[]" value="kualiti1" id="flexCheckDefault" 
                                                @foreach ($kualitis as $kualiti)
                                                @if ($kualiti == "kualiti1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Lactic Acid Bacteria
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kualiti[]" value="kualiti2" id="flexCheckChecked"
                                                @foreach ($kualitis as $kualiti)
                                                @if ($kualiti == "kualiti2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Antimicrobial
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kualiti[]" value="pest1" id="flexCheckChecked"
                                                @foreach ($kualitis as $kualiti)
                                                @if ($kualiti == "kualiti3")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest1" id="flexCheckDefault" 
                                                @foreach ($pestisids as $pestisid)
                                                @if ($pestisid == "pest1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Saringan Pestisid
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest2" id="flexCheckChecked" 
                                                @foreach ($pestisids as $pestisid)
                                                @if ($pestisid == "pest2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Organochlorine
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest3" id="flexCheckChecked" 
                                                @foreach ($pestisids as $pestisid)
                                                @if ($pestisid == "pest3")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Organophosphorus
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pestisid[]" value="pest4" id="flexCheckChecked" 
                                                @foreach ($pestisids as $pestisid)
                                                @if ($pestisid == "pest4")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="aditif[]" value="ad1" id="flexCheckDefault" 
                                                @foreach ($aditifs as $aditif)
                                                @if ($aditif == "ad1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Nitrit
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="aditif[]" value="ad2" id="flexCheckChecked" 
                                                @foreach ($aditifs as $aditif)
                                                @if ($aditif == "ad2")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="logam[]" value="log1" id="flexCheckDefault" 
                                                @foreach ($logams as $logam)
                                                @if ($logam == "log1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Arsenik
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="logam[]" value="log2" id="flexCheckChecked" 
                                                @foreach ($logams as $logam)
                                                @if ($logam == "log2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Antimoni
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="logam[]" value="log3" id="flexCheckChecked" 
                                                @foreach ($logams as $logam)
                                                @if ($logam == "log3")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Plumbum
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="logam[]" value="log4" id="flexCheckChecked"
                                                @foreach ($logams as $logam)
                                                @if ($logam == "log4")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Kadmium
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="logam[]" value="log5" id="flexCheckChecked" 
                                                @foreach ($logams as $logam)
                                                @if ($logam == "log5")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="mineral[]" value="min1" id="flexCheckDefault" 
                                                @foreach ($minerals as $mineral)
                                                @if ($mineral == "min1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Kuprum
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="hidden" name="mineral[]" value="min2" id="flexCheckDefault" 
                                                @foreach ($minerals as $mineral)
                                                @if ($mineral == "min2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  
                                                </label>
                                              </div>
                                             
                                              
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <label class="form-label">Identifikasi Spesis</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden1" id="flexCheckDefault" 
                                                @foreach ($identifikasis as $identifikasi)
                                                @if ($identifikasi == "iden1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Babi
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden2" id="flexCheckChecked" 
                                                @foreach ($identifikasis as $identifikasi)
                                                @if ($identifikasi == "iden2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Lembu
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden3" id="flexCheckChecked" 
                                                @foreach ($identifikasis as $identifikasi)
                                                @if ($identifikasi == "iden3")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Bebiri
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden4" id="flexCheckChecked" 
                                                @foreach ($identifikasis as $identifikasi)
                                                @if ($identifikasi == "iden4")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Ayam
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden5" id="flexCheckChecked" 
                                                @foreach ($identifikasis as $identifikasi)
                                                @if ($identifikasi == "iden5")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Kerbau
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="identifikasi[]" value="iden6" id="flexCheckChecked" 
                                                @foreach ($identifikasis as $identifikasi)
                                                @if ($identifikasi == "iden6")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="ketulenan[]" value="tulen1" id="flexCheckDefault" 
                                                @foreach ($ketulenans as $ketulenan)
                                                @if ($ketulenan == "tulen1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Profil FTIR
                                                </label>
                                              </div>
                                              <div class="form-check" >
                                                <input class="form-check-input" type="hidden" name="ketulenan[]" value="tulen2" id="flexCheckDefault" 
                                                @foreach ($ketulenans as $ketulenan)
                                                @if ($ketulenan == "tulen2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault" >
                                                  
                                                </label>
                                              </div>
                                              
                                              
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <label class="form-label">Ubatan Veterinar</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat1" id="flexCheckDefault" 
                                                @foreach ($ubatans as $ubatan)
                                                @if ($ubatan == "ubat1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Antibacterials
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat2" id="flexCheckChecked" 
                                                @foreach ($ubatans as $ubatan)
                                                @if ($ubatan == "ubat2")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Anticoccidial
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat3" id="flexCheckChecked" 
                                                @foreach ($ubatans as $ubatan)
                                                @if ($ubatan == "ubat3")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                  Amphenicol
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ubatan[]" value="ubat4" id="flexCheckChecked" 
                                                @foreach ($ubatans as $ubatan)
                                                @if ($ubatan == "ubat4")
                                                    checked
                                                @endif
                                                @endforeach >
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
                                                <input class="form-check-input" type="checkbox" name="hormon[]" value="hormon1" id="flexCheckDefault" 
                                                @foreach ($hormons as $hormon)
                                                @if ($hormon == "hormon1")
                                                    checked
                                                @endif
                                                @endforeach >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Beta agonist
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hormon[]" value="hormon2" id="flexCheckChecked" 
                                                @foreach ($hormons as $hormon)
                                                @if ($hormon == "hormon2")
                                                    checked
                                                @endif
                                                @endforeach >
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