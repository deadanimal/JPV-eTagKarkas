@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Pensampelan
            </h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="/img/ayam.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Loji Penyembelihan Ayam</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/Ayam" class="btn btn-primary" type="button">Pilih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/bnc.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Rumah Sembelih Ruminan Besar</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/Ruminan Besar" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/gns.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Rumah Sembelih Ruminan Kecil</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/Ruminan Kecil" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/babi.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Rumah Sembelih Babi</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/Babi" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/vhm1.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Loji VHM</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/VHM" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/organicfarm.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Ladang MyGAP/MYORGANIC</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/MyGAP" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/gvhp.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Loji GVHP</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/GVHP" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top"  src="/img/iat.png" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">IAT & PPIT</h5>
                    </div>
                    <div class="card-body">
                        <a href="/pensampelan/pilihan/IAT" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/pensampelan" class="btn btn-light" >Kembali</a>
            </div>



            

            
        </div>

          

      
       
        
    </div>
</main>

@endsection

@section('script')


@endsection