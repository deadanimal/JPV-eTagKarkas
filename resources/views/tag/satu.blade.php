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
                        <label class="col-sm-2 col-form-label">Nama Pengeluar:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" value="{{$tag->rumah_sembelih->nama_rumah}}" readonly />
                    </div>
                    </div>
                    <!--Induk-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Induk:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="induk" value="" readonly  />
                    </div>
                    </div>
                    <!--Pejabat Pengeluar-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pejabat Pengeluar:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="pejabat" value="" readonly    />
                    </div>
                    </div>
                    <!--Kategori Tag-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Kategori Tag</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="tag" value="" readonly    />
                    </div>
                    </div>
                    <!--Jenis Ternakan-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Jenis Ternakan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="tag" value="" readonly />
                    </div>
                    </div>
                    {{-- Bilangan Ternakan --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Bilangan Ternakan</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_ternakan" value="4" readonly  />
                        </div>
                    </div>
                    {{-- Bilangan Kod Bar Untuk Dijana --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_kod" placeholder="16" value="" readonly  />
                        </div>
                    </div>

                    @role('pentadbir')
                     {{-- Pengesyoran Kuantiti --}}
                     <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pengesyoran Kuantiti</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_kod" value=""  />
                        </div>
                    </div>
                    {{-- Bilangan Pengesyoran Kod Bar --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Bilangan Pengesyoran Kod Bar</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_kod" value=""  />
                        </div>
                    </div>
                    @endrole

                    @role('ketua-seksyen')
                    {{-- Pengesyoran Kuantiti --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pengesyoran Kuantiti</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_kod" value=""  />
                        </div>
                    </div>
                    @endrole

                    <!--Cetakan Kod Bar-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Cetakan Kod Bar</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="cetakan" value="" readonly   />
                    </div>
                    </div>         
                            
                    <!--Button-->
                    @role('pentadbir')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-success" type="submit" >Simpan</button>
                        <button class="btn btn-success" type="submit" >Hantar</button>
                    </div>
                    @endrole

                    @role('ketua-seksyen')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-success" type="submit" >Tolak</button>
                        <button class="btn btn-success" type="submit" >Lulus</button>
                    </div>
                    @endrole
        
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection