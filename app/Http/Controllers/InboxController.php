<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InboxController extends Controller
{
    /**
     * Show the inbox for the authenticated user.
     *
     * @return Response
     */
    public function showInbox()
    {
        return view('inbox');
    }
}
