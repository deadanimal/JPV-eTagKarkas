@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        {{-- <div class="header">
            <h1 class="header-title" >
                Pemeriksaan Daging
            </h1>
        </div> --}}

        <div class="card">
            <div class="card-header">
                <b>Carian Haiwan Ternakan</b>
            </div>
            <div class="card-body">



                <form action="/daging/semak" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis">
                                <option value="Ruminan" selected>Ruminan</option>
                                <option value="Unggas">Unggas</option>
                                <option value="Babi">Babi</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. SKV</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="no_skv" placeholder="Sila letakkan No. SKV" onkeyup="this.value = this.value.toUpperCase();" />
                        </div>
                    </div>


                    <div>
                        <button class="btn btn-primary" type="submit" name="action" value="semak">Semak</button>
                        <button type="submit" class="btn btn-primary" name="action" value="daftar">Daftar</button>
                    </div>
                </form>

            </div>
        </div>        


        @yield('sub-content')
{{-- 
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
        </div>        --}}


    </div>



</main>

@endsection

@section('script')


@endsection