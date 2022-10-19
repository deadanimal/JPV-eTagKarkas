@extends('layouts.app')



@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pendaftaran Stok Tag Karkas
            </h1>
        </div>

        <div class="card">
            <div class="card-header bg-info text-black">
                <b>Pendaftaran Stok Tag Karkas</b>
            </div>
            <div class="card-body">


                <form action="/tag" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--JUmlah-->
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Jumlah Tag Diterima</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" />
                    </div>
                </div>
                <!--Induk-->
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Tarikh Terima Stok</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="date" />
                    </div>
                </div>
                <!--Jumlah Tag Rosak-->
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Jumlah Tag Rosak</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text"  />
                    </div>
                </div>
                <!--Tarikh Tag Rosak-->
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Tarikh Tag Rosak</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="date"  />
                    </div>
                </div>
                {{-- Catatan --}}
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Catatan</label>
                <div class="col-xl-6">
                    <textarea name="catatan" cols="93" rows="5"></textarea>
                </div>
                </div>

                <!--Button-->
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-success" type="submit" >Cipta</button>
                </div>


                </form>
               
            </div>
        </div>


        <div class="mb-3 row">
            <label class="col-xl-2 col-form-label">Tarikh</label>
            <div class="col-xl-10">
                <input class="form-control" type="date"  />
            </div>
        </div>




        <div class="row d-flex justify-content-center">
            <table class="table border border-info">
                <thead class="text-black bg-info ">
                    <tr>
                        <th scope="col">Bil.</th>
                        <th scope="col">Tarikh</th>
                        <th scope="col">Jumlah Tag Diterima</th>
                        <th scope="col">Jumlah Tag Rosak</th>
                        <th scope="col">Tarikh Tag Rosak</th>
                        <th scope="col">Catatan</th>
                        <td></td>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        {{-- @foreach($stoks as $stok)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stok->tarikh }}</td>
                        <td>{{ $stok->tag_diterima }}</td>
                        <td>{{ $stok->tag_rosak }}</td>
                        <td>{{ $stok->tarikh_tag_rosak }}</td>
                        <td>{{ $stok->catatan }}</td> --}}

                        


                        <td>11</td>
                        <td>14/7/2022</td>
                        <td>100</td>
                        <td>500</td>
                        <td>14/7/2022</td>
                        <td>Rosak</td>
                        <td>
                            <div class="col-auto">
                                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            </div>
    
                        </td>
                       
                    </tr>

                    {{-- @endforeach --}}

                </tbody>
            </table>
        </div>


    </div>



</main>

@endsection

@section('script')


@endsection