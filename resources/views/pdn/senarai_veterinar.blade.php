@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>

            @role('pentadbir')
            {{-- <a href="/borang-sijil" class="btn float-end " style="width: fit-content"><button
            class="btn btn-warning btn-block">Tambah</button></a> --}}
            @endrole

        </div>

         {{-- align button tambah --}}
         <div class="card" style="width: fit-content">

        </div>

      

            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Senarai Permohonan Pemeriksaan SKV</h5>
                    </div>

                    <a href="/borang-sijil" class="btn float-end " style="width: fit-content"><button
                        class="btn btn-warning btn-block">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:5%;">Nombor Rujukan</th>
                                    <th style="width:25%">Senarai Permohonan</th>
                                    <th style="width:10%">Tarikh</th>
                                    <th style="width:10%">Pemeriksa</th>
                                    <th style="width:10%">Status</th>
                                    <th style="width:10%">Tindakan</th>

                                    {{-- <th style="width:10%">Jadual Survelan</th> --}}
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>CP/20222/1</td>
                                    <td>Premis A bagi Produk Telur</td>
                                    <td class="d-none d-md-table-cell">1/12/22</td>
                                    <td>Izatul Hanim</td>
                                    <td>Kemaskini/Dihantar/Tidak Lengkap</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-upload"></i></a>
                                    </td>
    
                                </tr> --}}

                                <tr>
                                    @foreach ($vets as $vet)
                                    <td>CP/2022/{{$loop->iteration}}</td>
                                    <td>{{$vet->premis}}</td>
                                    <td>{{$vet->created_at->format('d/m/Y')}}</td>
                                    <td>{{$vet->pemeriksa_1}}</td>
                                    <td>Dihantar</td>
                                    <td class="table-action">
                                        <a href="/satu-sijil/{{$vet->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEksport{{$loop->iteration}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalEksport{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Borang Permohonan Pemeriksaan SKV</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin memadam maklumat ini?
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <form action="/sijil/{{ $vet->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        {{-- <form action="/sijil/{{ $vet->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>

                                        </form> --}}
                                        <a href="#" type="document"><i class="align-middle fas fa-fw fa-upload"></i></i></a>

            
                                    </td>
                                    
                                    {{-- <td class="d-none d-md-table-cell text-center"><a href="/sijil/{{$vet->id}}"><i class="align-middle fas fa-fw fa-eye"></i></a></td> --}}
                                       
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
                        <h5 class="card-title">Senarai Semak</h5>
                    </div>

                    <a href="/borang-semak" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:10%">No.</th>
                                    <th style="width:25%">Senarai Permohonan</th>
                                    <th style="width:10%">Tarikh</th>
                                    {{-- <th style="width:10%">Status</th> --}}
                                    <th style="width:10%">Tindakan</th>

                                    {{-- <th style="width:10%">Jadual Survelan</th> --}}
                                    
                                </tr>
                            </thead>
                            <tbody>
                              

                                <tr>
                                    @foreach ($semaks as $semak)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$semak->premis}}</td>
                                    <td>{{$semak->tarikh}}</td>
                                    <td class="table-action">
                                        <a href="/satu-semak/{{$semak->id}}"><i class="align-middle fas fa-fw fa-eye"></i></a>
                                        <a href="/jana-semak/{{$semak->id}}"><i class="align-middle fas fa-fw fa-print"></i></i></a>
                                      
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