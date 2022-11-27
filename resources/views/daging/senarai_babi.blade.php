@extends('layouts.app')

@section('content')

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

                        <div class="card-title">Senarai Pemeriksaan Ternakan Babi</div>

                        <div class="row d-flex justify-content-center">
                            <table class="table border border-info babi-datatable">
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



@endsection

@section('script')

@role('pengurus-rumah-sembelih')

{{-- babi --}}
<script type="text/javascript">
    $(function() {

        var table = $('.babi-datatable').DataTable({
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
            ajax: "/pemeriksaan-babi",
            columns: [
                {
                    data: 'masa_tiba_babi',
                    name: 'masa_tiba_babi'
                },
                {
                    data: 'nama_pemilik_babi',
                    name: 'nama_pemilik_babi'
                },
                {
                    data: 'kenderaan_babi',
                    name: 'kenderaan_babi'
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

@role('pentadbir')

@endrole

@endsection














{{--  --}}
    


