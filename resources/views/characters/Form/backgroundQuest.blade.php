@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What is your Character's Background?</h1>

    {!! Form::open(['action' => 'Character\BackgroundController@backgroundQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}

        <div class="form-group">
            <h3>{{Form::label('What is your Character\'s Background?')}}</h3>
            {{Form::select('background', 
                [   'acolyte' => 'Acolyte', 
                    'criminal/spy' => 'Criminal/Spy', 
                    'folk hero' => 'Folk Hero', 
                    'haunted one' => 'Haunted One', 
                    'noble' => 'Noble', 
                    'sage' => 'Sage', 
                    'soldier' => 'Soldier'] 
                    )}}
        </div>
    {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}



@endsection