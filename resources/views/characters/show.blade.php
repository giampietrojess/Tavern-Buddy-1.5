@extends('layouts.app')

@section('content')
   
   <div class="container">
       
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