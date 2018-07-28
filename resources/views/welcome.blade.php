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
                    <img src="/img/LandingDice/D10.png" title="Add a Character" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="/nameQuest" title="Add Character" class="ham wiggle-me">Add a Character</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/D8.png" title="What" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="What is it?" class="ham wiggle-me">What is it?</a>
                        </div>
                    </div>
                </div>

                 <div class="linkCont">
                    <img src="/img/LandingDice/d12.png" title="Who" class="imageLink">
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
                    <img src="/img/LandingDice/D10.png" title="Register" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="{{ route('register') }}" title="Register" class="ham wiggle-me">Register</a>
                        </div>
                    </div>
                </div>

                <div class="linkCont">
                    <img src="/img/LandingDice/D8.png" title="What" class="imageLink">
                    <div class="middle">
                        <div class="text2">
                        <a href="#" title="What is it?" class="ham wiggle-me">What is it?</a>
                        </div>
                    </div>
                </div>

                 <div class="linkCont">
                    <img src="/img/LandingDice/D12.png" title="Who" class="imageLink">
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
                        <a href="#section5" title="Credits" class="ham wiggle-me">Credits</a>
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
            <div class="col-md-12 text-center">
                <span class="secText">WHAT IS TAVERN BUDDY?</span>
            </div>
        </section>
    
        <div class="divider" id="section3"></div>
    
        <div class="container">
            <div class="text-center">
                <h2>WHAT IS TAVERN BUDDY?</h2>
                <h5>This is our site. There are many like it, but this one is ours.</h5>
                
                <p>Tavern Buddy is a Character Sheet Builder for Dungeons and Dragons, 5th Edition. While many sites exist like it, Tavern Buddy
                strives to be a welcoming companion to an Adventurer who is new to the game Dungeons and Dragons. We aim to make this site not only
                easy to use, but also aesthetically pleasing whether viewing the site on a computer or on your phone or tablet. 
                </p> 
            </div>   
        </div>
   
        <div class="divider" id="section4"></div>
 
        <section class="bg-2">
            <div class="col-md-12 text-center">      
            <span class="secText">WHO ARE WE?</span>
            </div>
        </section>
        
        <div class="divider" id="section5"></div>

        <div class="container">
            <div class="text-center">
                <h1>WHO WE ARE</h1>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="/img/me.png" alt="Card image" style="width:50%">
                            <div class="card-body">
                                <h4 class="card-title">Jess Giampietro</h4>
                                <p class="card-text">Jess is a web developer and adventurer with a penchant for playing rangers and rolling poorly. Heres her profile which totally isn’t done now but may be done for demo day.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">
                        
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="/img/you.png" alt="Card image" style="width:50%">
                            <div class="card-body">
                                <h4 class="card-title">Hillary B. Lavin</h4>
                                <p class="card-text">Hillary is a web developer and creative-type who wishes she played more Dungeons and Dragons than she currently does.  Here’s her profile which totally isn’t done now but may be done for demo day.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>   
        </div>

        <div class="divider" id="section6"></div>
 
        <section class="bg-3">
            <div class="col-md-12 text-center">      
                <span class="secText">CREDITS</span>
            </div>
        </section>

        <div class="divider" id="section5"></div>
    
    
        <div class="container">
            <div class="text-center">
                <h1>CREDITS</h1>
                <p>
                    All Dungeons and Dragons information belongs to <a href="http://dnd.wizards.com/">Wizards of the Coast</a>, which
                        was harnassed with the use of the <a href="http://www.dnd5eapi.co/">DnD5eAPI</a>. 
                    The images on the front page here were created by artist <a href="http://luschekillustrationblog.blogspot.com/">Richard Luschek</a>. 
                    The images used in the character creation form were created by <a href="http://www.r-n-w.net/">R-N-W.net</a>. 
                </p> 
                <p> This is a nonprofit site made for the purposes of the UCF Coding Bootcamp.</p>
            </div>   
        </div>

        <div class="divider" id="section5"></div>
    
    
    
    
    
    
    
    
    
    
    
    <!-- <div class="jumbotron text-center">

        <img class="img-fluid" src="./img/TBHeader.png">
        <h3>A Dungeons and Dragons 5th Edition Character Manager for the New Adventurer!</h3> -->

        
    </div>

@endsection