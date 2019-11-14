@extends('layout')
@section('content')
    <div class="content">
        <h2>Add Link</h2>

        <form method="post" action="{{Route('links.store')}}">
            @if($errors->any())
                <h6 class="text-danger">{{$errors->first()}}</h6>
            @endif
            @csrf
            <input type="text" value="{{old('url')}}" name="url">
            @error('url')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit">Add Link</button>

        </form>
    </div>
@endsection
