<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function create()
    {
        $links = Link::with('user')->get();
        return view('welcome',compact('links'));
    }
}
