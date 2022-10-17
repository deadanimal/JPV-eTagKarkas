@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Kategori Unggas
            </h1>
        </div>

        <div>
            <div>
                <div class="row mb-3">
                    <div class="col">
                        <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-secondary">Pemeriksaan Daging- Daftar Unggas</a>
                                </li>
                                <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700"
                                    aria-current="page">
                                    
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <hr class="text-primary mb-3">
   
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pengenalan Ternakan > Daftar Baharu Unggas</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Ladang</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="Farm A">Farm A</option>
                                        <option value="Farm B">Farm B</option>
                                        <option value="Farm C">Farm C</option>
                                      </select>                               
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">No Kenderaan</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">ID Ladang</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat Ladang</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Tarikh Terima Ternakan </label>
                                    <input type="text" >
                                </div>
    
                            </div>
    
                            </div>
    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Kemaskini</button>
                                <button class=“btn btn-primary” type=“submit”>Simpan</button>
                            </div>
    
                    </div>
                </form>
            </div>
            
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Ternakan > Maklumat Unggas</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan Yang Diterima</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="Farm A">Farm A</option>
                                        <option value="Farm B">Farm B</option>
                                        <option value="Farm C">Farm C</option>
                                      </select>                               
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Yang Mati Semasa Tiba(D0A)</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Ternakan Mati Sebelum Sembelih(DBS)</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Runt(AM + PM)</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Salah Sembelih </label>
                                    <input type="text" >
                                </div>
    
                            </div>
    
                            </div>
    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Kemaskini</button>
                                <button class=“btn btn-primary” type=“submit”>Simpan</button>
                            </div>
    
                    </div>
                </form>
            </div>
            
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Daging > Pemeriksaan Ante Mortem</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">General Condition</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">Respiratory System</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">CNS Symptoms</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">Gastrointestinal Tract System</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Kemaskini</button>
                                <button class=“btn btn-primary” type=“submit”>Simpan</button>
                            </div>
    
                    </div>
                </form>
            </div>
            
        </div>


        <div class="container-fluid">
            <div class="col-md-12">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Pemeriksaan Daging > Pemeriksaan Post Mortem</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bukan Lesi Semasa Post Mortem</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">Lesi Semasa Post Mortem</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected>Carcass</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>

                                      <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected>Abcess</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

                                <div class="mb-3 col-md-3">
                                    <label for="">Gastrointestinal Tract System</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Kes</label>
                                    <input type="number" >
                                </div>

                                <div class="mb-3 col-md-3">
                                   <button>Tambah</button>
                                </div>  

                                <hr class="text-primary mb-3">

    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Kemaskini</button>
                                <button class=“btn btn-primary” type=“submit”>Simpan</button>
                            </div>
                    </div>
                </form>
            </div>
            
        </div>


    </div>



</main>

@endsection

@section('script')


@endsection