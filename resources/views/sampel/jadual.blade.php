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
{{-- 
            <div class="col-md-12">
                <div class="card" style="width: 105%">
                    <div class="card-header">
                        <h5 class="card-title">Jadual Pensampelan</h5>
                    </div>
                </div>
            </div> --}}

            <div class="col-md-12">
                <div class="card" style="width: fit-content">
                    <div class="card-header">
                        <h5>Jadual Pensampelan {{strtoupper($pilihan)}} </h5>
                    </div>
            
                    <div class="card-body">
                        <div class="col">
                            <table class="table table-bordered line-table text-center" style="width: fit-content">
                                <thead class="text-black">
            
                                    <tr>
                                        <th colspan="18">PROGRAM PEMANTAUAN RESIDU(JENIS UJIAN)(JENIS SAMPEL) DI LOJI
                                           {{strtoupper($pilihan)}} 2022</th>
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
                                        <th>TINDAKAN</th>
                                    </tr>
                                    <tr>
                                        @foreach ($sampels as $sampel)
                                         <th colspan="18">{{$sampel->zon}}</th>
                                    </tr>
                                </thead>
                                <tbody>
            
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$sampel->premis}}</td>
                                        <td><input class="form-control" type="number" name="bil_sampel" min="0"readonly value="{{$sampel->bil_sampel}}" ></td>
                                        <td><input class="form-control" type="number"  min="0"  readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly ></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number"  min="0" readonly></td>
                                        <td><input class="form-control" type="number" name="jumlah" min="0" readonly></td>
                                        <td><a href="/pensampelan-pilihan/{{$sampel->id}}" class="btn btn-info" type="button">Kemaskini</a></td>        
                                        {{-- <td><a href="#" class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModalCenter{{$loop->iteration}}" style="float: right">Kemaskini</a>
                                            <div class="modal fade" id="exampleModalCenter{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header" style="background-color: aquamarine">
                                                      <h5 class="modal-title" id="exampleModalLongTitle">Kemaskini Penjadualan</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body" style="width: 100%">
                  
                                                      <form action="/jadual/{{$sampel->id}}" method="POST">
                                                        @csrf
                                                            <table class="table table-bordered">
                                                                    <input type="hidden" name="sampel_id">
            
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="14">PROGRAM PEMANTAUAN RESIDU(JENIS UJIAN)(JENIS SAMPEL) DI LOJI
                                                                           {{strtoupper($pilihan)}} 2022</th>
                                                                    </tr>
                                                                    <tr style="vertical-align: middle">
                                                                        <th>BIL SAMPEL</th>
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
                                                                </thead>
                                                                <tbody>
                                                                    <td><input class="form-control" type="number" name="bil_sampel" min="0"
                                                                        oninput="this.setCustomValidity('')"
                                                                        onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly ></td>
                                                                    <td><input class="form-control" type="number" name="jan" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" ></td>
                                                                    <td><input class="form-control" type="number" name="feb" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" ></td>
                                                                    <td><input class="form-control" type="number" name="mac" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="apr" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="mei" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="jun" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="jul" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="aug" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="sep" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="oct" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="nov" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="dec" min="0"
                                                                            oninput="this.setCustomValidity('')" onblur="findSum()"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"></td>
                                                                    <td><input class="form-control" type="number" name="jumlah" min="0" id="total"
                                                                            oninput="this.setCustomValidity('')"
                                                                            onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" readonly></td>
                                                                </tbody>
                                                            </table>
                                    
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                              <button type="submit" class="btn btn-primary">Hantar</button>
                                                            </div>
                                        
                                                      </form>
                                                      
                                                    </div>
                                                  
                                                  </div>
                                                </div>
                                              </div>
                                        </td> --}}
                                        
                                    </tr>
            
                                    @endforeach
            
                                </tbody>
                            </table>
            
                            <div class="mb-3 text-center">       
                                {{-- <button class="btn btn-success" type="submit" title="Hantar"
                                    style="float: right">Hantar</button>
                                <button class="btn btn-warning mx-2" type="submit" title="Kemaskini"
                                    style="float: right">Kemaskini</button> --}}
                                <button onclick="history.back()" class="btn btn-primary text-center">Kembali</button>

                                {{-- <a href="/pensampelan-pilihan" class="btn btn-primary text-center">Kembali</a> --}}
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

    <script>
        function changeInduk() {
            var zon = document.getElementById("zon").value
            if (zon == "Zon Utara" || zon == "Zon Tengah" || zon == "Zon Selatan") {
                document.getElementById("tag1").style.display = "none";
                document.getElementById("tag2").style.display = "none";
                document.getElementById("tag3").style.display = "none";
                document.getElementById("tag4").style.display = "none";
            } else {
                document.getElementById("tag1").style.display = "block";
                document.getElementById("tag2").style.display = "block";
                document.getElementById("tag3").style.display = "block";
                document.getElementById("tag4").style.display = "block";
            }
        }
    </script>

    {{-- <script type="text/javascript">
        function findSum(){
            var arr = document.getElementsByName('qty');
            var tot=0;
            for(var i=0;i<arr.length;i++){
                if(parseInt(arr[i].value))
                    tot += parseInt(arr[i].value);
            }
            document.getElementById('total').value = tot;
        }     
    </script> --}}

@endsection

