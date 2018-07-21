@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">

        <img class="img-fluid" src="./img/TBHeader.png">
        <h3>A Dungeons and Dragons 5th Edition Character Manager for the New Adventurer!</h3>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a class="btn" href="{{ route('login') }}">Login</a>
                        <a class="btn" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>
    </div>

@endsection