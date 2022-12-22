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
                <div class="card" style="width: 105%">
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
                                @role('pentadbir-zon')
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Zon</label>
                                    <select class="form-select" aria-label="Default select example" name="zon"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Zon</option>
                                        <option value="Zon Utara">Zon Utara</option>
                                        <option value="Zon Tengah">Zon Tengah</option>
                                        <option value="Zon Selatan">Zon Selatan</option>
                                        {{-- <option value="Zon Sabah & Sarawak">Zon Sabah & Sarawak</option> --}}
                                    </select>
                                </div>
                                @endrole
                                @role('pentadbir')
                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Zon</label>
                                    <select class="form-select" aria-label="Default select example" name="zon" id="zon" onchange="changeInduk()"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Zon</option>
                                        <option value="Zon Utara">Zon Utara</option>
                                        <option value="Zon Tengah">Zon Tengah</option>
                                        <option value="Zon Selatan">Zon Selatan</option>
                                        <option value="Zon Sabah & Sarawak">Zon Sabah & Sarawak</option>
                                    </select>
                                </div>
                                @endrole
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

                                @if ($pilihan == 'Ayam')

                                 <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Jenis Sampel</label>
                                    <select class="form-select" aria-label="Default select example" name="sampel"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Sampel</option>
                                        <option value="Whole Leg">Whole Leg</option>
                                        <option value="Breast Meat">Breast Meat</option>
                                        <option value="Hati">Hati</option>
                                    </select>
                                </div>

                                @elseif($pilihan == 'Ruminan Besar')

                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Jenis Sampel</label>
                                    <select class="form-select" aria-label="Default select example" name="sampel"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Sampel</option>
                                        <option value="Daging">Daging</option>
                                        <option value="Ginjal">Ginjal</option>
                                        <option value="Hati">Hati</option>
                                        <option value="Lemak">Lemak</option>
                                    </select>
                                </div>
                                    
                                @else

                                <div class="mb-3 col-md-6">
                                    <label for="inputAddress">Jenis Sampel</label>
                                    <select class="form-select" aria-label="Default select example" name="sampel"
                                        oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
                                        <option selected disabled value="">Pilih Sampel</option>
                                        <option value="Daging">Daging</option>
                                        <option value="Ginjal">Ginjal</option>
                                        <option value="Hati">Hati</option>
                                        <option value="Lemak">Lemak</option>
                                    </select>
                                </div>
                                    
                                @endif
                              
                            </div>
                            @role('pentadbir-zon')
                            <div class="row">
                                <div class="mb-3 col-md-6" >
                                    <label for="tahun">Pemeriksa 1 </label>
                                    <select class="form-select" aria-label="Default select example" name="pemeriksa_1" id="rumah" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')">
                                    <option selected value="">Pilih Pemeriksa</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->name }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6" >
                                    <label for="inputAddress">Pemeriksa 2</label>
                                    <select class="form-select" aria-label="Default select example" name="pemeriksa_2" id="rumah" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')">
                                    <option selected value="">Pilih Pemeriksa</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->name }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endrole

                            @role('pentadbir')
                            <div class="row">
                                <div class="mb-3 col-md-6" id="tag1">
                                    <label for="tahun">Pemeriksa 1 </label>
                                    <select class="form-select" aria-label="Default select example" name="pemeriksa_1" id="rumah" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')">
                                    <option selected value="">Pilih Pemeriksa</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->name }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6" id="tag2">
                                    <label for="inputAddress">Pemeriksa 2</label>
                                    <select class="form-select" aria-label="Default select example" name="pemeriksa_2" id="rumah" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')">
                                    <option selected value="">Pilih Pemeriksa</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->name }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endrole

                            <button type="submit" class="btn btn-warning align-middle me-2 fa-plus"
                                style="float: right"><span style="padding-left: 10px;">Tambah</span></button>
                        </form>
                    </div>
                </div>
            </div>

            @include('sampel.jadual')

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
