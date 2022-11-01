@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pendaftaran Stok Tag Karkas
                </h1>
                <a href="/tag/senarai_tag/stok-borang" class="btn float-end " style="width: fit-content"><button
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
                                    <th scope="col">Tarikh</th>
                                    <th scope="col">Jumlah Tag Diterima</th>
                                    <th scope="col">Jumlah Tag Rosak</th>
                                    <th scope="col">Tarikh Tag Rosak</th>
                                    <th scope="col">Catatan</th>
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
                ajax: "/stok-tag",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'tag_diterima',
                        name: 'tag_diterima'
                    },
                    {
                        data: 'tag_rosak',
                        name: 'tag_rosak'
                    },

                    {
                        data: 'tarikh_tag_rosak',
                        name: 'tarikh_tag_rosak'
                    },
                    {
                        data: 'catatan',
                        name: 'catatan'
                    },


                ]
            });


        });
    </script>
@endsection
