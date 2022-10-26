@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pendaftaran Stok Tag Karkas
            </h1>
        </div>


    </div>

    <div class="card">
        <div class="card-header bg-info text-black">
            <b>Pendaftaran Stok Tag Karkas</b>
        </div>
        <div class="card-body">


            <form action="/tag/senarai_tag/stok" method="POST" enctype="multipart/form-data">
                @csrf
                <!--JUmlah-->
            <div class="mb-3 row">
                <label class="col-xl-2 col-form-label">Jumlah Tag Diterima</label>
                <div class="col-xl-10">
                    <input class="form-control" type="text" name="tag_diterima" />
                </div>
            </div>
            <!--Induk-->
            <div class="mb-3 row">
                <label class="col-xl-2 col-form-label">Tarikh Terima Stok</label>
                <div class="col-xl-10">
                    <input class="form-control" type="date" name="tarikh" />
                </div>
            </div>
            <!--Jumlah Tag Rosak-->
            <div class="mb-3 row">
                <label class="col-xl-2 col-form-label">Jumlah Tag Rosak</label>
                <div class="col-xl-10">
                    <input class="form-control" type="text" name="tag_rosak"  />
                </div>
            </div>
            <!--Tarikh Tag Rosak-->
            <div class="mb-3 row">
                <label class="col-xl-2 col-form-label">Tarikh Tag Rosak</label>
                <div class="col-xl-10">
                    <input class="form-control" type="date" name="tarikh_tag_rosak"  />
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
                <button class="btn btn-success" type="submit" >Simpan</button>
            </div>


            </form>
           
        </div>
    </div>



</main>

@endsection

@section('script')


@endsection


