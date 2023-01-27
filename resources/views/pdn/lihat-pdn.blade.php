@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Kemaskini Pemeriksaan Dalam Negara</h5>
                            </div>

                           <form action="#" method="POST">
                            @method('PUT')
                            @csrf
                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Zon</label>
                                    <select class="form-select" aria-label="Default select example" name="zon"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected value="{{$pdn->zon}}">{{$pdn->zon}}</option>
                                      
                                    </select>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Pensijilan</label>
                                    <select class="form-select" aria-label="Default select example" name="pensijilan"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected value="{{$pdn->pensijilan}}">{{$pdn->pensijilan}}</option>
                                      
                                    </select>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Operasi</label>
                                    <select class="form-select" aria-label="Default select example" name="operasi"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected value="{{$pdn->operasi}}">{{$pdn->operasi}}</option>
                                       
                                    </select>
                                </div>


                                <div class="mb-3 col-md-12">
                                    <label for="inputAddress">Jenis Ternakan</label>
                                    <select class="form-select" aria-label="Default select example" name="ternakan"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected value="{{$pdn->ternakan}}">{{$pdn->ternakan}}</option>
                                        {{-- <option value="Ayam">Ayam</option>
                                        <option value="Ruminan Besar">Ruminan Besar</option>
                                        <option value="Ruminan Kecil">Ruminan Kecil</option>
                                        <option value="Unggas">Unggas</option> --}}
                                    </select>
                                </div>

                                <!-- Button trigger modal -->

                                <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                                    <a href="/pdn" class="btn btn-primary">Kembali</a>

                                    {{-- <button type="button" class="btn btn-md btn-success text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Kemaskini
                                    </button> --}}
                                </div>
                                
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Adakah anda ingin mengemaskini maklumat survelan?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button class="btn btn-success " type="submit" value="submit">Ya</button>
                                    </div>
                                    </div>
                                    </div>
                                </div>

                           </form>

                           
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