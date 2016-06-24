@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="container">
    <div class="page-header">
        <h1>TMail <small>Simple way to destroy your mails :D</small></h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            @include('forms.register')
            @include('forms.login')
            <p class="text-center">
            <a id="register-btn">Register New Account</a>
            </p>
        </div>
    </div>
</div>
@endsection
