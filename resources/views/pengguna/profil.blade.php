@extends('layouts.app')

@section('styles')
    <style>
        /* remove arrow in input number */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    
@endsection

@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    <b>Profil Pengguna</b>
                </h1>
            </div>

            <div class="row">

                <div class="card">
                    <div class="card-header">Kemaskini Katalaluan</div>

                    <div class="card-body">
                        <form action="/profil_katalaluan" method="POST">
                            @method('PUT')
                            @csrf
    
                            <div class="mb-3">
                                <label for="katalaluan_lama" class="form-label">Katalaluan Baru</label>
                                <input name="password" type="password" class="form-control" id="katalaluan_lama"
                                    placeholder="Masukkan katalaluan baru anda">   
                            </div>

                            

                            <!-- Button trigger modal -->

                        <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#katalaluanModal" style="float: right">
                                Kemaskini
                            </button>
                        </div>

                       
                        
                        <!-- Modal -->
                        <div class="modal fade" id="katalaluanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Adakah anda ingin menukar katalaluan?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    <button class="btn btn-primary text-center" type="submit" style="float: right">Ya</button>
                                </div>
                            </div>
                            </div>
                        </div>
                            
                        </form>
                    </div>
                </div>
    
       

            </div>


        </div>
    </main>

@endsection
