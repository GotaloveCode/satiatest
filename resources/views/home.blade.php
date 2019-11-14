@extends('layout')
@section('content')
    <div class="content">
        <h3>Your links</h3>
        <p><a href="{{Route('link.create')}}" class="btn btn-primary">Add Link</a></p>
        <ul>
            @forelse($links as $link)
                <li> {{$link->url}} </li>
            @empty
                <h4>No Links added yet</h4>
            @endforelse
        </ul>
    </div>
@endsection
