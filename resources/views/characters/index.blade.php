@extends('layouts.app')

@section('content')
    <div class="container text-center">
    <h1>View All Characters</h1>
        @if(count($characters) > 0)
            @foreach($characters as $character)
                <div class="col-md-4 float-left text-center">
                    <div class="card">
                    <h3><a href="/characters/{{$character->id}}">{{$character->character_name}}</a></h3>
                    <p> the {{$character->race}} {{$character->class}}</p>
                    <img class="character-icon" src="/img/CharacterClassIcons/{{$character->image}}">
                    <p>Made by: {{$character->user->name}}</p>
                    </div> 
                </div>  
            @endforeach
        @else
            <p>No characters found.</p>
        @endif
    </div>
@endsection