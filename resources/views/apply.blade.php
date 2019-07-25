@extends('layouts.master')

@section('content')
    <main class="app-content" >
        <div class="app-title" id="app">
            <div>
                <h1><i class="fa fa-question"></i> Apply</h1>
                {{--<p>Start a beautiful journey here</p>--}}
                <div >

                </div>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Application</a></li>
            </ul>
        </div>



        <div class="row">
            <div class="col-md-7">
                <div class="tile">
                    <div class="tile-title-w-btn">
                        <h3 class="title">Leave Application</h3>
                        <h5>Annual Leave days Remaining
                            <span class="badge badge-success badge-pill annual">  <b>{{21-count($annual)}}</b></span>

                          </h5>
                    </div>
                    <div class="tile-body">
                        <div class="alert alert-info text-center " id="alert-out">
                            If you choose for your annual leave, you'll have  <strong class="demo">Info!</strong> Days Remaining
                        </div>

                            @if (Session::has('message'))
                            <div class="alert alert-danger text-center" id="alert">
                            {{Session::get('message')}}
                        </div>

                        @endif


                        <form class="form-horizontal" method="post" action="{{action('ApplicationController@store')}}">
                            @csrf
                            @method('POST')
                            <div class="form-group row">
                                <label class="control-label col-md-3">Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="{{Auth::User()->f_name.' '.Auth::User()->l_name?? ''}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Type of leave</label>
                                <div class="col-md-8">
                                    <select name="leave_id" id="">
                                        @foreach ($leaves as $leave)
                                            <option value="{{$leave->id}}">{{$leave->leave_name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">From</label>
                                <div class="col-md-8 ">
                                    <input type='date' name="from" class="form-control" id="firstDate" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3">To</label>
                                <div class="col-md-8 ">
                                    <input type='date' name="to" class="form-control" id="secondDate" />
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Reason:</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="reason" rows="4" placeholder="Reason for the leave request"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Request</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="tile">
                    <div class="tile-title-w-btn">
                        <h3 class="title text-center">Applications </h3>
                    </div>
                    <div class="tile-body">
                        <h5 class="text-center"> All Requests <b> {{count($user)??''}} </b></h5>
                        <hr>
                        @if (count($users)<=0)

                            <div class="alert alert-warning">
                                <strong>Sorry!</strong> You havent had any requests yet.
                            </div>
                                @else
                            <h4 class="text-center"> <i>Requests Breakdown</i></h4>

                            <ul class="list-group">
                                @foreach($users as $application)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="small" style="color: #227DC7;" >   {{$application->Leave->leave_name}}</span>
                                        {{str_limit($application->reason,60)}}

                                        <span class="badge badge-primary badge-pill">Period {{$application->period}} Days</span>
                                    </li>
                                @endforeach

                        </ul>
                        @endif


                    </div>
                </div>
            </div>
        </div>


    </main>

@stop
@section('script')


    <script type="text/javascript">

$(document).ready(function () {

    $('#alert-out').hide();

    $('#firstDate, #secondDate').change(function () {
        var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
        var firstDate1 = $('#firstDate').val();
        var secondDate2 = $('#secondDate').val();
        var firstDate = new Date(firstDate1);
        var secondDate = new Date(secondDate2);

        var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));

        var annual=$('.annual').text();
        $('.demo').html( annual-diffDays);
        
        if ((annual-diffDays)>=annual){

        } else {

            $('#alert-out').show();

            setTimeout(function () {
                $('#alert-out').hide();
            },3000);
        }

    });

});
setTimeout(function () {
    $('#alert').hide();

},3000)


    </script>
@stop