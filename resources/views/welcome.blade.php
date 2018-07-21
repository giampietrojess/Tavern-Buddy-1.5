@extends('layouts.app')

@section('content')
    <div id="wrap">
    
        <div id="section1"></div>
    
        <div class="container1">
            <div class="text-center">
                <img class="img-fluid" src="./img/TBHeader.png">
                <h3>A Dungeons and Dragons 5th Edition Character Manager for the New Adventurer!</h3>
            </div>   
            <div class="flex-center position-ref full-height text-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-primary btn-lg" href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>
        </div>
        
        <div class="divider" id="section2"></div>
    
        <section class="bg-1">
            <div class="col-sm-6 col-sm-offset-3 text-center">
                <h5>Section 2</h5>
            </div>
        </section>
    
        <div class="divider" id="section3"></div>
    
        <div class="container">
            <div class="text-center">
                <h3>WHAT IS IT?</h3>
                <p>Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                </p> 
            </div>   
        </div>
   
        <div class="divider" id="section4"></div>
 
        <section class="bg-2">
            <div class="col-sm-6 col-sm-offset-3 text-center">      
                <h5>Section 4</h5>
            </div>
        </section>
        
        <div class="divider" id="section5"></div>

        <div class="container">
            <div class="text-center">
                <h3>HOW IT WORKS</h3>
                <p>Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                </p> 
            </div>   
        </div>

        <div class="divider" id="section6"></div>
 
        <section class="bg-3">
            <div class="col-sm-6 col-sm-offset-3 text-center">      
                <h5>Section 6</h5>
            </div>
        </section>

        <div class="divider" id="section5"></div>
    
    
        <div class="container">
            <div class="text-center">
                <h3>WHO WE ARE</h3>
                <p>Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                Here's where we'll describe our site and stuff at a longer length than just the tagline. Think 'elevator pitch' but in writing.
                </p> 
            </div>   
        </div>

        <div class="divider" id="section5"></div>
    
    
    
    
    
    
    
    
    
    
    
    <!-- <div class="jumbotron text-center">

        <img class="img-fluid" src="./img/TBHeader.png">
        <h3>A Dungeons and Dragons 5th Edition Character Manager for the New Adventurer!</h3> -->

        
    </div>

@endsection