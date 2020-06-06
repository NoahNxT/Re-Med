@extends('layouts.app')

@section('content')
    <head>
        <title>Buy</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


    </head>
    <style>#wrapper {width: 60%;margin: 0 auto;}
        #wrapper .container {max-width: 100%; display: block;}</style>


    <body>
    <div class="container-fluid" >

        <div class="row">
            <div class="col" align="center">
                <div class="chart-container" style="position: relative; height:30vh; width:60vw;display: inline-grid;">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>



        <div id="wrapper" >
            <div class="container" >
                <br>
                <hr class="style1" style="width: 100%;">
                <br>
                <div class="row mt-5" >
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Chirurgische Maskers</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio1" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio1">Handschoenen Kort</label>
                        </div>
                        <select class="form-control" style="width: 30%;">
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Ontsmettings Alcohol +70%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Immonium 20%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Beademings Mondmasker 100%</label>
                        </div>                    </div>
                </div>
                <div class="row mt-5" >
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">FFP2 Masker        </label>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Ontsmettings Alcohol +90%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Immonium 50%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Beademings Neusbril</label>
                        </div>                    </div>
                </div>
                <div class="row mt-5" >
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Custom radio</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio1" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio1">Tyvecken</label>
                        </div>
                        <select class="form-control" style="width: 30%;">
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Ontsmettings Handgel +40%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Immonium 75%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Beschermings Schort</label>
                        </div>                    </div>
                </div>
                <div class="row mt-5" >
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Spat Maskers</label>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Ontsmettings Handgel +40%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Immonium 100%</label>
                        </div>                    </div>
                    <div class="col">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio" name="rdnProduct">
                            <label class="custom-control-label" for="customRadio">Brancard Beschermings Dekens</label>
                        </div>                    </div>
                </div>

                <br>
                <hr class="style1" style="width: 100%;">
                <br>
                <div class="row mt-5">
                    <div class="col">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">#</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            <button type="button" class="btn btn-primary ml-2">Buy Now</button>
                        </div>

                    </div>

                    <div class="col">

                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="custom-control custom-radio mr-2">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="rdnAutoBuy">
                                <label class="custom-control-label" for="customRadio2"><h3>Chirurgische Maskers ></h3></label>

                            </div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">€</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Price">
                            <button type="button" class="btn btn-primary ml-2">Auto Buy</button>
                        </div>
                    </div>
                    </div>
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
