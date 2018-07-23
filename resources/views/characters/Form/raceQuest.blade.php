@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What is your Character's Race?</h1>

    {!! Form::open(['action' => 'CharactersController@raceQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <h3>{{Form::label('What Race is your Character?')}}</h3>
            <p>
            {{Form::label('Human')}}
            {{Form::radio('race', 'Human', ['class' => 'radio'])}}

            {{Form::label('Elf')}}
            {{Form::radio('race', 'Elf', ['class' => 'radio radio-inline'])}}

            {{Form::label('Dwarf')}}
            {{Form::radio('race', 'Dwarf', ['class' => 'radio radio-inline'])}}

            {{Form::label('Halfling')}}
            {{Form::radio('race', 'Halfling', ['class' => 'radio radio-inline'])}}

            {{Form::label('Gnome')}}
            {{Form::radio('race', 'Gnome', ['class' => 'radio radio-inline'])}}
            </p>
            <hr>
        </div>
    {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <a href="/classQuest" class="btn btn-lg">Not Next</a>


@endsection