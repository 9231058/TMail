@extends('layouts.app')
@section('title', 'Login')
@section('js')
    "{{asset('js/index.js')}}"
@endsection
@section('content')
    <div class="container">
    <div class="page-header">
        <h1>TMail <small>Simple way to destroy your mails :D</small></h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::open(['url' => url('/register'), 'id' => 'register', 'files' => true]) !!}
                @include('partials.forms.register')
            {!! Form::close() !!}
            {!! Form::open(['url' => url('/login'), 'id' => 'login']) !!}
                @include('partials.forms.login')
            {!! Form::close() !!}
            <p class="text-center">
            <a id="register-btn">Register New Account</a>
            </p>
        </div>
    </div>
</div>
@endsection
