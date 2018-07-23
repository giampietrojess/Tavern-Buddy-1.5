@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>What is your Character's Name?</h1>

        {!! Form::open(['action' => 'Character\NameController@nameQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            {{ csrf_field() }}
            <!-- Character Name -->
            <div class="form-group">
                
                <h3>{{Form::label('Choose a Name for your Character')}}</h3>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            {{Form::text('character_name', '', ['class' => 'form-control character-name', 'placeholder' => 'Title'])}}
                        </div> 
                        <div class="col-md-3"></div>
                    </div>
            </div>
            <hr>

            {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}



 


    <a href="/raceQuest" class="btn btn-lg">Don't Click</a>


@endsection