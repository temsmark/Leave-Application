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
            <div class="col-md-4 col-lg-4">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-question-circle fa-3x"></i>
                    <div class="info">
                        <a href="#" class="link">  <h4>All Leave Requests</h4>
                            <p><b>{{count($allrequest)}}</b></p>
                        </a>
                    </div>
                </div>


                <div class="widget-small info coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
                    <div class="info">
                        <h4>Pending Requests</h4>
                        <p><b>{{count($request)}}</b></p>
                    </div>
                </div>


                <div class="widget-small info coloured-icon"><i class="icon fa fa-user fa-3x"></i>
                    <div class="info">
                        <h4>My Profile</h4>
                        <p><b>Name:</b> {{Auth::User()->f_name.' '.Auth::User()->l_name}}</p>
                        <p><b>Email:</b> {{Auth::User()->email}}</p>
                        <p><b>Department:</b> {{Auth::User()->Department['department_name']}}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">

                <div class="tile">
                    <div class="tile-title-w-btn">
                        <h3 class="title">Recent Requests</h3>
                        <p><span >{{$reasons->render()}}</span></p>
                    </div>
                    <div class="tile-body">
                        @if(count($reasons)<=0)
                            <div class="alert alert-success">
                                <strong><i class="text-center" style="font-size: 5em">Sorry!</i> <br>&nbsp;You should haven't requested for any leave yet</strong> </a>.
                            </div>
                        @else

                            @foreach($reasons as $reason)
                                <div>
                                    <b>{{$reason->Leave->leave_name}} &nbsp;<span class="badge-pill badge-info small">Pending....</span></b><br>
                                    <p>
                                        {{$reason->reason}}
                                    </p>
                                    <h5 class="small">Created: {{$reason->created_at->diffForHumans()}}</h5>
                                    <h6 class="small"><span class="badge-success"> From: {{$reason->from}}&nbsp;&nbsp; To: {{$reason->to}} &nbsp;&nbsp;No.Days: {{$reason->period}}</span></h6>
                                    {{--<p><a class="btn btn-primary icon-btn " href=""><i class="fa fa-plus"></i>Add Item	</a></p>--}}
                                    <hr>

                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

            </div>


            <div class="col-md-4 col-lg-4">

                <div class="tile">
                    <div class="tile-title-w-btn">
                        <h3 class="title">Leaves taken in department</h3>
                    </div>
                    <div class="tile-body">
                        <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
                    </div>
                </div>


                <div class="tile">
                    <h3 class="title">Leave Request Breakdown</h3>

                    <ul class="list-group">
                        @foreach($breakdown as $history)

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$history->Leave->leave_name}}
                                <span class="badge badge-primary badge-pill">{{$history->total}} Times</span>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>

        </div>


    </main>
@stop
@section('script')
    <script src="{{asset("js/chart.js")}}"></script>
    <script type="text/javascript">

        function renderChart(data, labels) {
            var ctx = $("#pieChartDemo").get(0).getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(192, 0, 0, 1)'],
                        backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(192, 0, 0, 0.2)'],

                        data: data,
                    }]
                },    options: {
                    title: {
                        display: true,
                        text: "Departmental Leave Comparison"
                    }
                }
            });
        }

        $(document).ready(function () {


                axios.get('user/api').then(function(res){
                    var labels =[res.data.mine] ;
                    var data=[res.data.others];

                    // var labels=[0];
                    // var data=[1];
                    renderChart(data,labels);


                });


            }
        );
    </script>
@stop