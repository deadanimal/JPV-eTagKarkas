


    <main class="content" style="padding-left: 0px;padding-right: 0px;">

        <div class="container-fluid" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;width:100%;">

            {{-- <div class="header">
                <h1 class="header-title text-black">
                    Senarai Pemeriksaan Ternakan
                </h1>
            </div> --}}

            <div class="card" style="padding-left: 0px;padding-right: 0px;margin-right: 0px;margin-left: 0px;">
                <div class="card-body">

                    <div class="card-title">Senarai Pemeriksaan Ternakan</div>

                    <div class="row d-flex justify-content-center">
                        <table class="table border border-info ruminan-datatable">
                            <thead class="text-white bg-info ">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Pemilik</th>
                                    <th scope="col">Kenderaan</th>
                                    <th scope="col">Masa Tiba</th>
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

@section('script')
    <script type="text/javascript">
        $(function() {

            var table = $('.ruminan-datatable').DataTable({
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
                ajax: "/pemeriksaan",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'nama_pemilik',
                        name: 'nama_pemilik'
                    },
                    {
                        data: 'kenderaan',
                        name: 'kenderaan'
                    },
                    {
                        data: 'masa_tiba',
                        name: 'masa_tiba'
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


