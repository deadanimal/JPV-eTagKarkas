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
                                <form action="/borang-verifikasi3" method="POST" enctype="multipart/form-data">
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
                                                <select class="form-select" aria-label="Default select example" name="pemprosesan" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="">Sila Pilih</option>
                                                    <option value="Peralatan Pemprosesan 1">Peralatan Pemprosesan 1</option>
                                                    <option value="Peralatan Pemprosesan 2">Peralatan Pemprosesan 2</option>
                                                    <option value="Peralatan Pemprosesan 3">Peralatan Pemprosesan 3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Program Kebersihan & Sanitasi Premis</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="kebersihan" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="">Sila Pilih</option>
                                                    <option value="Program Kebersihan 1">Program Kebersihan 1</option>
                                                    <option value="Program Kebersihan 2">Program Kebersihan 2</option>
                                                    <option value="Program Kebersihan 3">Program Kebersihan 3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Pelaksanaan & Penyelenggaraan</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="pelaksanaan" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="">Sila Pilih</option>
                                                    <option value="Pelaksanaan 1">Pelaksanaan 1</option>
                                                    <option value="Pelaksanaan 2">Pelaksanaan 2</option>
                                                    <option value="Pelaksanaan 3">Pelaksanaan 3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Kebersihan Personal</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="personal" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="">Sila Pilih</option>
                                                    <option value="Kebersihan Personal 1">Kebersihan Personal 1</option>
                                                    <option value="Kebersihan Personal 2">Kebersihan Personal 2</option>
                                                    <option value="Kebersihan Personal 3">Kebersihan Personal 3</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Kawalan Makhluk Perosak</label>
                                            </div>
                                            <div class="">
                                                <select class="form-select" aria-label="Default select example" name="kawalan" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value=""></option>
                                                    <option value="Kawalan 1">Kawalan 1</option>
                                                    <option value="Kawalan 2">Kawalan 2</option>
                                                    <option value="Kawalan 3">Kawalan 3</option>
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

                                    <br><br>

                                   
        
                                    {{-- Button --}}
                                    <div class="row">
                                        <div class="mb-3">
                                            <a href="/borang-verifikasi2" class="btn btn-secondary">Sebelum</a>
                                            <button class="btn btn-secondary" type="submit" title="Seterusnya" style="float: right">Seterusnya</button>
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