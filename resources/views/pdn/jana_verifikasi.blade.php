<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
                        <h5>Borang Laporan Verifikasi Import Keratan Ayam/Susu Cair</h5>
    
                        <div class="col-12 col-xl-12">
                            <div class="card border border-dark">
                                <div class="card-header">
                                    <h5 class="card-title">A. Pengenalan & Lokasi Syarikat: </h5>
                                </div>
    
                                <div class="card-body">
    
                                    @if (isset( $verifikasi))
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                    @else
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                    @endif
    
                                        @csrf
                
                                        <div class="row">
                
                                            <div class="col-md-6">
    
                                                <div class="col-6">
                                                    <label class="form-label">Tarikh Pemeriksaan</label>
                                                </div>
                                              
                                                    <input class="form-control" type="date" name="tarikh" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->tarikh }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->tarikh }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
                                              
    
                                                <div class="col-6">
                                                    <label class="form-label">Rujukan</label>
                                                </div>
                                                <input class="form-control" type="text" name="rujukan" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->rujukan }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->rujukan }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
    
                                                <div class="col-6">
                                                    <label class="form-label">Nama Syarikat</label>
                                                </div>
                                                <input class="form-control" type="text" name="syarikat" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->syarikat }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->syarikat }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                               
    
                                                <div class="col-6">
                                                    <label class="form-label">Nombor Telefon</label>
                                                </div>
                                                <input class="form-control" type="text" name="telefon" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->telefon }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->telefon }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                <div class="col-6">
                                                    <label class="form-label">Nombor Faks</label>
                                                </div>
                                                <input class="form-control" type="text" name="faks" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->faks }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->faks }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                <div class="col-6">
                                                    <label class="form-label">Alamat Syarikat</label>
                                                </div>
                                                <input class="form-control" type="text" name="alamat" required @if (isset($verifikasi))
                                                value="{{ $verifikasi->alamat }}" readonly
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->alamat }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif />
                                        
                                                {{-- <textarea class="form-control" rows=5 name="alamat" 
                                                @if (isset($verifikasi))
                                                readonly {{ $verifikasi->alamat }} 
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->alamat }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif >{{ old('alamat', $verify->alamat) }}</textarea> --}}
    
                                                <br>
    
                                                <h5>Perakuan: Saya mengaku semua butiran diberikan adalah benar</h5>
    
                                                <div class="col-6">
                                                    <label class="form-label">Nama</label>
                                                </div>
                                                <input class="form-control" type="text" name="nama" required @if (isset($verifikasi))
                                                value="{{ $verifikasi->nama }}" readonly
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->nama }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif />
    
                                                <br>
                                                
                                                <textarea class="form-control" rows=5 name="nama" placeholder="Tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
    
                                                <div class="col-6">
                                                    <label class="form-label">Nama</label>
                                                </div>
                                                <input class="form-control" type="text" name="nama2" required @if (isset($verifikasi))
                                                value="{{ $verifikasi->nama2 }}" readonly
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{  $verify->nama2 }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif />
                                                
                                                <br>
    
                                                <textarea class="form-control" rows=5 name="nama2" placeholder="Tandatangan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea><br>
                                                
    
                                                <br><br>
    
                                                <div class="col-6">
                                                    <label class="form-label">Jenis Establishment</label><br>
                                                </div>
                                                <select class="form-select" aria-label="Default select example" name="establihment" required oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                @if (isset($verifikasi))
                                                <option value="{{ $verifikasi->establihment }}">{{ $verifikasi->establihment }}</option>
    
                                                @else
    
                                                <option selected value="{{ $verify->establihment }}">{{ $verify->establihment }}</option>
                                                <option value="Establishment 1">Establishment 1</option>
                                                <option value="Establishment 2">Establishment 2</option>
                                                <option value="Establishment 3">Establishment 3</option>
                                                    
                                                @endif
                                
                                                </select>
                                              
                                                <div class="col-6">
                                                    <label class="form-label">Tahun Mula Operasi</label>
                                                </div>
                                                <input class="form-control" type="text" name="tahun" required @if (isset($verifikasi))
                                                value="{{ $verifikasi->tahun }}" readonly
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->tahun }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif />
    
                                                <div class="col-6">
                                                    <label class="form-label">Tahun Operasi di Kilang Sedia Ada</label>
                                                </div>
                                                <input class="form-control" type="text" name="tahun_operasi" required @if (isset($verifikasi))
                                                value="{{ $verifikasi->tahun_operasi }}" readonly
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->tahun_operasi }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif />
    
                                                <div class="col-6">
                                                    <label class="form-label">Jenis Premis Loji</label><br>
                                                </div>
                                                <select class="form-select" aria-label="Default select example" name="premis" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                @if (isset($verifikasi))
                                                <option value="{{ $verifikasi->premis }}">{{ $verifikasi->premis }}</option>
    
                                                @else
    
                                                    <option selected value="{{ $verify->premis }}">{{ $verify->premis }}</option>
                                                    <option value="Premis Loji 1">Premis Loji 1</option>
                                                    <option value="Premis Loji 2">Premis Loji 2</option>
                                                    <option value="Premis Loji 3">Premis Loji 3</option>
                                                    
                                                @endif
                                                   
                                                </select>
    
                                                <div class="col-6">
                                                    <label class="form-label">Jenis Milikan Loji</label><br>
                                                </div>
                                                <select class="form-select" aria-label="Default select example" name="milikan" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">
                                                @if (isset($verifikasi))
                                                <option value="{{ $verifikasi->milikan }}">{{ $verifikasi->milikan }}</option>
    
                                                @else
    
                                                    <option selected value="{{ $verify->milikan }}">{{ $verify->milikan }}</option>
                                                    <option value="Milikan Loji 1">Milikan Loji 1</option>
                                                    <option value="Milikan Loji 2">Milikan Loji 2</option>
                                                    <option value="Milikan Loji 3">Milikan Loji 3</option>
                                                    
                                                @endif                                              
    
                                                </select>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tujuan Pemeriksaan</label>
                                                </div>
    
                                                <input class="form-control" type="text" name="tujuan" required 
    
                                                @if (isset($verifikasi))
                                                value="{{ $verifikasi->tujuan }}" readonly
                                                @else
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->tujuan }}"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                @endif />
    
                                            </div>
    
                                            
    
                                           
                                            <div class="col md-6 ms-auto">
                                                <div class="col-6">
                                                    <label class="form-label">Pegawai Pemeriksa DVS</label>
                                                </div>
                                                <div class="">
                                                    
                                                    <input class="form-control" type="text" name="pemeriksa_dvs" required 
                                                
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->pemeriksa_dvs }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pemeriksa_dvs }}"
                                                    oninput="this.setCustomValidity('')"  onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                   
                                                </div>
    
                                                <br>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 1</label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" 
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')"></textarea>
                                                   
                                                </div>
    
                
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 2</label>
                                                </div>
                                                <div >
                                                   
                                                        <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" 
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')"></textarea>
                                                  
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 3</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" 
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')"></textarea>
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Tandatangan Pemeriksa 4</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" 
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')"></textarea>
                                                    
                                                </div>
    
                                                <br>
    
                                            </div>
                        
                                        </div>
    
                                        <br><br>
    
                                        {{-- 2nd --}}
    
                                        <div class="row">
                        
                                            <div class="col md-6 ms-auto">
    
                                                <h5 class="card-title">B. Sumber Tempat Proses & Kemudahan Penyiapan: </h5>
    
                                                <div class="col-6">
                                                    <label class="form-label">Bilangan Pekerja</label>
                                                </div>
                                                <div class="">
                                                    <input class="form-control" type="text" name="pekerja" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->pekerja }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pekerja }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Pentadbiran</label>
                                                </div>
                                                <div class="">
                                                    
                                                    <input class="form-control" type="text" name="pentadbiran" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->pentadbiran }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pentadbiran }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Loji</label>
                                                </div>
                                                <div class="">
                                                    
                                                    <input class="form-control" type="text" name="loji" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->loji }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->loji }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">QC/QA</label>
                                                </div>
                                                <div class="">
                                                    
                                                    <input class="form-control" type="text" name="qcqa" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->qcqa }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->qcqa }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Sumber Bahan Mentah</label>
                                                </div>
                                                <div class="">
                                                    
                                                    <input class="form-control" type="text" name="bahan" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->bahan }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->bahan }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                   
                                                </div>
    
                                                <br>
    
                                                <h5>Bilangan Tempat Penyimpanan & Kapasiti</h5>
    
                                                <div class="col-6">
                                                    <label class="form-label">Bilangan Kapisiti Blast Freezer: -40oC</label>
                                                </div>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="unit_blast" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->unit_blast }} Unit" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->unit_blast }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                    <input class="form-control" type="text" name="mt_blast" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->mt_blast }} MT" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->mt_blast }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />                                           
                                                 </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Bilangan Kapisiti Freezer: -18oC</label>
                                                </div>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="unit_freezer" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->unit_freezer }} Unit" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->unit_freezer }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                    <input class="form-control" type="text" name="mt_freezer" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->mt_freezer }} MT" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->mt_freezer }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Bilangan Kapisiti Chiller: -40oC</label>
                                                </div>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="unit_chiller" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->unit_chiller }} Unit" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->unit_chiller }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                    <input class="form-control" type="text" name="mt_chiller" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->mt_chiller }} MT" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->mt_chiller }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Bilangan & Kapisiti Store: AMBIENT</label>
                                                </div>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="unit_store" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->unit_store }} Unit" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->unit_store }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                    <input class="form-control" type="text" name="mt_store" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->mt_store }} MT" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->mt_store }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Bilangan Lori Sejukbeku & Kapasiti</label>
                                                </div>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="unit_lori" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->unit_lori }} Unit" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->unit_lori }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />
    
                                                    <input class="form-control" type="text" name="mt_lori" required @if (isset($verifikasi))
                                                    value="{{ $verifikasi->mt_lori }} MT" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->mt_lori }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                    @endif />   
                                                </div>
    
                                            </div>
    
                                            <div class="col md-6 ms-auto">
    
                                                <br>
    
                                                <h5 class="card-title">C. Jenis Produk Tambah Nilai Yang Dikeluarkan Oleh Kilang: </h5>
    
                                                
                                                <div class="row mb-3">
                                                    <div class="col-2">
                                                        <label class="form-label">Kapasiti Pengeluaran</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" name="kapasiti" required @if (isset($verifikasi))
                                                        value="{{ $verifikasi->kapasiti }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->kapasiti }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                        @endif />   
                                                    </div>
        
                                                    <div class="col-2">
                                                        <label class="form-label">Penggunaan Keratan Ayam</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" name="keratan" required @if (isset($verifikasi))
                                                        value="{{ $verifikasi->keratan }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->keratan }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                        @endif /> 
                                                    </div>
    
                                                    <div class="col-2">
                                                        <label class="form-label">Pengeluaran Tahun Lepas</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" name="tahun_lepas" required @if (isset($verifikasi))
                                                        value="{{ $verifikasi->tahun_lepas }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->tahun_lepas }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                        @endif /> 
                                                    </div>
        
                                                    <div class="col-2">
                                                        <label class="form-label">Penggunaan Keratan Ayam</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" name="keratan2" required @if (isset($verifikasi))
                                                        value="{{ $verifikasi->keratan2 }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->keratan2 }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                        @endif />
                                                    </div>
    
                                                    <div class="col-2">
                                                        <label class="form-label">Pengeluaran Tahun Semasa</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" name="tahun_semasa" required @if (isset($verifikasi))
                                                        value="{{ $verifikasi->tahun_semasa }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->tahun_semasa }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                        @endif />
                                                    </div>
        
                                                    <div class="col-2">
                                                        <label class="form-label">Penggunaan Keratan Ayam</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" name="keratan3" required @if (isset($verifikasi))
                                                        value="{{ $verifikasi->keratan3 }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->keratan3 }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                        @endif />
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
    
                    
                                                </div>
    
                                            </div>  
    
                                            
                                        
                                        </div>
    
                                        {{-- 3rd step --}}
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
    
                                                    @if (isset($verifikasi))
                                                    <option value="{{ $verifikasi->pemprosesan }}">{{ $verifikasi->pemprosesan }}</option>
        
                                                    @else
        
                                                        <option selected value="{{ $verify->pemprosesan }}">{{ $verify->pemprosesan }}</option>
                                                        <option value="Peralatan Pemprosesan 1">Peralatan Pemprosesan 1</option>
                                                        <option value="Peralatan Pemprosesan 2">Peralatan Pemprosesan 2</option>
                                                        <option value="Peralatan Pemprosesan 3">Peralatan Pemprosesan 3</option>
                                                        
                                                    @endif 
    
                                                    </select>
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Program Kebersihan & Sanitasi Premis</label>
                                                </div>
                                                <div class="">
                                                    <select class="form-select" aria-label="Default select example" name="kebersihan" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">
    
                                                    @if (isset($verifikasi))
                                                    <option value="{{ $verifikasi->kebersihan }}">{{ $verifikasi->kebersihan }}</option>
        
                                                    @else
        
                                                        <option selected value="{{ $verify->kebersihan }}">{{ $verify->kebersihan }}</option>
                                                        <option value="Program Kebersihan 1">Program Kebersihan 1</option>
                                                        <option value="Program Kebersihan 2">Program Kebersihan 2</option>
                                                        <option value="Program Kebersihan 3">Program Kebersihan 3</option>
                                                        
                                                    @endif 
    
                                                    </select>
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Pelaksanaan & Penyelenggaraan</label>
                                                </div>
                                                <div class="">
                                                    <select class="form-select" aria-label="Default select example" name="pelaksanaan" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">
                                                    @if (isset($verifikasi))
                                                    <option value="{{ $verifikasi->pelaksanaan }}">{{ $verifikasi->pelaksanaan }}</option>
        
                                                    @else
        
                                                        <option selected value="{{ $verify->pelaksanaan }}">{{ $verify->pelaksanaan }}</option>
                                                        <option value="Pelaksanaan 1">Pelaksanaan 1</option>
                                                        <option value="Pelaksanaan 2">Pelaksanaan 2</option>
                                                        <option value="Pelaksanaan 3">Pelaksanaan 3</option>
                                                        
                                                    @endif 
                                                    </select>
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Kebersihan Personal</label>
                                                </div>
                                                <div class="">
                                                    <select class="form-select" aria-label="Default select example" name="personal" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">
                                                    @if (isset($verifikasi))
                                                    <option value="{{ $verifikasi->personal }}">{{ $verifikasi->personal }}</option>
        
                                                    @else
        
                                                        <option selected value="{{ $verify->personal }}">{{ $verify->personal }}</option>
                                                        <option value="Kebersihan Personal 1">Kebersihan Personal 1</option>
                                                        <option value="Kebersihan Personal 2">Kebersihan Personal 2</option>
                                                        <option value="Kebersihan Personal 3">Kebersihan Personal 3</option>
                                                        
                                                    @endif 
                                                    </select>
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Kawalan Makhluk Perosak</label>
                                                </div>
                                                <div class="">
                                                    <select class="form-select" aria-label="Default select example" name="kawalan" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">
                                                    @if (isset($verifikasi))
                                                    <option value="{{ $verifikasi->kawalan }}">{{ $verifikasi->kawalan }}</option>
        
                                                    @else
        
                                                        <option selected value="{{ $verify->kawalan }}">{{ $verify->kawalan }}</option>
                                                        <option value="Kawalan 1">Kawalan 1</option>
                                                        <option value="Kawalan 2">Kawalan 2</option>
                                                        <option value="Kawalan 3">Kawalan 3</option>
                                                        
                                                    @endif 
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
    
                                            </div>
    
                                            
                                        
                                        </div>
    
                                        <br><br>
    
                                        {{-- 4th step --}}
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
    
                                                    <input class="form-control" type="text" name="ulasan" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->ulasan }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->ulasan }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
    
                                                </div>
    
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <div class="col-6">
                                                        <label class="form-label">Cadangan</label>
                                                    </div>
                                                    <input class="form-control" type="text" name="cadangan" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->cadangan }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->cadangan }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                </div>
    
                                            </div>
    
                                        </div>
    
                                        <div class="row">
                
                                            <div class="col md-6 ms-auto">
    
                                                <br><br>
    
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Pemeriksa 1</label>
                                                        <input class="form-control" type="text" name="pemeriksa_ulasan1" required 
    
                                                        @if (isset($verifikasi))
                                                        value="{{ $verifikasi->pemeriksa_ulasan1 }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pemeriksa_ulasan1 }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                        @endif />
    
                                                    </div>
                                                    <br>
                                                    <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                                </div>
    
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Pemeriksa 2</label>
                                                        <input class="form-control" type="text" name="pemeriksa_ulasan2" required 
    
                                                        @if (isset($verifikasi))
                                                        value="{{ $verifikasi->pemeriksa_ulasan2 }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pemeriksa_ulasan2 }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                        @endif />
                                                    
                                                    </div>
                                                    <br>
                                                    <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                                </div>
    
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Pemeriksa 3</label>
                                                        <input class="form-control" type="text" name="pemeriksa_ulasan3" required 
    
                                                        @if (isset($verifikasi))
                                                        value="{{ $verifikasi->pemeriksa_ulasan3 }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pemeriksa_ulasan3 }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                        @endif />
                                                    </div>
                                                    <br>
                                                    <textarea class="form-control" rows=5 name="alamat" placeholder="Tandatangan & Cop" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                                </div>
    
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Pemeriksa 4</label>
                                                        <input class="form-control" type="text" name="pemeriksa_ulasan4" required 
    
                                                        @if (isset($verifikasi))
                                                        value="{{ $verifikasi->pemeriksa_ulasan4 }}" readonly
                                                        @else
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pemeriksa_ulasan4 }}"
                                                        oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                        @endif />
                                                    </div>
                                                    <br>
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
                                                  
                                                    <input class="form-control" type="text" name="sijil" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->sijil }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->sijil }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
    
                                                    <br>
    
                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Ringkas Jumlah Pengeluaran</label>
                                                    </div>
                                                      
                                                    <input class="form-control" type="text" name="pengeluaran" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->pengeluaran }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->pengeluaran }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
                                                        
                                                        
                                                </div>
    
                                                <div class="col md-6 ms-auto">
                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Perjanjian Penyewaan</label>
                                                    </div>
                                                  
                                                    <input class="form-control" type="text" name="penyewaan" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->penyewaan }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->penyewaan }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
    
                                                    <br>
    
                                                    <div class="col-6">
                                                        <label class="form-label">Salinan Perjanjian OEM</label>
                                                    </div>
                                                    
                                                    <input class="form-control" type="text" name="oem" required 
    
                                                    @if (isset($verifikasi))
                                                    value="{{ $verifikasi->oem }}" readonly
                                                    @else
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" required value="{{ $verify->oem }}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"
                                                    @endif />
    
        
                                                </div>
    
                                               </div>
                                               
    
                                               
    
                                            </div>
    
                                        </div>
    
                                        <br><br>
                                    
                              
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



