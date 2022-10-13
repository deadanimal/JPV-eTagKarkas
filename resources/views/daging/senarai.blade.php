@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Kosong Page
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
                        <div class="card-header bg-oranje-jkr">
                            <b>Pemeriksaan Daging</b>
                        </div>
                        <div class="card-body">



                            <!--Nama Pengeluar-->
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Ruminan Besar</option>
                                        <option value="ruminan_kecil">Ruminan Kecil</option>
                                        <option value="unggas">Unggas</option>
                                        <option value="babi">Babi</option>
                                    </select>
                                </div>
                            </div>
                            <!--Induk-->
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">NO SKV</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" autocapitalize="off" name="induk"
                                        placeholder="XXXX" />
                                </div>
                            </div>


                            <!--Button-->
                            <div align="right">
                                <button class=“btn btn-primary” type=“submit”>Semak</button>
                                <button class=“btn btn-primary” type=“submit”>Daftar</button>
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