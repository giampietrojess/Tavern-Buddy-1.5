@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            {!! Form::open(['action' => 'Character\BackgroundController@backgroundQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                <div class="form-group">
                    <h1>{{Form::label('What is your Character\'s Background?')}}</h1>
                    <h4>Click on an image to see more information</h4>
                    <p>
                        <div class="container">   
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <img id="img-barbarian" class="img-fluid" src="/img/Backgrounds/Acolyte.png" data-toggle="modal" data-target="#yourModal1">
                                    <p>{{Form::label('Acolyte')}}
                                    {{Form::radio('background', 'Acolyte', false, ['class' => 'radio'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-bard" class="img-fluid" src="/img/Backgrounds/Charlatan.png" data-toggle="modal" data-target="#yourModal2">
                                    <p>{{Form::label('Charlatan')}}
                                    {{Form::radio('background', 'Charlatan', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-cleric" class="img-fluid" src="/img/Backgrounds/Criminal.png" data-toggle="modal" data-target="#yourModal3">
                                    <p>{{Form::label('Criminal')}}
                                    {{Form::radio('background', 'Criminal', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-druid" class="img-fluid" src="/img/Backgrounds/Entertainer.png" data-toggle="modal" data-target="#yourModal4">
                                    <p>{{Form::label('Entertainer')}}
                                    {{Form::radio('background', 'Entertainer', false, ['class' => 'radio radio-inline'])}} </p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <img id="img-fighter" class="img-fluid" src="/img/Backgrounds/FolkHero.png" data-toggle="modal" data-target="#yourModal5">
                                    <p>{{Form::label('Folk Hero')}}
                                    {{Form::radio('background', 'Folk Hero', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-monk" class="img-fluid" src="/img/Backgrounds/Guild Artisan.png" data-toggle="modal" data-target="#yourModal6">
                                    <p>{{Form::label('Guild Artisan')}}
                                    {{Form::radio('background', 'Guild Artisan', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-paladin" class="img-fluid" src="/img/Backgrounds/Hermit.png" data-toggle="modal" data-target="#yourModal7">
                                    <p>{{Form::label('Hermit')}}
                                    {{Form::radio('background', 'Hermit', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-ranger" class="img-fluid" src="/img/Backgrounds/Noble.png" data-toggle="modal" data-target="#yourModal8">
                                    <p>{{Form::label('Noble')}}
                                    {{Form::radio('background', 'Noble', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-rogue"  class="img-fluid" src="/img/Backgrounds/Outlander.png" data-toggle="modal" data-target="#yourModal9">
                                    <p>{{Form::label('Outlander')}}
                                    {{Form::radio('background', 'Outlander', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-1"></div>
                            </div>


                            <div class="row">
                                
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <img id="img-sorcerer" class="img-fluid" src="/img/Backgrounds/Sage.png" data-toggle="modal" data-target="#yourModal10">
                                    <p>{{Form::label('Sage')}}
                                    {{Form::radio('background', 'Sage', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-warlock" class="img-fluid" src="/img/Backgrounds/Sailor.png" data-toggle="modal" data-target="#yourModal11">
                                    <p>{{Form::label('Sailor')}}
                                    {{Form::radio('background', 'Sailor', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-wizard" class="img-fluid" src="/img/Backgrounds/Soldier.png" data-toggle="modal" data-target="#yourModal12">
                                    <p>{{Form::label('Soldier')}}
                                    {{Form::radio('background', 'Soldier', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-wizard" class="img-fluid" src="/img/Backgrounds/Urchin.png" data-toggle="modal" data-target="#yourModal12">
                                    <p>{{Form::label('Urchin')}}
                                    {{Form::radio('background', 'Urchin', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2"></div>

                            </div>
                        </div>
                        
                    </p>

                    <hr>          
                </div> 

                <a href="/abilityQuest" alt="go back" class="btn btn-primary">Back</a>
            
            {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        </div class="col-md-1">
    </div>
</div>



@endsection


<!-- <div class="form-group">
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
        </div> -->