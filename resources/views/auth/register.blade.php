@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
<div class="container">
    <div class="page-header">
        <h1>TMail <small>Simple way to destroy your mails :D</small></h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::open(['url' => url('/register'), 'files' => true]) !!}
            @include('partials.forms.register')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
