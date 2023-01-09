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
                                    <h1 class="card-title">Borang OBS</h1>
                                </div>
    
                                <div class="card-body">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                
                                        <div class="row">
                
                                            <div class="col-md-6">
    
                                                <div class="col-6">
                                                    <label class="form-label">Total OBS</label>
                                                </div>
                                              
                                                    <input class="form-control" type="text" name="nombor_ic" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$obr->nombor_ic}}"/>
                                              
    
                                                <div class="col-6">
                                                    <label class="form-label">Company</label>
                                                </div>
                                                <input class="form-control" type="text" name="company" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" value="{{$obr->company}}"/>
    
                                                <div class="col-6">
                                                    <label class="form-label">Audit Date</label><br>
                                                </div>
                                                    <input class="form-control" type="text" name="audit" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$obr->audit}}"/>
                                                    <input class="form-control" type="hidden" name="jenis" value="obr">

    
                                                <br>
    
                                                <h5 class="">Details of Non-compliance</h5>
    
                                                <div class="col-6">
                                                    <label class="form-label">Observation Statement</label>
                                                </div>
                                                <div class="">
                                                   
                                                        <textarea class="form-control" rows=5 name="objective_evidence" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')">{{$obr->objective_evidence}}</textarea>
                                                   
                                                </div>
    
                                            </div>
    
                                            
    
                                           
                                            <div class="col md-6 ms-auto">
                                                <div class="col-6">
                                                    <label class="form-label">Auditee's Acknowledgement</label>
                                                </div>
                                                <div class="">
                                                    
                                                        <textarea class="form-control" rows=5 name="auditee_acknowledgement" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')">{{$obr->auditee_acknowledgement}}</textarea>
                                                   
                                                </div>
    
                
                                                <div class="col-6">
                                                    <label class="form-label">Auditor 1 Signature</label>
                                                </div>
                                                <div >
                                                   
                                                        <textarea class="form-control" rows=5 name="auditor1_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')">{{$obr->auditor1_signature}}</textarea>
                                                  
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Auditor 2 Signature</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="auditor2_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')">{{$obr->auditor2_signature}}</textarea>
                                                   
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Auditor 3 Signature</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="auditor3_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')">{{$obr->auditor3_signature}}</textarea>
                                                    
                                                </div>
    
                                                <div class="col-6">
                                                    <label class="form-label">Auditor 4 Signature</label>
                                                </div>
                                                <div>
                                                   
                                                        <textarea class="form-control" rows=5 name="auditor4_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                        oninput="this.setCustomValidity('')">{{$obr->auditor4_signature}}</textarea>
                                                    
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
