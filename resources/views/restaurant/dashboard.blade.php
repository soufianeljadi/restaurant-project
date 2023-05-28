@extends('restaurant.master')
@section('restaurant')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">

                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-calendar-check-o"></i>
                            </div>
                            <div class="mr-5">
                                <h5>{{ $reservationCount }} Reservation !</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('restaurant.reservations') }}">
                            <span class="float-left">Voir les détails</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-calendar-check-o"></i>
                            </div>
                            <div class="mr-5">
                                <h5>{{ $tableCount }} Tables !</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('restaurant.tables') }}">
                            <span class="float-left">Voir les détails</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-area-chart"></i> Graphique presente nombre de reservation par jour</div>
                <div >
                    <canvas id="reservationChart" width="80%" height="20%"></canvas>
                </div>
                {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
            </div>
        </div>

        <script>
            // Retrieve the chart labels and data from the PHP variables
            var chartLabels = JSON.parse('{!! $chartLabels !!}');
            var chartData = JSON.parse('{!! $chartData !!}');

            // Create the area chart
            var ctx = document.getElementById('reservationChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: chartLabels,
                    datasets: [{
                        label: 'Reservations',
                        data: chartData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Area fill color
                        borderColor: 'rgba(75, 192, 192, 1)', // Line color
                        borderWidth: 2,
                        tension: 0.2 // Controls the curve of the line
                    }]
                },
                options: {
                    scales: {
                        y: [{
                            ticks: {
                                min: 0, // Set the minimum value to 0
                                stepSize: 5, // Step size between ticks
                                max: 50 // Set the maximum value to 50
                            }
                        }]
                    }
                }
            });
        </script>









@endsection
