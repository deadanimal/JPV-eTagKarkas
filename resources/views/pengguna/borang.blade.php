@extends('layouts.app')

<link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
<script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>


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
                    <b>Daftar Profil Pengguna</b>
                </h1>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="/pengguna" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">

                            <div class="row mb-3">
                                <div class="col-2">
                                    <label class="form-label">Nama</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="name" onkeyup="this.value = this.value.toUpperCase();" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')" />
                                </div>

                                <div class="col-2">
                                    <label class="col-form-label">Peranan</label>
                                </div>

                                <div class="col-4">

                                    <select class="form-select" name="peranan" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')">
                                        <option value=1>Pengurus Rumah Sembelih</option>
                                        <option value=2>Pemeriksa Daging</option>
                                        <option value=3>Pemeriksa Daging Negeri</option>
                                        <option value=4>Pentadbir</option>
                                        <option value=5>Ketua Seksyen</option>
                                    </select>
                                </div>

                                <div class="col-2 mt-3">
                                    <label class="form-label">Nombor Telefon</label>
                                </div>
                                <div class="col-4 mt-3">
                                    <input class="form-control" type="number" name="telefon" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" />
                                </div>

                                <div class="col-2 mt-3">
                                    <label class="form-label">Emel</label>
                                </div>
                                <div class="col-4 mt-3">
                                    <input class="form-control" type="email" name="email" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')" />
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <div class="col-2">
                                    <label class="form-label">Alamat</label>
                                </div>
                                <div class="col-10">
                                    <textarea class="form-control" rows=5 name="alamat" onkeyup="this.value = this.value.toUpperCase();" required
                                    oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                    oninput="this.setCustomValidity('')"></textarea>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <div class="col-2">
                                    <label class="form-label">Premis</label>
                                </div>
                                <div class="col-10">
                                    <select class="form-select" aria-label="Default select example" name="premis" id="select_box"
                                     required oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')" oninput="this.setCustomValidity('')">
                                        <option selected value="">Pilih Premis</option>
                                        {{-- <option value="">DVS</option> --}}
                                        
                                        @foreach ($rumahs as $rumah)
                                            <option value="{{ $rumah->nama_rumah }}">{{ $rumah->nama_rumah }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-2">
                                <label class="form-label">Katalaluan</label>
                            </div>
                            <div class="col-4">
                                <input  style="width: 90%"  type="password" name="password" id="id_password" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />
                                <i class="far fa-eye" id="togglePassword" style="margin-left: 10px; cursor: pointer;"></i>

                            </div>



                            <div class="col-2">
                                <label class="form-label">Sahkan Katalaluan</label>
                            </div>
                            <div class="col-4">
                                <input style="width: 90%" type="password" name="verifiedpassword" id="id_verifiedpassword" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />
                                <i class="far fa-eye" id="toggleVerifiedPassword" style="margin-left: 10px; cursor: pointer;"></i>

                            </div>


                        </div>
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Unit</label>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="unit" onkeyup="this.value = this.value.toUpperCase();" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />
                            </div>
                            <div class="col-2">
                                <label class="form-label">Cawangan</label>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="cawangan" onkeyup="this.value = this.value.toUpperCase();" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <div class="col-2">
                                <label class="form-label">Jawatan</label>
                            </div>
                            <div class="col-4">
                                <input class="form-control" type="text" name="jawatan" onkeyup="this.value = this.value.toUpperCase();" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')" />
                            </div>
                            <div class="col-2">
                                <label class="form-label">Gred</label>
                            </div>
                            <div class="col-4">
                                <select class="form-select" aria-label="Default select example" name="gred" required
                                oninvalid="this.setCustomValidity('Sila isikan maklumat ini.')"
                                oninput="this.setCustomValidity('')">
                                    <option value="G29">G29</option>
                                    <option value="G41">G41</option>
                                    <option value="G44">G44</option>
                                    <option value="G54">G54</option>
                                </select>
                            </div>
                        </div>

                

                        <!-- Button trigger modal -->

                        <div class="d-grip gap-2 d-md flex justify-content-md-center mb-3 text-center">
                            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right">
                                Daftar
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
                                    Adakah anda ingin mendaftar pengguna baharu?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    <button class="btn btn-success text-center" type="submit" style="float: right">Daftar</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        {{-- <button class="btn btn-success text-center" type="submit" style="float: right">Daftar</button> --}}

                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('script')

<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
    });
</script>

{{-- sahkan katalaluan --}}
<script>
    const toggleVerifiedPassword = document.querySelector('#toggleVerifiedPassword');
  const verifiedpassword = document.querySelector('#id_verifiedpassword');

  toggleVerifiedPassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = verifiedpassword.getAttribute('type') === 'password' ? 'text' : 'password';
    verifiedpassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
    });
</script>

{{-- search in dropdown --}}
<script>

    dselect(document.querySelector('#select_box'))


</script>

@endsection
