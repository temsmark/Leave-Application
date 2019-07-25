@extends('layouts.master')

@section('css')
    <style>
        .Timeline {
            display: flex;
            align-items: center;
            height: 500px;
        }

        .event1,
        .event2, .event3 {
            position: relative;
        }

        .event1Bubble {
            position: absolute;
            background-color: rgba(158, 158, 158, 0.1);
            width: 139px;
            height: 60px;
            top: -70px;
            left: -15px;
            border-radius: 5px;
            box-shadow: inset 0 0 5px rgba(158, 158, 158, 0.64)
        }

        .event2Bubble {
            position: absolute;
            background-color: rgba(158, 158, 158, 0.1);
            width: 139px;
            height: 60px;
            left: -105px;
            top: 33px;
            border-radius: 5px;
            box-shadow: inset 0 0 5px rgba(158, 158, 158, 0.64)
        }

        .event1Bubble:after,
        .event1Bubble:before,
        .event2Bubble:after,
        .event2Bubble:before {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-color: transparent;
            border-bottom: 0;
        }

        .event1Bubble:before {
            bottom: -10px;
            left: 13px;
            border-top-color: rgba(222, 222, 222, 0.66);
            border-width: 12px;
        }

        .event1Bubble:after {
            bottom: -8px;
            left: 13px;
            border-top-color: #F6F6F6;
            border-width: 12px;
        }

        .event2Bubble:before {
            bottom: 59px;
            left: 103px;
            border-top-color: rgba(222, 222, 222, 0.66);
            border-width: 12px;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .event2Bubble:after {
            bottom: 57px;
            left: 103px;
            border-top-color: #F6F6F6;
            border-width: 12px;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .eventTime {
            display: flex;
        }

        .DayDigit {
            font-size: 27px;
            font-family: "Arial Black", Gadget, sans-serif;
            margin-left: 10px;
            color: #4C4A4A;
        }

        .Day {
            font-size: 11px;
            margin-left: 5px;
            font-weight: bold;
            margin-top: 10px;
            font-family: Arial, Helvetica, sans-serif;
            color: #4C4A4A;
        }

        .MonthYear {
            font-weight: 600;
            line-height: 10px;
            color: #9E9E9E;
            font-size: 9px;
        }

        .eventTitle {
            font-family: "Arial Black", Gadget, sans-serif;
            color: #a71930;
            font-size: 11px;
            text-transform: uppercase;
            display: flex;
            flex: 1;
            align-items: center;
            margin-left: 12px;
            margin-top: -2px;
        }

        .time {
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            width: 50px;
            font-size: 8px;
            margin-top: -3px;
            margin-left: -5px;
            color: #9E9E9E;
        }

        .eventAuthor {
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            color: #9E9E9E;
            font-size: 8px;
            width: 100px;
            top: -8px;
            left: 63px;
        }

        .event2Author {
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            color: #9E9E9E;
            font-size: 8px;
            width: 100px;
            top: 96px;
            left: -32px;
        }

        .time2{
            position: absolute;
            font-family: Arial, Helvetica, sans-serif;
            width: 50px;
            font-size: 8px;
            margin-top: -31px;
            margin-left: -5px;
            color: #9E9E9E;
        }

        .now{
            background-color: #004165;
            color: white;
            border-radius: 7px;
            margin: 5px;
            padding: 4px;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
            border: 2px solid white;
            font-weight: bold;
            box-shadow: 0 0 0 2px #004165
        }

        .futureGray{
            filter: grayscale(1);
            -webkit-filter: grayscale(1);

        }

        .futureOpacity{
            -webkit-filter: opacity(.3);
            filter: opacity(.3);

        }
    </style>
@stop
@section('content')


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-play "></i> Timeline</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Calendar</a></li>
            </ul>
        </div>


    <div class="col-sm-12">
        <div class="tile">

            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center ">Red <span class="badge-pill badge-danger">Red</span> Declined </li>
                <li class="list-group-item text-center ">Blue <span class="badge-pill badge-primary">Blue</span> Approved </li>
            </ul>
            <div class="Timeline">



                <?php $i=0; ?>


                @foreach($applications as $timeline)
                    <?php $d = new DateTime($timeline->from);?>
                    @if($timeline->status==1)
                        <svg height="5" width="200">
                            <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                            Sorry, your browser does not support inline SVG.
                        </svg>

                <div class="event1">

                    <div class="event1Bubble">
                        <div class="eventTime">
                            <div class="DayDigit">{{$d->format('d')}}</div>
                            <div class="Day">
                                {{$d->format('D')}}
                                <div class="MonthYear">{{$d->format('M-Y')}}</div>
                            </div>
                        </div>


                        <div class="eventTitle" style="color: blue">{{ str_limit( $timeline->Leave->leave_name,5)}} ({{$timeline->period}} )Days</div>
                    </div>
                    <div class="eventAuthor"> {{$timeline->user->f_name.' '.$timeline->user->l_name}}</div>
                    <svg height="20" width="20">
                        <circle cx="10" cy="11" r="5" fill="#004165" />
                    </svg>
                    <div class="time">{{$timeline->created_at->format('g:i A')}}
                        <br>
                        <h6 class="small text-center font-weight-bold" style="color: red">To
                            {{$timeline->to}}
                        </h6>
                    </div>

                </div>

                    @elseif($timeline->status==0)


                <svg height="5" width="300">
                    <line x1="0" y1="0" x2="300" y2="0" style="stroke:#004165;stroke-width:5" />
                    Sorry, your browser does not support inline SVG.
                </svg>

                <div class="event2">

                    <div class="event2Bubble">
                        <div class="eventTime">
                            <div class="DayDigit">{{$d->format('d')}}</div>
                            <div class="Day">
                                {{$d->format('D')}}
                                <div class="MonthYear">{{$d->format('M-Y')}}</div>
                            </div>
                        </div>

                        <div class="eventTitle">{{ str_limit( $timeline->Leave->leave_name,5)}}
                            ({{$timeline->period}} )Days
                        </div>
                    </div>
                    <div class="event2Author">{{$timeline->user->f_name.' '.$timeline->user->l_name}}
                        <br>
                        <h6 class="small text-center font-weight-bold" style="color: red">To
                            {{$timeline->to}}
                        </h6>
                    </div>
                    <svg height="20" width="20">
                        <circle cx="10" cy="11" r="5" fill="#004165" />
                    </svg>
                    <div class="time2">{{$timeline->created_at->format('g:i A')}}</div>
                </div>
                        @endif
                @endforeach

                {{--<svg height="5" width="50">--}}
                    {{--<line x1="0" y1="0" x2="50" y2="0" style="stroke:#004165;stroke-width:5" />--}}
                    {{--Sorry, your browser does not support inline SVG.--}}
                {{--</svg>--}}

                {{--<div class="now">--}}
                    {{--NOW--}}
                {{--</div>--}}


                {{--<svg height="5" width="150">--}}
                    {{--<line x1="0" y1="0" x2="150" y2="0" style="stroke:rgba(162, 164, 163, 0.37);stroke-width:5" />--}}
                    {{--Sorry, your browser does not support inline SVG.--}}
                {{--</svg>--}}
                {{--<div class="event3 futureGray ">--}}
                    {{--<div class="event1Bubble futureOpacity">--}}
                        {{--<div class="eventTime">--}}
                            {{--<div class="DayDigit">05</div>--}}
                            {{--<div class="Day">--}}
                                {{--Tuesday--}}
                                {{--<div class="MonthYear">May 2016</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="eventTitle">Anticipated Hire</div>--}}
                    {{--</div>--}}
                    {{--<svg height="20" width="20">--}}
                        {{--<circle cx="10" cy="11" r="5" fill="rgba(162, 164, 163, 0.37)" />--}}
                    {{--</svg>--}}
                {{--</div>--}}
                {{--<svg height="5" width="50">--}}
                    {{--<line x1="0" y1="0" x2="50" y2="0" style="stroke:#004165;stroke-width:5" />--}}
                {{--</svg>--}}
                {{--<svg height="20" width="42">--}}
                    {{--<line x1="1" y1="0" x2="1" y2="20" style="stroke:#004165;stroke-width:2" />--}}
                    {{--<circle cx="11" cy="10" r="3" fill="#004165" />--}}
                    {{--<circle cx="21" cy="10" r="3" fill="#004165" />--}}
                    {{--<circle cx="31" cy="10" r="3" fill="#004165" />--}}
                    {{--<line x1="41" y1="0" x2="41" y2="20" style="stroke:#004165;stroke-width:2" />--}}
                {{--</svg>--}}

            </div>
        </div>
    </div>
    </main>
@stop