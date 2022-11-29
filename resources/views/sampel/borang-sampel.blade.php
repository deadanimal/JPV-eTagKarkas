@extends('layouts.app')

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
                    <form>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                            <label for="tahun">Tahun</label>
                            <select id="tahun" class="form-control" 
                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')">
                                <option selected value="">Pilih Tahun</option>
                            </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress">Zon</label>
                                <select class="form-select" aria-label="Default select example" name="kategori" oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')">
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
                            <label for="tahun">Kod Premis</label>
                            <input class="form-control" type="text" name="kod" required
                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                            oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"/>
                           
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress">Nama Premis</label>
                                <input class="form-control" type="text" name="premis" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"/>
                            </div>
                        </div>


                        <div class="row">
                            <div class="mb-3 col-md-6">
                            <label for="tahun">Jenis Ujian</label>
                            <input class="form-control" type="text" name="ujian" required
                            oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                            oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"/>
                           
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress">Jenis Sampel</label>
                                <input class="form-control" type="text" name="sampel" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" onkeyup="this.value = this.value.toUpperCase();"/>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-warning align-middle me-2 fa-plus" style="float: right"><span style="padding-left: 10px;">Tambah</span></button>
                    </form>
                </div>
            </div>
        </div>

        


    </div>



</main>

@endsection

@section('script')

<script type="text/javascript">
    window.onload = function () {
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


@endsection