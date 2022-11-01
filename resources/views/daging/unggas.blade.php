@extends('daging.senarai')

@section('sub-content')
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
            {{-- <li class="nav-item" style="background-color: aquamarine"><a class="nav-link " href="#tab-5"
                    data-bs-toggle="tab" role="tab">Jana Laporan</a></li> --}}
        </ul>

        <div class="tab-content">
            <div class="header">
                <h1 class="header-title text-black">
                    Unggas
                </h1>
            </div>
            <div class="tab-pane active" id="tab-1" role="tabpanel">

                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pengenalan Ternakan > Daftar Baharu Unggas</b>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Ladang</label>
                                    <select class="form-select" aria-label="Default select example" name="nama_ladang">
                                        <option selected></option>
                                        <option value="Farm A">Farm A</option>
                                        <option value="Farm B">Farm B</option>
                                        <option value="Farm C">Farm C</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Kenderaan</label>
                                    <input type="text" name="nombor_kenderaan" placeholder="ABC123">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">ID Ladang</label><br>
                                    <input type="number" name="id_ladang">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat Ladang</label>
                                    <textarea name="alamat_ladang" id="alamat_ladang" cols="30" rows="5" placeholder="Setiawan,Perak"></textarea>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Tarikh Terima Ternakan </label>
                                    <input type="date" name="tarikh_terima_ternakan">
                                </div>

                            </div>

                        </div>

                        <!--Button-->
                        <div>
                            <button class="btn btn-primary" type="submit”">Kemaskini</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="tab-pane" id="tab-2" role="tabpanel">

                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Ternakan > Maklumat Unggas</b>
                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan Yang Diterima</label>
                                    <input type="number" name="bil_ternakan_diterima">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Yang Mati Semasa Tiba(DOA)</label>
                                    <input type="number" name="doa">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="">Ternakan Mati Sebelum Sembelih(DBS)</label>
                                    <input type="number" name="dbs">
                                </div>

                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-3">
                                    <label for="">Runt(AM + PM)</label>
                                    <input type="number" name="runt">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Salah Sembelih </label>
                                    <input type="number" name="salah_sembelih">
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
                                    <label for="">General Condition</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">Respiratory System</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">CNS Symptoms</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">Gastrointestinal Tract System</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>

                                <hr class="text-primary mb-3">


                                <!--Button-->
                                <div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="tab-pane" id="tab-4" role="tabpanel">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Daging > Pemeriksaan Post Mortem</b>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Bukan Lesi Semasa Post Mortem</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>
                                <hr class="text-primary mb-3">
                                <div class="mb-3 col-md-3">
                                    <label for="">Lesi Semasa Post Mortem</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected>Carcass</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected>Abcess</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>
                                <hr class="text-primary mb-3">
                                <div class="mb-3 col-md-3">
                                    <label for="">Gastrointestinal Tract System</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <button>Tambah</button>
                                </div>

                                <hr class="text-primary mb-3">


                                <!--Button-->
                                <div>
                                    <button class="btn btn-primary" type="submit">Kemaskini</button>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('script')
@endsection
