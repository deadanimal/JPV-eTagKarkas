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
                        <h5 class="card-title">Senarai Permohonan Eksport ke Singapura</h5>
                    </div>

                    @role('pentadbir')
                    <a href="/borang-adequacy" class="btn float-end " style="width: fit-content"><button
                    class="btn btn-warning btn-block">Tambah</button></a>
                    @endrole

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:5%;">No</th>
                                    <th style="width:25%">Nama</th>
                                    <th style="width:10%">Produk</th>
                                    <th style="width:10%">Negeri</th>
                                    <th style="width:10%">Zon</th>
                                    <th style="width:10%">Premis</th>
                                    <th style="width:10%">Tarikh</th>
                                    <th style="width:12%">Pemeriksa 1</th>
                                    <th style="width:12%">Pemeriksa 2</th>
                                    <th style="width:10%">Tindakan</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exsports as $exsport)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$exsport->nama}}</td>
                                        <td>{{$exsport->produk}}</td>
                                        <td>{{$exsport->negeri}}</td>
                                        <td>{{$exsport->zon}}</td>
                                        <td>{{$exsport->premis}}</td>
                                        <td>{{$exsport->tarikh}}</td>
                                        <td>{{$exsport->pemeriksa_1}}</td> 
                                        <td>{{$exsport->pemeriksa_2}}</td>  
                                        <td class="table-action">
                                            <a href="kemaskini_exsport/{{$exsport->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEksport{{$loop->iteration}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalEksport{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Borang Log</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin memadam maklumat ini?
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <form action="/padam_exsport/{{ $exsport->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            {{-- <form action="/padam_exsport/{{ $exsport->id }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form> --}}
                                            {{-- <a href="padam_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-trash"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach

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

            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Senarai Permohonan Eksport Selain ke Singapura</h5>
                    </div>
                    @role('pentadbir')
                    <a href="/borang-adequacy1" class="btn float-end " style="width: fit-content"><button
                    class="btn btn-warning btn-block">Tambah</button></a>
                    @endrole

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:5%;">No</th>
                                    <th style="width:25%">Nama</th>
                                    <th style="width:10%">Produk</th>
                                    <th style="width:10%">Premis</th>
                                    <th style="width:10%">Tarikh</th>
                                    <th style="width:10%">Pemeriksa Adequacy</th>
                                    <th style="width:10%">Pemeriksa</th>
                                    <th style="width:10%">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exsports1 as $exsport)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$exsport->nama}}</td>
                                        <td>{{$exsport->produk}}</td>
                                        <td>{{$exsport->premis}}</td>
                                        <td>{{$exsport->tarikh}}</td>
                                        <td>{{$exsport->pemeriksa_1}}</td> 
                                        <td>{{$exsport->pemeriksa_2}}</td>  
                                        <td class="table-action">
                                            <a href="kemaskini_exsport1/{{$exsport->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEksport{{$loop->iteration}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalEksport{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Borang Log</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin memadam maklumat ini?
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <form action="/padam_exsport/{{ $exsport->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <a href="jana-eksport/{{ $exsport->id }}"><i class="align-middle fas fa-fw fa-print"></i></a>
                                            {{-- <form action="/padam_exsport/{{ $exsport->id }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form>  /jana-eksport/{{$eksport->id}} --}} 
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