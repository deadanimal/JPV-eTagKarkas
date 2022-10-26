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

                <form action="/rumah/{{$rumah->id}}" method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="card-body">

                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <div class="col-xl-2 mb-3">
                                {{-- buat as table, editable in future --}}
                                <label class="col-form-label">Kategori Premis</label>
                            </div>
                            <div class="col-xl-10">
                                <select class="form-select" aria-label="Default select example" name="induk" >
                                    <option selected >{{ $rumah->induk}}</option>
                                    <option value="RUMAH SEMBELIH JABATAN (RUMINAN)">RUMAH SEMBELIH JABATAN (RUMINAN)</option>
                                    <option value="RUMAH SEMBELIH JABATAN (BABI)">RUMAH SEMBELIH JABATAN (BABI)</option>
                                    <option value="RUMAH SEMBELIH SWASTA (RUMINAN)">RUMAH SEMBELIH SWASTA (RUMINAN)</option>
                                    <option value="RUMAH SEMBELIH SWASTA (BABI)">RUMAH SEMBELIH SWASTA (BABI)</option>
                                    <option value="SEMBELIHAN LUAR">SEMBELIHAN LUAR</option>
                                    <option value="LOJI PENYEMBELIHAN AYAM">LOJI PENYEMBELIHAN AYAM</option>
                                    <option value="LOJI PENYEMBELIHAN ITIK">LOJI PENYEMBELIHAN ITIK</option>
                                    <option value="LOJI PEMPROSESAN PRODUK">LOJI PEMPROSESAN PRODUK</option>
                                    <option value="LADANG MyGap">LADANG MyGap</option>
                                    <option value="LADANG MyOrganic">LADANG MyOrganic</option>
                                </select>
                            </div>
                            <div class="col-xl-2">
                                <label class="form-label">Nama Premis</label>
                            </div>
                            <div class="col-xl-10">
                                <input class="form-label" type="text" name="nama_rumah" value="{{ $rumah->nama_rumah}}" >
                            </div>

                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Kod Premis</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kod" value="{{ $rumah->kod}}" >
                            </div>
                            <div class="col-2 text-end">
                                <label class="form-label">Kategori Tag</label>
                            </div>
                            <div class="col-4">
                                <input class="form-label" type="text" name="kategori" value="{{ $rumah->kategori}}" >
                            </div>
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Alamat</label>
                            <div class="col-xl-10">
                                <textarea class="form-label" name="alamat" cols="93" rows="5" >{{ $rumah->alamat }}</textarea>
                            </div>
                        </div>

                        {{-- Zon --}}
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Zon</label>
                            <div class="col-xl-4">
                                <select class="form-select" aria-label="Default select example" name="zon">
                                    <option selected value="Zon">{{ $rumah->zon }}</option>
                                    <option value="Zon Utara">Zon Utara</option>
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
                                <input type="text" name="negeri" value="{{ $rumah->negeri}}" >
                            </div>

                            <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                            </div>
                            <div class="col-4">
                                <input type="text" name="daerah" value="{{ $rumah->daerah}}" >
                            </div>

                        </div>

                        {{-- Nombor Telefon --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">No. Telefon Premis</label>
                            <div class="col-sm-10">
                                <input class="form-label" type="text" name="no_tel" value="{{ $rumah->no_tel }}" />
                            </div>
                        </div>


                        <!--Akses Ternakan-->
                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jenis Ternakan/Produk</label>
                            <div class="col ">Ruminan Besar
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Ruminan Besar" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ruminan Kecil
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Ruminan Kecil" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Ayam/Itik
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Ayam/Itik" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Babi
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Babi" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Telur
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Telur" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Susu
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Susu" />
                            </div>
                            <label class="col"></label>
                            <div class="col ">Tambah Nilai
                                <input class="form-label" type="checkbox" name="akses_ternakan[]" value="Tambah Nilai" />
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>





    </main>
@endsection



@section('script')

@endsection
