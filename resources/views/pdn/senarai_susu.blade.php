@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>


        </div>

         {{-- align button tambah --}}
         <div class="card" style="width: fit-content">

        </div>

      

        <div class="col-12 col-xl-12">
            <div class="card" >
                <div class="card-header">
                    <h5 class="card-title">Senarai Permohonan Pemeriksaan Susu Tepung</h5>
                </div>

                @role('pentadbir')
                <a href="/borang-susu" class="btn float-end " style="width: fit-content"><button
                class="btn btn-warning btn-block">Tambah</button></a>
                @endrole

                <div class="card-body"  style="border-width: 1px; border-color:black;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:5%">Bil</th>
                                <th style="width:25%">Senarai Permohonan</th>
                                <th style="width:10%">Tarikh</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Tindakan</th>

                                {{-- <th style="width:10%">Jadual Survelan</th> --}}
                                
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach ($susus as $susu)
                                <td>{{$loop->iteration}}</td>
                                <td>{{$susu->premis}}</td>
                                <td>{{$susu->created_at->format('d/m/Y')}}</td>
                                <td>Dihantar</td>
                                <td class="table-action">
                                    <a href="satu-susu/{{$susu->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEksport{{$loop->iteration}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalEksport{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Borang Permohonan Pemeriksaan Susu Tepung</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin memadam maklumat ini?
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <form action="/susu/{{ $susu->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    {{-- <form action="/susu/{{ $susu->id }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                    </form> --}}
                                    <a href="#"><i class="align-middle fas fa-fw fa-upload"></i></i></a>
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
                        <h5 class="card-title">Borang Perakuan</h5>
                    </div>

                    <a href="/borang-perakuan" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:25%">Nombor Rujukan</th>
                                    <th style="width:25%">Senarai Laporan</th>
                                    <th style="width:10%">Tarikh</th>
                                    <th style="width:10%">Status</th>
                                    <th style="width:10%">Tindakan</th>

                                    {{-- <th style="width:10%">Jadual Survelan</th> --}}
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CP/20222/1</td>
                                    <td>Premis A bagi Pengimportan Susu Cair</td>
                                    <td class="d-none d-md-table-cell">1/12/22</td>
                                    <td>Dihantar</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-download"></i></a>
                                    </td>
    
                                </tr>

                                {{-- <tr>
                                    @foreach ($jaduals as $jadual)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$jadual->zon}}</td>
                                    <td>{{$jadual->operasi}}</td>
                                    <td>{{$jadual->created_at->format('d/m/Y')}}</td>
                                    <td class="table-action">
                                        <a href="kemaskini_jadual_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <form action="/padam_survelan/{{ $jadual->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <td>Dihantar/Selesai</td>
                                    <td class="d-none d-md-table-cell text-center"><a href="/jadual-survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-eye"></i></a></td>
                                       

                                </tr>

                                    @endforeach --}}
                              
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