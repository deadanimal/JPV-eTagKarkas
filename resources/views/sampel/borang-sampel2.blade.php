@extends('layouts.app')

<style>
    /* remove arrow in input number */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>



@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Borang Pensampelan GHV
                </h1>
            </div>

          






        </div>



    </main>
@endsection

@section('script')
    <script type="text/javascript">
        window.onload = function() {
            //Reference the DropDownList.
            var tahuns = document.getElementById("tahun");

            //Determine the Current Year.
            var currentYear = (new Date()).getFullYear();

            //Loop and add the Year values to DropDownList.
            for (var i = 1950; i <= currentYear; i++) {
                var option = document.createElement("OPTION");
                option.innerHTML = i;
                option.value = i;
                option.style.overflow = "auto";
                tahuns.appendChild(option);
            }
        };
    </script>
    <script src="/js/jquery.js"></script>

    <script>
        // $(document).ready(function() {
        //     $('select[name="premis"').on('change', function() {
        //         var premisId = $(this).val();
        //         if (premisId) {
        //             $.ajax({
        //                 url: "{{ url('/getkodpremis/') }}/" + premisId,
        //                 type: "Get",
        //                 datatype: "json",
        //                 success: function(data) {
        //                     console.log(data);
        //                     $("kod_premis").empty();
        //                     document.getElementById("kod_premis").value = data;
        //                 }
        //             });
        //         } else {
        //             $("kod_premis").empty();
        //         }
        //     })
        // });

        $(document).ready(function() {
            $('select[name="premis"').change(function() {
                var premisId = $('#rumah option:selected').attr('nicubatest');
                var rumah = @json($rumahs->toArray());

                rumah.forEach(e => {
                    if (premisId == e.id) {
                        $('#kod_premis').val(e.kod);
                    }
                });
            })
        });
    </script>
@endsection
