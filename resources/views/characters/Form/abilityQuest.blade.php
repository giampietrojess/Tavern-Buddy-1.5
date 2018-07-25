@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What are your Character's Ability Scores?</h1>

    {!! Form::open(['action' => 'Character\AbilityController@index', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
        <div class="form-group">
            <h3>{{Form::label('Establish your Ability Scores!')}}</h3>
            <div class="row">
                <!-- Strength -->
                <div class="col-md-2">
                {{Form::label('name', 'Strength')}}
                <p>{{Form::selectRange('str_score', 8, 19)}}</p>    
                </div>
                <!-- Dexterity -->
                <div class="col-md-2">
                {{Form::label('name', 'Dexterity')}}
                <p>{{Form::selectRange('dex_score', 8, 19)}}</p>
                </div>
                <!-- Constitution -->
                <div class="col-md-2">
                {{Form::label('name', 'Constitution')}}
                <p>{{Form::selectRange('con_score', 8, 19)}}</p>
                </div>
                <!-- Intelligence -->
                <div class="col-md-2">
                {{Form::label('name', 'Intelligence')}}
                <p>{{Form::selectRange('int_score', 8, 19)}}</p>
                </div>
                <!-- Wisdom -->
                <div class="col-md-2">
                {{Form::label('name', 'Wisdom')}}
                <p>{{Form::selectRange('wis_score', 8, 19)}}</p>
                </div>
                <!-- Charisma -->
                <div class="col-md-2">
                {{Form::label('name', 'Charisma')}}
                <p>{{Form::selectRange('cha_score', 8, 19)}}</p>
                </div>
            </div>
        </div>
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    {{-- <a href="/backgroundQuest" class="btn btn-lg">Next</a> --}}
    <div>{{$strength->full_name}} | {{$dexterity->full_name}} | {{$constitution->full_name}} | {{$intelligence->full_name}} | {{$wisdom->full_name}}</div>


@endsection