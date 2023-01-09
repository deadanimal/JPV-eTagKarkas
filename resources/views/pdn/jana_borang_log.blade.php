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
        table {
            border-collapse: collapse;
        }

        table, th, td, tr {
            border: 1px solid black;
            border-spacing: 15px 20px

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
                                    <h1 class="card-title">Borang Log</h1>
                                </div>
    
                                <div class="card-body">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                
                                        <div class="row">
                
                                            <div class="col-md-6">
    
                                                <div class="col-6">
                                                    <label class="form-label">Nama Premis: </label>
                                                </div>
                                                <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$log->premis}}"/>
                                              
    
                                                <div class="col-6">
                                                    <label class="form-label">Alamat</label>
                                                </div>
                                                <input class="form-control" type="text" name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$log->alamat}}"/>
    
                                                
                                               
    
                                                <div class="col-6">
                                                    <label class="form-label">Jenis Produk</label>
                                                </div>
                                                <input class="form-control" type="text" name="produk" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$log->produk}}"/>
    
                                                <div class="col-6">
                                                    <label class="form-label">No. Est</label>
                                                </div>
                                                <input class="form-control" type="text" min="0" name="no_est" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$log->no_est}}"/>
    
                                            </div>
                                       
                                        </div>
    
                                        <br><br>
    
                                        {{-- jadual --}}
                                        <div >
                                            <div class="card" >
    
                                                <div class="card-body"  style="border-width: 1px; border-color:black;">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="12" class="text-center">LOG PEMERIKSAAN VETERINAR <br><span>JABATAN PERKHIDMATAN VETERINAR MALAYSIA</span></th>
                                                                {{-- after AUDIT, need to specify MyGap or VHM --}}
                                                            </tr>
                                                            <tr  style="vertical-align: middle">
                                                                <th>Tarikh</th>
                                                                <th>Nama Pemeriksa</th>
                                                                <th>Tujuan Pemeriksaan</th>
                                                                <th>Catatan</th>
                                                                <th>Tandatangan Pengurus Loji</th>
                                                                <th colspan="7">Tandatangan Pemeriksa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody >
                                                            <tr style="vertical-align: middle">
                                                                <td height="50"></td>
                                                                <td height="50"></td>
                                                                <td height="50"></td>
                                                                <td height="50"></td>
                                                                <td height="50"></td>
                                                                <td colspan="7" height="50"></td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                    </table>
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
    
</body>
</html>


