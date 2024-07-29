@extends('app')

@section('content')

    <div class="container flex w-full">
        <div style="width:1500px;">
            <canvas id="myChart"></canvas>
        </div>

        <div style="width:1500px; ">
            <canvas id="myLineChart"></canvas>
        </div>


    </div>
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Bar Chart
        const ctx = document.getElementById('myChart').getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['DGX', 'DVX Topdan', 'DVX Perakende'],
                datasets: [{
                    label: '# Products',
                    backgroundColor: [
                        'rgb(3, 53, 252)',
                        'rgb(255,0,0)',
                        'rgb(0, 255, 0)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 206, 86)'
                    ],
                    data: [12, 11, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Line Chart
        const lineCtx = document.getElementById('myLineChart').getContext('2d');

        var lineData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'DGX Sales Data',
                data: [12, 19, 3, 5, 2, 12],
                fill: false,
                borderColor: 'rgb(235, 252, 3)',
                tension: 0.1
            }]
        };

        var lineOptions = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var myLineChart = new Chart(lineCtx, {
            type: 'line',
            data: lineData,
            options: lineOptions
        });
    </script>
@endsection
