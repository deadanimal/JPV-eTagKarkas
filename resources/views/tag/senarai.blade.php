@extends('layouts.app')



@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Tag
            </h1>
        </div>

        <div class="card">
            <div class="card-header bg-oranje-jkr">
                <b>Permohonan Tag Karkas</b>
            </div>
            <div class="card-body">



                <!--Nama Pengeluar-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Pengeluar:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="nama" readonly />
                    </div>
                </div>
                <!--Induk-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Induk:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="induk" readonly />
                    </div>
                </div>
                <!--Pejabat Pengeluar-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pejabat Pengeluar:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="pejabat" readonly />
                    </div>
                </div>
                <!--Kategori Tag-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kategori Tag</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="tag" readonly />
                    </div>
                </div>
                <!--Jenis Ternakan-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="tag" readonly />
                    </div>
                </div>
                {{-- Bilangan Ternakan --}}
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Bilangan Ternakan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="bil_ternakan" readonly />
                    </div>
                </div>
                {{-- Bilangan Kod Bar Untuk Dijana --}}
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="bil_kod" placeholder="16"
                            readonly />
                    </div>
                </div>
                {{-- Pengesyoran Kuantiti --}}
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pengesyoran Kuantiti</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="bil_kod" placeholder="16"
                            readonly />
                    </div>
                </div>

                <!--Cetakan Kod Bar-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Cetakan Kod Bar</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="cetakan" readonly />
                    </div>
                </div>

                <!--Button-->
                <div align="right">
                    <button class=“btn btn-primary” type=“submit”>Cipta</button>
                </div>

                </form>
            </div>
        </div>



        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="card p-3  py-4">
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <label for="nama_projek">Nombor Dokumen</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="myInput" class="form-control" placeholder="xxxxx">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-light btn-block">Carian</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <table class="table table-bordered">
                <thead class="text-white ">
                    <tr>
                        <th scope="col">Bil.</th>
                        <th scope="col">Nombor Dokumen</th>
                        <th scope="col">Pejabat Pengeluar</th>
                        <th scope="col">Jenis Ternakan</th>
                        <th scope="col">Bilangan Ternakan</th>
                        <th scope="col">Kategori Tag</th>
                        <th scope="col">Tarikh Rekod</th>
                        <th scope="col">Pemohon Oleh</th>
                        <th scope="col">Cetakan Kod Bar</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody id="myTable">

                    <tr>


                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>
                        <td>-asd</td>

                        {{-- Button edit & hapus --}}
                        <td>
                            <div class="col-auto">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-auto">
                                <form action="#" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>

                    </tr>


                </tbody>
            </table>
        </div>


    </div>



</main>

@endsection

@section('script')


@endsection