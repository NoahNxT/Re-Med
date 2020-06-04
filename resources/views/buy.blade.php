@extends('layouts.app')

@section('content')
    <head>
        <title>Buy</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    </head>




<body>
<div class="container-fluid" >
    <div class="row justify-content-center">

            <div class="chart-container" style="position: absolute; height:20vh; width:40vw">
                <canvas id="myChart"></canvas>
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
                    label: 'Prijs',
                    data: [5, 10, 15, 4, 9],
                    backgroundColor: 'transparent',
                    borderColor: '#b20000',
                    borderWidth: 5,
                    type:'line',
                },

                {
                label: 'Stock',
                data: [12, 19, 3, 10, 6],
                backgroundColor: '#4c4cff',
                borderWidth: 1
                }

            ]





        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        },


    }







    );


</script>


</body>
@endsection
