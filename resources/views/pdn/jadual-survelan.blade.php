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
                                <h5 class="card-title">Jadual Survelan Audit Loji VHM/GVHP or MyGap</h5>
                            </div>

                            <div class="card-body">
                                <form action="/cipta_survelan_audit" method="POST" enctype="multipart/form-data">
                                    {{-- @method('PUT') --}}
                                    @csrf
            
                                    <div class="mb-3">
            
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nombor VHM/MyGAP</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="number" name="nombor" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>

                                            <div class="col-2">
                                                <label class="form-label">Premis</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Nombor Telefon</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="telefon" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Emel</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="email" name="email" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label class="form-label">Faks</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="number" name="fax" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
            
                                            <div class="col-2 mt-3">
                                                <label class="form-label">Website</label>
                                            </div>
                                            <div class="col-4 mt-3">
                                                <input class="form-control" type="text" name="web" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>

                                        </div>

                                       
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Jenis Produk</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="jenis_produk" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                            <div class="col-10">
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>
                                        </div>
            
                                    </div>
            
                                   
                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Negeri</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="negeri" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Negeri</option>
                                                <option value="G29">G29</option>
                                                <option value="G41">G41</option>
                                                <option value="G44">G44</option>
                                                <option value="G54">G54</option>
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Kaedah Audit</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="kaedah_audit" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Kaedah Audit</option>
                                                <option value="G29">G29</option>
                                                <option value="G41">G41</option>
                                                <option value="G44">G44</option>
                                                <option value="G54">G54</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 1</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_1" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Pemeriksa</option>
                                                <option value="G29">G29</option>
                                                <option value="G41">G41</option>
                                                <option value="G44">G44</option>
                                                <option value="G54">G54</option>
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 2</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_2" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Pemeriksa</option>
                                                <option value="G29">G29</option>
                                                <option value="G41">G41</option>
                                                <option value="G44">G44</option>
                                                <option value="G54">G54</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 3</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_3" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Pemeriksa</option>
                                                <option value="G29">G29</option>
                                                <option value="G41">G41</option>
                                                <option value="G44">G44</option>
                                                <option value="G54">G54</option>
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <label class="form-label">Nama Pemeriksa 4</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example" name="pemeriksa_4" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                                <option selected value="">Pilih Pemeriksa</option>
                                                <option value="G29">G29</option>
                                                <option value="G41">G41</option>
                                                <option value="G44">G44</option>
                                                <option value="G54">G54</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label class="form-label">Catatan</label>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" rows=5 name="catatan" onkeyup="this.value = this.value.toUpperCase();" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')"></textarea>
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
                                                Adakah anda ingin mendaftar pengguna baharu?
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