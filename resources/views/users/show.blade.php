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
    </script>
    <div class="container">
    <div class="page-header row">
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
    @if (isset($user['contacts']))
    <h2>Contacts</h2>
    <table class="table">
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach (($user->contacts) as $contact)
            <tr>
                <td>{{TMail\User::find($contact)->email}}</td>
                <td>{{TMail\User::find($contact)->first_name}}</td>
                <td>{{TMail\User::find($contact)->last_name}}</td>
                <td><a href="{{ url('user/'.TMail\User::find($contact)->id) }}" class="btn btn-primary">Go !</a></td>
            <tr>
        @endforeach
    </table>
    @endif
@endsection
