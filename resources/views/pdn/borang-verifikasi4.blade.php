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

                    <h5>Borang Laporan Verifikasi Import Keratan Ayam/Susu Cair</h5>

                    <div class="col-12 col-xl-12">
                       
                        <div class="card">
                            <div class="card-header">
                                {{-- <h5 class="card-title">B. Keperluan Negara Pengimport: </h5> --}}
                            </div>

                            <div class="card-body border border-dark">
                                <form action="/borang-verifikasi4" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <h5 class="card-title">G. VHM/GVHP/GMP: </h5>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20%">Bil.</th>
                                                            <th style="width:20%">Sijil Dokumen</th>
                                                            <th style="width:20%">Ada/Tiada</th>
                                                            <th style="width:20%">Tarikh Sahlaku</th>
                                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
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
                                            <button class="btn btn-primary">Tambah</button>
                                        </div>

                                        
                                    
                                    </div>

                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <br><br>

                                            <h5 class="card-title">H. Ulasan dan Cadangan Pegawai Pemeriksa: </h5>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Ulasan</label>
                                                </div>
                                                <textarea class="form-control" rows=5 name="ulasan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Cadangan</label>
                                                </div>
                                                <textarea class="form-control" rows=5 name="cadangan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <button class="btn btn-primary">Tambah</button>
                                        </div>

                                    </div>

                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <br><br>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 1</label>
                                                    <input class="form-control" type="text" name="pemeriksa_ulasan1" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                    oninput="this.setCustomValidity('')"><br>

                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 2</label>
                                                    <input class="form-control" type="text" name="pemeriksa_ulasan2" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                    oninput="this.setCustomValidity('')"><br>
                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 3</label>
                                                    <input class="form-control" type="text" name="pemeriksa_ulasan3" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                    oninput="this.setCustomValidity('')"><br>

                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 4</label>
                                                    <input class="form-control" type="text" name="pemeriksa_ulasan4" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" 
                                                    oninput="this.setCustomValidity('')"><br>

                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>


                                  
                                        </div>

                                    </div>

                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <br><br>

                                            <h5 class="card-title">I. Muat Naik Gambar & Dokumen: </h5>

                                           <div class="row">
                                            <div class="col-md-6">

                                                <div class="col-6">
                                                    <label class="form-label">Salinan Sijil</label>
                                                </div>
                                              
                                                    <input class="form-control" type="file" name="sijil"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" />

                                                    <br>

                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Ringkas Jumlah Pengeluaran</label>
                                                    </div>
                                                  
                                                        <input class="form-control" type="file" name="pengeluaran"
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />
                                                    
                                                    
                                            </div>

                                            <div class="col md-6 ms-auto">
                                                <div class="col-6">
                                                    <label class="form-label">Salinan Perjanjian Penyewaan</label>
                                                </div>
                                              
                                                    <input class="form-control" type="file" name="penyewaan"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" />

                                                    <br>

                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Perjanjian OEM</label>
                                                    </div>
                                                  
                                                        <input class="form-control" type="file" name="oem"
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" />

    
                                            </div>

                                           </div>
                                           

                                           

                                        </div>

                                    </div>

                                    <br><br>

                                    {{-- Button --}}
                                    
                                    <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                        <a href="/keratan" class="btn btn-primary">Kembali</a>
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
                                                Adakah anda ingin menghantar laporan verifikasi baharu?
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