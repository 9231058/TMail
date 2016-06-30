<?php

namespace TMail\Http\Controllers;

use Illuminate\Http\Request;

use TMail\Http\Requests;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    public function index()
    {
        return view('users.index')->with('users', TMail\User::all());
    }
}
