<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
    //
    public function Inbox()
    {
        return view('section.email.inbox');
    }

    public function Sent()
    {
        return view('section.email.sent');
    }
}
