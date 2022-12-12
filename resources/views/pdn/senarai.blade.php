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

      

        {{-- pdn --}}
            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Pemeriksaan Dalam Negara</h5>
                    </div>

                    @role('pentadbir')
                    <a href="/borang-survelan" class="btn float-end " style="width: fit-content"><button
                    class="btn btn-warning btn-block">Tambah</button></a>
                    @endrole

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th >No</th>
                                    <th style="width:25%;">Zon</th>
                                    <th style="width:25%">Jenis Operasi</th>
                                    <th class="d-none d-md-table-cell" style="width:25%">Tarikh</th>
                                    <th style="width:10%">Tindakan</th>
                                    <th style="width:10%">Jadual Survelan Audit</th>
                                    
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
                                        <a href="/satu_pdn/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                        <form action="/padam_pdn/{{ $jadual->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        </form>
                                        {{-- <a href="padam_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-trash"></i></a> --}}
                                    </td>
                                    <td>  <a href="/jadual_survelan/{{$jadual->id}}" class="btn " style="width: fit-content"><button class="btn btn-success btn-block float-end">Wujudkan</button></a></td>
                                    {{-- <td class="d-none d-md-table-cell text-center"><a href="/jadual-survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-eye"></i></a></td> --}}
                                       

                                </tr>

                                    @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- survelans --}}
                {{-- <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Jadual Survelan Audit</h5>
                    </div>

                    <a href="/jadual_survelan" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="16">JADUAL PEMERIKSAAN VETERINAR SURVELAN AUDIT(VHM/MyGAP) TAHUN 2022</th>
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>Bil</th>
                                    <th>Nombor VHM/MyGAP</th>
                                    <th>Premis</th>
                                    <th>Nombor Telefon</th>
                                    <th>Nama Pemeriksa 1</th>
                                    <th>Nama Pemeriksa 2</th>
                                    <th>Nama Pemeriksa 3</th>
                                    <th>Nama Pemeriksa 4</th> 
                                    <th>Tindakan</th>  
                                </tr>
                                <tr>
                                <th colspan="16">Zon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($survelans as $survelan)
                                        <tr class="text-center">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$survelan->nombor}}</td>
                                            <td>{{$survelan->premis}}</td>
                                            <td>{{$survelan->telefon}}</td>
                                            <td>{{$survelan->pemeriksa_1}}</td>
                                            <td>{{$survelan->pemeriksa_2}}</td>
                                            <td>{{$survelan->pemeriksa_3}}</td>
                                            <td>{{$survelan->pemeriksa_4}}</td> 
                                            <td class="table-action">
                                                <a href="/kemaskini_jadual_survelan/{{$survelan->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                                <form action="/padam_survelan/{{ $survelan->id }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                                </form>
                                            </td> 
                                        </tr>
                                    @endforeach
                                       

                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </div>


            @role('pengurus-rumah-sembelih')
            {{-- borang NCR --}}
            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Jadual Borang NCR</h5>
                    </div>

                    <a href="/borang_pemeriksa" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>


                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="16">JADUAL PEMERIKSAAN VETERINAR NCR(VHM/MyGAP) TAHUN 2022</th>
                                    {{-- after AUDIT, need to specify MyGap or VHM --}}
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>BIL</th>
                                    <th>Nombor IC</th>
                                    <th>Company</th>
                                    <th>Categori</th>
                                    <th>auditor1_signature</th>
                                    <th>auditor2_signature</th>
                                    <th>auditor3_signature</th>
                                    <th>auditor4_signature</th>
                                    <th>Tindakan</th>  
                                </tr>
                                <tr>
                                <th colspan="16">Zon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ncr as $ncr)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ncr->nombor_ic}}</td>
                                        <td>{{$ncr->company}}</td>
                                        <td>{{$ncr->categori}}</td>
                                        <td>{{$ncr->auditor1_signature}}</td>
                                        <td>{{$ncr->auditor2_signature}}</td>
                                        <td>{{$ncr->auditor3_signature}}</td>
                                        <td>{{$ncr->auditor4_signature}}</td> 
                                        <td class="table-action">
                                            <a href="/kemaskini_jadual_ncr/{{$ncr->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                            <form action="/padam_ncr/{{ $ncr->id }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form>
                                            {{-- <a href="padam_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-trash"></i></a> --}}
                                        </td>  
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- borang OBS --}}
            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Jadual Borang OBS</h5>
                    </div>

                    <a href="/borang_obr" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="16">JADUAL PEMERIKSAAN VETERINAR OBR(VHM/MyGAP) TAHUN 2022</th>
                                    {{-- after AUDIT, need to specify MyGap or VHM --}}
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>BIL</th>
                                    <th>Total OBR</th>
                                    <th>Company</th>
                                    <th>Objective Evidence</th>
                                    <th>auditor1_signature</th>
                                    <th>auditor2_signature</th>
                                    <th>auditor3_signature</th>
                                    <th>auditor4_signature</th>
                                    <th>Tindakan</th>  
                                </tr>
                                <tr>
                                <th colspan="16">Zon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($obr as $obr)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$obr->nombor_ic}}</td>
                                        <td>{{$obr->company}}</td>
                                        <td>{{$obr->objective_evidence}}</td>
                                        <td>{{$obr->auditor1_signature}}</td>
                                        <td>{{$obr->auditor2_signature}}</td>
                                        <td>{{$obr->auditor3_signature}}</td>
                                        <td>{{$obr->auditor4_signature}}</td> 
                                        <td class="table-action">
                                            <a href="/kemaskini_jadual_obr/{{$obr->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                            <form action="/padam_obr/{{ $obr->id }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form>
                                            {{-- <a href="padam_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-trash"></i></a> --}}
                                        </td>  
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- borang Log --}}
            <div class="col-12 col-xl-12">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Jadual Borang Log</h5>
                    </div>

                    <a href="/borang_log" class="btn " style="width: fit-content"><button
                        class="btn btn-warning btn-block float-end">Tambah</button></a>

                    <div class="card-body"  style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="16">JADUAL PEMERIKSAAN VETERINAR Log(VHM/MyGAP) TAHUN 2022</th>
                                    {{-- after AUDIT, need to specify MyGap or VHM --}}
                                </tr>
                                <tr style="vertical-align: middle">
                                    <th>BIL</th>
                                    <th>Nama Premis</th>
                                    <th>Alamat</th>
                                    <th>Jenis Produk</th>
                                    <th>Nombor EST</th>
                                    <th>Tindakan</th>  
                                </tr>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach ($log as $log)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$log->premis}}</td>
                                        <td>{{$log->alamat}}</td>
                                        <td>{{$log->produk}}</td>
                                        <td>{{$log->no_est}}</td> 
                                        <td class="table-action">
                                            <a href="/kemaskini_jadual_log/{{$log->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                            <form action="/padam_log/{{ $log->id }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </form>
                                            {{-- <a href="padam_survelan/{{$jadual->id}}"><i class="align-middle fas fa-fw fa-trash"></i></a> --}}
                                        </td>  
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @endrole

            


    </div>



</main>

@endsection

@section('script')


@endsection