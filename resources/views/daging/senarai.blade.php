@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title" >
                Daging
            </h1>
        </div>

        <div>
            <div>
                <div class="row mb-3">
                    <div class="col">
                        <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-secondary">Pemeriksaan Daging</a>
                                </li>
                                <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700"
                                    aria-current="page">
                                    Semak Haiwan Ternakan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <hr class="text-primary mb-3">


                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Daging</b>
                        </div>
                        <div class="card-body">



                            <!--Nama Pengeluar-->
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Ruminan</option>
                                        <option value="unggas">Unggas</option>
                                        <option value="babi">Babi</option>
                                    </select>
                                </div>
                            </div>
                            <!--Induk-->
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">NO SKV</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="no_skv" placeholder="XXXX" />
                                </div>
                            </div>


                            <!--Button-->
                            <div>
                                <button class="btn btn-primary" type="submit" style="margin-left: auto;margin-right: 0;">Semak</button>
                                <a href="/daging/satu_ruminan" type="submit" class="btn btn-primary" style="margin-left: auto;margin-right: 0;">Daftar</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Pengenalan Ternakan</b>
                    </div>
    
                   <div class="card-body">

                    <form action="">

                        <div class="row">

                            <div class="mb-3 col-md-3">
                                <label for="">Nama Pemilik</label>
                                <input type="text" placeholder="Zachroy Anazfitry">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">No Kenderaan</label>
                                <input type="text" placeholder="ABC 123">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">Masa Ternakan Tiba</label>
                                <input type="text">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">Masa Ternakan Disembelih</label>
                                <input type="text">
                            </div>
                           
                        </div>

                        <div class="row">

                            <div class="mb-3 col-md-3">
                                <label for="">No Permit</label>
                                <input type="text" placeholder="12345">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">Spesis</label>
                                <input type="text" placeholder="Lembu">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">Bilangan Ternakan</label>
                                <input type="text" placeholder="12">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">ID Permis</label>
                                <input type="text">
                            </div>
                           
                        </div>

                        <div class="row">

                            <div class="mb-3 col-md-3">
                                <label for="">Nama Premis</label>
                                <input type="text">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="">Alamat Premis</label>
                                <input type="text">
                            </div>

                           
                        </div>
                          

                    </div>

                        <!--Button-->
                        <div>
                            <button class="btn btn-primary" type="submit" style="margin-left: auto;margin-right: 0;">Kemaskini</button>
                            <a href="#" type="submit" class="btn btn-primary" style="margin-left: auto;margin-right: 0;">Simpan</a>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>


       


    </div>



</main>

@endsection

@section('script')


@endsection