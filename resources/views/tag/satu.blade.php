@extends('layouts.app')



@section('content')

<div>
    <div>
        <div class="row mb-3">
            <div class="col">
                <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-secondary">Permohonan Tag Karkas</a>
                        </li>
                        <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                            Daftar Tag Karkas
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <hr class="text-primary mb-3">
        
        
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-oranje-jkr">
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
                            <input class="form-control" type="text" autocapitalize="off" name="bil_ternakan" value="" readonly  />
                        </div>
                    </div>
                    {{-- Bilangan Kod Bar Untuk Dijana --}}
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Bilangan Kod Bar Untuk Dijana</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_kod" placeholder="16" value="" readonly  />
                        </div>
                    </div>
                     {{-- Pengesyoran Kuantiti --}}
                     <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pengesyoran Kuantiti</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" autocapitalize="off" name="bil_kod" placeholder="16" value="" readonly  />
                        </div>
                    </div>

                    <!--Cetakan Kod Bar-->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Cetakan Kod Bar</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" autocapitalize="off" name="cetakan" value="" readonly   />
                    </div>
                    </div>         
                            
                    <!--Button-->
                    <div align="right">
                        <button class=“btn btn-primary” type=“submit”>Simpan/Tolak</button>
                        <button class=“btn btn-primary” type=“submit”>Hantar/Lulus</button>
                    </div>
        
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection