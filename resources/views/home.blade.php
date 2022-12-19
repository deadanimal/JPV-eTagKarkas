@extends('layouts.app')



@section('content')

<main class="content">

    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Paparan Utama
            </h1>
        </div>

        <div class="card">
            <div class="card-header">
                <b></b>
            </div>

          <div class="card-body">
            <div class="mb-7 row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body border border-danger">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Jumlah Pelawat Hari Ini</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3">{{$pelawat}}</h1>
                            <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
                                Lebih pelawat dari semalam
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border border-dark">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Jumlah Premis</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="home"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3">{{$jumlah_premis}}</h1>
                            {{-- <div class="mb-0">
                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                Less orders than usual
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body border border-success">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Jumlah Pemeriksaan Daging</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="clipboard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3">{{$daging}}</h1>
                            <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
                                Lebih pemeriksaan dari semalam
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border border-warning">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Jumlah Ujian Pensampelan</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle" data-feather="thermometer"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3">{{$sampel}}</h1>
                           
                        </div>
                    </div>
                </div>
                
                
            </div>

            <div class="row">
                
                    <div class="col-12 col-lg-6">
                        <div class="card border border-dark">
                            <div class="card-header">
                                <h5 class="card-title">Carta Pai Ternakan</h5>
                                {{-- <h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6> --}}
                            </div>
                            <div class="card-body">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-pie"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-12 col-lg-6">
                        <div class="card border border-dark">
                            <div class="card-header">
                                <h5 class="card-title">Jumlah Permohonan Bulanan </h5>
                                {{-- <h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as vertical bars.</h6> --}}
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="chartjs-bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- calendar --}}
                    <div class="card border border-danger">
						<div class="card-header">
							<h5 class="card-title">Acara Kalendar</h5>
							{{-- <h6 class="card-subtitle text-muted">Open source JavaScript jQuery plugin for a full-sized, drag & drop event calendar.</h6> --}}
						</div>
						<div class="card-body">
							<div id="fullcalendar"></div>
						</div>
					</div>

                
            </div>

          </div>

           
        </div>


    </div>



</main>

@endsection

@section('script')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-pie"), {
            type: "pie",
            data: {
                labels: ["Ruminan Besar", "Ruminan Besar","Babi","Ayam/Itik"],
                datasets: [{
                    data: [260, 125, 54, 146],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger,
                        "#E8EAED"
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                }
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-bar"), {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Last year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }, {
                    label: "This year",
                    backgroundColor: "#E8EAED",
                    borderColor: "#E8EAED",
                    hoverBackgroundColor: "#E8EAED",
                    hoverBorderColor: "#E8EAED",
                    data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>

<script>
		document.addEventListener("DOMContentLoaded", function() {
			var calendarEl = document.getElementById('fullcalendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
				themeSystem: 'bootstrap',
				initialView: 'dayGridMonth',
				initialDate: '2022-12-07',
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay'
				},
				events: [{
						title: 'All Day Event',
						start: '2022-12-01'
					},
					{
						title: 'Long Event',
						start: '2022-12-07',
						end: '2022-12-10'
					},
					{
						groupId: '999',
						title: 'Repeating Event',
						start: '2022-12-09T16:00:00'
					},
					{
						groupId: '999',
						title: 'Repeating Event',
						start: '2022-12-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2022-12-11',
						end: '2022-12-13'
					},
					{
						title: 'Meeting',
						start: '2022-12-12T10:30:00',
						end: '2022-12-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2022-12-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2022-12-12T14:30:00'
					},
					{
						title: 'Birthday Party',
						start: '2022-12-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2022-12-28'
					}
				]
			});
			setTimeout(function() {
				calendar.render();
			}, 250)
		});
	</script>



@endsection