@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pensampelan
                </h1>
                <a href="/pensampelan-pilihan" class="btn float-end " style="width: fit-content"><button
                        class="btn btn-warning btn-block text-center">Tambah</button></a>


            </div>


            <div class="card" style="width: fit-content">

            </div>


            <div class="card">
                <div class="card-body">


                    <div class="row d-flex justify-content-center">
                        <table class="table border border-info sampel-datatable">
                            <thead class="text-white bg-info ">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Premis</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Kod Premis</th>
                                    <th scope="col">Zon</th>
                                    {{-- <th scope="col">Pengambil Sampel 1</th>
                                    <th scope="col">Pengambil Sampel 2</th>
                                    <th scope="col">Tarikh</th> --}}
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
    <script type="text/javascript">
        $(function() {

            var table = $('.sampel-datatable').DataTable({
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
                    "zeroRecords": "Carian tidak dijumpai",
                    "infoEmpty": "Tiada maklumat",
                    "infoFiltered": "(carian dari _MAX_ jumlah rekod)"
                },
                ajax: "/pensampelan",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'premis',
                        name: 'premis'
                    },
                    {
                        data: 'pilihan',
                        name: 'pilihan'
                    },
                    {
                        data: 'kod_premis',
                        name: 'kod_premis'
                    },
                    {
                        data: 'zon',
                        name: 'zon'
                    },
                    // {
                    //     data: 'created_at',
                    //     name: 'created_at'
                    // },
                    {
                        data: 'tindakan',
                        name: 'tindakan'
                    },
                                                  
                   


                ]
            });


        });
    </script>
@endsection
