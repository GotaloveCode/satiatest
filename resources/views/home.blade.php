@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <h3>Your links</h3>
                        <p><a href="{{Route('links.create')}}" class="btn btn-primary">Add Link</a></p>
                        <ul>
                            @forelse($links as $link)
                                <li> {{$link->url}} </li>
                            @empty
                                <h4>No Links added yet</h4>
                            @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
