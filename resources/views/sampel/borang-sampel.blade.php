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

                            <input type="hidden" name="pilihan" value="{{$pilihan}}">

                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Tahun</label>
                                    <select id="tahun" name="tahun" class="form-control"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                        oninput="this.setCustomValidity('')">
                                        <option selected value="">Pilih Tahun</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Zon</label>
                                    <select class="form-select" aria-label="Default select example" name="zon"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Zon</option>
                                        <option value="Zon Utara">Zon Utara</option>
                                        <option value="Zon Tengah">Zon Tengah</option>
                                        <option value="Zon Selatan">Zon Selatan</option>
                                        <option value="Zon Sabah & Sarawak">Zon Sabah & Sarawak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Nama Premis</label>

                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example" name="premis"
                                            id="rumah" required
                                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                            oninput="this.setCustomValidity('')">
                                            <option selected value="">Pilih Premis</option>
                                            {{-- <option value="">DVS</option> --}}

                                            @foreach ($rumahs as $rumah)
                                                <option value="{{ $rumah->nama_rumah }}" nicubatest="{{ $rumah->id }}">{{ $rumah->nama_rumah }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Kod Premis</label>
                                    <input class="form-control" type="text" name="kod_premis" id="kod_premis"
                                        value="" readonly />

                                </div>


                            </div>


                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="tahun">Jenis Ujian</label>
                                    <select class="form-select" aria-label="Default select example" name="ujian"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Ujian</option>
                                        <option value="Ujian 1">Ujian 1</option>
                                        <option value="Ujian 2">Ujian 2</option>
                                        <option value="Ujian 3">Ujian 3</option>
                                        <option value="Ujian 4">Ujian 4</option>
                                    </select>


                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Jenis Sampel</label>
                                    <select class="form-select" aria-label="Default select example" name="sampel"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Sampel</option>
                                        <option value="Sampel 1">Sampel 1</option>
                                        <option value="Sampel 2">Sampel 2</option>
                                        <option value="Sampel 3">Sampel 3</option>
                                        <option value="Sampel 4">Sampel 4</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning align-middle me-2 fa-plus"
                                style="float: right"><span style="padding-left: 10px;">Tambah</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Jadual Pensampelan {{str_replace('_',' ',$pilihan)}} </h5>
                    </div>

                    <div class="card-body">
                        <div class="col">
                            <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-black">

                                    <tr>
                                        <th colspan="16">PROGRAM PEMANTAUAN RESIDU(JENIS UJIAN)(JENIS SAMPEL) DI LOJI
                                           {{str_replace('_',' ',$pilihan)}}</th>
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

                                        @foreach ($sampels as $sampel)
                                <th colspan="16">{{$sampel->zon}}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$sampel->premis}}</td>
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

    <script>
        // $(document).ready(function() {
        //     $('select[name="premis"').on('change', function() {
        //         var premisId = $(this).val();
        //         if (premisId) {
        //             $.ajax({
        //                 url: "{{ url('/getkodpremis/') }}/" + premisId,
        //                 type: "Get",
        //                 datatype: "json",
        //                 success: function(data) {
        //                     console.log(data);
        //                     $("kod_premis").empty();
        //                     document.getElementById("kod_premis").value = data;
        //                 }
        //             });
        //         } else {
        //             $("kod_premis").empty();
        //         }
        //     })
        // });

        $(document).ready(function() {
            $('select[name="premis"').change(function() {
                var premisId = $('#rumah option:selected').attr('nicubatest');
                var rumah = @json($rumahs->toArray());

                rumah.forEach(e => {
                    if (premisId == e.id) {
                        $('#kod_premis').val(e.kod);
                    }
                });
            })
        });
    </script>
@endsection
