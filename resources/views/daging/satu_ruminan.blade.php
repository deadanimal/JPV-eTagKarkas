@extends('layouts.app')

@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Kategori Ruminan
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
                                    <a href="#" class="text-secondary">Pemeriksaan Daging- Daftar Ruminan</a>
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
                            <b>Pengenalan Ternakan > Daftar Baharu Haiwan Ternakan</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Kategori Ternakan</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">No SKV</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Tarikh Terima Ternakan</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Pemilik</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">No Kenderaan</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Tiba</label>
                                    <input type="text" placeholder="Lembu">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Masa Ternakan Disembelih</label>
                                    <input type="text" placeholder="12">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">No. Permit</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Spesis</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Ternakan (Mengikut SKV)</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">ID Premis</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Nama Premis</label>
                                    <input type="text">
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label for="">Alamat</label>
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
                                    <label for="">Bilangan Ternakan Yang Diterima</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Ternakan Yang Mati Semasa Tiba</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Yang Diperiksa</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Layak Untuk Disembelih</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Bilangan Diasingkan Untuk Pemeriksaan Rapi</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Binatang Disembelih Kerana Kecemasan</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Yang Disembelih</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Baki Ternakan Yang Belum Disembelih</label>
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
                            <b>Pemeriksaan Daging > Haiwan Ternakan > Pemeriksaan Rapi</b>
                        </div>
        
                       <div class="card-body">
    
                            <div class="row">

                                <h6>Pemeriksaan Rapi: Perihal Haiwan</h6>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Warna</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Tanda Dikenalpasti</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Yang Diperiksa</label>
                                    <input type="text">
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Jumlah Ternakan Layak Untuk Disembelih</label>
                                    <input type="text">
                                </div>
                               
                            </div>
    
                            <div class="row">

                                <h6>Keputusan Klinikal</h6>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Diagnosis</label>
                                    <input type="text" >
                                </div>
    
                                <div class="mb-3 col-md-3">
                                    <label for="">Suhu Badan</label>
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
                                <button class=“btn btn-primary” type=“submit”>Jana</button>
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
                            <b>Pemeriksaan Daging > Pemeriksaan Ante Mortem > Borang 1</b>
                        </div>
        
                       <div class="card-body">
    
                            
    
                            </div>
    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Jana Borang</button>
                                <button class=“btn btn-primary” type=“submit”>Kembali</button>
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
                            <b>Pemeriksaan Daging > Pemeriksaan Ante Mortem > Borang 2</b>
                        </div>
        
                       <div class="card-body">
    
                            
    
                            </div>
    
                            <!--Button-->
                            <div align="center">
                                <button class=“btn btn-primary” type=“submit”>Jana Borang</button>
                                <button class=“btn btn-primary” type=“submit”>Kembali</button>
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
                                    <label for="">Nombor Tag</label>
                                    <select class="form-select" aria-label="Default select example" name="nombor_tag">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      </select>                                
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

        <div class="container-fluid">
            <div class="col-md-12">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <b>Catatan Penggunaan Tag Karkas</b>
                        </div>
        
                       <div class="card-body">

                        <div class="row d-flex justify-content-center">
                            <table class="table table-bordered">
                                <thead class="text-black ">
                                    <tr>
                                        <th>Bil.</th>
                                        <th scope="col">No. Tag</th>
                                        <th scope="col">Jantina</th>
                                        <th scope="col">Baka</th>
                                        <th scope="col">Tarikh Disembelih</th>
                                        <th scope="col">Penggunaan Tag Karkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                
                                    <tr>
                
                                            <td>1</td>
                                            <td>XXXX</td>
                                            <td>Betina</td>
                                            <td>XXXX</td>
                                            <td>20/7/2022</td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" name="ante_mortem">
                                                    <option selected></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                  </select>
                                            </td>
                
                                        {{-- Button edit & hapus --}}
                                       
                                    </tr>
                
 
                                </tbody>
                            </table>
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


    </div>



</main>

@endsection

@section('script')


@endsection