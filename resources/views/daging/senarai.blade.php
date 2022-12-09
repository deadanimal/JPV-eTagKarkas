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
                            <select class="form-select" name="jenis" 
                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                            oninput="this.setCustomValidity('')">
                                <option selected disabled>Pilih Jenis Ternakan</option>
                                <option value="Ruminan">Ruminan</option>
                                <option value="Unggas">Unggas</option>
                                <option value="Babi">Babi</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">No. SKV</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="no_skv" placeholder="Sila letakkan No. SKV" onkeyup="this.value = this.value.toUpperCase();" required
                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')" />
                        </div>
                    </div>


                    <div>
                        {{-- <a href="/pemeriksaan"><button class="btn btn-primary" type="button" name="action" value="">Semak</button></a> --}}
                        <button class="btn btn-primary" type="submit" name="action" value="semak">Semak</button>
                        {{-- <button type="submit" class="btn btn-success" name="action" value="daftar" disabled>Daftar Dengan SKV</button> --}}
                        <button type="submit" class="btn btn-dark" name="action" value="daftar">Daftar</button>
                    </div>
                </form>

            </div>
        </div>  
              
        {{-- @yield('sub-content') --}}

    </div>



</main>

@endsection

@section('script')


@endsection