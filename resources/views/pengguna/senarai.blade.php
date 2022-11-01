@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Senarai Pengguna
                </h1>
                <a href="/pengguna/borang" class="btn float-end " style="width: fit-content"><button
                        class="btn btn-warning btn-block">Tambah</button></a>
            </div>

            {{-- align button tambah --}}
            <div class="card" style="width: fit-content">

            </div>


            @role('pentadbir')
                <div class="card">

                    {{-- datatable --}}
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <table class="table table-bordered rumah-datatable">
                                <thead class="text-white bg-info ">
                                    <tr>
                                        <th>Bil.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Peranan</th>
                                        <th scope="col">Pejabat</th>
                                        <th scope="col">Rumah Sembelih</th>
                                        <th scope="col">Emel</th>
                                        <th scope="col">Telefon</th>
                                        <th scope="col">Jawatan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tindakan</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            @endrole

            @role('pengurus-rumah-sembelih')
            @endrole

        </div>


    </main>
@endsection



@section('script')
    <script type="text/javascript">
        $(function() {

            var table = $('.rumah-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
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
                },
                ajax: "/pengguna",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'peranan',
                        name: 'peranan'
                    },
                    {
                        data: 'pejabat',
                        name: 'pejabat'
                    },
                    {
                        data: 'rumah',
                        name: 'rumah'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'telefon',
                        name: 'telefon'
                    },
                    {
                        data: 'jawatan',
                        name: 'jawatan'
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
@endsection
