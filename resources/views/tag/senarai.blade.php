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
            <div class="card-header">
                <b>Permohonan Tag Karkas</b>
            </div>
            <div class="card-body">


                <form action="/tag" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--Nama Pengeluar-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Pengeluar:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{ $user->rumah_sembelih->nama_rumah }}"  readonly />
                    </div>
                </div>
                <!--Induk-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Induk:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{ $user->rumah_sembelih->induk }}"  readonly />
                    </div>
                </div>
                <!--Pejabat Pengeluar-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Rumah Sembelih:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{ $user->rumah_sembelih->nama_rumah }}" readonly />
                    </div>
                </div>
                <!--Kategori Tag-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kategori Tag</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{ $user->rumah_sembelih->kategori }}" readonly />
                    </div>
                </div>
                <!--Jenis Ternakan-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="jenis_ternakan">
                            <option selected value="Ruminan Besar">Ruminan Besar</option>
                            <option value="Ruminan Kecil">Ruminan Kecil</option>
                            <option value="Unggas">Unggas</option>
                            <option value="Babi">Babi</option>
                        </select>                     
                    </div>

                </div>
                {{-- Bilangan Ternakan --}}
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Bilangan Ternakan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="4" name="bil_ternakan"  />
                    </div>
                </div>
                {{-- Bilangan Kod Bar Untuk Dijana --}}
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="16" name="bil_kodbar" />
                    </div>
                </div>
                {{-- Pengesyoran Kuantiti --}}
                {{-- <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pengesyoran Kuantiti</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="" name="bil_kod" placeholder="16"
                             />
                    </div>
                </div> --}}

                <!--Cetakan Kod Bar-->
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Cetakan Kod Bar</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{ $user->rumah_sembelih->kod_bar }}"  readonly  />
                    </div>
                </div>

                <!--Button-->
                <div>
                    <button class="btn btn-primary" type="submit" style="margin-left: auto;margin-right: 0;">Cipta</button>
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
                <thead class="text-black ">
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
                <tbody>

                    <tr>

                        @foreach($tags as $tag)
                        <td>{{ $loop->iteration }}</td>
                        <td>Rxxxxxxx-001</td>
                        <td>Rumah Sembelih</td>
                        <td>{{ $tag->jenis_ternakan }}</td>
                        <td>{{ $tag->bil_ternakan }}</td>
                        <td>K1</td>
                        <td>14/7/2022</td>
                        <td>Pemeriksa Daging</td>
                        <td>Manual</td>
                        <td>Dihantar</td>
                        {{-- <td>{{ $tags->bil_kodbar }}</td> --}}
                       

                        {{-- Button edit & hapus --}}
                        <td>
                            <div class="col-auto">
                                <a href="/tag/{{$tag->id}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-auto">
                                <form action="/tag/{{$tag->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-print"></i></a>
                            </div>
                        </td>

                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>


    </div>



</main>

@endsection

@section('script')


@endsection