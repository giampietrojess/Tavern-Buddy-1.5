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
        </div>
    </div>
    
@endsection