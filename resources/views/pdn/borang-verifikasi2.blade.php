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
                                <form action="/borang-verifikasi2" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col md-6 ms-auto">

                                            <h5 class="card-title">B. Sumber Tempat Proses & Kemudahan Penyiapan: </h5>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Pekerja</label>
                                            </div>
                                            <div class="">
                                                <input class="form-control" type="number" name="pekerja" required min="0"
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Pentadbiran</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="pentadbiran" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Loji</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="loji" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">QC/QA</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="qcqa" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Sumber Bahan Mentah</label>
                                            </div>
                                            <div class="">
                                                
                                                <input class="form-control" type="text" name="bahan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                               
                                            </div>

                                            <br>

                                            <h5>Bilangan Tempat Penyimpanan & Kapasiti</h5>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Kapisiti Blast Freezer: -40oC</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" min="0" placeholder="Unit" class="form-control" name="unit_blast">
                                                <input type="number" min="0" placeholder="MT" class="form-control" name="mt_blast">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Kapisiti Freezer: -18oC</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" min="0" placeholder="Unit" class="form-control" name="unit_freezer">
                                                <input type="number" min="0" placeholder="MT" class="form-control" name="mt_freezer">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Kapisiti Chiller: -40oC</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" min="0" placeholder="Unit" class="form-control" name="unit_chiller">
                                                <input type="number" min="0" placeholder="MT" class="form-control" name="mt_chiller">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan & Kapisiti Store: AMBIENT</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" min="0" placeholder="Unit" class="form-control" name="unit_store">
                                                <input type="number" min="0" placeholder="MT" class="form-control" name="mt_store">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Bilangan Lori Sejukbeku & Kapasiti</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="number" min="0" placeholder="Unit" class="form-control" name="unit_lori">
                                                <input type="number" min="0" placeholder="MT" class="form-control" name="mt_lori">
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
                                                    <input class="form-control" type="number" min="0" name="kapasiti" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
    
                                                <div class="col-2">
                                                    <label class="form-label">Penggunaan Keratan Ayam</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" min="0" name="keratan" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>

                                                <div class="col-2">
                                                    <label class="form-label">Pengeluaran Tahun Lepas</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" min="0" name="tahun_lepas" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
    
                                                <div class="col-2">
                                                    <label class="form-label">Penggunaan Keratan Ayam</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" min="0" name="keratan2" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>

                                                <div class="col-2">
                                                    <label class="form-label">Pengeluaran Tahun Semasa</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" min="0" name="tahun_semasa" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
    
                                                <div class="col-2">
                                                    <label class="form-label">Penggunaan Keratan Ayam</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" min="0" name="keratan3" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>

                                                <br><br><br>

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

                                                {{-- <input type="file" name="" id=""> --}}
                
                                            </div>

                                        </div>   
                                    
                                    </div>

                                     {{-- Button --}}
                                     <div class="row">
                                        <div class="mb-3">
                                            <a href="/borang-verifikasi" class="btn btn-secondary">Sebelum</a>
                                            {{-- <a href="/borang-verifikasi3" class="btn btn-secondary" type="submit" title="Seterusnya">Seterusnya</a> --}}
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