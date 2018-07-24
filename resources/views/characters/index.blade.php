@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>View All Characters</h1>
        @if(count($characters) > 0)
            @foreach($characters as $character)
                <div class="col-md-4">
                    <div class="card">
                        <h3><a href="/characters/{{$character->id}}">{{$character->character_name}}</a> the {{$character->race}} {{$character->class}}</h3>. Made by: {{$character->user->name}}
                    </div> 
                </div>  
            @endforeach
        @else
            <p>No characters found.</p>
        @endif
    </div>
@endsection