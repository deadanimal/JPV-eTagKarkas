@extends('layouts.app')

@section('content')

{{-- @if($haiwans->jenis == "Ruminan") --}}
        <main class="content" >

            <div class="container-fluid" >

                <div class="header">
                    <h1 class="header-title">
                        Senarai Pemeriksaan Ternakan
                    </h1>
                    @role('pengurus-rumah-sembelih')
                    <a href="/daging" class="btn float-end " style="width: fit-content"><button class="btn btn-warning btn-block">Tambah</button></a> 
                    @endrole     
                </div>

                 {{-- align button tambah --}}
                <div class="card" style="width: fit-content">

                </div>

                <div class="card" >
                    <div class="card-body">

                        <div class="card-title">Senarai Pemeriksaan Ternakan</div>

                        <div class="row d-flex justify-content-center">
                            <table class="table border border-info ruminan-datatable">
                                <thead class="text-white bg-info ">
                                    <tr>
                                        @role('pentadbir')
                                        <th scope="col">Nama Premis</th>
                                        @endrole
                                        <th scope="col">Masa Tiba</th>
                                        <th scope="col">Nama Pemilik</th>
                                        <th scope="col">Nombor Kenderaan</th>
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

{{-- @elseif($haiwans->jenis == "Unggas")        --}}
        {{-- <main class="content" >

            <div class="container-fluid" >

                <div class="header">
                    <h1 class="header-title">
                        Senarai Pemeriksaan Ternakan Unggas
                    </h1>
                    @role('pengurus-rumah-sembelih')
                    <a href="/daging" class="btn float-end " style="width: fit-content"><button class="btn btn-warning btn-block">Tambah</button></a> 
                    @endrole     
                </div>

                <div class="card" style="width: fit-content">

                </div>

                <div class="card" >
                    <div class="card-body">

                        <div class="card-title">Senarai Pemeriksaan Ternakan Unggas</div>

                        <div class="row d-flex justify-content-center">
                            <table class="table border border-info unggas-datatable">
                                <thead class="text-white bg-info ">
                                    <tr>
                                        @role('pentadbir')
                                        <th scope="col">Nama Premis</th>
                                        @endrole
                                        <th scope="col">Nama Ladang</th>
                                        <th scope="col">Nombor Kenderaan</th>
                                        <th scope="col">Alamat Ladang</th>
                                        <th scope="col">Tarikh</th>
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

        </main> --}}
{{-- @endif --}}

@endsection

@section('script')

@role('pengurus-rumah-sembelih')
<script type="text/javascript">
    $(function() {

        var table = $('.ruminan-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[0, 'desc']],
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
            ajax: "/pemeriksaan",
            columns: [
                {
                    data: 'masa_tiba',
                    name: 'masa_tiba'
                },
                {
                    data: 'nama_pemilik',
                    name: 'nama_pemilik'
                },
                {
                    data: 'kenderaan',
                    name: 'kenderaan'
                },
                
                // {
                //     data: {
                //             _: "masa_tiba.display",
                //             sort: "masa_tiba.timestamp",
                //             filter: 'masa_tiba.display'
                //         },
                //     name: 'masa_tiba.display'
                // },
                {
                    data: 'tindakan',
                    name: 'tindakan'
                },



            ]
        });


    });
</script>

{{-- unggas --}}
<script type="text/javascript">
    $(function() {

        var table = $('.unggas-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[0, 'desc']],
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
            ajax: "/pemeriksaan-unggas",
            columns: [
                {
                    data: 'nama_ladang',
                    name: 'nama_ladang'
                },
                {
                    data: 'nombor_kenderaan',
                    name: 'nombor_kenderaan'
                },
                {
                    data: 'alamat_ladang',
                    name: 'alamat_ladang'
                },
                {
                    data: 'tarikh_terima',
                    name: 'tarikh_terima'
                },
                
                // {
                //     data: {
                //             _: "masa_tiba.display",
                //             sort: "masa_tiba.timestamp",
                //             filter: 'masa_tiba.display'
                //         },
                //     name: 'masa_tiba.display'
                // },
                {
                    data: 'tindakan',
                    name: 'tindakan'
                },



            ]
        });


    });
</script>
@endrole

@role('pentadbir')
<script type="text/javascript">
    $(function() {

        var table = $('.ruminan-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[0, 'desc']],
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
            ajax: "/pemeriksaan",
            columns: [{
                    data: 'nama_premis',
                    name: 'nama_premis'
                },{
                    data: 'masa_tiba',
                    name: 'masa_tiba'
                },
                {
                    data: 'nama_pemilik',
                    name: 'nama_pemilik'
                },
                {
                    data: 'kenderaan',
                    name: 'kenderaan'
                },
                
                // {
                //     data: {
                //             _: "masa_tiba.display",
                //             sort: "masa_tiba.timestamp",
                //             filter: 'masa_tiba.display'
                //         },
                //     name: 'masa_tiba.display'
                // },
                {
                    data: 'tindakan',
                    name: 'tindakan'
                },



            ]
        });


    });
</script>
@endrole

@endsection














{{--  --}}
    


