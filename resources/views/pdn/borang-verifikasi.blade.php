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
                        <div class="card border border-dark">
                            <div class="card-header">
                                <h5 class="card-title">A. Pengenalan & Lokasi Syarikat: </h5>
                            </div>

                            <div class="card-body">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Tarikh Pemeriksaan</label>
                                            </div>
                                          
                                                <input class="form-control" type="date" name="telefon" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                          

                                            <div class="col-6">
                                                <label class="form-label">Rujukan</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Nama Syarikat</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />
                                           

                                            <div class="col-6">
                                                <label class="form-label">Nombor Telefon</label>
                                            </div>
                                            <input class="form-control" type="number" name="name" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Nombor Faks</label>
                                            </div>
                                            <input class="form-control" type="number" name="name" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Alamat Syarikat</label>
                                            </div>
                                            <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea>

                                            <br>

                                            <h5>Perakuan: Saya mengaku semua butiran diberikan adalah benar</h5>

                                            <div class="col-6">
                                                <label class="form-label">Nama</label>
                                            </div>
                                            <input class="form-control" type="text" name="" id=""><br>

                                            <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea>

                                            <div class="col-6">
                                                <label class="form-label">Nama</label>
                                            </div>
                                            <input class="form-control" type="text" name="" id=""><br>

                                            <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea><br>
                                            
                                            <button class="btn btn-primary">Setuju</button>

                                            <br><br>

                                            <div class="col-6">
                                                <label class="form-label">Jenis Establishment</label><br>
                                            </div>
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Establishment</option>
                                                <option value="Establishment 1">Establishment 1</option>
                                                <option value="Establishment 2">Establishment 2</option>
                                                <option value="Establishment 3">Establishment 3</option>
                                            </select>
                                          
                                            <div class="col-6">
                                                <label class="form-label">Tahun Mula Operasi</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Tahun Operasi di Kilang Sedia Ada</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Jenis Premis Loji</label><br>
                                            </div>
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Premis Loji</option>
                                                <option value="Premis Loji 1">Premis Loji 1</option>
                                                <option value="Premis Loji 2">Premis Loji 2</option>
                                                <option value="Premis Loji 3">Premis Loji 3</option>
                                            </select>

                                            <div class="col-6">
                                                <label class="form-label">Jenis Milikan Loji</label><br>
                                            </div>
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Milikan Loji</option>
                                                <option value="Milikan Loji 1">Milikan Loji 1</option>
                                                <option value="Milikan Loji 2">Milikan Loji 2</option>
                                                <option value="Milikan Loji 3">Milikan Loji 3</option>
                                            </select>

                                            <div class="col-6">
                                                <label class="form-label">Tujuan Pemeriksaan</label>
                                            </div>
                                            <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" /> 
                                        </div>

                                        

                                       
                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Pegawai Pemeriksa DVS</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

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
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <h5 class="card-title">B. Sumber Tempat Proses & Kemudahan Penyiapan: </h5>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Pekerja</label>
                                            </div>
                                            <div class="">
                                                <input class="form-control" type="number" name="nombor" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Pentadbiran</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Loji</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">QC/QA</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Sumber Bahan Mentah</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <br>

                                            <h5>Bilangan Tempat Penyimpanan & Kapasiti</h5>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Kapisiti Blast Freezer: -40oC</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" placeholder="Unit" class="form-control">
                                                <input type="number" placeholder="MT" class="form-control">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Kapisiti Freezer: -18oC</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" placeholder="Unit" class="form-control">
                                                <input type="number" placeholder="MT" class="form-control">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Kapisiti Chiller: -40oC</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" placeholder="Unit" class="form-control">
                                                <input type="number" placeholder="MT" class="form-control">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan & Kapisiti Store: AMBIENT</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" placeholder="Unit" class="form-control">
                                                <input type="number" placeholder="MT" class="form-control">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Lori Sejukbeku & Kapasiti</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" placeholder="Unit" class="form-control">
                                                <input type="number" placeholder="MT" class="form-control">
                                            </div>

                                        </div>

                                        
                                    
                                    </div>

                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <br>

                                            <h5 class="card-title">C. Jenis Produk Tambah Nilai Yang Dikeluarkan Oleh Kilang: </h5>

                                            
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <label class="form-label">Kapasiti Pengeluaran</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
    
                                                <div class="col-2">
                                                    <label class="form-label">Penggunaan Keratan Ayam</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>

                                                <div class="col-2">
                                                    <label class="form-label">Pengeluaran Tahun Lepas</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
    
                                                <div class="col-2">
                                                    <label class="form-label">Penggunaan Keratan Ayam</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>

                                                <div class="col-2">
                                                    <label class="form-label">Pengeluaran Tahun Semasa</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
    
                                                <div class="col-2">
                                                    <label class="form-label">Penggunaan Keratan Ayam</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>

                                                <br><br>

                                                <h5>Laporan Pengeluaran</h5>

                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:20%">Bil.</th>
                                                                <th style="width:20%">Jenis Produk</th>
                                                                <th style="width:20%">Berat(MT)/Liter</th>
                                                                <th style="width:20%">Penggunaan Keratan</th>
                                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                             
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

                                                <input type="file" name="" id="">
                
                                            </div>

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
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <h5 class="card-title">D. Senarai Bahan Mentah Yang Digunakan & Punca Bahan Mentah: </h5>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20%">Bil.</th>
                                                            <th style="width:20%">Jenis Keratan/Susu Cair</th>
                                                            <th style="width:20%">Nama Pembekal</th>
                                                            <th style="width:20%">Berat(MT)/Liter</th>
                                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                         
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

                                            <input type="file" name="" id="">
                                            <button class="btn btn-primary">Tambah</button>
                                        </div>

                                        
                                    
                                    </div>

                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <br>

                                            <h5 class="card-title">E. Tempat Pemprosesan(Pemeriksaan Kebersihan dan Sanitasi): </h5>

                                            <div class="col-6">
                                                <label class="form-label">Peralatan Pemprosesan</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Program Kebersihan & Sanitasi Premis</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Pelaksanaan & Penyelenggaraan</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Kebersihan Personal</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Kawalan Makhluk Perosak</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                           

                                        </div>   
                                    
                                    </div>

                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <br>

                                            <h5 class="card-title">F. Pensijilan(Nyatakan jenis sijil dan tarikh salahlaku): </h5>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20%">Bil.</th>
                                                            <th style="width:20%">Nama Sijil</th>
                                                            <th style="width:20%">Jabatan/Agensi/Badan</th>
                                                            <th style="width:20%">Tarikh Salah Laku</th>
                                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td><input type="date"></td>
                                                         
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

                                            <input type="file" name="" id="">
                                            <button class="btn btn-primary">Tambah</button>
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
                                <form action="#" method="POST" enctype="multipart/form-data">
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
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Cadangan</label>
                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
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
                                                    <input class="form-control" type="text" name="" id=""><br>

                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 2</label>
                                                    <input class="form-control" type="text" name="" id=""><br>
                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 3</label>
                                                    <input class="form-control" type="text" name="" id=""><br>

                                                </div>
                                                <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>

                                            <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                <div class="col-6">
                                                    <label class="form-label">Nama Pemeriksa 4</label>
                                                    <input class="form-control" type="text" name="" id=""><br>

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
                                              
                                                    <input class="form-control" type="file" name="telefon" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />

                                                    <br>

                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Ringkas Jumlah Pengeluaran</label>
                                                    </div>
                                                  
                                                        <input class="form-control" type="file" name="telefon" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                    
                                                    
                                            </div>

                                            <div class="col md-6 ms-auto">
                                                <div class="col-6">
                                                    <label class="form-label">Salinan Perjanjian Penyewaan</label>
                                                </div>
                                              
                                                    <input class="form-control" type="file" name="telefon" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />

                                                    <br>

                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Perjanjian OEM</label>
                                                    </div>
                                                  
                                                        <input class="form-control" type="file" name="telefon" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />

    
                                            </div>

                                           </div>
                                           

                                           

                                        </div>

                                    </div>

                                    {{-- Button --}}
                                    <div class="row">
                                        <div class="mb-3">
                                            <button class="btn btn-success" type="submit" title="Hantar" style="float: right">Hantar</button>
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