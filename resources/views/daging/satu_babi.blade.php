@extends('layouts.app')

@section('content')
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
        </ul>

        <div class="tab-content">
            <div class="header">
                <h1 class="header-title text-black">
                    Kategori Babi
                </h1>
            </div>
            <div class="tab-pane active" id="tab-1" role="tabpanel">

                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pengenalan Ternakan</b>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Nama Pemilik Ladang</label><br>
                                    <input type="text" name="pemilik_ladang">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Nombor Kenderaan</label><br>
                                    <input type="text" name="nombor_kenderaan">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Masa Ternakan Tiba</label><br>
                                    <input type="time" name="masa_tiba">
                                </div>
                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Kod Ladang/ID Premis</label><br>
                                    <input type="number" name="kod_ladang">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Bilangan Ternakan </label><br>
                                    <input type="number" name="bil_ternakan_diterima">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Ternakan Mati Semasa Tiba</label>
                                    <input type="number" name="ternakan_mati_semasa_tiba">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Ternakan Diperiksa</label><br>
                                    <input type="number" name="jumlah_ternakan_diperiksa">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Bilangan Diasingkan Untuk Pemeriksaan Rapi </label>
                                    <input type="number" name="bil_pemeriksaan_rapi">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Binatang Disembelih Kerana Kecemasan</label>
                                    <input type="number" name="jumlah_disembelih_kerana_kecemasan">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Binatang Yang Dikondem</label>
                                    <input type="number" name="jumlah_dikondem">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Yang Disembelih </label><br>
                                    <input type="number" name="jumlah_disembelih">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Baki Ternakan Belum Disembelih</label>
                                    <input type="number" name="baki_ternakan">
                                </div>

                            </div>


                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea name="catatan" cols="30" rows="5"></textarea>
                                </div>

                            </div>

                        </div>

                        <!--Button-->
                        <div>
                            <button class="btn btn-primary" type="submit">Kemaskini</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="tab-pane" id="tab-2" role="tabpanel">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Ternakan > Maklumat Haiwan Ternakan</b>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat Ladang</label>
                                    <input type="text" name="alamat_ladang">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Negeri</label><br>
                                    <input type="text" name="negeri">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Daerah</label><br>
                                    <input type="text" name="daerah">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Telefon</label>
                                    <input type="number" name="telefon">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Pemilik</label>
                                    <input type="text" name="pemilik">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Kenderaan</label>
                                    <input type="text" name="no_kenderaan">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Tiba</label><br>
                                    <input type="time" name="masa_ternakan_tiba">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Disembelih</label>
                                    <input type="time" name="masa_ternakan_disembelih">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Permit</label>
                                    <input type="number" name="no_permit">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Jenis Ternakan</label>
                                    <input type="text" name="jenis_ternakan">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Baka Ternakan </label>
                                    <input type="text" name="baka_ternakan">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Diperiksa</label>
                                    <input type="number" name="jumlah_diperiksa">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan Diterima</label>
                                    <input type="number" name="bil_ternakan_diterima">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Ternakan Mati Semasa Tiba</label>
                                    <input type="number" name="ternakan_mati_semasa_tiba">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Disembelih </label>
                                    <input type="number" name="jumlah_disembelih">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Binatang Layak Disembelih</label>
                                    <input type="number" name="jumlah_layak_disembelih">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label for="">Bilangan Diasingkan <br> Untuk Pemeriksaan Rapi</label><br>
                                    <input type="number" name="bil_pemeriksaan_rapi">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for=""> Baki Ternakan Belum Disembelih</label><br>
                                    <input type="number" name="baki_belum_disembelih">
                                </div>

                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea name="catatan" cols="25" rows="5"></textarea>
                                </div>

                            </div>

                        </div>

                        <!--Button-->
                        <div>
                            <button class="btn btn-primary" type="submit">Kemaskini</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>
                </form>

            </div>

            <div class="tab-pane" id="tab-3" role="tabpanel">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Ternakan > Pemeriksaan Ante Mortem</b>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Penemuan Ante Mortem</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="penemuan_ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label><br>
                                    <input type="number" name="bil_kes">
                                </div>


                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea name="catatan" cols="50" rows="5"></textarea>
                                </div>

                                <hr class="text-primary mb-3">


                            </div>

                        </div>

                        <!--Button-->
                        <div>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>
                </form>

            </div>


            <div class="tab-pane" id="tab-4" role="tabpanel">

                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Ternakan > Pemeriksaan Post Mortem</b>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori">
                                        <option selected>Carcas</option>
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
                                    <select class="form-select" aria-label="Default select example" name="sebab_musnah">
                                        <option selected>Lumps</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label><br>
                                    <input type="number" name="bil_kes">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Keputusan</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected>Partial Condemn</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <hr class="text-primary mb-3">


                            </div>

                        </div>

                        <!--Button-->
                        <div>
                            <button class=“btn btn-primary” type=“submit”>Tambah</button>
                            <button class=“btn btn-primary” type=“submit”>Kemaskini</button>
                            <button class=“btn btn-primary” type=“submit”>Simpan</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="tab-pane" id="tab-5" role="tabpanel">

                <div class="container-fluid">
                    <div class="col-md-12">
                        <form action="">
                            <div class="card">
                                <div class="card-header">
                                    <b>Catatan Penggunaan Tag Karkas</b>
                                </div>

                                <div class="card-body">

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

                                <!--Button-->
                                <div>
                                    <button class="btn btn-primary" type="submit"
                                        style="margin-left: auto;margin-right: 0;">Simpan</button>
                                    <button class="btn btn-primary" type="submit"
                                        style="margin-left: auto;margin-right: 0;">Kemaskini</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>



        </div>
    </div>
@endsection

@section('script')
@endsection
