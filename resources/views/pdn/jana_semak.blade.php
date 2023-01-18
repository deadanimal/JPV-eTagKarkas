<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1 {text-align: center;}
        .p1 {text-align: center;}
        .p2{text-align: center}
        .div1 {text-align: center;}
        .content {
        max-width: 900px;
        margin: auto;
        }
        .cb {
        border: 2px solid;
        padding: 50px; 
        width: 600px;
        resize: both;
        overflow: auto;
        }
    </style>
</head>
<body>

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
                            <div class="card border border-dark">
                                <div class="card-header">
                                    <h5 class="card-title">A. Maklumat Pemeriksaan: </h5>
                                </div>
    
                                <div class="card-body">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @csrf
                
                                        <div class="row">
                
                                            <div class="col-md-6">
    
                                                <div class="col-6">
                                                    <label class="form-label">Tarikh Pemeriksaan</label>
                                                </div>
                                              
                                                    <input class="form-control" type="text" name="tarikh" value="{{$semak->tarikh}}" readonly />
                                              
    
                                                <div class="col-6">
                                                    <label class="form-label">Rujukan</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->rujukan}}" readonly  />
    
                                                <div class="col-6">
                                                    <label class="form-label">Nama Establishment</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->establishment}}" readonly />
                                               
    
                                                <div class="col-6">
                                                    <label class="form-label">Nombor Telefon</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->telefon}}" readonly />
    
                                                <div class="col-6">
                                                    <label class="form-label">Alamat Establishment</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->alamat}}" readonly />
    
                                                <div class="col-6">
                                                    <label class="form-label">Jenis Establishment</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->jenis}}" readonly />
    
                                                <div class="col-6">
                                                    <label class="form-label">Tujuan Pemeriksaan</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->tujuan}}" readonly />
    
                                                <div class="col-6">
                                                    <label class="form-label">Jenis Premis/Loji</label>
                                                </div>
                                                <input class="form-control" type="text" name="name" value="{{$semak->premis}}" readonly />
                                            </div>
    
                                            
    
                                           
                                            <div class="col md-6 ms-auto">
                                                <div class="col-6">
                                                    <label class="form-label">Pegawai Pemeriksa DVS</label>
                                                </div>
                                                <div class="">
                                                    
                                                    <input class="form-control" type="text" name="name" value="{{$semak->pemeriksa_dvs}}" readonly />
                                                   
                                                </div>
    
                                                <br>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 1</label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="alamat" readonly>{{$semak->pemeriksa1}}</textarea>
                                                   
                                                </div>
    
                
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 2</label>
                                                </div>
                                                <div >
                                                   
                                                        <textarea class="form-control" rows=5 name="alamat" readonly>{{$semak->pemeriksa2}}</textarea>
                                                  
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 3</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="alamat" readonly>{{$semak->pemeriksa3}}</textarea>
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 4</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="alamat" readonly>{{$semak->pemeriksa4}}</textarea>
                                                    
                                                </div>
    
                                                <br>
    
                                            </div>
                                            
                                        
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
    
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                                </div>
    
                                <div class="card-body border border-dark">
                                            <form action="/borang-semakB" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="maklumat_pemeriksaan_id" value="{{$semak->id}}">

                        
                                                <div class="row">
                        
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">B. Keperluan Negara Pengimport: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="keperluan" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                                oninput="this.setCustomValidity('')">{{$semak_borangB->keperluan}}</textarea>
                                                        </div>
            
                                                    </div>
            
                                                    <div class="col md-6 ms-auto">
            
                                                        <h5 class="card-title">C. Jenis Produk yang Dikeluarkan oleh Kilang: </h5>
            
                                                        
                                                        <div class="col-6">
                                                            <label class="form-label"></label>
                                                        </div>
                                                        <div class="">
                                                            
                                                                <textarea class="form-control" rows=5 name="jenis" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                                oninput="this.setCustomValidity('')">{{$semak_borangB->jenis ?? ''}}</textarea>
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
                                                            
                                                                <textarea class="form-control" rows=5 name="senarai" onkeyup="this.value = this.value.toUpperCase();" required
                                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                                oninput="this.setCustomValidity('')">{{$semak_borangB->senarai ?? ''}}</textarea>
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
                                                  
                                                        <input class="form-control" type="text" name="negara_haiwan" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();" value="{{$semak_borangB->negara_haiwan ?? ''}}" />
                                                  
            
                                                    <div class="col-6">
                                                        <label class="form-label">Jenis Produk Yang Dieksport</label>
                                                    </div>
                                                    <input class="form-control" type="text" name="produk_haiwan" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')" value="{{$semak_borangB->produk_haiwan ?? ''}}" />
            
                                                    <br>
            
                                                    <h6>Produk Tidak Berasaskan Haiwan </h6>
            
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Negara Yang Dieksport</label>
                                                    </div>
                                                    
                                                        <input class="form-control" type="text" name="negara_non_haiwan" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" value="{{$semak_borangB->negara_non_haiwan ?? ''}}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();" />
            
            
                                                    
                                                </div>

                                                <br><br> 
                                                        
                                            </form>
                                        </div>
       
                            </div>
    
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                                </div>
    
                                <div class="card-body border border-dark">
                                    <form action="/borang-semakC" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="maklumat_pemeriksaan_id" value="{{$semak->id}}">

                
                                        <div class="row">
                
                                            <div class="col md-6 ms-auto">
    
                                                <h5 class="card-title">F.Senarai Bahan Mentah Yang Digunakan dan Punca Bahan Mentah: </h5>
     
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <table class="table table-bordered" style="width: 100%">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:20%">Bahan Mentah</th>
                                                                <th style="width:20%">Punca Bahan Mentah</th>
                                                                <th style="width:20%">No Loji/VHM/MyGAP</th>
                                                                <th style="width:20%">Dokumen Sokongan</th>
                            
                                                                {{-- <th style="width:10%">Jadual Survelan</th> --}}
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" name="bahan" value="{{$semak_borangC->bahan ?? ''}}" ></td>
                                                                <td><input type="text" name="punca" value="{{$semak_borangC->punca ?? ''}}" ></td>
                                                                <td><input type="text" name="nombor" id="" value="{{$semak_borangC->nombor ?? ''}}" ></td>
                                                                <td><input type="text" name="dokumen" value="{{$semak_borangC->dokumen ?? ''}}" ></td>
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
                                                    
                                                        <textarea class="form-control" rows=5 name="carta" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangC->carta ?? ''}}</textarea>
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
                                                            <td><input type="text" name="jenis" value="{{$semak_borangC->jenis ?? ''}}" ></td>
                                                            <td><input type="text" name="jabatan" value="{{$semak_borangC->jabatan ?? ''}}" ></td>
                                                            <td><input type="date" name="tarikh" id="" value="{{$semak_borangC->tarikh ?? ''}}" ></td>
                                                         
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
                                                        <input class="form-check-input" type="checkbox" name="manual" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Ya
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="manual" value="" id="flexCheckChecked" checked>
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
                                                        <input class="form-check-input" type="checkbox" name="sistem_manual" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Ya
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="sistem_manual" value="" id="flexCheckChecked" checked>
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
                                                    
                                                        <textarea class="form-control" rows=5 name="rekod" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangC->rekod ?? ''}}</textarea>
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">HACCP Plan Summary</label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="haccp" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangC->haccp ?? ''}}</textarea>
                                                </div>
                
                                            </div>   
                                        
                                        </div>

                                        <br><br>
                                                
                                    </form>
                                </div>
       
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                                </div>
    
                                <div class="card-body">
                                    <form action="/borang-semakD" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="maklumat_pemeriksaan_id" value="{{$semak->id}}">

                
                                        <div class="row">
                
                                            <div class="col md-6 ms-auto">
    
                                                <h5 class="card-title">K. Keputusan Ujian Makmal: </h5>
    
                                                
                                                <div class="col-6">
                                                    <label class="form-label"></label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="keputusan" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->keputusan ?? ''}}</textarea>
                                                </div>
    
                                            </div>
    
                                            <div class="col md-6 ms-auto">
    
                                                <h5 class="card-title">L. Penemuan Pemeriksaan Onsite & Dokumen: </h5>
    
                                                
                                                <div class="col-6">
                                                    <label class="form-label"></label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="penemuan" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->penemuan ?? ''}}</textarea>
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
                                                    
                                                        <textarea class="form-control" rows=5 name="pengesyoran" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->pengesyoran ?? ''}}</textarea>
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
                                                    
                                                        <textarea class="form-control" rows=5 name="pemeriksa1" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')"{{$semak_borangD->pemeriksa1 ?? ''}}></textarea>
                                                   
                                                </div>
    
                
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 2</label>
                                                </div>
                                                <div >
                                                   
                                                        <textarea class="form-control" rows=5 name="pemeriksa2" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->pemeriksa2 ?? ''}}</textarea>
                                                  
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 3</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="pemeriksa3" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->pemeriksa3 ?? ''}}</textarea>
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 4</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="pemeriksa4" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->pemeriksa4 ?? ''}}</textarea>
                                                    
                                                </div>
    
                                                <br>
    
                                            </div>

                                            <div class="col md-6 ms-auto">
                                           
                                                <br>
    
                                                <div class="col-6">
                                                    <label class="form-label">Cop Pemeriksa 1</label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="cop1" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->cop1 ?? ''}}</textarea>
                                                   
                                                </div>
    
                
                                                <div class="col-6">
                                                    <label class="form-label">Cop Pemeriksa 2</label>
                                                </div>
                                                <div >
                                                   
                                                        <textarea class="form-control" rows=5 name="cop2" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->cop2 ?? ''}}</textarea>
                                                  
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Cop Pemeriksa 3</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="cop3" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->cop3 ?? ''}}</textarea>
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Cop Pemeriksa 4</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="cop4" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                        oninput="this.setCustomValidity('')">{{$semak_borangD->cop4 ?? ''}}</textarea>
                                                    
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
    
    
    
    </main>
    
</body>
</html>




