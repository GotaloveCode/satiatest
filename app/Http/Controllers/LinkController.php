<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $links = auth()->user()->links()->get();

        return view('home',compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'url' => 'required',
        ]);

        $exists = Link::where('url',$request->url)->first();

        if($exists){
            $user_exists = $exists->user()->where('user_id',auth()->id())->first();
            if($user_exists){
                return redirect()->back()->withErrors(["message" => "User exists" ]);
            }else{
                auth()->user()->links()->attach($exists->id);
            }
        }else{
            $link = Link::create(['url' => $request->url]);
            auth()->user()->links()->attach($link->id);
        }

        return redirect(route('links.index'));
    }


}
