@extends('layouts.app')

@section('content')
    <h1>My Characters</h1>
    @if(count($characters) > 0)
        @foreach($characters as $character)
            <div class="card">
                <h3>{{$character->name}}</h3>
            </div> 
        @endforeach
    @else
        <p>No characters found.</p>
    @endif
@endsection