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

                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Kemaskini Jadual Borang NCR</h5>
                            </div>

                            <div class="card-body">
                                <form action="/simpan_kemaskini_jadual_ncr/{{$ncr->id}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nombor NC</label>
                                            </div>
                                          
                                                <input class="form-control" type="number" name="nombor_ic" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$ncr->nombor_ic}}"/>
                                          

                                            <div class="col-6">
                                                <label class="form-label">Company</label>
                                            </div>
                                            <input class="form-control" type="text" name="company" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$ncr->company}}"/>

                                            <div class="col-6">
                                                <label class="form-label">Audit Date</label>
                                            </div>
                                                <input class="form-control" type="date" name="audit" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$ncr->audit}}"/>
                                           

                                            <div class="col-6">
                                                <label class="form-label">Category</label>
                                            </div>
                                            <input class="form-control" type="text" name="categori" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$ncr->categori}}"/>

                                            <div class="col-6">
                                                <label class="form-label">Standard Reference</label>
                                            </div>
                                            <input class="form-control" type="text" name="standard_reference" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$ncr->standard_reference}}"/>

                                            <div class="col-6">
                                                <label class="form-label">Clause</label>
                                            </div>
                                            <input class="form-control" type="text" name="clause" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" value="{{$ncr->clause}}"/>
                                            <input class="form-control" type="hidden" name="jenis" value="ncr">

                                            {{-- <div class="col-6">
                                                <label class="form-label">Jenis</label>
                                                <select class="form-select" aria-label="Default select example" name="jenis"
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                                    <option selected disabled value="">Pilih Jenis</option>                                                    <option value="ncr">NCR</option>
                                                    <option value="obr">OBR</option>
                                                </select>
                                            </div> --}}
                                            {{-- <input class="form-control" type="text" name="clause" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" /> --}}

                                            <br>

                                            <h5 class="">Details of Non-compliance</h5>

                                            <div class="col-6">
                                                <label class="form-label">NC Statement</label>
                                            </div>
                                            <div class="">
                                                
                                                    <textarea class="form-control" rows=5 name="NC_statement" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->NC_statement}}</textarea>
                                                
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Objective Evidence</label>
                                            </div>
                                            <div class="">
                                               
                                                    <textarea class="form-control" rows=5 name="objective_evidence" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->objective_evidence}}</textarea>
                                               
                                            </div>

                                        </div>

                                        

                                       
                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Auditee's Acknowledgement</label>
                                            </div>
                                            <div class="">
                                                
                                                    <textarea class="form-control" rows=5 name="auditee_acknowledgement" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->auditee_acknowledgement}}</textarea>
                                               
                                            </div>

            
                                            <div class="col-6">
                                                <label class="form-label">Auditor 1 Signature</label>
                                            </div>
                                            <div >
                                               
                                                    <textarea class="form-control" rows=5 name="auditor1_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->auditor1_signature}}</textarea>
                                              
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Auditor 2 Signature</label>
                                            </div>
                                            <div>
                                               
                                                    <textarea class="form-control" rows=5 name="auditor2_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->auditor2_signature}}</textarea>
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Auditor 3 Signature</label>
                                            </div>
                                            <div>
                                               
                                                    <textarea class="form-control" rows=5 name="auditor3_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->auditor3_signature}}</textarea>
                                                
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Auditor 4 Signature</label>
                                            </div>
                                            <div>
                                               
                                                    <textarea class="form-control" rows=5 name="auditor4_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')">{{$ncr->auditor4_signature}}</textarea>
                                                
                                            </div>

                                            <br>

                                        </div>
                                        
                                    
                                    </div>
        
            
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