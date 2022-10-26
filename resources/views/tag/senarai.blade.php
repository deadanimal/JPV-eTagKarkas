@extends('layouts.app')



@section('content')
    <main class="content">

        <div class="container-fluid">

            {{-- @role('pengurus-rumah-sembelih') --}}
            <div class="header">
                <h1 class="header-title">
                    Permohonan Tag Karkas
                </h1>
                @role('pengurus-rumah-sembelih')
                <a href="/tag-borang"><button class="btn btn-warning btn-block">Tambah</button></a>
                @endrole
            </div>


            {{-- @endrole --}}



           <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <table class="table table-bordered tag-datatable">
                        <thead class="text-white bg-info ">
                            <tr>
                                <th scope="col">Bil.</th>
                                {{-- <th scope="col">Nombor Rujukan Permohonan</th> --}}
                                {{-- <th scope="col">Nama Premis</th> --}}
                                <th scope="col">Jenis Ternakan</th>
                                <th scope="col">Bilangan Ternakan Yang Disyorkan</th>

                                {{-- <th scope="col">Kategori Tag</th>
                                <th scope="col">Tarikh Permohonan</th>
                                <th scope="col">Nama Pemohon</th>
                                <th scope="col">Cetakan Kod Bar</th>
                                <th scope="col">Status</th>
                                @role('pentadbir')
                                    <th scope="col">Tindakan</th>
                                @endrole --}}
    
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

        var table = $('.tag-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "/tag",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
               
                
               
                {
                    data: 'jenis_ternakan',
                    name: 'jenis_ternakan'
                },
                {
                    data: 'bil_ternakan',
                    name: 'bil_ternakan'
                }, 
                
               

            ]
        });


    });
</script>

<script type="text/javascript">
    function calculate() {
        var jenisTernakan = document.getElementById("jenis_ternakan").value;
        var bilanganTernakan = document.getElementById("bilangan_ternakan").value;

        if (jenisTernakan == 'Ruminan Besar') {
            document.getElementById("bilangan_kodbar").value = bilanganTernakan * 4;
        } else {
            document.getElementById("bilangan_kodbar").value = bilanganTernakan * 2;
        }
    }
</script>
@endsection
