@extends('layouts.app')



@section('content')

<div>
    <div>
        
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-info text-black">
                    <b>Permohonan Tag Karkas</b>
                </div>
                <div class="card-body">
                        
                    <!--Nama Pengeluar-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Nama Pengeluar:</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" name="nama" value="{{$tag->rumah_sembelih->nama_rumah}}" readonly />
                    </div>
                    </div>
                    <!--Induk-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Induk:</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" name="induk" value="{{$tag->rumah_sembelih->induk}}" readonly  />
                    </div>
                    </div>
                    <!--Pejabat Pengeluar-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Pejabat Pengeluar:</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text"  name="nama_rumah" value="{{$tag->rumah_sembelih->nama_rumah}}" readonly    />
                    </div>
                    </div>
                    <!--Kategori Tag-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Kategori Tag</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text"  name="kategori" value="{{$tag->rumah_sembelih->kategori}}" readonly    />
                    </div>
                    </div>

                    @role('pentadbir')
                    <!--Jenis Ternakan-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Jenis Ternakan</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text"  name="jenis_ternakan" value="{{$tag->jenis_ternakan}}" readonly />
                    </div>
                    </div>
                    {{-- Bilangan Ternakan --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Bilangan Ternakan</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="bil_ternakan" value="{{$tag->bil_ternakan}}" readonly  />
                        </div>
                    </div>
                    {{-- Bilangan Kod Bar Untuk Dijana --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="bil_kodbar" value="{{$tag->bil_kodbar}}" readonly  />
                        </div>
                    </div>
                    @endrole

                    @role('pengurus-rumah-sembelih')
                   <form action="/tag/{{$tag->id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                     <!--Jenis Ternakan-->
                     <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Jenis Ternakan 1</label>
                    <div class="col-xl-10">
                        <select class="form-select" aria-label="Default select example" name="jenis_ternakan" value="{{ $tag->jenis_ternakan }}">
                            <option selected value="Ruminan Besar">Ruminan Besar</option>
                            <option value="Ruminan Kecil">Ruminan Kecil</option>
                            <option value="Ayam/Itik">Ayam/Itik</option>
                            <option value="Babi">Babi</option>
                        </select> 
                    </div>
                    </div>
                    {{-- Bilangan Ternakan --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Bilangan Ternakan Yang Disyorkan</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="bil_ternakan" value="{{ $tag->bil_ternakan }}"   />
                        </div>
                    </div>
                    {{-- Bilangan Kod Bar Untuk Dijana --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="bil_kodbar" value="{{ $tag->bil_kodbar }}"   />
                        </div>
                    </div>
                    @endrole

                    @role('pentadbir')
                     {{-- Pengesyoran Kuantiti --}}
                     <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Pengesyoran Kuantiti</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="pengesyoran_kuantiti"   />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Bilangan Pengesyoran Kod Bar</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="pengesyoran_kuantiti"   />
                        </div>
                    </div>
                    @endrole

                    @role('ketua-seksyen')
                    {{-- Pengesyoran Kuantiti --}}
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Pengesyoran Kuantiti</label>
                        <div class="col-xl-10">
                            <input class="form-control" type="text"  name="pengesyoran_kuantiti" value="{{ $tag->kuantiti }}" readonly  />
                        </div>
                    </div>
                     {{-- Catatan --}}
                     <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Catatan</label>
                    <div class="col-xl-10">
                        <textarea name="alamat" cols="93" rows="5" placeholder="Isi jika permohonan ditolak sahaja"></textarea>
                    </div>
                    </div>
                    @endrole

                    <!--Cetakan Kod Bar-->
                    <div class="mb-3 row">
                        <label class="col-xl-2 col-form-label">Cetakan Kod Bar</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text"  name="kod_bar" value="{{$tag->rumah_sembelih->kod_bar}}" readonly   />
                    </div>
                    </div>    
                    
                    
                            
                    <!--Button-->
                    @role('pengurus-rumah-sembelih')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        {{-- <a href="/tag" type="submit" class="btn btn-primary">Kemaskini</a> --}}
                        <button class="btn btn-primary" type="submit">Kemaskini</button>
                    </div>

                    </form>
                    @endrole

                   


                    @role('pentadbir')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="/tag" type="submit" class="btn btn-primary">Simpan</a>
                        <a href="/tag" type="submit" class="btn btn-success">Hantar</a>

                    </div>
                    @endrole

                    @role('ketua-seksyen')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="/tag" class="btn btn-danger">Tolak</a>
                        <a href="/tag" class="btn btn-success">Lulus</a>
                    </div>
                    @endrole
        
        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection