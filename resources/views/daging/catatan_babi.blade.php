@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Catatan Pemeriksaan Ruminan 
            </h1>
        </div>

       <div class="container-fluid">
            <div class="card">
                <div class="card-body" >
                    <u><h4 class="text-center ">Catatan Senarai Ternakan </h4></u>
        
                    <form action="/catatan-babi" method="POST">
                        @csrf
        
                    <input type="hidden" name="rumah_sembelih_id" value="{{$user->rumah_sembelih_id}}">
                    <input type="hidden" name="pemeriksaan_id" value="{{$pemeriksaan->id}}">
        
                      <table class="table text-center" style="border-width: 10px; border-color:green;">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nombor Tag</th>
                              <th scope="col">Jantina</th>
                              <th scope="col">Baka</th>
                              <th scope="col">Tarikh Disembelih</th>
                            </tr>
                          </thead>
                          <tbody>
        
                            <tr>
                              <th scope="row">1</th>
                              <td><input type="text" name="tag" onkeyup="this.value = this.value.toUpperCase();" ></td>
                              <td><input type="text" name="jantina" onkeyup="this.value = this.value.toUpperCase();" onkeydown="return /[a-z]/i.test(event.key)" ></td>
                              <td><input type="text" name="baka" onkeyup="this.value = this.value.toUpperCase();" onkeydown="return /[a-z]/i.test(event.key)" ></td>
                              <td><input type="date" name="tarikh"></td>
                            </tr>

                           
                            
                          </tbody>

                        </table>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" style="float: right">Simpan</button>
                        </div>

                        <a href="/pemeriksaan" class="btn btn-warning">Kembali</a>
                    </form>
        
                    
                </div>
            </div>
       </div>


    </div>



</main>

@endsection

@section('script')


@endsection