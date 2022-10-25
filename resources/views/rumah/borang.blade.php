@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pendaftaran Premis
                </h1>
            </div>


            <div class="card">
                <div class="card-header bg-info text-white">
                    <b class="text-center">Pendaftaran Premis</b>
                </div>

                <form action="/rumah" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="card-body">

                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <div class="col-sm-2 mb-3">
                                {{-- buat as table, editable in future --}}
                                <label class="col-form-label">Kategori Premis</label>
                            </div>
                            <div class="col-sm-10">

                                <select class="form-select" aria-label="Default select example" name="induk">
                                    <option selected value="PILIH INDUK">PILIH PREMIS</option>
                                    <option value="RSRJ -RUMAH SEMBELIH RUMINAN JABATAN">RSRJ -RUMAH SEMBELIH RUMINAN
                                        JABATAN</option>
                                    <option value="RSBJ -RUMAH SEMBELIH BABI JABATAN">RSBJ -RUMAH SEMBELIH BABI JABATAN
                                    </option>
                                    <option value="LPAS - LOJI PENYEMBELIHAN AYAM SWASTA">LPAS - LOJI PENYEMBELIHAN AYAM
                                        SWASTA</option>
                                    <option value="RSRS - RUMAHSEMBELIH RUMINAN SWASTA">RSRS - RUMAH SEMBELIH RUMINAN SWASTA
                                    </option>

                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label class="form-label">Nama Premis</label>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="nama_rumah" />
                            </div>

                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Kod Premis</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kod" />
                            </div>
                            <div class="col-2 text-end">
                                <label class="form-label">Kategori Tag</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kategori" />
                            </div>
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Alamat</label>
                            <div class="col-xl-10">
                                <textarea class="form-label" name="alamat" cols="93" rows="5"></textarea>
                            </div>
                        </div>

                        {{-- Zon --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Zon</label>
                            <div class="col-xl-4">
                                <select class="form-select" aria-label="Default select example" name="zon">
                                    <option selected value="Zon Utara">Zon Utara</option>
                                    <option value="Zon Tengah">Zon Tengah</option>
                                    <option value="Zon Timur">Zon Timur</option>
                                    <option value="Zon Selatan">Zon Selatan</option>
                                    <option value="Zon Sabah">Zon Sabah</option>
                                    <option value="Zon Sarawak">Zon Sarawak</option>
                                </select>
                            </div>
                        </div>

                        {{-- Negeri & Daerah --}}
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Negeri</label>
                            </div>
                            <div class="col-4">
                                <select class="form-select" aria-label="Default select example" name="negeri">
                                    <option selected>Pilih Negeri</option>
                                    <option class="Zon Utara" value="Perak">Perak</option>
                                    <option class="Zon Utara" value="Pulau Pinang">Pulau Pinang</option>
                                    <option class="Zon Utara" value="Kedah">Kedah</option>
                                    <option class="Zon Utara" value="Perlis">Perlis</option>
                                    <option class="Zon Tengah" value="Selangor">Selangor</option>
                                    <option class="Zon Tengah" value="Melaka">Melaka</option>
                                    <option class="Zon Tengah" value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option class="Zon Tengah" value="W.P Putrajaya">W.P Putrajaya</option>
                                    <option class="Zon Tengah" value="W.P Kuala Lumpur">W.P Kuala Lumpur</option>
                                </select>
                            </div>

                            <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                            </div>
                            <div class="col-4">
                                <select class="form-select" aria-label="Default select example" name="daerah">
                                    <option selected>Pilih Daerah</option>
                                    <option value="Selangor">Shah Alam</option>
                                    <option value="Kelantan">Kuantan</option>
                                    <option value="Terengganu">Pasir Mas</option>
                                </select>
                            </div>

                        </div>

                        {{-- Nombor Telefon --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="no_tel" />
                            </div>
                        </div>


                        <!--Akses Ternakan-->
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                            <div class="col ">Ruminan Besar
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Ruminan Besar" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ruminan Kecil
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Ruminan Kecil" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ayam/Itik
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Unggas" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Babi
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Babi" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Telur
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Telur" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Susu
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Susu" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Tambah Nilai
                                <input class="form-label" type="checkbox" name="akses_ternakan" value="Susu" />
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Daftar</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>





    </main>
@endsection



@section('script')

@endsection
