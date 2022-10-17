@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Kategori Babi
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
                                    <a href="#" class="text-secondary">Pemeriksaan Daging- Daftar Babi</a>
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
                            <b>Pengenalan Ternakan</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Nama Pemilik</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">No Kenderaan</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Masa Ternakan Tiba</label>
                                    <input type="text">
                                </div>  
                            </div>
    
                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Kod Ladang/ID Premis</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Bilangan Ternakan Yang Diterima </label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Ternakan Yang Mati Semasa Tiba</label>
                                    <input type="text" >
                                </div>
                               
                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Ternakan Diperiksa</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Bilangan Diasingkan Untuk Pemeriksaan Rapi </label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Binatang Disembelih Kerana Kecemasan</label>
                                    <input type="text" >
                                </div>
                               
                            </div>

                            <div class="row">

                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Binatang Yang Dikondem</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Jumlah Yang Disembelih </label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-4">
                                    <label for="">Baki Ternakan Belum Disembelih</label>
                                    <input type="text" >
                                </div>
                               
                            </div>
    
                            
    
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea name="catatan" cols="25" rows="5"></textarea>
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
                            <b>Pemeriksaan Daging > Maklumat Haiwan Ternakan</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat Ladang</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Negeri</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Daerah</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Nombor Telefon</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Pemilik</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">No Kenderaan</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Tiba</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Disembelih</label>
                                    <input type="text">
                                </div>
                               
                            </div>

                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">No. Permit</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jenis Ternakan</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Baka Ternakan </label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Diperiksa</label>
                                    <input type="text">
                                </div>
                               
                            </div>

                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bil. Ternakan Diterima</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Ternakan Mati Semasa Tiba</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Disembelih </label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Binatang Layak Disembelih</label>
                                    <input type="text">
                                </div>
                               
                            </div>

                            <div class="row">
    
                                <div class="mb-3 col-md-6">
                                    <label for="">Bil. Diasingkan Untuk Pemeriksaan Rapi</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-6">
                                    <label for=""> Baki Ternakan Belum Disembelih</label>
                                    <input type="text">
                                </div>
       
                            </div>
    
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea name="catatan" cols="25" rows="5"></textarea>
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
                                    <label for="">Penemuan Ante Mortem</label>
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
                                    <label for="">Nombor Tag</label>
                                    <select class="form-select" aria-label="Default select example" name="nombor_tag">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Catatan</label>
                                    <textarea name="catatan" cols="25" rows="5"></textarea>
                                </div>

                                <hr class="text-primary mb-3">

                               
                            </div>
    
                            </div>
    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Tambah</button>
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
                                    <label for="">Kategori</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Bahagian</label>
                                    <select class="form-select" aria-label="Default select example" name="bahagian">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label for="">Sebab Musnah</label>
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
                                    <label for="">Keputusan</label>
                                    <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>
                                </div>

                                <hr class="text-primary mb-3">

                               
                            </div>
    
                            </div>
    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Tambah</button>
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