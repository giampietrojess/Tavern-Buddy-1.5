@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            {!! Form::open(['action' => 'Character\BackgroundController@backgroundQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                <div class="form-group">
                    <h1>{{Form::label('What Class is your Character?')}}</h1>
                    <h4>Click on an image to see more information</h4>
                    <p>
                        <div class="container">   
                            <div class="row">
                                <div class="col-md-3">
                                    <img id="img-barbarian" class="img-fluid" src="/img/ClassIcons/BarbarianIcon.png" data-toggle="modal" data-target="#yourModal1">
                                    <p>{{Form::label('Barbarian')}}
                                    {{Form::radio('class', 'Barbarian', false, ['class' => 'radio'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-bard" class="img-fluid" src="/img/ClassIcons/BardIcon.png" data-toggle="modal" data-target="#yourModal2">
                                    <p>{{Form::label('Bard')}}
                                    {{Form::radio('class', 'Bard', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-cleric" class="img-fluid" src="/img/ClassIcons/ClericIcon.png" data-toggle="modal" data-target="#yourModal3">
                                    <p>{{Form::label('Cleric')}}
                                    {{Form::radio('class', 'Cleric', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-druid" class="img-fluid" src="/img/ClassIcons/DruidIcon.png" data-toggle="modal" data-target="#yourModal4">
                                    <p>{{Form::label('Druid')}}
                                    {{Form::radio('class', 'Druid', false, ['class' => 'radio radio-inline'])}} </p>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-">
                                    <img id="img-fighter" class="img-fluid" src="/img/ClassIcons/FighterIcon.png" data-toggle="modal" data-target="#yourModal5">
                                    <p>{{Form::label('Fighter')}}
                                    {{Form::radio('class', 'Fighter', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-monk" class="img-fluid" src="/img/ClassIcons/MonkIcon.png" data-toggle="modal" data-target="#yourModal6">
                                    <p>{{Form::label('Monk')}}
                                    {{Form::radio('class', 'Monk', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-paladin" class="img-fluid" src="/img/ClassIcons/Paladin.png" data-toggle="modal" data-target="#yourModal7">
                                    <p>{{Form::label('Paladin')}}
                                    {{Form::radio('class', 'Paladin', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-ranger" class="img-fluid" src="/img/ClassIcons/RangerIcon.png" data-toggle="modal" data-target="#yourModal8">
                                    <p>{{Form::label('Ranger')}}
                                    {{Form::radio('class', 'Ranger', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <img id="img-rogue" class="img-fluid" class="img-fluid" src="/img/ClassIcons/RogueIcon.png" data-toggle="modal" data-target="#yourModal9">
                                    <p>{{Form::label('Rogue')}}
                                    {{Form::radio('class', 'Rogue', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-sorcerer" class="img-fluid" src="/img/ClassIcons/SorcererIcon.png" data-toggle="modal" data-target="#yourModal10">
                                    <p>{{Form::label('Sorcerer')}}
                                    {{Form::radio('class', 'Sorcerer', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-warlock" class="img-fluid" src="/img/ClassIcons/WarlockIcon.png" data-toggle="modal" data-target="#yourModal11">
                                    <p>{{Form::label('Warlock')}}
                                    {{Form::radio('class', 'Warlock', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-wizard" class="img-fluid" src="/img/ClassIcons/WizardIcon.png" data-toggle="modal" data-target="#yourModal12">
                                    <p>{{Form::label('Wizard')}}
                                    {{Form::radio('class', 'Wizard', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-2">
                                    <img id="img-wizard" class="img-fluid" src="/img/ClassIcons/WizardIcon.png" data-toggle="modal" data-target="#yourModal12">
                                    <p>{{Form::label('Wizard')}}
                                    {{Form::radio('class', 'Wizard', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                        
                    </p>

                    <hr>          
                </div> 
            
            
            {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        </div class="col-md-2">
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