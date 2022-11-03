@extends('layouts.app')

@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Permohonan Tag Karkas
                </h1>

            </div>

            <div class="card">
                <div class="card-body">

                    <form action="/tag/{{ $tag->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--Nama Pengeluar-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Pengeluar:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="{{ $tag->rumah_sembelih->nama_rumah }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Induk-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Premis:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="{{ $tag->rumah_sembelih->induk }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Pejabat Pengeluar-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Premis:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="{{ $tag->rumah_sembelih->nama_rumah }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Kategori Tag-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kategori Tag</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="{{ $tag->rumah_sembelih->kategori }}"
                                    readonly />
                            </div>
                        </div>
                        <!--Jenis Ternakan-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jenis Ternakan</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" id="jenis_ternakan"
                                    name="jenis_ternakan" value="{{ $tag->jenis_ternakan }}"
                                    @if ($tag->status != 'Simpan') disabled @endif>
                                    <option value="Ruminan Besar" @if ($tag->jenis_ternakan == 'Ruminan Besar') selected @endif>Ruminan
                                        Besar</option>
                                    <option value="Ruminan Kecil" @if ($tag->jenis_ternakan == 'Ruminan Kecil') selected @endif>Ruminan
                                        Kecil</option>
                                    <option value="Ayam" @if ($tag->jenis_ternakan == 'Ayam') selected @endif>Ayam</option>
                                    <option value="Itik" @if ($tag->jenis_ternakan == 'Itik') selected @endif>Itik</option>
                                    <option value="Babi" @if ($tag->jenis_ternakan == 'Babi') selected @endif>Babi</option>
                                </select>
                            </div>

                        </div>

                        @role('pengurus-rumah-sembelih')

                        <div class="mb-3 row">
                            <div class="col-3">
                                <label class="form-label">Bilangan Ternakan</label>

                            </div>
                            <div class="col-3">
                                <input class="form-control" type="number" min=1 name="bil_ternakan" onchange="calculate2()"
                                    value="{{ $tag->bil_ternakan }}" id="bilangan_ternakan" onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                    @if ($tag->status != 'Simpan') readonly @endif />
                            </div>

                            <div class="col-3">
                                {{-- rename: Bilangan Kod Bar Untuk Dijana  --}}
                                <label class="form-label">Bilangan Pengesyoran Kodbar</label>
                            </div>
                                <div class="col-3">
                                    <input class="form-control" type="number" name="bil_kodbar" id="bil_kodbar"
                                        value="{{ $tag->bil_kodbar }}" readonly />
                                </div>
                            
                        </div>

                        
                        <div class="mb-3 row">
                            @if($tag->status == 'Lulus' )
                            <div class="col-3 ">
                                <label class="form-label">Pengesyoran Kuantiti</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="number" min=1 name="bil_ternakan" 
                                    value="{{ $tag->bil_ternakan_sah }}" id="bilangan_ternakan"
                                        readonly onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"/>
                            </div>
                            @endif

                            @if($tag->status == 'Lulus' )
                            <div class="col-3">
                                <label class="form-label">Bilangan Kodbar Untuk Dijana</label>
                            </div>
                                <div class="col-3">
                                <input class="form-control" type="number" min=1 name="bil_ternakan" 
                                    value="{{ $tag->bil_kodbar_sah }}" id="bilangan_ternakan"
                                    readonly />
                                </div>
                            @endif
                            
                            
                        </div>
                        
                        

                        @endrole

                        

                        @role('pentadbir')
                        {{-- Bilangan Ternakan --}}

                        <div class="mb-3 row">
                            <div class="col-3 ">
                                <label class="form-label">Bilangan Ternakan</label>
                            </div>
                                <div class="col-3">
                                    <input class="form-control" type="number" min=1 name="bil_ternakan" onchange="calculate2()"
                                        value="{{ $tag->bil_ternakan }}" id="bilangan_ternakan" 
                                        @if ($tag->status != 'Simpan') readonly @endif />
                                </div>
                            

                            <div class="col-3 ">
                                {{-- rename: Bilangan Kod Bar Untuk Dijana  --}}
                                <label class="form-label">Bilangan Pengesyoran Kodbar</label>
                            </div>
                                <div class="col-3">
                                    <input class="form-control" type="number" name="bil_kodbar" id="bil_kodbar"
                                        value="{{ $tag->bil_kodbar }}" readonly />
                                </div>
                        </div>

                        <div class="mb-3 row">

                            {{-- Pengesyoran Kuantiti --}}
                        @if ($tag->status != 'Simpan' || $tag->status != 'Sah' )
                        <div class="col-3">
                            <label class="form-label">Pengesyoran Kuantiti</label>
                        </div>
                            <div class="col-3">
                                <input class="form-control" type="number" placeholder="" @if ($tag->status == 'Sah' || $tag->status == 'Lulus' || $tag->status == 'Tolak') disabled @endif 
                                    value="{{$tag->bil_ternakan_sah}}" id="bil_ternakan_sah" onchange="calculate()" name="bil_ternakan_sah"  onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                    required oninvalid="this.setCustomValidity('Sila masukkan bilangan ternakan.')"
                                    oninput="this.setCustomValidity('')"/>
                            </div>                            
                        
                        @endif
                        
                        <div class="col-3">
                            {{-- rename: Bilangan Kod Bar Untuk Dijana  --}}
                            <label class="form-label">Bilangan Kodbar Untuk Dijana</label>
                        </div>
                            <div class="col-3">
                                <input class="form-control" type="number" name="bil_kodbar_sah" id="bil_kodbar_sah"
                                    value="{{ $tag->bil_kodbar_sah }}" readonly />
                            </div>
                        

                        </div>

                        @endrole

                        @role('ketua-seksyen')

                        <div class="mb-3 row">

                            @if($tag->status == 'Sah' || $tag->status == 'Lulus' )
                        <div class="col-3">
                            <label class="form-label">Bilangan Ternakan</label>
                        </div>
                        <div class="col-3">
                            <input class="form-control" type="number" min=1 name="bil_ternakan" 
                                value="{{ $tag->bil_ternakan }}" id="bilangan_ternakan"
                                    readonly />
                        </div>
                        
                        @endif

                        @if($tag->status == 'Sah' || $tag->status == 'Lulus' )
                        <div class="col-3 ">
                            <label class="form-label">Bilangan Pengesyoran Kodbar</label>
                        </div>
                        <div class="col-3">
                            <input class="form-control" type="number" min=1 name="bil_kodbar" 
                                value="{{ $tag->bil_kodbar }}" id="bilangan_ternakan"
                                    readonly />
                        </div>
                        
                        @endif

                        </div>

                        <div class="mb-3 row">

                        @if($tag->status == 'Sah' || $tag->status == 'Lulus' )
                        <div class="col-3">
                            <label class="form-label">Pengesyoran Kuantiti</label>
                        </div>
                        <div class="col-3">
                            <input class="form-control" type="number" min=1 name="bil_ternakan_sah" 
                                value="{{ $tag->bil_ternakan_sah }}" id="bil_ternakan_sah"
                                onkeyup="this.value=this.value.replace(/(?![0-9])./gmi,'')" onchange="calculate()"    />
                        </div>
                        
                        @endif

                        @if($tag->status == 'Sah' || $tag->status == 'Lulus' )
                        <div class="col-3">
                            <label class="form-label">Bilangan Kodbar Untuk Dijana</label>
                        </div>
                            <div class="col-3">
                                <input class="form-control" type="number" min=1 name="bil_kodbar_sah" 
                                    value="{{ $tag->bil_kodbar_sah }}" id="bil_kodbar_sah"
                                     readonly />
                            </div>
                        
                        @endif

                        </div>

                        
                        @endrole
                        

            
                        <!--Cetakan Kod Bar-->
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jana Tag</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" name="kodbar"
                                    @if ($tag->status != 'Simpan') disabled @endif>
                                    <option value="Manual" @if ($tag->kodbar == 'Manual') selected @endif>Manual
                                    </option>
                                    <option value="Auto" @if ($tag->kodbar == 'Auto') selected @endif>Auto</option>
                                </select>
                            </div>


                        </div>

                        {{-- Catatan --}}
                        @role('ketua-seksyen')
                        @if ($tag->status == 'Sah')
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Catatan</label>
                            <div class="col-sm-9">
                                <textarea placeholder="Isi jika tolak permohonan sahaja" class="form-control" name="catatan_tolak" cols="90" rows="5" >{{$tag->catatan_tolak}}</textarea>

                            </div>
                        </div>
                        @endif
                        @endrole

                        @role('ketua-seksyen')
                        @if ($tag->status == 'Tolak')
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Catatan</label>
                            <div class="col-sm-9">
                                <textarea placeholder="Isi jika tolak permohonan sahaja" class="form-control" name="catatan_tolak" cols="90" rows="5" readonly>{{$tag->catatan_tolak}}</textarea>

                            </div>
                        </div>
                        @endif
                        @endrole

                 

                </div>

                <!--Button-->
                @role('pengurus-rumah-sembelih')
                @if ($tag->status == 'Simpan')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                        <button class="btn btn-success" type="submit" name="submitbutton" value="Simpan">Hantar</button>
                        {{-- <button class="btn btn-success" type="submit" name="submitbutton" value="Hantar">Hantar</button> --}}
                    </div>
                @endif
                @if ($tag->status == 'Sah' || $tag->status == 'Lulus' || $tag->status == 'Hantar' )
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="/tag" class="btn btn-success" type="button">Kembali</a>
                </div>
                @endif
                @endrole

                @role('pentadbir')
                @if ($tag->status == 'Hantar' || $tag->status == 'Simpan')
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success " data-bs-toggle="modal"  data-bs-target="#exampleModal">
                        Sahkan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Adakah anda pasti untuk mengesahkan permohonan?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                            <button class="btn btn-success " type="submit" name="submitbutton" value="Sah">Ya</button>
                        </div>
                        </div>
                        </div>
                    </div>

                    {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                        <button class="btn btn-success" type="submit" name="submitbutton" value="Sah">Sahkan</button>
                    </div> --}}
                @endif 
                @if ($tag->status == 'Sah' )
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="/tag" class="btn btn-success" type="button">Kembali</a>
                </div>
                @endif 
                @if ($tag->status == 'Lulus' )
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="/tag" class="btn btn-success" type="button">Kembali</a>
                </div>
                @endif 
                @endrole
                
                @role('ketua-seksyen')
                @if ($tag->status == 'Sah')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                        <button class="btn btn-success" type="submit" name="submitbutton" value="Lulus">Lulus</button>
                        <button class="btn btn-danger" type="submit" name="submitbutton" value="Tolak">Tolak</button>                    
                    </div>
                @endif 
                @if ($tag->status == 'Lulus' || $tag->status == 'Tolak'  )
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="/tag" class="btn btn-success" type="button">Kembali</a>
                </div>
                @endif  
                @endrole   
                
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="/tag" class="btn btn-info">Kembali</a>
                </div>                 --}}
                </form>
            </div>
        </div>

        </div>
s


    </main>
@endsection

@section('script')
    <script type="text/javascript">
        function calculate() {
            var jenisTernakan = document.getElementById("jenis_ternakan").value;
            console.log(jenisTernakan);
            var bilanganTernakan = document.getElementById("bil_ternakan_sah").value;
            console.log(bilanganTernakan);
            if (jenisTernakan == 'Ruminan Besar') {
                document.getElementById("bil_kodbar_sah").value = bilanganTernakan * 4;
            } else {
                document.getElementById("bil_kodbar_sah").value = bilanganTernakan * 2;
            }
        }

        function calculate2() {
            var jenisTernakan = document.getElementById("jenis_ternakan").value;
            console.log(jenisTernakan);
            var bilanganTernakan = document.getElementById("bilangan_ternakan").value;
            console.log(bilanganTernakan);
            if (jenisTernakan == 'Ruminan Besar') {
                document.getElementById("bil_kodbar_sah").value = bilanganTernakan * 4;
            } else {
                document.getElementById("bil_kodbar_sah").value = bilanganTernakan * 2;
            }
        }        
    </script>
@endsection
