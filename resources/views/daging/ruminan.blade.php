@extends('daging.senarai')


@section('sub-content')

    @include('daging.senarai_ruminan')
    
    <div class="tab mt-1">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" style="background-color: aquamarine"><a class="nav-link active" href="#tab-1"
                    data-bs-toggle="tab" role="tab">Pengenalan Ternakan</a></li>
            <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-2"
                    data-bs-toggle="tab" role="tab">Pemeriksaan Ternakan</a></li>
            <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-3"
                    data-bs-toggle="tab" role="tab">Pemeriksaan Ante Mortem</a></li>
            <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-4"
                    data-bs-toggle="tab" role="tab">Pemeriksaan Post Mortem</a></li>
            <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-5"
                    data-bs-toggle="tab" role="tab">Tag Karkas</a></li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active show" id="tab-1" role="tabpanel">

                <form action="/pemeriksaan" method="POST">
                    @csrf
        
                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Nama Pemilik</label>
                            <input class="form-control" type="text" placeholder="Nama pemilik" name="nama_pemilik"
                                    onkeyup="this.value = this.value.toUpperCase();">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">No Kenderaan</label>
                            <input class="form-control" type="text" placeholder="ABC 123" name="kenderaan"
                                    onkeyup="this.value = this.value.toUpperCase();">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Masa Ternakan Tiba Dipremis</label>
                            <div class="input-group date" id="datetimepicker-minimum" data-target-input="nearest">
                                <input type="text" name="masa_tiba" class="form-control datetimepicker-input" data-target="#datetimepicker-minimum">
                                <div class="input-group-text" data-target="#datetimepicker-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                            </div>                            
                            {{-- <input class="form-control" type="datetime" name="tiba"> --}}
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Masa Ternakan Disembelih</label>
                            <div class="input-group date" id="datetimepicker-sembelih" data-target-input="nearest">
                                <input type="text" name="masa_disembelih" class="form-control datetimepicker-input" data-target="#datetimepicker-sembelih">
                                <div class="input-group-text" data-target="#datetimepicker-sembelih" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                            </div>                           
                        </div>

                    </div>


                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Nombor Permit</label>
                            <input class="form-control" type="number" placeholder="12345" name="permit">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Spesis Ternakan</label>
                            <input class="form-control" type="text" placeholder="Lembu" name="spesis"
                                    onkeyup="this.value = this.value.toUpperCase();">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Bilangan Ternakan (Mengikut SKV)</label>
                            <input class="form-control" type="number" min="0" placeholder="12" name="bil_ternakan_skv">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">ID Premis</label>
                            <input class="form-control" type="number" name="id_permis">
                        </div>

                    </div>

                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Nama Premis</label>
                            <input class="form-control" type="text" name="nama_premis"
                                    onkeyup="this.value = this.value.toUpperCase();">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Alamat Premis</label>
                            <textarea class="form-control" name="alamat_premis" id="" cols="20" rows="3" 
                                    onkeyup="this.value = this.value.toUpperCase();"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Bilangan Ternakan Yang Diterima</label>
                            <input class="form-control" type="number" min="0" name="bil_ternakan_diterima" placeholder="2">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Ternakan Yang Mati Semasa Tiba</label>
                            <input class="form-control" type="number" min="0" name="ternakan_mati_semasa_tiba" placeholder="2">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Jumlah Ternakan Yang Diperiksa</label>
                            <input class="form-control" type="number" min="0" name="jumlah_ternakan_diperiksa" placeholder="2">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Jumlah Binatang Layak Disembelih</label>
                            <input class="form-control" type="number" min="0" name="jumlah_binatang_layak_disembelih"
                                placeholder="2">
                        </div>

                    </div>

                    <!--Button-->
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                    </div>

                </form>

            </div>

            <div class="tab-pane" id="tab-2" role="tabpanel">


               <form action="/harian" method="POST">
                @csrf

                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Bilangan Diasingkan Untuk Pemeriksaan Rapi</label>
                            <input class="form-control" type="number" min="0" name="bilangan_diasingkan_pemeriksaan_rapi">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Jumlah Binatang Disembelih Kerana Kecemasan</label>
                            <input class="form-control" type="number" min="0" name="jumlah_binatang_disembelih_kecemasan"
                                placeholder="2">
                        </div>

                        <div class="mb-3 col-md-3" style="margin-top: 22px">
                            <label for="" >Jumlah Yang Disembelih</label>
                            <input class="form-control" type="number" min="0" name="jumlah_disembelih" placeholder="2">
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="">Baki Ternakan Yang Belum Disembelih</label>
                            <input class="form-control" type="number" min="0" name="baki_ternakan_belum_disembelih"
                                placeholder="2">
                        </div>

                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-3">
                            <label for="">Catatan</label>
                            <textarea class="form-control" name="catatan" cols="60" rows="5"
                            onkeyup="this.value = this.value.toUpperCase();"></textarea>
                        </div>
                    </div>

                     <!--Button-->
                     <div class="mb-3">
                        <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                    </div>

               </form>

            </div>

            <div class="tab-pane" id="tab-3" role="tabpanel">


                <form action="/ante-mortem" method="POST">
                @csrf
                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Penemuan Ante Mortem</label>
                            <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-2">
                            <label for="">Bilangan Kes</label>
                            <input class="form-control" type="number" min="0" name="kes">
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Nombor Tag</label>
                            <select class="form-select" aria-label="Default select example" name="nombor_tag">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Catatan</label>
                            <textarea class="form-control" name="catatan_ante_mortem" cols="30" rows="5" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                            <button class="fas fa-upload" style="float: right"></button>
                        </div>

                        <hr>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Jumlah binatang yang dikondem pada pemeriksaan ante
                                mortem</label>
                            <input class="form-control" type="number" min="0" name="jumlah_dikondem">
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                    </div>

                </form>

            </div>


            <div class="tab-pane" id="tab-4" role="tabpanel">

                <form action="/post-mortem" method="POST">
                @csrf
                    <div class="row">

                        <div class="mb-3 col-md-3">
                            <label for="">Kategori</label>
                            <select class="form-select" aria-label="Default select example" name="kategori_post_mortem">
                                <option selected>Karkas</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Bahagian</label>
                            <select class="form-select" aria-label="Default select example" name="bahagian">
                                <option selected>Head</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Sebab Musnah</label>
                            <select class="form-select" aria-label="Default select example" name="musnah">
                                <option selected>Lumps</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Bilangan Kes</label>
                            <input class="form-control" type="number" min="0" name="kes_post_mortem">
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Nombor Tag</label>
                            <select class="form-select" aria-label="Default select example" name="nombor_tag_post">
                                <option selected>XXXX</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-3">
                            <label for="">Keputusan</label>
                            <select class="form-select" aria-label="Default select example" name="keputusan">
                                <option selected>Partial Condemn</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
    
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                    </div>
                </form>

            </div>

            <div class="tab-pane" id="tab-5" role="tabpanel">

                <div class="row d-flex justify-content-center">
                    <table class="table table-bordered">
                        <thead class="text-black ">
                            <tr>
                                <th>Bil.</th>
                                <th scope="col">No. Tag</th>
                                <th scope="col">Jantina</th>
                                <th scope="col">Baka</th>
                                <th scope="col">Tarikh Disembelih</th>
                                <th scope="col">Penggunaan Tag Karkas</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td>1</td>
                                <td>XXXX</td>
                                <td>Betina</td>
                                <td>XXXX</td>
                                <td>20/7/2022</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example"
                                        name="catatan_penggunaan">
                                        <option selected>Sila Pilih</option>
                                        <option value="1">R3-180722-0035</option>
                                        <option value="2">R3-180722-0035</option>
                                        <option value="3">R3-180722-0035</option>
                                    </select>
                                </td>

                            </tr>

                            <tr>

                                <td>2</td>
                                <td>XXXX</td>
                                <td>Jantan</td>
                                <td>XXXX</td>
                                <td>20/7/2022</td>
                                <td>
                                    <select class="form-select" aria-label="Default select example"
                                        name="catatan_penggunaan">
                                        <option selected>Sila Pilih</option>
                                        <option value="1">R3-180722-0035</option>
                                        <option value="2">R3-180722-0035</option>
                                        <option value="3">R3-180722-0035</option>
                                    </select>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>


            </div>



        </div>
    </div>
@endsection

@section('script')
<script>
    $('#datepicker').datepicker({
    uiLibrary: 'bootstrap5'
    });
</script>
@endsection

