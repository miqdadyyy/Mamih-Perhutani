@extends('admin.layouts.app')

@section('title', 'Home')

@section('css')

@endsection

@section('content')
    <!-- sales report area start -->
    <section class="section">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Mandor</h4>
                        </div>
                        <div class="card-body">
                            {{ \App\User::where('role_id', 2)->count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Tanaman</h4>
                        </div>
                        <div class="card-body">
                            {{ \App\Plant::count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Laporan Tanah</h4>
                        </div>
                        <div class="card-body">
                            {{ \App\Land::count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Laporan Terakhir</h4>
                        </div>
                        <div class="card-body">
                            {{ \App\Land::orderBy('created_at', 'desc')->first()->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistics Pengukuran Seminggu Terakhir</h4>
                        <div class="card-header-action">

                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" height="182"></canvas>
                        <div class="statistic-details mt-sm-4">
                            <div class="statistic-details-item">
                                <div class="detail-value">{{ $lands->count() }}</div>
                                <div class="detail-name">Pengukuran Seminggu Terakhir</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Activities</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            @foreach($lands as $land)
                                <a href="{{ route('admin.land.show', $land) }}" style="text-decoration: none">
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="float-right text-primary">{{ $land->created_at->diffForHumans() }}</div>
                                            <div class="media-title">{{ $land->user->name }}</div>
                                            <span class="text-muted">Melakukan pengecekan tanah di blok <b>{{ $land->blok }}</b></span>
                                        </div>
                                    </li>
                                </a>
                                <br>
                            @endforeach
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="{{ route('admin.land.index') }}" class="btn btn-primary btn-lg btn-round">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('js')
    <script src="{{ asset('dashboard-assets/modules/js/Chart.min.js') }}"></script>
    <script>
        var statistics_chart = document.getElementById("myChart").getContext('2d');

        var myChart = new Chart(statistics_chart, {
            type: 'line',
            data: {
                labels: {!! json_encode($days_fix) !!},
                datasets: [{
                    label: 'Statistics Pengukuran',
                    data: {!! json_encode($val_fix) !!},
                    borderWidth: 5,
                    borderColor: '#6777ef',
                    backgroundColor: 'transparent',
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#6777ef',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 150
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#fbfbfb',
                            lineWidth: 2
                        }
                    }]
                },
            }
        });
    </script>
@endsection