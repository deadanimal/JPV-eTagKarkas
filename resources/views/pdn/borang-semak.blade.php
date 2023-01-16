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
                Pemeriksaan Dalam Negara
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="col-12 col-xl-12">

                        {{-- wizard  --}}
                        <div id="smartwizard-arrows-success" class="wizard wizard-success mb-4">
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="#arrows-success-step-1">Seksyen A<br /><small></small></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#arrows-success-step-2">Seksyen B - E<br /><small></small></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#arrows-success-step-3">Seksyen F - J<br /><small></small></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#arrows-success-step-4">Seksyen K - M<br /><small></small></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="arrows-success-step-1" class="tab-pane" role="tabpanel">
                                    <div class="card border border-dark">
                                        <div class="card-header">
                                            <h5 class="card-title">A. Maklumat Pemeriksaan: </h5>
                                        </div>
            
                                        <div class="card-body">
                                            <form action="/borang-semak" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                        
                                                    <div class="col-md-6">
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tarikh Pemeriksaan</label>
                                                        </div>
                                                      
                                                            <input class="form-control" type="date" name="tarikh" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                      
            
                                                        <div class="col-6">
                                                            <label class="form-label">Rujukan</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="rujukan" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
            
                                                        <div class="col-6">
                                                            <label class="form-label">Nama Establishment</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="establishment" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
                                                       
            
                                                        <div class="col-6">
                                                            <label class="form-label">Nombor Telefon</label>
                                                        </div>
                                                        <input class="form-control" type="number" name="telefon" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
            
                                                        <div class="col-6">
                                                            <label class="form-label">Alamat Establishment</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
            
                                                        <div class="col-6">
                                                            <label class="form-label">Jenis Establishment</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="jenis" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tujuan Pemeriksaan</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="tujuan" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
            
                                                        <div class="col-6">
                                                            <label class="form-label">Jenis Premis/Loji</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
                                                    </div>
            
                                                    
            
                                                   
                                                    <div class="col md-6 ms-auto">
                                                        <div class="col-6">
                                                            <label class="form-label">Pegawai Pemeriksa DVS</label>
                                                        </div>
                                                        <div class="">
                                                            
                                                            <input class="form-control" type="text" name="pemeriksa_dvs" onkeyup="this.value = this.value.toUpperCase();" required
                                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                            oninput="this.setCustomValidity('')" />
                                                           
                                                        </div>
            
                                                        <br>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 1</label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="pemeriksa1" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                           
                                                        </div>
            
                        
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 2</label>
                                                        </div>
                                                        <div >
                                                           
                                                                <textarea class="form-control" rows=5 name="pemeriksa2" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                          
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 3</label>
                                                        </div>
                                                        <div>
                                                           
                                                                <textarea class="form-control" rows=5 name="pemeriksa3" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                           
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 4</label>
                                                        </div>
                                                        <div>
                                                           
                                                                <textarea class="form-control" rows=5 name="pemeriksa4" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                            
                                                        </div>
            
                                                        <br>
            
                                                    </div>
                                                    
                                                
                                                </div>
                    
                                                {{-- Button --}}
                                                <div class="row text-center">
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                                    </div>
                                                </div>  
                                                        
                                            </form>
                                        </div>
               
                                    </div>
                                </div>
                                <div id="arrows-success-step-2" class="tab-pane" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                                        </div>
            
                                        <div class="card-body border border-dark">
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                @csrf
                        
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">B. Keperluan Negara Pengimport: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>
            
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">C. Jenis Produk yang Dikeluarkan oleh Kilang: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>
                                                    
                                                
                                                </div>
            
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <br>
            
                                                        <h5 class="card-title">D. Senarai Produk Yang Ingin Dieksport Ke Negara Yang Dimohon: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>   
                                                
                                                </div>
            
                                                <div class="col-md-6">
            
                                                    <br>
            
                                                    <h5 class="card-title">E. Senaraikan Produk Yang Pernah Dieksport</h5>
            
                                                    <br>
            
                                                    <h6>Produk Berasaskan Haiwan </h6>
            
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Negara Yang Dieksport</label>
                                                    </div>
                                                  
                                                        <input class="form-control" type="number" name="telefon" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                  
            
                                                    <div class="col-6">
                                                        <label class="form-label">Jenis Produk Yang Dieksport</label>
                                                    </div>
                                                    <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
            
                                                    <br>
            
                                                    <h6>Produk Tidak Berasaskan Haiwan </h6>
            
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Negara Yang Dieksport</label>
                                                    </div>
                                                    
                                                        <input class="form-control" type="number" name="telefon" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
            
            
                                                    
                                                </div>
                    
                                                {{-- Button --}}
                                                {{-- <div class="row">
                                                    <div class="mb-3">
                                                        <button class="btn btn-success" type="submit" title="Hantar" style="float: right">Hantar</button>
                                                    </div>
                                                </div>   --}}
                                                        
                                            </form>
                                        </div>
               
                                    </div>
                                </div>
                                <div id="arrows-success-step-3" class="tab-pane" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                                        </div>
            
                                        <div class="card-body border border-dark">
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                @csrf
                        
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">F.Senarai Bahan Mentah Yang Digunakan dan Punca Bahan Mentah: </h5>
             
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:10%">Bahan Mentah</th>
                                                                        <th style="width:10%">Punca Bahan Mentah</th>
                                                                        <th style="width:10%">No Loji/VHM/MyGAP</th>
                                                                        <th style="width:10%">Dokumen Sokongan</th>
                                    
                                                                        {{-- <th style="width:10%">Jadual Survelan</th> --}}
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><input type="file"></td>
                                                                    </tr>
                                    
                                                                    {{-- <tr>
                                                                        @foreach ($jaduals as $jadual)
                                                                        <td>{{$loop->iteration}}</td>
                                                                        <td>{{$jadual->zon}}</td>
                                                                        <td>{{$jadual->operasi}}</td>
                                                                        <td>{{$jadual->created_at->format('d/m/Y')}}</td>
                                                                        <td class="table-action">
                                                                            <a href="kemaskini_jadual_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                                                            <form action="/padam_survelan/{{ $jadual->id }}" method="post">
                                                                                @method('DELETE')
                                                                                @csrf
                                                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                                                            </form>
                                                                        </td>
                                                                        <td>Dihantar/Selesai</td>
                                                                        <td class="d-none d-md-table-cell text-center"><a href="/jadual-survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-eye"></i></a></td>
                                                                           
                                    
                                                                    </tr>
                                    
                                                                        @endforeach --}}
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
            
                                                    </div>
                                                
                                                </div>
            
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <br>
            
                                                        <h5 class="card-title">G. Carta Alir Proses Yang Lengkap: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>   
                                                
                                                </div>
            
                                                <div class="col-md-6">
            
                                                    <br>
            
                                                    <h5 class="card-title">H. Pensijilan Yang Ada</h5>
            
                                                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:20%">Jenis Pensijilan</th>
                                                                    <th style="width:20%">Jabatan/Agensi/Badan</th>
                                                                    <th style="width:20%">Tarikh tamat</th>
                                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><input type="date" name="" id=""></td>
                                                                 
                                                                </tr>
                                
                                                                {{-- <tr>
                                                                    @foreach ($jaduals as $jadual)
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$jadual->zon}}</td>
                                                                    <td>{{$jadual->operasi}}</td>
                                                                    <td>{{$jadual->created_at->format('d/m/Y')}}</td>
                                                                    <td class="table-action">
                                                                        <a href="kemaskini_jadual_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                                                        <form action="/padam_survelan/{{ $jadual->id }}" method="post">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                                                        </form>
                                                                    </td>
                                                                    <td>Dihantar/Selesai</td>
                                                                    <td class="d-none d-md-table-cell text-center"><a href="/jadual-survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-eye"></i></a></td>
                                                                       
                                
                                                                </tr>
                                
                                                                    @endforeach --}}
                                                              
                                                            </tbody>
                                                        </table>
                                                    </div>   
                                                </div>
            
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
                        
                                                        <br>
                        
                                                        <h5 class="card-title">I. GMP dan Pelaksanaan: </h5>
                        
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
            
                                                            <h6>Manual</h6>
            
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                  Ya
                                                                </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                  Tidak
                                                                </label>
                                                              </div>
                                                        
                                                        </div>
                        
                                                    </div>   
                                                
                                                </div>
            
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
                        
                                                        <br>
                        
                                                        <h5 class="card-title">J. Sistem HCCP & Pelaksanaan: </h5>
                        
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
            
                                                            <h6>Manual</h6>
            
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                  Ya
                                                                </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                  Tidak
                                                                </label>
                                                              </div>
                                                        
                                                        </div>
            
                                                        <br>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Rekod</label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">HACCP Plan Summary</label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
                        
                                                    </div>   
                                                
                                                </div>
            
                    
                                                {{-- Button --}}
                                                <div class="row">
                                                    <div class="mb-3 text-center">
                                                        <a href="/sijil-veterinar" class="btn btn-primary">Kembali</a>
                                                        <button class="btn btn-success" type="submit" title="Hantar">Hantar</button>
            
                                                    </div>
                                                </div>  
                                                        
                                            </form>
                                        </div>
               
                                    </div>
                                </div>
                                <div id="arrows-success-step-4" class="tab-pane" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                                        </div>
            
                                        <div class="card-body">
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                @csrf
                        
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">K. Keputusan Ujian Makmal: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>
            
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">L. Penemuan Pemeriksaan Onsite & Dokumen: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>
                                                    
                                                
                                                </div>
            
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <br>
            
                                                        <h5 class="card-title">M. Ulasan Pemeriksa(Pengesyoran): </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                        </div>
            
                                                    </div>   
                                                
                                                </div>

                                                <div class="row">
                                                    <div class="col md-6 ms-auto">
                                                   
                                                        <br>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 1</label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                           
                                                        </div>
            
                        
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 2</label>
                                                        </div>
                                                        <div >
                                                           
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                          
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 3</label>
                                                        </div>
                                                        <div>
                                                           
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                           
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Tandatangan Pemeriksa 4</label>
                                                        </div>
                                                        <div>
                                                           
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                            
                                                        </div>
            
                                                        <br>
            
                                                    </div>

                                                    <div class="col md-6 ms-auto">
                                                   
                                                        <br>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Cop Pemeriksa 1</label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                           
                                                        </div>
            
                        
                                                        <div class="col-6">
                                                            <label class="form-label">Cop Pemeriksa 2</label>
                                                        </div>
                                                        <div >
                                                           
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                          
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Cop Pemeriksa 3</label>
                                                        </div>
                                                        <div>
                                                           
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                           
                                                        </div>
            
                                                        <div class="col-6">
                                                            <label class="form-label">Cop Pemeriksa 4</label>
                                                        </div>
                                                        <div>
                                                           
                                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                                oninput="this.setCustomValidity('')"></textarea>
                                                            
                                                        </div>
            
                                                        <br>
            
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