@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Pemeriksaan Daging
            </h1>
        </div>

           {{-- align button tambah --}}
        <div class="card" style="width: fit-content">

        </div>

        <div class="card">
            <div class="tab mt-1">
               
                <div class="tab-content">
        
                    <div class="tab-pane active show" id="tab-1" role="tabpanel">
        
                        <form action="/periksa-rapi-babi/{{$jana_rapi->id}}" method="POST">
                            @csrf
                
        
                            <div class="row">

                                <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                                <input type="hidden" name="pemeriksaan_id" value="{{$jana_rapi->id}}">

                                <div>
                                    <h4>Pemeriksaan Rapi: Perihal Haiwan</h4>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Warna</label>
                                    <input class="form-control" type="text" name="warna" onkeyup="this.value = this.value.toUpperCase();"  >
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Tanda Dikenalpasti</label>
                                    <input class="form-control" type="text"  name="tanda" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Yang Diperiksa</label>
                                    <input class="form-control" type="number" min="0" name="jumlah_ternakan" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" >
                                </div>
        
                            </div>

                            <div class="row">

                                <div>
                                    <h4>Keputusan Klinikal:</h4>
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Diagnosis</label>
                                    <input class="form-control" type="text" name="diagnosis" onkeyup="this.value = this.value.toUpperCase();"  >
                                </div>
        
                                <div class="mb-3 col-md-3">
                                    <label for="">Suhu Badan <span>&#8451;</span></label>
                                    <input class="form-control" type="number"  name="suhu" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>
        
                            </div>

                            <div class="row">

                                <div>
                                    <h4>Penemuan:</h4>
                                </div>
        
                                <div class="input-group mb-3">
                                    <div class="">
                                        {{-- @if($periksa_rapi->jenis1)
                                      <input class="form-check-input mt-0" type="checkbox"  name="jenis1" value="{{$periksa_rapi->jenis1 ?? ''}}" aria-label="Checkbox for following text input" checked >
                                        @else()
                                      <input type="text"  name="jenis1" aria-label="Checkbox for following text input" >
                                      @endif --}}

                                    </div>
                                    <input type="text"  class="form-control text-black" aria-label="Text input with checkbox"
                                    value="Dibenarkan untuk disembelih dibawah pemeriksaan rapi." readonly >
                                </div>

                                <div class="input-group mb-3">
                                    {{-- <div class="">
                                        <input type="checkbox" value="2" aria-label="Checkbox for following text input" >
                                    </div> --}}
                                      <input type="text"  class="form-control text-black" aria-label="Text input with checkbox"
                                      value="Ditahan daripada disembelih." readonly >
                                </div>

                                <div class="input-group mb-3">
                                    {{-- <div class="">
                                        <input type="checkbox"  value="3" aria-label="Checkbox for following text input" >
                                      </div> --}}
                                      <input type="text" class="form-control text-black" aria-label="Text input with checkbox"
                                      value="Dikondem sebagai tidak layak untuk makanan manusia pada pemeriksaan ante mortem." readonly >
                                </div>
        
                            </div>
        
        
        
        
                            <!--Button-->
                            <div class="mb-3">
                                {{-- <a href="/jana-rapi-babi/{{$jana_rapi->id}}"><button value="jana" class="btn btn-secondary mx-3" type="button" style="float: right">Jana</button></a> --}}
                                <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                            </div>
        
                        </form>

                        <br><br>

                        {{-- Jadual --}}
                        <div class="container-fluid">
                            <div class="card" style="border-width: 1px; border-color:black;">
    
                                <div class="card-body" >
                                  <u><h4 class="text-center ">Jadual Pemeriksaan Rapi </h4></u>
                                    <table class="table text-center" style="border-width: 10px; border-color:green;">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Warna</th>
                                            <th scope="col">Tanda Dikenalpasti</th>
                                            <th scope="col">Jumlah Ternakan Yang Diperiksa</th>
                                            <th scope="col">Diagnosis</th>
                                            <th scope="col">Suhu Badan</th>
                                            <th scope="col">Jana Borang</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                    
                                          <tr>
                                            @foreach ($periksa_rapis as $periksa_rapi)
                                            
                    
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$periksa_rapi->warna}}</td>
                                            <td>{{$periksa_rapi->tanda}}</td>
                                            <td>{{$periksa_rapi->jumlah_ternakan}}</td>
                                            <td>{{$periksa_rapi->diagnosis}}</td>
                                            <td>{{$periksa_rapi->suhu}}</td>
                                            <td><a href="/jana-rapi/{{$jana_rapi->id}}"><button value="jana" class="btn btn-secondary mx-3" type="button" style="float: right">Jana</button></a></td>
                                           
                                     
                                          </tr>
                                            @endforeach
                    
                                          {{-- <tr>
                                            <th scope="row">1</th>
                                            <td>5</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>Baik</td>
                                          </tr> --}}
                                          
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <button onclick="history.back()" class="btn btn-warning" >Kembali</button>
                        </div>

        
                    </div>
        
                   
                </div>
            </div>

        </div>
    </div>
</main>
    
   
@endsection

@section('script')


@endsection

