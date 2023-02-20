@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="content-head">
                    <canvas id="repartition-par-sexe" width="200" height="100"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    var ctx = document.getElementById('repartition-par-sexe').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: {!! json_encode($labels) !!},
                            datasets: [{
                                label: 'Repartition des candidats par sexe',
                                data: {!! json_encode($data) !!},
                                backgroundColor: [
                                    '#d1d1d1',
                                    '#063331',
                                ],
                                borderColor: [
                                    '#d1d1d1',
                                    '#063331',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>

@endsection 
