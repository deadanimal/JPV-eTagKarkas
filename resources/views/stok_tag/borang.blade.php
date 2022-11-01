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
                <div class="card-header bg-info text-white">
                    <b>Pendaftaran Stok Tag Karkas</b>
                </div>
                <div class="card-body">


                    <form action="/stok-tag" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jumlah Tag Diterima</label>
                            <div class="col-xl-10">
                                <input class="form-control" type="number" name="tag_diterima" id="tag_diterima" value=100
                                    onchange="changeTag()" />
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Tarikh Terima Stok</label>
                            <div class="col-xl-10">
                                <input class="form-control" type="date" name="tarikh_tag_terima" />
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jumlah Tag Rosak</label>
                            <div class="col-xl-10">
                                <input class="form-control" type="number" name="tag_rosak" id="tag_rosak" value=0
                                    onchange="changeTag()" />
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Tarikh Tag Rosak</label>
                            <div class="col-xl-10">
                                <input class="form-control" type="date" name="tarikh_tag_rosak" />
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-xl-2 col-form-label">Jumlah Tag Bolehpakai</label>
                            <div class="col-xl-10">
                                <input class="form-control" type="number" name="tag_bolehpakai" id="tag_bolehpakai"
                                    readonly />
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-2 col-form-label">Catatan</label>
                            <div class="col-10">
                                <textarea name="catatan" class="form-control" style="min-width: 100%" rows="5"></textarea>
                            </div>
                        </div>


                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>


                    </form>

                </div>
            </div>


        </div>

    </main>
@endsection

@section('script')
    <script>
        changeTag();

        function changeTag() {
            var terima = document.getElementById("tag_diterima").value;
            var rosak = document.getElementById("tag_rosak").value;
            var diff = terima - rosak;
            if (diff < 0) {
                alert("Tag rosak tidak boleh melebihi tag terima");
                document.getElementById("tag_diterima").value = 100;
                document.getElementById("tag_rosak").value = 0;
            } else {
                document.getElementById("tag_bolehpakai").value = diff;
            }


        }
    </script>
@endsection
