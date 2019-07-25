@extends('layouts.master')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-calendar"></i> Calendar</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Calendar</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">

                    <div class="col-md-12">

                            {!! $calendar->calendar() !!}

                            {!! $calendar->script() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
@section('script')

@stop