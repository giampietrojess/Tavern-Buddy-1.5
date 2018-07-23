@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What is your Character's Alignment?</h1>
    
    {!! Form::open(['action' => 'CharactersController@alignQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            <h3>{{Form::label('What is your Character\'s Alignment?')}}</h3>
            <p>
            {{Form::label('Lawful Good')}}
            {{Form::radio('alignment', 'Lawful Good', true, ['class' => 'radio'])}}

            {{Form::label('Neutral Good')}}
            {{Form::radio('alignment', 'Neutral Good', ['class' => 'radio radio-inline'])}}

            {{Form::label('Chaotic Good')}}
            {{Form::radio('alignment', 'Chaotic Good',  ['class' => 'radio radio-inline'])}}

                {{Form::label('Lawful Neutral')}}
            {{Form::radio('alignment', 'Lawful Neutral', true, ['class' => 'radio'])}}

            {{Form::label('True Neutral')}}
            {{Form::radio('alignment', 'True Neutral', ['class' => 'radio radio-inline'])}}

            {{Form::label('Chaotic Neutral')}}
            {{Form::radio('alignment', 'Chaotic Neutral', ['class' => 'radio radio-inline'])}}

            {{Form::label('Lawful Evil')}}
            {{Form::radio('alignment', 'Lawful Evil', true, ['class' => 'radio'])}}

            {{Form::label('Neutral Evil')}}
            {{Form::radio('alignment', 'Neutral Evil', ['class' => 'radio radio-inline'])}}

            {{Form::label('Chaotic Evil')}}
            {{Form::radio('alignment', 'Chaotic Evil',  ['class' => 'radio radio-inline'])}}

            </p>
            <hr>
        </div>
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection