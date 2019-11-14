@extends('layout')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            Satia Board Links
        </div>
        <ul>
        @forelse($links as $link)
                <li>
                    {{$link->url}} posted by
                @foreach($link->user as $user)
                        {{$user->name}},
                @endforeach
                </li>
        @empty
            <h4>No Links added yet</h4>
            @endforelse
        </ul>

    </div>
@endsection

