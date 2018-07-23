@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What is your Character's Class?</h1>
    
    {!! Form::open(['action' => 'Character\ClassController@classQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}

        <!-- Character Class -->
        <div class="form-group">
            <h3>{{Form::label('What Class is your Character?')}}</h3>
            <p>
            {{Form::label('Barbarian')}}
            {{Form::radio('class', 'Human', ['class' => 'radio'])}}

            {{Form::label('Bard')}}
            {{Form::radio('class', 'Bard', ['class' => 'radio radio-inline'])}}

            {{Form::label('Cleric')}}
            {{Form::radio('class', 'Cleric', ['class' => 'radio radio-inline'])}}

            {{Form::label('Druid')}}
            {{Form::radio('class', 'Druid', ['class' => 'radio radio-inline'])}}

            {{Form::label('Fighter')}}
            {{Form::radio('class', 'Fighter', ['class' => 'radio radio-inline'])}}

            {{Form::label('Monk')}}
            {{Form::radio('class', 'Monk', ['class' => 'radio radio-inline'])}}

            {{Form::label('Paladin')}}
            {{Form::radio('class', 'Paladin', ['class' => 'radio radio-inline'])}}

            {{Form::label('Ranger')}}
            {{Form::radio('class', 'Ranger', ['class' => 'radio radio-inline'])}}

            {{Form::label('Rogue')}}
            {{Form::radio('class', 'Rogue', ['class' => 'radio radio-inline'])}}

            {{Form::label('Sorcerer')}}
            {{Form::radio('class', 'Sorcerer', ['class' => 'radio radio-inline'])}}

            {{Form::label('Warlock')}}
            {{Form::radio('class', 'Warlock', ['class' => 'radio radio-inline'])}}

            {{Form::label('Rogue')}}
            {{Form::radio('class', 'Rogue', ['class' => 'radio radio-inline'])}}

            {{Form::label('Wizard')}}
            {{Form::radio('class', 'Wizard', ['class' => 'radio radio-inline'])}}
            </p>
        </div>

        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


   


@endsection