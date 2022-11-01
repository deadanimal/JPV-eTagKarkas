@extends('layouts.app')



@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Kemaskini Stok Tag Karkas
            </h1>
        </div>

        <div class="card">
            <div class="card-header bg-info text-black">
                <b>Kemaskini Stok Tag Karkas</b>
            </div>
            <div class="card-body">


                <form action="/tag/senarai_tag/stok/{{ $stoks->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!--Jumlah-->
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Jumlah Tag Diterima</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" name="tag_diterima" value="{{ $stoks->tag_diterima }}" />
                    </div>
                </div>

                <!--Jumlah Tag Rosak-->
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Jumlah Tag Rosak</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" name="tag_rosak" value="{{ $stoks->tag_rosak }}"  />
                    </div>
                </div>
               
                {{-- Catatan --}}
                <div class="mb-3 row">
                    <label class="col-xl-2 col-form-label">Catatan</label>
                <div class="col-xl-6">
                    <textarea class="form-control" name="catatan" cols="120" rows="5">{{ $stoks->catatan }}</textarea>
                </div>
                </div>

                <!--Button-->
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-success" type="submit" >Simpan</button>
                </div>


                </form>
               
            </div>
        </div>

    </div>



</main>

@endsection

@section('script')


@endsection