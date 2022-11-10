@extends('layouts.app')

@section('content')

        <main class="content" >

            <div class="container-fluid" >

                <div class="header">
                    <h1 class="header-title">
                        Senarai Pemeriksaan Ternakan
                    </h1>
                    <a href="/daging" class="btn float-end " style="width: fit-content"><button class="btn btn-warning btn-block">Tambah</button></a>      
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
                                        <th scope="col">Masa Tiba</th>
                                        <th scope="col">Nama Pemilik</th>
                                        <th scope="col">Kenderaan</th>
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
@endsection














{{--  --}}
    


