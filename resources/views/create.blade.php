@extends('layout')
@section('content')
    <div class="content">
        <h2>Add Link</h2>
        <form method="post" action="{{Route('links.store')}}">
            @csrf
            <input type="text" value="{{old('url')}}" name="url">
            <button type="submit">Add Link</button>
        </form>
    </div>
@endsection
