@extends('layouts.app')

@section('styles')
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
@endsection

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pensampelan
            </h1>
    
        </div>

     
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Borang Pensampelan
                                </h5>
                            </div>

                            <div class="card-body">
                                <form action="/laporan" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="mb-3">

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Makmal</label>
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" name="makmal" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nama Penghantar</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Alamat Penghantar</label>
                                            </div>
                                            <div class="col-6">
                                                <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nombor Telefon</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="telefon" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nombor Faks</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="faks" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Emel</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="email" name="emel" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nombor HP</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="handphone" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
                                        </div>

                                        <div class="mb-3 row">

                                            <label class="col-xl-2 col-form-label">Tujuan Penghantaran</label>
                                            <div class="col ">Monitoring
                                                <input type="checkbox" name="options[]" value="opt1" />
                                            </div>
                                            <label class="col"></label>
                                            <div class="col ">Surveillance
                                                <input type="checkbox" name="options[]" value="opt2" />
                                            </div>
                                            <label class="col"></label>
                                            <div class="col ">Import
                                                <input type="checkbox" name="options[]" value="opt3" />
                                            </div>
                                            <label class="col"></label>
                                            <div class="col ">Eksport
                                                <input type="checkbox" name="options[]" value="opt4" />
                                            </div>
                                            <label class="col"></label>
                                            <div class="col ">Luar <span>Program</span> 
                                                <input type="checkbox" name="options[]" value="opt5" />
                                            </div>
                                            
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">ID Premis</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" name="id_premis" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                            </div>
                                        </div>

                                       
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Nama Premis</label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" name="nama_premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label class="form-label">Alamat Premis</label>
                                            </div>
                                            <div class="col-6">
                                                <textarea class="form-control" rows=5 name="alamat_premis" onkeyup="this.value = this.value.toUpperCase();" required
                                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                                oninput="this.setCustomValidity('')"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    

                                    <!-- Button -->

                                    <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">

                                        <a href="/tunjuk" class="btn btn-primary mx-2">Kembali</a>
                                        <button class="btn btn-secondary" type="submit" title="Seterusnya">Seterusnya</button>
                                        {{-- <a href="/borang-pensampelan2">pg2</a> --}}

                                    </div>

              

                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>



</main>

@endsection

@section('script')



@endsection