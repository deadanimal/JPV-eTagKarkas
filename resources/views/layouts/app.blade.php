<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pipeline">
    <meta name="author" content="Pipeline">
    <link href="https://pipeline.com.my/assets/img/pipe-favicon.png" rel="icon">
    <link href="https://pipeline.com.my/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>JPV - eTagKarkas</title>

    <link href="{{ URL::asset('css/modern.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    @yield('styles')

	<style>
        #bg-img { 
          background: url('/img/goat-4366206_1920.jpg') no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }		
    </style>    
</head>

<body>

    <div class="wrapper">

        @include('sweetalert::alert')

        <nav id="sidebar" class="sidebar">
            <a class="sidebar-brand" href="/">
                <div class="card" >
                    <img src="/img/Veterinar-Logo.png" alt="JPV" style="width: 70px; height: 50px;">
                </div>
                <div>eTagKarkas</div>
                
            </a>
            <div class="sidebar-content">

                <ul class="sidebar-nav">

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="/">
                            <i class="align-middle me-2 fas fa-fw fa-home"></i><span class="align-middle">Paparan Utama</span>
                        </a>
                    </li> 
                    
                    @role('pentadbir')

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/pengguna">
                            <i class="align-middle me-2 fas fa-fw fa-users"></i><span class="align-middle">Profil Pengguna</span>
                        </a>
                    </li>  
                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/rumah">
                            <i class="align-middle me-2 fas fa-fw fa-warehouse"></i><span class="align-middle">Pendaftaran Premis</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/tag">
                            <i class="align-middle me-2 fas fa-fw fa-book"></i><span class="align-middle">Permohonan Tag</span>
                        </a>
                    </li> 

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/stok-tag">
                            <i class="align-middle me-2 fas fa-fw fa-tags"></i><span class="align-middle">Pendaftaran Stok Tag Karkas</span>
                        </a>
                    </li> 
                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/pemeriksaan">
                            <i class="align-middle me-2 fas fa-fw fa-square-check"></i><span class="align-middle">Pemeriksaan Daging</span>
                        </a>
                    </li>  
            
                    @endrole  

                    @role('pengurus-rumah-sembelih')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/rumah">
                            <i class="align-middle me-2 fas fa-fw fa-circle-info"></i><span class="align-middle">Maklumat Premis</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/tag">
                            <i class="align-middle me-2 fas fa-fw fa-book"></i><span class="align-middle">Permohonan Tag</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/daging">
                            <i class="align-middle me-2 fas fa-fw fa-square-check"></i><span class="align-middle">Pemeriksaan Daging</span>
                        </a>
                    </li>  
                    @endrole

                    
                    @role('ketua-seksyen')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/tag">
                            <i class="align-middle me-2 fas fa-fw fa-book"></i><span class="align-middle">Permohonan Tag</span>
                        </a>
                    </li>  
                    @endrole

                    @role('pengurus-rumah-sembelih | pemeriksa-daging')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/pemeriksaan">
                            <i class="align-middle me-2 fas fa-fw fa-square-check"></i><span class="align-middle">Pemeriksaan Daging</span>
                        </a>
                    </li>  
                    @endrole                    


                    {{-- <li class="sidebar-item">
                        <a class="sidebar-link" href="/profil">
                            <span class="align-middle">Profil</span>
                        </a>
                    </li>                       --}}
                    

                </ul>
            </div>
        </nav>

        <div class="main" id="bg-img">

            @include('sweetalert::alert')
            <nav class="navbar navbar-expand navbar-theme">
                <a class="sidebar-toggle d-flex me-2">
                    <i class="hamburger align-self-center"></i>
                </a>


                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-cog"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profil"><i
                                    class="align-middle me-1 fas fa-fw fa-user"></i> Profil</a>                                
                                <a class="dropdown-item" href="/logout"><i
                                        class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Log
                                    Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            @yield('content')


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-8 text-start">
                            <ul class="list-inline">

                                <!-- @role('admin')  
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="/admin"></a>
                                    </li>
                                @endrole   -->

                            </ul>
                        </div>
                        <div class="col-4 text-end">
                            <p class="mb-0">
                                &copy; 2022 - <a href="/" class="text-muted">JPV - eTagKarkas</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>


    @yield('script')




    <div class="modal fade" id="lokasiModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="/profil/lokasi" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kemaskini Lokasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-3">
                        <p class="mb-3">Sila berikan "permission" untuk alat mengambil koordinat lokasi anda.</p>


                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <select class="form-control mb-3" id="lokasi" name="lokasi">
                                <option value="RUMAH">Rumah</option>
                                <option value="PEJABAT">Pejabat</option>
                                <option value="PELANGGAN">Pelanggan</option>
                                <option value="LUAR">Luar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><b>Latitude</b></label>
                            <p id="latitude">NA</p>
                            <input type="hidden" name="latitude_hidden" id="latitude_hidden">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><b>Longitude</b></label>
                            <p id="longitude">NA</p>
                            <input type="hidden" name="longitude_hidden" id="longitude_hidden">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a onclick="getCoords()" class="btn btn-warning">Dapatkan Koordinat</a>
                        <button type="submit" class="btn btn-primary">Kemaskini Lokasi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
    function getCoords() {

        navigator.geolocation.getCurrentPosition((position) => {
            const p = position.coords;
            document.getElementById("latitude_hidden").value = p.latitude;
            document.getElementById("longitude_hidden").value = p.longitude;
            document.getElementById('latitude').innerText = p.latitude;
            document.getElementById('longitude').innerText = p.longitude;
            console.log(p.latitude, p.longitude);
        })

    }
    </script>




</body>


</html>

