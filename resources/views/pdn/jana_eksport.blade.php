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
         
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
    
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title">Borang Adequacy Audit</h1>
                                </div>
    
                                <div class="card-body">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                
                                        <div class="mb-3">
                
                                            <div class="row mb-3">
                                                
                                                <div class="col-2">
                                                    <label class="form-label">Nama Loji</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$exsports->nama}}"/>
                                                </div>
                                                <div class="col-2">
                                                    <label class="form-label">Nombor VHM</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="number" name="nombor" required min="0"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$exsports->nombor}}"/>
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Tarikh Permohonan</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="date" name="tarikh" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$exsports->tarikh}}"/>
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Produk untuk Dieksport</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="produk" required onkeyup="this.value = this.value.toUpperCase();"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$exsports->produk}}"/>
                                                </div>
    
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Daerah</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="daerah" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();" value="{{$exsports->daerah}}"/>
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Negeri</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="negeri" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$exsports->negeri}}"/>
                                                </div>
    
    
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Zon</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="zon" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();" value="{{$exsports->zon}}"/>
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Poskod</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="number" min="0" name="poskod" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$exsports->poskod}}"/>
                                                </div>
    
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <label class="form-label">Alamat Loji</label>
                                                </div>
                                                <div class="col-10">
                                                    <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$exsports->alamat}}</textarea>
                                                </div>
                                            </div>
    
                                            <div class="row mb-3">
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Klasifikasi Premis</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="premis" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();" value="{{$exsports->premis}}"/>
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Tujuan</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="tujuan" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$exsports->tujuan}}"/>
                                                </div>
    
                                            </div>
    
                                           
                
                                        </div>
                
    
                                        <div class="mb-3 row">
                                            <div class="col-2">
                                                <label class="form-label">Pemeriksa Adequacy Audit 1</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="tujuan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$exsports->pemeriksa_1}}"/>
                                            </div>
    
                                            <div class="col-2">
                                                <label class="form-label">Pemeriksa Adequacy Audit 2</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="tujuan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$exsports->pemeriksa_2}}"/>
                                            </div>
                                        </div>
    
    
                                        {{-- <div class="row mb-3">
                                            <input class="form-control" type="hidden" name="jenis" value="selain Singapura">
                                            <div class="col-2">
                                                <label class="form-label">Muat Turun</label>
                                            </div>
                                            <div class="col-10">
                                               <input type="file" name="dokumen" id="dokumen" multiple required>
                                            </div>
                                        </div> --}}
                
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
