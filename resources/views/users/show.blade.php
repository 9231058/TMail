@extends('layouts.app')
@section('title')
    {{ $user->email }}
@endsection
@section('js')
    "{{asset('js/userShow.js')}}"
@endsection
@section('content')
    <script>
        var userId = '{{$user->id}}'
        var userURL = '{{url('users')}}'
    </script>
    <div class="container">
    <div class="page-header">
        <h1>{{$user->first_name}} {{$user->last_name}} <small>{{$user->email}}</small></h1>
        <div class="col-md-3">
            <img src="{{$user->avatar}}" alt="Profile Picture" class="img-thumbnail">
        </div>
    </div>
    @if (Auth::check())
    <div class="row">
        <button type="button" class="btn btn-default" v-if="isContact">Add to Contacts</button>
        <button type="button" class="btn btn-success" v-else>You are Friends</button>
    </div>
    @endif
@endsection
