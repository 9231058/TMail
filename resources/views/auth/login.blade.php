@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
<div class="container">
    <div class="page-header">
        <h1>TMail <small>Simple way to destroy your mails :D</small></h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::open(['url' => url('/login')]) !!}
            @include('partials.forms.login')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
