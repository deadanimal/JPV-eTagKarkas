@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pendaftaran Stok Tag Karkas
                </h1>
                <a href="/stok-tag/borang" class="btn float-end " style="width: fit-content"><button
                        class="btn btn-warning btn-block text-center">Tambah</button></a>


            </div>


            <div class="card" style="width: fit-content">

            </div>


            <div class="card">
                <div class="card-body">


                    <div class="row d-flex justify-content-center">
                        <table class="table border border-info stok-datatable">
                            <thead class="text-white bg-info ">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tarikh Tag Diterima</th>
                                    <th scope="col">Jumlah Tag Diterima</th>
                                    <th scope="col">Tarikh Tag Rosak</th>
                                    <th scope="col">Jumlah Tag Rosak</th>                            
                                    <th scope="col">Jumlah Tag Bolehpakai</th>                            
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

            var table = $('.stok-datatable').DataTable({
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
                ajax: "/stok-tag",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'tarikh_tag_terima',
                        name: 'tarikh_tag_terima'
                    },
                    {
                        data: 'tag_diterima',
                        name: 'tag_diterima'
                    },

                    {
                        data: 'tarikh_tag_rosak',
                        name: 'tarikh_tag_rosak'
                    },
                    {
                        data: 'tag_rosak',
                        name: 'tag_rosak'
                    },          
                    {
                        data: 'tag_bolehpakai',
                        name: 'tag_bolehpakai'
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
