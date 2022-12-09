@extends('layouts.empty')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>


    
    {{-- CSS style --}}
    <style>
        .ts{
            font-size: xx-small
        }
        .jpv{
            font-size: large
        }
    </style>

    <style>
        .bawah{
            border-bottom: 7px solid blueviolet;
            border-style: solid
            border-color: black
        }
    </style>

    <style> 
    .div1 {
      border: 2px solid;
      padding: 2px; 
      width: 1500px;
      resize: both;
      overflow: auto;
     
    }
    </style>
    

<style>
    @media print {
    .pb { page-break-inside: avoid; } /* page-break-after works, as well */
}
</style>

@section('content')

    @if ($tag->jenis_ternakan == 'Ruminan Besar')
        @php
            $y = 4;
        @endphp
    @else
        @php
            $y = 2;
        @endphp
    @endif

    {{-- <a href="/jana-tag/{{$tag->id}}"><button value="jana" class="btn btn-secondary" type="button" style="float: right">Jana</button></a> --}}

    <div class="card div1" id="jana-tag" style="padding-left:30px;">
        
        @for ($x = 1; $x <= $y; $x++)
            <div class="row" style="padding-top:10px; padding-left:10px;">
                @for ($i = 1; $i < $tag->bil_ternakan_sah_ketua + 1; $i++)
                    <div class="row bawah pb" style="border-style: solid; padding-top:50px; margin-bottom:100px; width:70%">

                        {{-- KATEGORI TAG --}}
                        <div class="column" style="width:12%;">
                            <h5 class="card-text mb-0" style="font-size: 70px; color:blueviolet">{{ $tag->rumah_sembelih->kategori }}</h5>
                        </div>

                        {{-- LOGO --}}
                        <div class="column" style="width:12%;">
                            <img src="{{url('/img/Veterinar-Logo.png')}}" style="width: 80px;height:80px;">
                        </div>
                        

                        {{-- BARCODE --}}
                        <div class="column" style="width:40%;">
                            <h5 class="card-text mb-0 jpv" style="display: inline">JABATAN PERKHIDMATAN VETERINAR</h5>
                            <p class="card-text mb-0">TELAH DIPERIKSA</p>
                            {{-- {!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR') !!} --}}
                            {!! '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode";/>' !!}
                            <h6>R{{ $tag->rumah_sembelih->id . '-' . $date . '-' . sprintf('%03d', $i) }}</h6>
                            
                        </div>
                        
                        {{-- QR CODE --}}
                        <div class="column" style="width:15%;">
                            {!! QrCode::size(70)->backgroundColor(255, 255, 255)->generate('R' . $tag->rumah_sembelih->id . '-' . $date . '-' . sprintf('%03d', $i)) !!}
                            <div><p class="card-text ts" style="display: inline">TARIKH SEMBELIHAN:</p></div>
                        </div>
                      
                    </div>
                @endfor
            </div>
        @endfor
    </div>


<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">


<script>
    $(document).ready(function() {
        // printJS('jana-tag')
        window.print();
    });
</script>

    @endsection

