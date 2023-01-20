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
                                <form action="/borang-verifikasi" method="POST" enctype="multipart/form-data">
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
                                                <label class="form-label">Nama Syarikat</label>
                                            </div>
                                            <input class="form-control" type="text" name="syarikat" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />
                                           

                                            <div class="col-6">
                                                <label class="form-label">Nombor Telefon</label>
                                            </div>
                                            <input class="form-control" type="number" name="telefon" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Nombor Faks</label>
                                            </div>
                                            <input class="form-control" type="number" name="faks" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
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
                                            <input class="form-control" type="text" name="nama" id=""><br>

                                            <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea>

                                            <div class="col-6">
                                                <label class="form-label">Nama</label>
                                            </div>
                                            <input class="form-control" type="text" name="nama2" id=""><br>

                                            <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea><br>
                                            
                                            <button class="btn btn-primary">Setuju</button>

                                            <br><br>

                                            <div class="col-6">
                                                <label class="form-label">Jenis Establishment</label><br>
                                            </div>
                                            <select class="form-select" aria-label="Default select example" name="establihment" required
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
                                            <input class="form-control" type="number" name="tahun" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Tahun Operasi di Kilang Sedia Ada</label>
                                            </div>
                                            <input class="form-control" type="number" name="tahun_operasi" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Jenis Premis Loji</label><br>
                                            </div>
                                            <select class="form-select" aria-label="Default select example" name="premis" required
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
                                            <select class="form-select" aria-label="Default select example" name="milikan" required
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
                                            <input class="form-control" type="text" name="tujuan" onkeyup="this.value = this.value.toUpperCase();" required
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
        
                                    <br>
                                    {{-- Button --}}
                                    <div class="row">
                                        <div class="mb-3">
                                            <a href="/borang-verifikasi2">step2</a>
                                            <button class="btn btn-secondary" type="submit" title="Seterusnya" style="float: right">Seterusnya</button>
                                            <a href="/keratan" class="btn btn-primary mx-2" style="float: right">Kembali</a>
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