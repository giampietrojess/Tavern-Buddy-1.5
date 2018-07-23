@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What are your Character's Ability Scores?</h1>

    {!! Form::open(['action' => 'CharactersController@abilityQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
        <div class="form-group">
            <h3>{{Form::label('Establish your Ability Scores!')}}</h3>
            <div class="row">
                <!-- Strength -->
                
                <div class="col-md-2">
                {{Form::label('name', 'Strength')}}
                <p>{{Form::number('str_score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                </div>
                <!-- Dexterity -->
                <div class="col-md-2">
                {{Form::label('name', 'Dexterity')}}
                <p>{{Form::number('dex_score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                </div>
                <!-- Constitution -->
                <div class="col-md-2">
                {{Form::label('name', 'Constitution')}}
                <p>{{Form::number('con_score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                </div>
                <!-- Intelligence -->
                <div class="col-md-2">
                {{Form::label('name', 'Intelligence')}}
                <p>{{Form::number('int_score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                </div>
                <!-- Intelligence -->
                <div class="col-md-2">
                {{Form::label('name', 'Wisdom')}}
                <p>{{Form::number('wis_score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                </div>
                <!-- Charisma -->
                <div class="col-md-2">
                {{Form::label('name', 'Charisma')}}
                <p>{{Form::number('cha_score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                </div>
            </div>
        </div>
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <a href="/backgroundQuest" class="btn btn-lg">Next</a>


@endsection