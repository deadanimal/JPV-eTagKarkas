@extends('layouts.app')

@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Permohonan Tag Karkas
                </h1>

            </div>

            <div class="card">
                <div class="card-body">

                    <form action="/tag" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nama Pengeluar:</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->rumah_sembelih->nama_rumah }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Premis:</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->rumah_sembelih->induk }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Pejabat Pengeluar-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nama Premis:</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->rumah_sembelih->nama_rumah }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Kategori Tag-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Kategori Tag</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->rumah_sembelih->kategori }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Jenis Ternakan-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" id="jenis_ternakan"
                                    name="jenis_ternakan">
                                    <option selected value="Ruminan Besar">Ruminan Besar</option>
                                    <option value="Ruminan Kecil">Ruminan Kecil</option>
                                    <option value="Ayam">Ayam</option>
                                    <option value="Itik">Itik</option>
                                    <option value="Babi">Babi</option>
                                </select>
                            </div>

                        </div>
                        {{-- Bilangan Ternakan --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Bilangan Ternakan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" min=1 name="bil_ternakan"
                                    id="bilangan_ternakan" onchange="calculate()" required oninvalid="this.setCustomValidity('Sila masukkan bilangan ternakan.')"
                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"/>
                            </div>
                        </div>
                        {{-- Bilangan Kod Bar Untuk Dijana --}}
                        {{-- must be generate automitaclly according to R.Besar n R.Kecil --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="bil_kodbar" id="bilangan_kodbar"
                                    readonly />
                            </div>
                        </div>
                        {{-- Pengesyoran Kuantiti --}}
                        {{-- <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pengesyoran Kuantiti</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="" name="bil_kod" placeholder="16"
                                />
                        </div>
                        </div> --}}

                        {{-- @role('pengurus-rumah-sembelih') --}}
                           
                            <!--Cetakan Kod Bar-->
                            {{-- <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jana Tag</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="kodbar">
                                        <option value="Manual" selected>Manual</option>
                                        <option value="Auto">Auto</option>
                                    </select>
                                </div>
                            </div>
                        @endrole --}}
                </div>

                <!-- Button trigger modal -->
                <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                    <button type="button" class="btn btn-lg btn-success text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hantar
                    </button>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Adakah anda ingin menghantar permohonan tag baharu?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button class="btn btn-success" type="submit" name="submitbutton" value="Hantar">Ya</button>
                    </div>
                    </div>
                    </div>
                </div>

                <!--Button-->
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <button class="btn btn-success" type="submit" name="submitbutton" value="Hantar">Hantar</button>
                </div> --}}
                </form>
            </div>
        </div>

        </div>



    </main>
@endsection

@section('script')
    <script type="text/javascript">
        function calculate() {
            var jenisTernakan = document.getElementById("jenis_ternakan").value;
            var bilanganTernakan = document.getElementById("bilangan_ternakan").value;
            if (jenisTernakan == 'Ruminan Besar') {
                document.getElementById("bilangan_kodbar").value = bilanganTernakan * 4;
            } else {
                document.getElementById("bilangan_kodbar").value = bilanganTernakan * 2;
            }
        }
    </script>
@endsection
