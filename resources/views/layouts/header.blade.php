<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta name="description" content="TMail PHP server">

<title>
    TMail @yield('title')
</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" type="text/css">

</head>
<body style="padding-bottom: 100px;">
@if (Auth::check())
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">
                <img src="{{Auth::user()->avatar}}" alt="Profile Picture" class="img-circle" height="40px" style="margin: -20% auto;">
            </a>
            <a class="navbar-brand" href="{{url('users/'.Auth::user()->id)}}">
            {{Auth::user()->first_name}} {{Auth::user()->last_name}}
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to('/logout', 'Logout') !!}</li>
            </ul>
        </div>
    </div>
</nav>
@endif
