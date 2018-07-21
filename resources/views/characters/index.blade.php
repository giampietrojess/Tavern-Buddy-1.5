@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>View EVERYONE'S Characters</h1>
        @if(count($characters) > 0)
            @foreach($characters as $character)
                <div class="card">
                    <h3><a href="/characters/{{$character->id}}">{{$character->character_name}}</a></h3>
                </div> 
            @endforeach
        @else
            <p>No characters found.</p>
        @endif
    </div>
@endsection