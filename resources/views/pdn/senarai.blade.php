@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>

            @role('pentadbir' && 'pentadbir-zon')
            <a href="/borang-survelan" class="btn float-end " style="width: fit-content"><button
            class="btn btn-warning btn-block">Tambah</button></a>
            @endrole

        </div>

         {{-- align button tambah --}}
         <div class="card" style="width: fit-content">

        </div>

      

            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Jadual Survelan Audit</h5>
                    </div>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th >No</th>
                                    <th style="width:25%;">Zon</th>
                                    <th style="width:25%">Jenis Operasi</th>
                                    <th class="d-none d-md-table-cell" style="width:25%">Tarikh</th>
                                    <th style="width:10%">Tindakan</th>
                                    <th style="width:10%">Status</th>
                                    <th style="width:10%">Jadual Survelan</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>1</td>
                                    <td>Zon Tengah</td>
                                    <td>Loji VHM/GVHP</td>
                                    <td class="d-none d-md-table-cell">1/12/22</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                    </td>
                                    <td class="d-none d-md-table-cell"><a href="#"><button class="btn btn-secondary" type="button" style="float: right">Jana</button></a></td>
    
                                </tr> --}}

                                <tr>
                                    @foreach ($jaduals as $jadual)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$jadual->zon}}</td>
                                    <td>{{$jadual->operasi}}</td>
                                    <td>{{$jadual->created_at->format('d/m/Y')}}</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                    </td>
                                    <td>Dihantar/Selesai</td>
                                    <td class="d-none d-md-table-cell"><a href="/jadual-survelan/{{$jadual->id}}"><button class="btn btn-secondary" type="button" style="float: right">Jana/Lihat</button></a></td>
                                       

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