@extends('layouts.app')

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



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Borang Pensampelan
                </h1>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Jadual Pensampelan</h5>
                        {{-- <h6 class="card-subtitle text-muted">Bootstrap column layout.</h6> --}}
                    </div>
                    <div class="card-body">
                        <form action="/pensampelan/borang-sampel/{id}" method="POST">
                            @csrf

                            {{-- <input type="hidden" name="pilihan" value="{{$pilihan}}"> --}}

                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Tahun</label>
                                    <input class="form-control" type="text" value="{{$sampel->tahun}}" readonly>

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Zon</label>
                                    <input class="form-control" type="text" value="{{$sampel->zon}}" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Nama Premis</label>

                                    <div class="col-12">
                                        <input class="form-control" type="text" value="{{$sampel->premis}}" readonly>

                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Kod Premis</label>
                                    <input class="form-control" type="text" value="{{$sampel->kod_premis}}" readonly>
                                </div>


                            </div>


                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Jenis Ujian</label>
                                    <input class="form-control" type="text" value="{{$sampel->ujian}}" readonly>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Jenis Sampel</label>
                                    <input class="form-control" type="text" value="{{$sampel->sampel}}" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Pemeriksa 1</label>
                                    <input class="form-control" type="text" value="{{$sampel->pemeriksa_1}}" readonly>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Pemeriksa 1</label>
                                    <input class="form-control" type="text" value="{{$sampel->pemeriksa_2}}" readonly>
                                </div>
                            </div>

                            <a href="/pensampelan" class="btn btn-primary" style="float: right">Kembali</a>
                            {{-- <button type="submit" class="btn btn-warning align-middle me-2 fa-plus"
                            style="float: right"><span style="padding-left: 10px;">Tambah</span></button> --}}

                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Jadual Pensampelan {{$sampel->pilihan}} </h5>
                </div>

                <div class="card-body">
                    <div class="col">
                        <table class="table table-bordered line-table text-center" style="width: 100%">
                            <thead class="text-black">

                                <tr>
                                    <th colspan="16">PROGRAM PEMANTAUAN RESIDU(JENIS UJIAN)(JENIS SAMPEL) DI LOJI
                                        {{$sampel->pilihan}}</th>
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>BIL</th>
                                    <th>PREMIS</th>
                                    <th>BIL SAMPEL YANG PERLU DIAMBIL</th>
                                    <th>JAN</th>
                                    <th>FEB</th>
                                    <th>MAC</th>
                                    <th>APR</th>
                                    <th>MEI</th>
                                    <th>JUN</th>
                                    <th>JUL</th>
                                    <th>AUG</th>
                                    <th>SEP</th>
                                    <th>OCT</th>
                                    <th>NOV</th>
                                    <th>DEC</th>
                                    <th>JUMLAH</th>
                                </tr>
                                <tr>

                                    @foreach ($sampel as $s)
                            {{-- <th colspan="16">{{$s->zon}}</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    {{-- <td>{{$s->premis}}</td> --}}
                                    <td><input class="form-control" type="number" name="sampel" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="1" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="2" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="3" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="4" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="5" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="6" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="7" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="8" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="9" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="10" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="11" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="12" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                    <td><input class="form-control" type="number" name="jumlahUtara" min="0"
                                            oninput="this.setCustomValidity('')"
                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>



                        <div class="mb-3">
                            <button class="btn btn-warning" type="submit" title="Kemaskini"
                                style="float: left">Kemaskini</button>
                            <button class="btn btn-success" type="submit" title="Hantar"
                                style="float: right">Hantar</button>
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>

                        </div>


                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection

@section('script')
    <script type="text/javascript">
        window.onload = function() {
            //Reference the DropDownList.
            var tahuns = document.getElementById("tahun");

            //Determine the Current Year.
            var currentYear = (new Date()).getFullYear();

            //Loop and add the Year values to DropDownList.
            for (var i = 1950; i <= currentYear; i++) {
                var option = document.createElement("OPTION");
                option.innerHTML = i;
                option.value = i;
                option.style.overflow = "auto";
                tahuns.appendChild(option);
            }
        };
    </script>
    <script src="/js/jquery.js"></script>


@endsection
