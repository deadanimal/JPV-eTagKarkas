@extends('layouts.empty')



@section('content')


    @for ($i = 1; $i < $tag->bil_kodbar_sah + 1; $i++)
    <div class="row px-6">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Jabatan Perkhidmatan Veterinar</h5>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('R'.$tag->rumah_sembelih->id.'-'.$date.'-'.sprintf('%03d',$i )) !!}
                    <h6>R{{ $tag->rumah_sembelih->id.'-'.$date.'-'.sprintf('%03d',$i ) }}</h6>     
                    <p class="card-text">Tarikh Sembelih:</p>     
                </div>
            </div>
        </div>

    </div>
    @endfor

@endsection
