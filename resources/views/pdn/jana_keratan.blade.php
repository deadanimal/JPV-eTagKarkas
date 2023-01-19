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
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Borang Permohonan Verifikasi Import Keratan Ayam/Susu Cair</h5>
                                </div>
    
                                <div class="card-body">
                                    <form action="/kemaskini-keratan/{{$keratan->id}}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                
                                        <div class="mb-3">
    
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <label class="form-label">Premis</label>
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly readonly
                                                    oninput="this.setCustomValidity('')" value="{{$keratan->premis}}" />
                                                </div>
                                            </div>
                
                                            <div class="row mb-3">
                                                
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Nombor Telefon</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="number" name="telefon" required value="{{$keratan->telefon}}"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Emel</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="email" name="emel" required value="{{$keratan->emel}}"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                    oninput="this.setCustomValidity('')" />
                                                </div>
    
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Faks</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="number" name="faks" required value="{{$keratan->faks}}"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                                </div>
                
                                                <div class="col-2 mt-3">
                                                    <label class="form-label">Website</label>
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <input class="form-control" type="text" name="web" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->web}}"
                                                    oninput="this.setCustomValidity('')" />
                                                </div>
    
                                            </div>
    
                                            
                                            <div class="row mb-3">
                                                <div class="col-2">
                                                    <label class="form-label">Alamat</label>
                                                </div>
                                                <div class="col-10">
                                                    <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                    oninput="this.setCustomValidity('')">{{$keratan->alamat}}</textarea>
                                                </div>
                                            </div>
                
                                        </div>
                
                                       
                                        <div class="mb-3 row">
                                            <div class="col-2">
                                                <label class="form-label">Zon</label>
                                            </div>
                                            <div class="col-4">
                                                <select name="zon"  size="1" class="form-select"
                                                aria-label="Default select example" required value="{{$keratan->zon}}"
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                <option   value="{{$keratan->zon}}">{{$keratan->zon}}</option>
            
                                            </select>
                                            </div>
    
                                            <div class="col-2">
                                                <label class="form-label">Negeri</label>
                                            </div>
                                            <div class="col-4">
                                                <select name="negeri"  size="1" class="form-select"
                                                aria-label="Default select example" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                <option   value="{{$keratan->negeri}}">{{$keratan->negeri}}</option>
            
                                            </select>
                                            </div>
                                        </div>
    
                                        <div class="mb-3 row">
                                            <div class="col-2">
                                                <label class="form-label">Daerah</label>
                                            </div>
                                            <div class="col-4">
                                                <select name="daerah"  size="1" class="form-select"
                                                aria-label="Default select example"required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                <option  value="{{$keratan->daerah}}">{{$keratan->daerah}}</option>
                                                </select>
                                            </div>
    
                                            <div class="col-2">
                                                <label class="form-label">Poskod</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="number" name="poskod" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->poskod}}"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
                                        </div>
    
                                        <div class="mb-3 row">
                                           
                                            <div class="col-2">
                                                <label class="form-label">Klasifikasi Premis</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="klasifikasi" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->klasifikasi}}"
                                                    oninput="this.setCustomValidity('')" />
                                            </div>
                                            <div class="col-2">
                                                <label class="form-label">Kaedah Audit</label>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select" aria-label="Default select example" name="kaedah" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="{{$keratan->kaedah}}">{{$keratan->kaedah}}</option>
                                                  
                                                    
                                                </select>
                                            </div>
                                        </div>
    
    
                                           
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Jenis Produk untuk Dieksport</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="jenis_produk" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly value="{{$keratan->jenis_produk}}"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
    
                                            
                                        </div>
    
                                        <div class="mb-3 row">
                                            <div class="col-2">
                                                <label class="form-label">Nama Pemeriksa 1</label>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_1" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="{{$keratan->pemeriksa_1}}">{{$keratan->pemeriksa_1}}</option>
                                                  
                                                   
                                                </select>
                                            </div>
    
                                            <div class="col-2">
                                                <label class="form-label">Nama Pemeriksa 2</label>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_2" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="{{$keratan->pemeriksa_2}}">{{$keratan->pemeriksa_2}}</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="mb-3 row">
                                            <div class="col-2">
                                                <label class="form-label">Nama Pemeriksa 3</label>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="{{$keratan->pemeriksa_3}}">{{$keratan->pemeriksa_3}}</option>
                                                 
                                                </select>
                                            </div>
    
                                            <div class="col-2">
                                                <label class="form-label">Nama Pemeriksa 4</label>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select" aria-label="Default select example" name="pemeriksa_4" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">
                                                    <option selected value="{{$keratan->pemeriksa_4}}">{{$keratan->pemeriksa_4}}</option>
                                                  
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Catatan</label>
                                            </div>
                                            <div class="col-10">
                                                <textarea class="form-control" rows=5 name="catatan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" readonly
                                                oninput="this.setCustomValidity('')">{{$keratan->catatan}}</textarea>
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
