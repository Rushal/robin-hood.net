@extends('layouts.dashboard-layout')

@section('header-scripts')
    <script src="{{ asset('js/dashboard/Chart.bundle.min.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m8">
            <div class="card">
                <div class="card-header"> <span class="card-title secondary-color-text">Visitors </span> <span class="card-title soft-text"> / </span> <span class="card-title primary-color-text"> Sales</span> </div>
                <div class="divider"></div>
                <div class="card-content">
                    <canvas id="graph-lined" height="403" width="806" style="width: 806px; height: 403px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-header"> <span class="card-title cyan-text text-accent-4">New </span> <span class="card-title soft-text"> / </span> <span class="card-title amber-text text-darken-3"> Returning</span>
                    <p>Last 30 days</p>
                </div>
                <div class="divider"></div>
                <div class="card-content" style="padding:40px;">
                    <canvas id="graph-doughnut" width="332" height="332" style="width: 332px; height: 332px;">
                    </canvas></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card cyan accent-4 hoverable">
                <div class="card-content white-text">
                    <span class="card-title">5,000</span>
                    <p>Unique Chest Clicks/mo</p>
                    <canvas id="graph-bar4" height="87" width="263" style="width: 263px; height: 87px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card teal hoverable">
                <div class="card-content white-text">
                    <span class="card-title">2,500</span>
                    <p>Unique Ad Clicks/mo</p>
                    <canvas id="graph-bar3" height="87" width="263" style="width: 263px; height: 87px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card green darken-1 hoverable">
                <div class="card-content white-text">
                    <span class="card-title">$15,000</span>
                    <p>Balance remaining</p>
                    <canvas id="graph-bar2" height="87" width="263" style="width: 263px; height: 87px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card red lighten-1 hoverable">
                <div class="card-content white-text">
                    <span class="card-title">$25,000</span>
                    <p>Balance used</p>
                    <canvas id="graph-bar1" height="87" width="263" style="width: 263px; height: 87px;"></canvas>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('footer-scripts')
<script>
$(document).ready(function() {
    var randomScalingFactor = function () {
        return Math.round(Math.random() * 100)
    };
    var lineChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(99,129,143,0.2)",
                strokeColor: "rgba(99,129,143,1)",
                pointColor: "rgba(99,129,143,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(99,129,143,1)",
                data: [24, 37, 52, 45, 68, 72, 85]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(150,203,0,0.2)",
                strokeColor: "rgba(150,203,0,1)",
                pointColor: "rgba(150,203,0,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(150,203,0,1)",
                data: [31, 42, 58, 35, 60, 80, 95]
            }
        ]
    };

    var doughnutData = {
        labels: [
            "Red",
            "Green",
            "Yellow"
        ],
        datasets: [
            {
                data: [300, 50, 100],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ]
            }]
    };

    var barChartData1 = {
        labels: ["2010", "2011", "2012", "2013", "2014", "2015"],
        datasets: [
            {
                fillColor: "rgba(255,255,255,0.5)",
                strokeColor: "rgba(255,255,255,0.8)",
                highlightFill: "rgba(255,255,255,0.75)",
                highlightStroke: "rgba(255,255,255,1)",
                data: [380, 900, 1600, 2300, 4000, 4800]
            }
        ]

    };

    var barChartData2 = {
        labels: ["1", "2", "3", "4", "5", "6"],
        datasets: [
            {
                fillColor: "rgba(255,255,255,0.5)",
                strokeColor: "rgba(255,255,255,0.8)",
                highlightFill: "rgba(255,255,255,0.75)",
                highlightStroke: "rgba(255,255,255,1)",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }
        ]

    };

    var barChartData3 = {
        labels: ["1", "2", "3", "4", "5", "6"],
        datasets: [
            {
                fillColor: "rgba(255,255,255,0.5)",
                strokeColor: "rgba(255,255,255,0.8)",
                highlightFill: "rgba(255,255,255,0.75)",
                highlightStroke: "rgba(255,255,255,1)",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }
        ]

    };

    var barChartData4 = {
        labels: ["1", "2", "3", "4", "5", "6"],
        datasets: [
            {
                fillColor: "rgba(255,255,255,0.5)",
                strokeColor: "rgba(255,255,255,0.8)",
                highlightFill: "rgba(255,255,255,0.75)",
                highlightStroke: "rgba(255,255,255,1)",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }
        ]

    };

    window.onload = function () {
        /* Display Graphs and Counting with delay */
        setTimeout(function () {
            var ctx1 = document.getElementById("graph-lined").getContext("2d");
            window.myLine = new Chart(ctx1, {
                type: "line",
                data: lineChartData
            });

            var ctx2 = document.getElementById("graph-doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx2, {
                type: "doughnut",
                data: doughnutData
            });

            var ctxB1 = document.getElementById("graph-bar1").getContext("2d");
            window.myBar1 = new Chart(ctxB1, {
                type: "bar",
                data: barChartData1,
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            categoryPercentage: 0.9
                        }],
                        yAxes: [{
                            display: false
                        }]
                    }
                }
            });

            var ctxB2 = document.getElementById("graph-bar2").getContext("2d");
            window.myBar2 = new Chart(ctxB2, {
                type: "bar",
                data: barChartData2,
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            categoryPercentage: 0.9
                        }],
                        yAxes: [{
                            display: false
                        }]
                    }
                }
            });

            var ctxB3 = document.getElementById("graph-bar3").getContext("2d");
            window.myBar3 = new Chart(ctxB3, {
                type: "bar",
                data: barChartData3,
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            categoryPercentage: 0.9
                        }],
                        yAxes: [{
                            display: false
                        }]
                    }
                }
            });

            var ctxB4 = document.getElementById("graph-bar4").getContext("2d");
            window.myBar4 = new Chart(ctxB4, {
                type: "bar",
                data: barChartData4,
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            categoryPercentage: 0.9
                        }],
                        yAxes: [{
                            display: false
                        }]
                    }
                }
            });
        }, 200);
    };
});
</script>
@endsection