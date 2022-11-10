@extends('layouts.empty')


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

    <div class="card" id="jana-tag" style="padding-left:30px;">
        @for ($x = 1; $x <= $y; $x++)
            <div class="row" style="padding-top:10px; padding-left:10px;">
                @for ($i = 1; $i < $tag->bil_ternakan_sah_ketua + 1; $i++)
                    <div class="row" style="border-style: solid; border-color: black; padding-top:10px; margin-bottom:10px; width:80%">
                        <div class="column" style="width:12%;">
                            <img src="/img/Veterinar-Logo.png" style="width: 50px;height:50px;">
                        </div>
                    
                        <div class="column" style="width:20%;">
                            <h5 class="card-title mb-0">Jabatan Perkhidmatan Veterinar</h5>
                        </div>
                        
                        <div class="column" style="width:15%;">
                            {!! QrCode::size(100)->backgroundColor(255, 255, 255)->generate('R' . $tag->rumah_sembelih->id . '-' . $date . '-' . sprintf('%03d', $i)) !!}
                            <h6>R{{ $tag->rumah_sembelih->id . '-' . $date . '-' . sprintf('%03d', $i) }}</h6>
                        </div>

                        <div class="column"style="width:15%;">
                            <p class="card-text">Tarikh Sembelih:</p>
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

