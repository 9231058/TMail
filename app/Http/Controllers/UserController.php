<?php

namespace TMail\Http\Controllers;

use Illuminate\Http\Request;

use TMail\Http\Requests;

class UserController extends Controller
{
    public function show($user)
    {
        return view('users.show')->with('user', $user);
    }
}
