<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $links = Link::with('user')->get();
        return view('welcome',compact('links'));
    }
}
