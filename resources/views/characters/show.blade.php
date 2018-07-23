@extends('layouts.app')


@section('content')
   
    <div class="container">
        <div class="row">
         
            <div class="col-md-9">    
                <!-- Dice Link -->
         
                <div class="linkCont">
                    <img src="/img/Dice-GoBack.png" alt="Go Back" class="imageLink">
                    <div class="middle">
                        <div class="text">
                            <a href="/mycharacters" class="burr">Back?</a>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-3">    
                <!-- If the user who is viewing the character is the one who created the character, show edit and delete buttons -->
                @if(!Auth::guest())
                    @if(Auth::user()->id == $character->user_id)
                        <!-- Pencil Link -->
                        <div class="linkCont">
                            <img src="/img/Pencil-Edit.png" alt="Edit" class="imageLink">
                            <div class="middle">
                                <div class="text">
                                    <a href="/character/{{$character->id}}/edit" class="ham">Edit?</a>
                                </div>
                            </div>
                        </div>

                        <!-- Eraser Link -->
                        <div class="linkCont">
                            <img src="/img/Eraser-Delete.png" alt="Delete" class="imageLink">
                            <div class="middle">
                                <div class="text">
                                    
                                {!!Form::open(['action' => ['CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete?', ['class' => 'ham'])}}
                                {!!Form::close()!!}
                                
                              
                                </div>
                            </div>
                        </div>



                        
                    @endif
                @endif   
                <!-- <div class="linkCont">
                    <img src="/img/Pencil-Edit.png" alt="Edit" class="imageLink">
                    <div class="middle">
                        <div class="text">
                            <a href="#" class="ham">Edit?</a>
                        </div>
                    </div>
                </div> -->

                <!-- Eraser Link
                <div class="linkCont">
                    <img src="/img/Eraser-Delete.png" alt="Delete" class="imageLink">
                    <div class="middle">
                        <div class="text">
                            <a href="#" class="ham">Delete?</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="row">

        <div class="container">
            <div class="characterSheetHead">
                <div class="nameBox">{{$character->character_name}}</div>
                <div class="raceBox">{{$character->race}}</div>
                <div class="classBox">{{$character->class}}</div>
                <div class="levelBox">X</div>
                <div class="bgBox">{{$character->background}}</div>
                <div class="alignmentBox">{{$character->alignment}}</div>
                <div class="xpBox">X</div>
                <div class="userBox">{{$character->user->name}}</div>
            </div>

            <div class="attributesHere">
                <div class="attBox">
                    Strength
                    <div class="col-md-12 text-center score">
                        {{$character->str_score}}
                    </div>
                    <div class="modifier">+?</div>
                </div>

                <div class="attBox">
                    Dexterity
                    <div class="col-md-12 text-center score">
                        {{$character->dex_score}}
                    </div>
                    <div class="modifier">+?</div>
                </div>

                <div class="attBox">
                    Constitution
                    <div class="col-md-12 text-center score">
                        {{$character->con_score}}
                    </div>
                    <div class="modifier">+?</div>
                </div>

                <div class="attBox">
                    Intelligence
                    <div class="col-md-12 text-center score">
                        {{$character->int_score}}
                    </div>
                    <div class="modifier">+?</div>
                </div>

                <div class="attBox">
                    Wisdom
                    <div class="col-md-12 text-center score">
                        {{$character->wis_score}}
                    </div>
                    <div class="modifier">+?</div>
                </div>

                <div class="attBox">
                    Charisma
                    <div class="col-md-12 text-center score">
                        {{$character->cha_score}}
                    </div>
                    <div class="modifier">+?</div>
                </div>
            </div>
        </div>
    </div>
    
@endsection