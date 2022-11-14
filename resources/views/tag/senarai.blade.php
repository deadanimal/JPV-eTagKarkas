@extends('layouts.app')

@section('styles')

    <script src="print.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css">

    

@endsection

@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Permohonan Tag Karkas
                </h1>
               
            </div>

           
            

            {{-- kad notifikasi --}}
            <div class="row">
                @role('pentadbir|ketua-seksyen')

                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title text-black">Jumlah Permohonan</h5>
                                </div>
                                    <h1 class="display-5 mt-2 mb-3">{{$jumlah_permohonan}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @endrole

                @role('pentadbir|ketua-seksyen|pengurus-rumah-sembelih')
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title text-black">Jumlah Permohonan Hantar</h5>
                                </div>
                                    <h1 class="display-5 mt-2 mb-3">{{$jumlah_permohonan_hantar}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title text-black">Jumlah Permohonan Sah</h5>
                                </div>
                                    <h1 class="display-5 mt-2 mb-3">{{$jumlah_permohonan_sah}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title text-black">Jumlah Permohonan Lulus</h5>
                                </div>
                                    <h1 class="display-5 mt-2 mb-3">{{$jumlah_permohonan_lulus}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title text-black">Jumlah Permohonan Tolak</h5>
                                </div>
                                    <h1 class="display-5 mt-2 mb-3">{{$jumlah_permohonan_tolak}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @endrole
            </div> 

           

             @role('pengurus-rumah-sembelih')
                <a href="/tag/borang" style="width: fit-content"><button class="btn btn-warning btn-block" style="float: right">Tambah</button></a><br>
            @endrole

             {{-- align button tambah --}}
             <div class="card" style="width: fit-content"></div>

             

           

           {{-- Datatable --}}
           <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <table class="table table-responsive table-bordered tag-datatable">
                        <thead class="text-white bg-info ">
                            <tr>
                                <th scope="col">Nombor Rujukan Permohonan</th>
                                <th scope="col">Nombor Tag</th>
                                @role('pentadbir|ketua-seksyen')
                                <th scope="col">Nama Premis</th>
                                @endrole
                                <th scope="col">Jenis Ternakan</th>
                                <th scope="col">Bilangan Ternakan Yang Disyorkan</th>
                                <th scope="col">Kategori Tag</th>
                                <th scope="col">Tarikh Permohonan</th>
                                <th scope="col">Tarikh Tindakan</th>
                                <th scope="col">Nama Pemohon</th>
                                <th scope="col">Cetakan Kod Bar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tindakan</th>
    
                            </tr>
                        </thead>
                        <tbody>
    
                            <tr>
    
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
               </div>
           </div>


        </div>



    </main>
@endsection

@section('script')

@role('pentadbir|ketua-seksyen')
<script type="text/javascript">
    $(function() {

        var table = $('.tag-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[7, 'desc']],
            language: {
                    "search": "Carian:",
                    "lengthMenu": "Tunjuk _MENU_ informasi",
                    "info": "Tunjuk _START_ ke _END_ dari _TOTAL_ informasi",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Akhir",
                        "next": "Seterusnya",
                        "previous": "Sebelum"
                    },
                    "zeroRecords": "Carian tidak dijumpai",
                    "infoEmpty": "Tiada maklumat",
                    "infoFiltered": "(carian dari _MAX_ jumlah rekod)"
                },
            ajax: "/tag",
            columns: [{
                    data: 'no_rujukan',
                    name: 'no_rujukan'
                },
                {
                    data: 'no_tag',
                    name: 'no_tag'
                },                                                          
                {
                    data: 'nama_premis',
                    name: 'nama_premis'
                },
                {
                    data: 'jenis_ternakan',
                    name: 'jenis_ternakan'
                }, 
                {
                    data: 'bil_ternakan_sah_ketua',
                    name: 'bil_ternakan_sah_ketua'
                }, 
                {
                    data: 'kategori_tag',
                    name: 'kategori_tag'
                }, 
                {
                    data: {
                        _:'created_at.display',
                        sort:'created_at.timestamp',
                        filter:'created_at.display',
                    },
                    name: 'created_at'
                },
                {
                    data: {
                        _:'updated_at.display',
                        sort:'updated_at.timestamp',
                        filter:'updated_at.display',
                    },
                    name: 'updated_at'
                },                
                {
                    data: 'pemohon_tag',
                    name: 'pemohon_tag'
                }, 
                {
                    data: 'kodbar',
                    name: 'kodbar'
                },
                {
                    data: 'status',
                    name: 'status'
                },      
                {
                    data: 'tindakan',
                    name: 'tindakan'
                },                                                                        
                
               

            ]
        });


    });
</script>
@endrole

@role('pengurus-rumah-sembelih|pemeriksa-daging')
<script type="text/javascript">
    $(function() {

        var table = $('.tag-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[7, 'desc']],
            language: {
                    "search": "Carian:",
                    "lengthMenu": "Tunjuk _MENU_ informasi",
                    "info": "Tunjuk _START_ ke _END_ dari _TOTAL_ informasi",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Akhir",
                        "next": "Seterusnya",
                        "previous": "Sebelum"
                    },
                    "zeroRecords": "Carian tidak dijumpai",
                    "infoEmpty": "Tiada maklumat",
                    "infoFiltered": "(carian dari _MAX_ jumlah rekod)"
                },
            ajax: "/tag",
            columns: [{
                    data: 'no_rujukan',
                    name: 'no_rujukan'
                },
                {
                    data: 'no_tag',
                    name: 'no_tag'
                },                                                          
                {
                    data: 'jenis_ternakan',
                    name: 'jenis_ternakan'
                }, 
                {
                    data: 'bil_ternakan_sah_ketua',
                    name: 'bil_ternakan_sah_ketua'
                }, 
                {
                    data: 'kategori_tag',
                    name: 'kategori_tag'
                }, 
                {
                    data: {
                        _:'created_at.display',
                        sort:'created_at.timestamp',
                        filter:'created_at.display',
                    },
                    name: 'created_at'
                },
                {
                    data: {
                        _:'updated_at.display',
                        sort:'updated_at.timestamp',
                        filter:'updated_at.display',
                    },
                    name: 'updated_at'
                },                
                {
                    data: 'pemohon_tag',
                    name: 'pemohon_tag'
                }, 
                {
                    data: 'kodbar',
                    name: 'kodbar'
                },
                {
                    data: 'status',
                    name: 'status'
                },      
                {
                    data: 'tindakan',
                    name: 'tindakan'
                },                                                                        
                
               

            ]
        });


    });
</script>
@endrole

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
