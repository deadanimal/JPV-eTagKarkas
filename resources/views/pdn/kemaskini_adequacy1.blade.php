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
                                <h5 class="card-title">Borang Kemaskini Adequacy Audit</h5>
                            </div>

                            <div class="card-body">
                                <form action="/simpan_kemaskini_exsport1/{{$exsports->id}}" method="POST" enctype="multipart/form-data">
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
                                                oninput="this.setCustomValidity('')" value="{{$exsports->nama ?? " "}}"/>
                                            </div>
                                            <div class="col-2">
                                                <label class="form-label">Nombor VHM</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="number" name="nombor" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$exsports->nombor ?? " "}}"/>
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Tarikh Permohonan</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="date" name="tarikh" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$exsports->tarikh ?? " "}}"/>
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Produk untuk Dieksport</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="produk" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$exsports->produk ?? " "}}"/>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label class="form-label">Daerah</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="daerah" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$exsports->daerah ?? " "}}"/>
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Negeri</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="negeri" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$exsports->negeri ?? " "}}"/>
                                            </div>


                                            <div class="col-2 mt-3">
                                                <label class="form-label">Zon</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="zon" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$exsports->zon ?? " "}}"/>
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Poskod</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="poskod" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$exsports->poskod ?? " "}}"/>
                                            </div>

                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Alamat Loji</label>
                                            </div>
                                            <div class="col-10">
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')">{{$exsports->alamat ?? " "}}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Klasifikasi Premis</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="premis" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="{{$exsports->premis ?? " "}}"/>
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Tujuan</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="tujuan" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" value="{{$exsports->tujuan ?? " "}}"/>
                                            </div>

                                        </div>

                                       
            
                                    </div>
            

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Pemeriksa Adequacy Audit 1</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_1" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$exsports->pemeriksa_1 ?? " "}}">{{$exsports->pemeriksa_1 ?? " "}}</option>
                                                <option value="Pemeriksa 1">Pemeriksa 1</option>
                                                <option value="Pemeriksa 2">Pemeriksa 2</option>
                                                <option value="Pemeriksa 3">Pemeriksa 3</option>
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Pemeriksa Adequacy Audit 2</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_2" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="{{$exsports->pemeriksa_2 ?? " "}}">{{$exsports->pemeriksa_2 ?? " "}}</option>
                                                <option value="Pemeriksa 1">Pemeriksa 1</option>
                                                <option value="Pemeriksa 2">Pemeriksa 2</option>
                                                <option value="Pemeriksa 3">Pemeriksa 3</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <input class="form-control" type="hidden" name="jenis" value="selain Singapura">
                                        <div class="col-2">
                                            <label class="form-label">Muat Turun</label>
                                        </div>
                                        <div class="col-10">
                                           <input type="file" name="dokumen" id="dokumen" multiple required>
                                        </div>
                                    </div>
            
                            
            
                                    <!-- Button trigger modal -->
            
                                    <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                        <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                            Tambah
                                        </button>
                                    </div>
  
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Adakah anda ingin menambah permohonan eksport?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button class="btn btn-success text-center" type="submit" style="float: right">Daftar</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
            
                                    {{-- <button class="btn btn-success text-center" type="submit" style="float: right">Daftar</button> --}}
            
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