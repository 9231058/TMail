@extends('layouts.app')
@section('title')
    {{ $user->email }}
@endsection
@section('content')
    <div class="container">
    <div class="page-header">
        <h1>{{$user->first_name}} {{$user->last_name}} <small>{{$user->email}}</small></h1>
        <div class="col-md-3">
            <img src="{{$user->avatar}}" alt="Profile Picture" class="img-thumbnail">
        </div>
    </div>
@endsection
