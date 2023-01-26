@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>

            @role('pentadbir')
            {{-- <a href="/borang-keratan" class="btn float-end " style="width: fit-content"><button
            class="btn btn-warning btn-block">Tambah</button></a> --}}
            @endrole

        </div>

         {{-- align button tambah --}}
         <div class="card" style="width: fit-content">

        </div>

      

            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Senarai Permohonan Verifikasi Import</h5>
                    </div>

                    <a href="/borang-keratan" class="btn float-end " style="width: fit-content"><button
                        class="btn btn-warning btn-block">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:5%;">Nombor Rujukan</th>
                                    <th style="width:15%">Senarai Permohonan</th>
                                    <th style="width:10%">Tarikh</th>
                                    <th style="width:15%">Pemeriksa 1</th>
                                    <th style="width:15%">Pemeriksa 2</th>
                                    <th style="width:15%">Pemeriksa 3</th>
                                    {{-- <th style="width:15%">Pemeriksa 4</th> --}}
                                    {{-- <th style="width:10%">Status</th> --}}
                                    <th style="width:10%">Tindakan</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                        

                                <tr>
                                    @foreach ($keratans as $keratan)
                                    <td>CP/2022/{{$loop->iteration}}</td>
                                    <td>{{$keratan->premis}}</td>
                                    <td>{{$keratan->created_at->format('d/m/Y')}}</td>
                                    <td>{{$keratan->pemeriksa_1}}</td>
                                    <td>{{$keratan->pemeriksa_2}}</td>
                                    <td>{{$keratan->pemeriksa_3}}</td>
                                    {{-- <td>{{$keratan->pemeriksa_4}}</td> --}}
                                    {{-- <td>Dihantar/Selesai</td> --}}
                                    <td class="table-action">
                                        <a href="/satu-keratan/{{$keratan->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEksport{{$loop->iteration}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalEksport{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Borang Permohonan Verifikasi Import</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin memadam maklumat ini?
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <form action="/keratan/{{ $keratan->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        {{-- <form action="/keratan/{{ $keratan->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        </form> --}}
                                        <a href="/lihat-keratan/{{$keratan->id}}"><i class="align-middle fas fa-fw fa-eye"></i></i></a>
                                        <a href="/jana-keratan/{{$keratan->id}}"><i class="align-middle fas fa-fw fa-print"></i></i></a>            
                                    </td>        
                                </tr>

                                    @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Laporan Pemeriksaan</h5>
                    </div>

                    <a href="/borang-verifikasi" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:25%">Nombor Rujukan</th>
                                    <th style="width:25%">Senarai Laporan</th>
                                    <th style="width:10%">Tarikh</th>
                                    <th style="width:10%">Tindakan</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                    
                                <tr>
                                    @foreach ($verifikasis as $verifikasi)
                                    <td>CP/2022/{{$loop->iteration}}</td>
                                    <td>{{$verifikasi->syarikat}}</td>
                                    <td>{{$verifikasi->created_at->format('d/m/Y')}}</td>
                                    <td class="table-action">
                                        <a href="/lihat-verifikasi/{{$verifikasi->id}}"><i class="align-middle fas fa-fw fa-eye"></i></i></a>
                                        <a href="/satu-verifikasi/{{$verifikasi->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEksport{{$loop->iteration}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalEksport{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Borang Permohonan Verifikasi Import</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin memadam maklumat ini?
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <form action="/verifikasi/{{ $verifikasi->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <a href="/jana-verifikasi/{{$verifikasi->id}}"><i class="align-middle fas fa-fw fa-print"></i></a>

                                    </td>                                       

                                </tr>

                                    @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           

         



            


    </div>



</main>

@endsection

@section('script')


@endsection