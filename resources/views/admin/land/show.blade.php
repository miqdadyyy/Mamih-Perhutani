@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Grafik Hasil Perhitungan</h4>
                        <div class="card-header-action">
                            {{--<a href="#" class="btn active">Week</a>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart2" height="180"></canvas>
                        <div class="statistic-details mt-1">
                            @foreach($calculation_result->value as $index => $value)
                                <div class="statistic-details-item">
                                    <div class="detail-value">{{ $value * 100 }}%</div>
                                    <div class="detail-name">{{ ucfirst($index) }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Hasil Penghitungan</h4>
                        <div class="card-header-action">
                            {{--<a href="#" class="btn active">Week</a>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Tanah yang telah diukur oleh <b>{{ $land->user->name }}</b> memberikan hasil sebagai berikut : </p>
                        <table class="table table-striped table-md">
                            <tr>
                                <td>PH</td>
                                <td>:</td>
                                <td>{{ $land->ph }}</td>
                            </tr>
                            <tr>
                                <td>Suhu</td>
                                <td>:</td>
                                <td>{{ $land->temperature }}<sup>o</sup>C</td>
                            </tr>
                            <tr>
                                <td>Kelembaban</td>
                                <td>:</td>
                                <td>{{ $land->humidity }}</td>
                            </tr>
                            <tr>
                                <td>Oksygen</td>
                                <td>:</td>
                                <td>{{ $land->oksygen }}%</td>
                            </tr>
                            <tr>
                                <td>Jenis Tanah </td>
                                <td>:</td>
                                <td>{{ \App\Texture::find($land->texture)->particle }}</td>
                            </tr>
                        </table>
                        <p>Sehingga hasil kecocokan antara tanah yang diukur dengan tanaman <strong>{{ $land->plant->name }}</strong> yaitu : </p>
                        <h4>{{ $calculation_result->result * 100 }}% ({{ $calculation_result->status }})</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Saran Tanaman</h4>
                        <div class="card-header-action">
                            {{--<a href="#" class="btn active">Week</a>--}}
                        </div>
                    </div>
                    <div class="card-body col-md-12">
                        <p>Selain tanaman diatas, berikut merupakan saran tanaman yang dapat ditanam pada lahan yang dihitung : </p>
                        <table class="table table-striped table-md">
                            <thead>
                            <tr>
                                <th>Tanaman</th>
                                <th>Probabilitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suggestion_result as $key => $result)
                                @php($result = (object)$result)
                                <tr>
                                    <td>{{ $result->plant->name }}</td>
                                    <td>{{ $result->result * 100 }} %</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Grafik Saran Tanaman</h4>
                        <div class="card-header-action">
                            {{--<a href="#" class="btn active">Week</a>--}}
                        </div>
                    </div>
                    <div class="card-body col-md-12">
                        <div class="col-md-12">
                            <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class="">

                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="chart-2" height="328" style="display: block; width: 547px; height: 328px;" width="547" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('dashboard-assets/modules/js/Chart.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            var ctx = document.getElementById("myChart2").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["PH", "Suhu", "Kelembaban", "Kadar Oksigen"],
                    datasets: [{
                        label: 'Tanaman {{ $calculation_result->plant->name }}',
                        data: {{ json_encode($graph_plant) }},
                        borderWidth: 2,
                        backgroundColor: 'rgba(254,86,83,.7)',
                        borderColor: 'rgba(254,86,83,.7)',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#ffffff',
                        pointRadius: 4
                    },
                        {
                            label: 'Hasil Pengukuran',
                            data: {{ json_encode($graph_land) }},
                            borderWidth: 2,
                            backgroundColor: 'rgba(63,82,227,.8)',
                            borderColor: 'transparent',
                            borderWidth: 0,
                            pointBackgroundColor: '#999',
                            pointRadius: 4
                        }
                    ]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                drawBorder: false,
                                color: '#f2f2f2',
                            },
                            ticks: {
                                beginAtZero: true,
                                stepSize: 150
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                display: false
                            }
                        }]
                    },
                }
            });
        });
    </script>

    <script>
        var ctx = document.getElementById("chart-2").getContext('2d');
        var p = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($graph_suggest_name) !!},
                datasets: [{
                    label: 'Statistics',
                    data: {{ json_encode($graph_suggest_value) }},
                    borderWidth: 2,
                    backgroundColor: 'rgba(63,82,227,.8)',
                    borderWidth: 0,
                    borderColor: 'transparent',
                    pointBorderWidth: 0,
                    pointRadius: 3.5,
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 200,
                            callback: function(value, index, values) {
                                return value + '%';
                            }
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            tickMarkLength: 15,
                        }
                    }]
                },
            }
        });
    </script>
@endsection