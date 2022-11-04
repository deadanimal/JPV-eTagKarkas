@extends('layouts.empty')



@section('content')

@if($tag->jenis_ternakan == 'Ruminan Besar')
    @php($y=4)
@else
    @php($y=2)
@endif

<div class="row ">
    @for ($x = 1; $x <= $y; $x++)
        <div class="col">
            @for ($i = 1; $i < $tag->bil_ternakan_sah_ketua + 1; $i++)
            <div class="row-6">

                {{--  --}}
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <img src="/img/Veterinar-Logo.png" style="width: 50px;height:50px;" >

                            <h5 class="card-title mb-0">Jabatan Perkhidmatan Veterinar</h5>
                        </div>
                        <div class="card-body">
                            {!! QrCode::size(50)->backgroundColor(255,255,255)->generate('R'.$tag->rumah_sembelih->id.'-'.$date.'-'.sprintf('%03d',$i )) !!}
                            <h6>R{{ $tag->rumah_sembelih->id.'-'.$date.'-'.sprintf('%03d',$i ) }}</h6>     
                            <p class="card-text">Tarikh Sembelih:</p>     
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    @endfor

</div>
@endsection
