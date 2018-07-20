@extends('layouts.master')
@section('footer')
    <script>
        new Chart(document.getElementById("bar-chart-grouped"), {
            type: 'bar',
            data: {
                labels: ["sales", "supplies", "employee payments"],
                datasets: [
                    {
                        label: "supplies",
                        backgroundColor: "#3e95cd",
                        data: [133,221,783]
                    }, {
                        label: "sales",
                        backgroundColor: "#8e5ea2",
                        data: [408,547,675]
                    }, {
                        label: "employee payments",
                        backgroundColor: "#8e5ea2",
                        data: [321,500,800]
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'LINE GRAPHS'
                }
            }
        });
    </script>
    <script>
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Predicted world population (millions) in 2050'
                }
            }
        });
    </script>
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">

                    <h4 class="page-title">STATISTICS</h4>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">


                        <h4 class="header-title m-t-0 m-b-30">Advanced Smil Animations</h4>

                        <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
                    </div>
                </div><!-- end col-->

                <div class="col-lg-6">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Simple line chart</h4>
                        <canvas id="pie-chart" width="800" height="450"></canvas>
                    </div>
                </div><!-- end col-->
            </div>
            <!-- end row -->
        </div>
    </div>


@endsection