@extends('layouts.master')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-star "></i> Declined Applications</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Pending Applications</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-title-w-btn">
                    </div>
                    <div class="tile-body">

                        @if (Session::has('message'))
                            <div class="alert alert-info text-center" id="alert">
                                {{Session::get('message')}}
                            </div>

                        @endif
                        @if (Session::has('message2'))
                            <div class="alert alert-danger text-center" id="alert">
                                {{Session::get('message2')}}
                            </div>

                        @endif
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Leave Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Period</th>
                                <th>Purpose</th>
                                <th>status</th>
                                <th>Approve</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($applications as $request)
                                <tr>
                                    <td>{{$request->user['f_name'].' '.$request->user['l_name']}}</td>
                                    <td>{{$request->Leave->leave_name}}</td>
                                    <td>{{$request->from}}</td>
                                    <td>{{$request->to}}</td>
                                    <td><b>{{$request->period}} Days</b></td>
                                    <td>

                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$i}}">View Reason For Application</button>

                                        <!-- Modal -->
                                        <div id="myModal{{$i}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{$request->reason}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </td>
                                    <td>@if ($request->status==2)
                                            <span class="badge badge-pill badge-danger small">Rejected..{{$request->updated_at->diffForHumans()}}</span>
                                        @endif</td>
                                    <td> <a href="{{url('approve/'.$request->id)}}" class="btn btn-primary btn-sm" role="button">Approve</a></td>

                                </tr>
                            @endforeach



                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
@section('script')
    <script type="text/javascript" src="{{asset('valijs/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('valijs/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script>
        setTimeout(function () {
            $('#alert').hide()
        },3000)
    </script>
@stop