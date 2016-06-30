@extends('layouts.app')
@section('title')
    {{ $user->email }}
@endsection
@section('content')
    <div class="container">
    <div class="page-header">
        <h1>{{$user->first_name}} {{$user->last_name}} <small>{{$user->email}}</small></h1>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="{{$user->avatar}}" alt="Profile Picture">
            </a>
        </div>
    </div>
@endsection
