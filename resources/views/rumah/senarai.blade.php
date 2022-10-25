@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pendaftaran Premis
                </h1>
                    <a href="/rumah-borang"><button class="btn btn-warning btn-block">Tambah</button></a>
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
                    data: 'kategori',
                    name: 'kategori'
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
