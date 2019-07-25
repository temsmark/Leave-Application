<!DOCTYPE html>
<html lang="en">
<head>
     <title>Leave Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" type="{{csrf_token()}}">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @if (request()->is('calendar'))
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="valijs/plugins/moment.min.js"></script>
        <script type="text/javascript" src="valijs/plugins/jquery-ui.custom.min.js"></script>
        <script type="text/javascript" src="valijs/plugins/fullcalendar.min.js"></script>
    @endif
@yield('css')
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo small" href="#">Leave Management Sys <sup>v.1</sup></a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        {{--<li class="app-search">--}}
            {{--<input class="app-search__input" type="search" placeholder="Search">--}}
            {{--<button class="app-search__button"><i class="fa fa-search"></i></button>--}}
        {{--</li>--}}
        <!--Notification Menu-->
        {{--<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>--}}
            {{--<ul class="app-notification dropdown-menu dropdown-menu-right">--}}
                {{--<li class="app-notification__title">You have 4 new notifications.</li>--}}
                {{--<div class="app-notification__content">--}}
                    {{--<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>--}}
                            {{--<div>--}}
                                {{--<p class="app-notification__message">Lisa sent you a mail</p>--}}
                                {{--<p class="app-notification__meta">2 min ago</p>--}}
                            {{--</div></a></li>--}}
                    {{--<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>--}}
                            {{--<div>--}}
                                {{--<p class="app-notification__message">Mail server not working</p>--}}
                                {{--<p class="app-notification__meta">5 min ago</p>--}}
                            {{--</div></a></li>--}}
                    {{--<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>--}}
                            {{--<div>--}}
                                {{--<p class="app-notification__message">Transaction complete</p>--}}
                                {{--<p class="app-notification__meta">2 days ago</p>--}}
                            {{--</div></a></li>--}}
                    {{--<div class="app-notification__content">--}}
                        {{--<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>--}}
                                {{--<div>--}}
                                    {{--<p class="app-notification__message">Lisa sent you a mail</p>--}}
                                    {{--<p class="app-notification__meta">2 min ago</p>--}}
                                {{--</div></a></li>--}}
                        {{--<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>--}}
                                {{--<div>--}}
                                    {{--<p class="app-notification__message">Mail server not working</p>--}}
                                    {{--<p class="app-notification__meta">5 min ago</p>--}}
                                {{--</div></a></li>--}}
                        {{--<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>--}}
                                {{--<div>--}}
                                    {{--<p class="app-notification__message">Transaction complete</p>--}}
                                    {{--<p class="app-notification__meta">2 days ago</p>--}}
                                {{--</div></a></li>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<li class="app-notification__footer"><a href="#">See all notifications.</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <!-- User Menu-->
        {{--<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>--}}
            {{--<ul class="dropdown-menu settings-menu dropdown-menu-right">--}}
                {{--<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>--}}
                {{--<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>--}}
                {{--<li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('images/avatar.png')}}" height="40px" width="40px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{Auth::User()->username ?? 'John Doe'}}</p>
            {{--<p class="app-sidebar__user-designation">Frontend Developer</p>--}}
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item {{request()->is('hr')?'active':''}}" href=" @if(Auth::User()->role_id==1){{url('hr')}}@else{{url('user')}}@endif"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item {{request()->is('apply')?'active':''}}" href="{{url('request')}}"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Request Leave</span></a></li>

    @if (Auth::User()->role_id==1)
            <li><a class="app-menu__item {{request()->is('add/users')?'active':''}}" href="{{url('add/users')}}"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Add Users</span></a></li>
            <li><a class="app-menu__item {{request()->is('pending')?'active':''}}" href="{{url('pending')}}"><i class="app-menu__icon fa fa-hourglass-end"></i><span class="app-menu__label">Pending Leaves</span></a></li>
            <li><a class="app-menu__item {{request()->is('calendar')?'active':''}}" href="{{url('calendar')}}"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Leave Calendar</span></a></li>
            <li><a class="app-menu__item {{request()->is('rejected')?'active':''}}" href="{{url('rejected')}}"><i class="app-menu__icon fa fa-star"></i><span class="app-menu__label">Rejected Leaves</span></a></li>

        @endif
        <li><a class="app-menu__item " href="{{url('logout')}}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>


    </ul>
</aside>
@yield('content')



<!-- Essential javascripts for application to work-->
@if (!request()->is('calendar'))
    <script src="{{asset('valijs/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('valijs/popper.min.js')}}"></script>
    <script src="{{asset('valijs/bootstrap.min.js')}}"></script>
    <script src="{{asset('valijs/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('valijs/plugins/pace.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
@endif

<!-- Page specific javascripts-->
<!-- Google analytics script-->
@yield('script')

</body>
</html>