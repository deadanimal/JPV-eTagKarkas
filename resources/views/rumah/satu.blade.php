@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Satu Page
            </h1>
        </div>

        <main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Rumah Sembelih
            </h1>
        </div>

        <div class="card">
            <div class="card-header">
                <b>Pendaftaran Rumah Sembelih</b>
            </div>

            <form action="/rumah" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="card-body">

                    <!--Nama Pengeluar-->
                    <div class="mb-3 row">
                        <div class="col-sm-2 mb-3">
                            <label class="col-form-label">Induk</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->induk}}" >
                        </div>
                        <div class="col-sm-2">
                            <label class="form-label">Nama Rumah Sembelih</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->nama_rumah}}" >
                        </div>
                        
                    </div>
                    <!--Kod & Kategori-->
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label class="form-label">Kod</label>
                        </div>
                        <div class="col-4">
                            <input type="text" value="{{ $rumah->kod}}" >
                        </div>
                        <div class="col-2 text-end">
                                <label class="form-label">Kategori</label>
                        </div>
                        <div class="col-4">
                            <input type="text" value="{{ $rumah->kategori}}" >
                        </div>
                    </div>

                    {{-- Alamat --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->alamat}}" >
                        </div>
                    </div>

                    {{-- Negeri & Daerah --}}
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label class="form-label">Negeri</label>
                        </div>
                        <div class="col-4">
                            <input type="text" value="{{ $rumah->negeri}}" >
                                               
                        </div>
                        <div class="col-2 text-end">
                                <label class="form-label">Daerah</label>
                        </div>
                        <div class="col-4">
                            <input type="text" value="{{ $rumah->daerah}}" >

                        </div>
                       
                    </div>

                      {{-- Nombor Telefon --}}
                      <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nombor Telefon</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->no_tel}}" >
                        </div>
                    </div>

                    {{-- Emel --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Emel</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->emel}}" >
                        </div>
                    </div>
                     {{-- Orang Dihubungi --}}
                     <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Orang Dihubungi</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->orang_dihubungi}}" >
                        </div>
                    </div>
                     {{-- Zon --}}
                     <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Zon</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $rumah->zon}}" >
                        </div>
                    </div>
                    
                    {{-- Manual Jana Kodbar --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Jana Kodbar</label>
                        <input type="text" value="{{ $rumah->kod_bar}}" >

                    </div>
                   
    
                    <!--Akses Ternakan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Akses Ternakan</label>
                        <input type="text" value="{{ $rumah->akses_ternakan}}" >

                    </div>
    
                    <!--Button-->
                    <div align="right">
                        {{-- <button class=“btn btn-primary” type=“submit”>Cipta</button> --}}
                        <a href="/rumah" class="btn btn-primary">Kembali</a>
                    </div>
                    
                   
                    </div>
    
                </div>
            </form>
        </div>

    </div>



</main>


    </div>



</main>

@endsection

@section('script')


@endsection