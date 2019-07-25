@extends('layouts.master')

@section('content')
    <main class="app-content" >
        <div class="app-title" id="app">
            <div>
                <h1><i class="fa fa-dashboard"></i> Home</h1>
                {{--<p>Start a beautiful journey here</p>--}}
                <div >

                </div>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ul>
        </div>



        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <a href="#" class="link">  <h4>All Employees</h4>
                            <p><b>{{count($users)??''}}</b></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
                    <div class="info">
                        <a href="{{url('pending')}}" class="link">  <h4>Leave Requests</h4>
                        <p><b>{{count($requests)??''}}</b></p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                    <div class="info">
                        <a href="{{url('rejected')}}" class="link">   <h4>Declined</h4>
                        <p><b>{{count($declined)}}</b></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-calendar-o fa-3x"></i>
                    <div class="info">
                        <h4>{{date('D/m/Y')}}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="tile">
                    <h3 class="tile-title">On Leave Today</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="lineChartDemo2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="tile">
                    <h3 class="tile-title">Pending Applications</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="lineChartDemo22"></canvas>


                    </div>

                    <div class="widget-small primary coloured-icon mt-4"><i class="icon fa fa-hourglass-end fa-3x"></i>
                        <div class="info">
                            <a href="{{url('pending')}}" class="link">  <h4>View Pending Requests</h4>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
        <div class="row">


            <div class="col-md-6">
                <div class="tile">
                    {{--<h3 class="tile-title">Line Chart</h3>--}}
                    <h6 class="tile-title small">Frequency of leaves (no of applications vs Date){ Line Graph }</h6>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h6 class="tile-title small">Frequency of leaves (no of applications vs Date){ Bar Graph }</h6>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Reporting dates on employees</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    @if (count($leaves)<=0)
                        @else
                        <ul class="list-group">
                            <li class="list-group-item active"><h3 class="tile-title">Leave Types</h3></li>
                            <?php $i=1;?>
                            @foreach($leaves as $leave)
                                <li class="list-group-item">{{$i++}}&nbsp{{$leave->leave_name}}</li>
                            @endforeach
                        </ul>
                        {{$leaves->render()}}
                    @endif

                </div>
            </div>


            </div>

    </main>
@stop
@section('script')
    <script src="{{asset("js/chart.js")}}"></script>
    <script type="text/javascript">
        function renderChart(data, labels) {
            var ctx = $("#lineChartDemo").get(0).getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        borderColor: "#4ce9d7",
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        label: 'All Data',
                        data: data,
                    }]
                },
            });
            var ctx2 = $("#barChartDemo").get(0).getContext("2d");

            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        label: 'All Data',
                        data: data,
                    }]
                },
            });



        }

        function renderChart2(data, labels) {
            var ctx = $("#lineChartDemo22").get(0).getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        label: 'All Data',
                        data: data,
                    }]
                },
            });
        }

        function renderChart22(data, labels) {
            var ctx = $("#lineChartDemo2").get(0).getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        label: 'All Data',
                        data: data,
                    }]
                },
            });
        }

        function renderChart3(data, labels,colorArray) {
            var ctx = $("#radarChartDemo").get(0).getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        borderColor: colorArray,
                        backgroundColor: colorArray,
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        label: 'On leave Today',
                        data: data,
                    }]
                },
            });
        }

        $(document).ready(function () {

                axios.get('api/application').then(function(res){

                    var labels =res.data.map(x=>x.from) ;
                    var data=res.data.map(x=>x.total) ;
                    renderChart(data,labels);

                });

            axios.get('api/pending.blade.php').then(function(res){

                var labels =res.data.map(x=>x.from) ;
                var data=res.data.map(x=>x.total) ;
                renderChart2(data,labels);

            });
            axios.get('today').then(function(res){

                var labels =res.data.map(x=>x.from) ;
                var data=res.data.map(x=>x.total) ;
                renderChart22(data,labels);

            });

            axios.get('api/department').then(function(res){

                var labels =res.data.map(x=>x.to) ;
                var data=res.data.map(x=>x.total) ;
                var colorArray = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                    '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                    '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                    '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                    '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                    '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                    '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                    '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                    '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                    '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'];
                renderChart3(data,labels,colorArray);


            });


            }
        );
    </script>
@stop