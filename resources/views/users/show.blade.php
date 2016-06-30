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
    @if (Auth::check() && Auth::user()->id != $user->id)
    <div class="row" id="contact">
        <button type="button" class="btn btn-success" v-if="isContact">You are Friends</button>
        <button type="button" class="btn btn-default" v-else id="add-contact">Add to Contacts</button>
    </div>
    @endif
@endsection
