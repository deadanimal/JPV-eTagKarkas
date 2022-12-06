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
                                <h5 class="card-title">Jadual Borang NCR</h5>
                            </div>

                            <div class="card-body">
                                <form action="/cipta_jadual_ncr" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
            
                                        <div class="col-md-6">

                                            <div class="col-6">
                                                <label class="form-label">Nombor NC</label>
                                            </div>
                                          
                                                <input class="form-control" type="number" name="nombor_ic" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                          

                                            <div class="col-6">
                                                <label class="form-label">Company</label>
                                            </div>
                                            <input class="form-control" type="text" name="company" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Audit Date</label>
                                            </div>
                                                <input class="form-control" type="date" name="audit" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                           

                                            <div class="col-6">
                                                <label class="form-label">Category</label>
                                            </div>
                                            <input class="form-control" type="text" name="categori" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Standard Reference</label>
                                            </div>
                                            <input class="form-control" type="text" name="standard_reference" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <div class="col-6">
                                                <label class="form-label">Clause</label>
                                            </div>
                                            <input class="form-control" type="text" name="clause" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')" />

                                            <br>

                                            <h5 class="">Details of Non-compliance</h5>

                                            <div class="col-6">
                                                <label class="form-label">NC Statement</label>
                                            </div>
                                            <div class="">
                                                
                                                    <textarea class="form-control" rows=5 name="NC_statement" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                                
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Objective Evidence</label>
                                            </div>
                                            <div class="">
                                               
                                                    <textarea class="form-control" rows=5 name="objective_evidence" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                               
                                            </div>

                                        </div>

                                        

                                       
                                        <div class="col md-6 ms-auto">
                                            <div class="col-6">
                                                <label class="form-label">Auditee's Acknowledgement</label>
                                            </div>
                                            <div class="">
                                                
                                                    <textarea class="form-control" rows=5 name="auditee_acknowledgement" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                               
                                            </div>

            
                                            <div class="col-6">
                                                <label class="form-label">Auditor 1 Signature</label>
                                            </div>
                                            <div >
                                               
                                                    <textarea class="form-control" rows=5 name="auditor1_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                              
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Auditor 2 Signature</label>
                                            </div>
                                            <div>
                                               
                                                    <textarea class="form-control" rows=5 name="auditor2_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                               
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Auditor 3 Signature</label>
                                            </div>
                                            <div>
                                               
                                                    <textarea class="form-control" rows=5 name="auditor3_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                                
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Auditor 4 Signature</label>
                                            </div>
                                            <div>
                                               
                                                    <textarea class="form-control" rows=5 name="auditor4_signature" onkeyup="this.value = this.value.toUpperCase();" required
                                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                    oninput="this.setCustomValidity('')"></textarea>
                                                
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

        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Jadual NCR </h5>
                </div>

                <div class="card-body">
                    <div class="col">
                        <table class="table table-bordered line-table text-center" style="width: 100%">
                            <thead class="text-black">

                                <tr>
                                    <th colspan="16">JADUAL PEMERIKSAAN VETERINAR NCR(VHM/MyGAP) TAHUN 2022</th>
                                    {{-- after AUDIT, need to specify MyGap or VHM --}}
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>BIL</th>
                                    <th>Nombor IC</th>
                                    <th>Company</th>
                                    <th>Categori</th>
                                    <th>auditor1_signature</th>
                                    <th>auditor2_signature</th>
                                    <th>auditor3_signature</th>
                                    <th>auditor4_signature</th>  
                                </tr>
                                <tr>
                                <th colspan="16">Zon</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ncr as $ncr)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ncr->nombor_ic}}</td>
                                        <td>{{$ncr->company}}</td>
                                        <td>{{$ncr->categori}}</td>
                                        <td>{{$ncr->auditor1_signature}}</td>
                                        <td>{{$ncr->auditor2_signature}}</td>
                                        <td>{{$ncr->auditor3_signature}}</td>
                                        <td>{{$ncr->auditor4_signature}}</td>  
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" title="Kemaskini"
                                style="float: left">Simpan</button>
                            <button class="btn btn-success" type="submit" title="Hantar"
                                style="float: right">Hantar</button>
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