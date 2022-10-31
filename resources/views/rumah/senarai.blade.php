@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Senarai Pendaftaran Premis
                </h1>
                <a href="/rumah-borang" class="btn float-end " style="width: fit-content"><button
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
                                        <th>No.</th>
                                        <th scope="col">Nama Premis</th>
                                        <th scope="col">Kod Premis</th>
                                        <th scope="col">Kategori Premis</th>
                                        <th scope="col">Aktif</th>
                                        <th>Tindakan</th>

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
                ajax: "/rumah",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama_rumah',
                        name: 'nama_rumah'
                    },
                    {
                        data: 'kod',
                        name: 'kod'
                    },
                    {
                        data: 'induk',
                        name: 'induk'
                    },
                    {
                        data: 'aktif',
                        name: 'aktif'
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
