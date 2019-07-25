@extends('layouts.master')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> User Management</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">User Management</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="tile">
                    <div class="tile-title-w-btn">
                        <h3 class="title">Create User</h3>
                    </div>
                    <div class="tile-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info text-center" id="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                            @if (Session::has('email'))
                                <div class="alert alert-danger text-center">
                                    {{Session::get('email')}}
                                </div>
                            @endif
                        
                        <form class="form-horizontal" method="post" action="{{action('UsersController@store')}}">
                            @csrf
                            <div class="form-group row">
                                <label class="control-label col-md-3">Username</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">First Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="first_name" placeholder="Enter first name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Last Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="last_name" placeholder="Enter last name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="email" name="email" placeholder="Enter email address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Telephone Number</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="tel" name="tel_no" placeholder="Enter Telephone Number" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Role</label>
                                <div class="col-md-8">
                                    <select name="role_id" id="">

                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}"> {{$role->role_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Department</label>
                                <div class="col-md-8">
                                    <select name="department_id" id="">

                                        @foreach ($departments as $department)
                                            <option value="{{$department->id}}"> {{$department->department_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="password" name="password" placeholder="password" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tile">
                    <div class="tile-title-w-btn"> <h5>Existing Users</h5></div>
                    <div class="tile-body">
                        @if (Session::has('delete'))
                            <div class="alert alert-danger text-center">
                                {{Session::get('delete')}}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Created</th>
                                    {{--<th>Edit</th>--}}
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1;?>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$user->username}}</td>
                                    <td><span class="small">{{str_limit($user->email,30)}}</span></td>
                                    <td><span class="small"> {{$user->created_at->diffForHumans()}}</span></td>
                                    {{--<td> <a href="#" class="btn btn-primary small" role="button">Edit</a></td>--}}
                                    <td> <a href="{{url('trash/'.$user->id)}}" class="btn btn-danger small" role="button">Delete/Trash</a></td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$users->render()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
@section('script')
    <script>
        setTimeout(function () {
            $('#alert').hide();
        },3000)
    </script>
@stop