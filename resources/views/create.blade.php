<?php
@extends('layout')
@section('content')
    <div class="content">
        <form method="post" action="{{Route('link.store')}}">
            <input type="text" value="{{old('url')}}" name="url">
            <button type="submit">Add Link</button>
        </form>
    </div>
@endsection
