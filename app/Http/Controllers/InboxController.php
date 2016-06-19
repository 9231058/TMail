<?php

namespace App\Http\Controllers;

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
