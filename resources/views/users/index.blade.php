@extends('layouts.app')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
    <div class="page-header">
        <h1>TMail Users <small>make friends :)</small></h1>
    </div>
    <table class="table">
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->email}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td><a href="{{ url('users/'.$user->id) }}" class="btn btn-primary">Go !</a></td>
            <tr>
        @endforeach
    </table>
</div>
@endsection
