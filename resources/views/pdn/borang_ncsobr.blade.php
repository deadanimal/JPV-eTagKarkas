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
                                <h5 class="card-title">Jadual NBR/OBR</h5>
                            </div>

                           <form action="/simpan_borang_ncsobr" method="POST">
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
                                    <label for="inputAddress">Jenis Operasi</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_operasi"
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
                                        <option selected disabled value="">Pilih Borang</option>
                                        <option value="ncs">NCS</option>
                                        <option value="obr">OBR</option>
                                    </select>
                                </div>

                                <!-- Button trigger modal -->

                                <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                    <button type="button" class="btn btn-lg btn-success text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Hantar
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
                                        Adakah anda ingin mewujudkan NBR/OBR yang baru?
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

       <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Jadual Survelan Audit</h5>
                </div>

                <div class="card-body">
                    <div class="col">
                        <table class="table table-bordered line-table text-center" style="width: 100%">
                            <thead class="text-black">

                                <tr>
                                    <th colspan="16">JADUAL PEMERIKSAAN VETERINAR SURVELAN AUDIT(VHM/MyGAP) TAHUN 2022</th>
                                    {{-- after AUDIT, need to specify MyGap or VHM --}}
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>BIL</th>
                                    <th>PREMIS</th>
                                    <th>ALAMAT PREMIS</th>
                                    <th>NAMA PEMERIKSA 1</th>
                                    <th>NAMA PEMERIKSA 2</th>
                                    <th>NAMA PEMERIKSA 3</th>
                                    <th>NAMA PEMERIKSA 4</th>
                                    <th>NEGERI</th>  
                                </tr>
                                <tr>
                                <th colspan="16">Zon</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="text-center">
                                    <td>1</td>
                                    <td>premis</td>
                                    <td>ALAMAT</td>
                                    <td>PEMERIKSA</td>
                                    <td>PEMERIKSA</td>
                                    <td>PEMERIKSA</td>
                                    <td>PEMERIKSA</td>
                                    <td>pahang</td>
                                    
                                </tr>


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