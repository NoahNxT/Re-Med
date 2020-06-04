@extends('layouts.app')

@section('content')
    <head>
        <title>Buy</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


    </head>



<body>
<div class="container-fluid" >

    <div class="row">
        <div class="col" align="center">
            <div class="chart-container" style="position: relative; height:30vh; width:60vw;display: inline-grid;">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <div class="row mt-5" align="right">
                <div class="col-2">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Chirurgische maskers</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Handschoenen Kort</label>
                    </div>
                    <select class="form-control" style="width: 15%;">
                        <option>XL</option>
                    </select>
                </div>
                <div class="col-2">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ontsmettings alcohol +70%</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Immonium +20%</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Beademings mondmasker 100%</label>
                    </div>
                </div>

    </div>

    <div class="row mt-5" align="right">
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">FFP2 Maskers</label>
            </div>
        </div>
        <div class="col-3">

        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ontsmettings alcohol +90%</label>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Immonium 50%</label>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Beademings neusbril</label>
            </div>
        </div>

    </div>

    <div class="row mt-5" align="right">
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Handschoenen Lang</label>
            </div>
            <select class="form-control" style="width: 15%;">
                <option>XL</option>
            </select>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ontsmettings handgel +40%</label>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Immonium 75%</label>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Beschermings schort</label>
            </div>
        </div>

    </div>

    <div class="row mt-5" align="right">
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Spat maskers</label>
            </div>
        </div>
        <div class="col-3">

        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ontsmettings handgel +50%</label>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Immonium 100%</label>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Brancard beschermlakens</label>
            </div>
        </div>

    </div>

</div>

<script>

    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['01/05', '02/05', '03/05', '04/05', '05/05'],




            datasets: [
                {
                    yAxisID: 'Prijs',
                    label: 'Prijs',
                    data: [5, 10, 15, 4, 9],
                    backgroundColor: 'transparent',
                    borderColor: '#b20000',
                    borderWidth: 5,
                    type:'line',
                },

                {
                    yAxisID: 'Stock',
                    label: 'Stock',
                    data: [12, 19, 3, 10, 6],
                    backgroundColor: '#4c4cff',
                    borderWidth: 1
                }

            ]


        },
        options: {
            title: {
                display: true,
                text: 'Chirurgische maskers'
            },
            scales: {
                yAxes: [
                    {

                        id: 'Prijs',
                        type: 'linear',
                        position: 'left',
                        ticks: {
                            beginAtZero: true,
                                },
                        gridLines: {
                            drawOnChartArea: false,
                                    },
                    },
                    {
                        id: 'Stock',
                        type: 'linear',
                        position: 'right',
                        ticks: {
                            beginAtZero: true,
                                },
                        gridLines: {
                            drawOnChartArea: false,
                        },
                    }],
                xAxes:[
                    {
                        gridLines: {
                            drawOnChartArea: false,
                        },
                    }
                ]
            }
        }


    });

</script>


</body>
@endsection
