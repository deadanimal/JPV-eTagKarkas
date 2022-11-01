@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pendaftaran Stok Tag Karkas
                </h1>
            </div>

        </div>
    </main>

{{-- 
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header bg-oranje-jkr">
                        <b>Permohonan Tag Karkas</b>
                    </div>
                    <div class="card-body">

                        <input type="hidden" name="rumah_sembelih_id" value="{{ $user->rumah_sembelih->id }}">

                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Pengeluar:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" autocapitalize="off" name="nama"
                                    value="{{ $tag->rumah_sembelih->nama_rumah }}" readonly />
                            </div>
                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Induk:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" autocapitalize="off" name="induk"
                                    value="" readonly />
                            </div>
                        </div>
                        <!--Pejabat Pengeluar-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Pejabat Pengeluar:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" autocapitalize="off" name="pejabat"
                                    value="" readonly />
                            </div>
                        </div>
                        <!--Kategori Tag-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kategori Tag</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" autocapitalize="off" name="tag"
                                    value="" readonly />
                            </div>
                        </div>


                        <form action="" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <!--Jenis Ternakan-->
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Jenis Ternakan</label>
                                <div class="col-sm-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Ruminan Besar</option>
                                        <option value="ruminan_kecil">Ruminan Kecil</option>
                                        <option value="unggas">Unggas</option>
                                        <option value="babi">Babi</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Bilangan Ternakan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" autocapitalize="off" name="bil_ternakan"
                                        placeholder="4" />
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" autocapitalize="off" name="bil_kod"
                                        placeholder="16" />
                                </div>
                            </div>

                            
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Cetakan Kod Bar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" autocapitalize="off" name="cetakan"
                                        placeholder="Manual" value="" readonly />
                                </div>
                            </div>

                            
                            <div align="right">
                                <button class=“btn btn-primary” type=“submit”>Simpan</button>
                                <button class=“btn btn-primary” type=“submit”>Hantar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div> --}}
        {{-- </div>
    </main> --}}
    @endsection
