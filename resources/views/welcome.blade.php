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
            <div class="diceLinks">
                @auth

                <div class="linkCont">
                    <img src="/img/LandingDice/D4.png" title="Home" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="/dashboard" title="home" class="ham wiggle-me">Home</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/D8.png" title="Add a Character" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="/nameQuest" title="Add Character" class="ham wiggle-me">Add a Character</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/D10.png" title="What" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="What is it?" class="ham wiggle-me">What is it?</a>
                        </div>
                    </div>
                </div>

                 <div class="linkCont">
                    <img src="/img/LandingDice/d20.png" title="Who" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="Who are we?" class="ham wiggle-me">Who are We?</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/d20.png" title="Credits" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="Credits" class="ham wiggle-me">Credits</a>
                        </div>
                    </div>
                </div>


                
                @else

                <div class="linkCont">
                    <img src="/img/LandingDice/D4.png" title="Login" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="{{ route('login') }}" alt="login" class="ham wiggle-me">Login</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/D8.png" title="Register" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="{{ route('register') }}" title="Register" class="ham wiggle-me">Register</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/D10.png" title="What" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="What is it?" class="ham wiggle-me">What is it?</a>
                        </div>
                    </div>
                </div>

                 <div class="linkCont">
                    <img src="/img/LandingDice/d20.png" title="Who" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="Who are we?" class="ham wiggle-me">Who are We?</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/d20.png" title="Credits" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="Credits" class="ham wiggle-me">Credits</a>
                        </div>
                    </div>
                </div>
                <!-- <a href="{{ route('login') }}" alt="login"><img src="/img/LandingDice/D4.png"></a> 
                <a href="{{ route('register') }}" alt="register"><img src="/img/LandingDice/D8.png"></a>
                <a href="#" alt="What is It?"><img src="/img/LandingDice/D10.png"></a>
                <a href="#" alt="Who are We?"><img src="/img/LandingDice/d20.png"></a>
                <a href="#" alt="credits"><img src="/img/LandingDice/D12.png"></a> -->
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
                <example-component></example-component>
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