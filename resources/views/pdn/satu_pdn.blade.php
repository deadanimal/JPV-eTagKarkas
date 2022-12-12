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
                                <h5 class="card-title">Kemaskini Pemeriksaan Dalam Negara</h5>
                            </div>

                           <form action="/simpan_kemaskini_pdn/{{$pdn->id}}" method="POST">
                            @method('PUT')
                            @csrf
                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Zon</label>
                                    <select class="form-select" aria-label="Default select example" name="zon"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Zon</option>
                                        <option value="Zon Utara">Zon Utara</option>
                                        <option value="Zon Tengah">Zon Tengah</option>
                                        <option value="Zon Selatan">Zon Selatan</option>
                                        <option value="Zon Sabah & Sarawak">Zon Sabah & Sarawak</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Pensijilan</label>
                                    <select class="form-select" aria-label="Default select example" name="pensijilan"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Pensijilan</option>
                                        <option value="Sijil 1">Sijil 1</option>
                                        <option value="Sijil 2">Sijil 2</option>
                                        <option value="Sijil 3">Sijil 3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Operasi</label>
                                    <select class="form-select" aria-label="Default select example" name="operasi"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Operasi</option>
                                        <option value="Loji VHM/GVHP">Loji VHM/GVHP</option>
                                        <option value="Loji MyGAP/MyOrganic">Loji MyGAP/MyOrganic</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Borang</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_borang"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Jenis</option>
                                        <option value="survelan">Survelan</option>
                                        <option value="ncr">NCR</option>
                                        <option value="obr">OBR</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Ternakan</label>
                                    <select class="form-select" aria-label="Default select example" name="ternakan"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Ternakan</option>
                                        <option value="Ayam">Ayam</option>
                                        <option value="Ruminan Besar">Ruminan Besar</option>
                                        <option value="Ruminan Kecil">Ruminan Kecil</option>
                                        <option value="Unggas">Unggas</option>
                                    </select>
                                </div>

                                <!-- Button trigger modal -->

                                <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                    <button type="button" class="btn btn-md btn-warning text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Kemaskini
                                    </button>
                                    <a href="/pdn" class="btn btn-primary">Kembali</a>
                                </div>
                                
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Adakah anda ingin mengemaskini maklumat survelan?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button class="btn btn-success " type="submit" value="submit">Ya</button>
                                    </div>
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



</main>

@endsection

@section('script')


@endsection