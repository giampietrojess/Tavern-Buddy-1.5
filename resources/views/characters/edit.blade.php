@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                            <h1>Edit Your Character</h1><hr>
            
                {!! Form::model($character, ['action' => ['Character\CharactersController@update', $character->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
                    <!-- Character Name -->
                    <div class="form-group">
                        <h3>{{Form::label('Change your Character\'s Name?')}}</h3>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    {{Form::text('character_name', $character->character_name, ['class' => 'form-control character-name', 'placeholder' => 'Title'])}}
                                </div> 
                                <div class="col-md-3"></div>
                            </div>
                    </div>
                    <hr>
                    <!-- Character Race -->
                    <div class="form-group">
                        <h3>{{Form::label('Change your Character\'s Race?')}}</h3>
                        <p>Your character's race is currently: {{$character->race}}</p>
                        <p>
                            
                        {{Form::label('Dragonborn')}}
                        {{Form::radio('race', 'Dragonborn', ['class' => 'radio'])}}
                        
                        {{Form::label('Dwarf')}}
                        {{Form::radio('race', 'Dwarf', ['class' => 'radio'])}}
                        
                        {{Form::label('Elf')}}
                        {{Form::radio('race', 'Elf', ['class' => 'radio'])}}
                       
                        {{Form::label('Gnome')}}
                        {{Form::radio('race', 'Gnome', ['class' => 'radio'])}}
                        
                        {{Form::label('Half-Elf')}}
                        {{Form::radio('race', 'Half-Elf', ['class' => 'radio'])}}
                        
                        {{Form::label('Half-Orc')}}
                        {{Form::radio('race', 'Half-Orc', ['class' => 'radio'])}}
                        
                        {{Form::label('Halfling')}}
                        {{Form::radio('race', 'Halfling', ['class' => 'radio'])}}
                        
                        {{Form::label('Human')}}
                        {{Form::radio('race', 'Human', ['class' => 'radio'])}}
                        
                        {{Form::label('Tiefling')}}
                        {{Form::radio('race', 'Tiefling', ['class' => 'radio'])}}
       
                        <!-- {{Form::radio('race', 'Human', false, ['class' => 'radio'])}}

                        {{Form::label('Elf')}}
                        {{Form::radio('race', 'Elf', false, ['class' => 'radio'])}}

                        {{Form::label('Dwarf')}}
                        {{Form::radio('race', 'Dwarf', false, ['class' => 'radio'])}}

                        {{Form::label('Halfling')}}
                        {{Form::radio('race', 'Halfling', false, ['class' => 'radio'])}}

                        {{Form::label('Gnome')}}
                        {{Form::radio('race', 'Gnome', false, ['class' => 'radio'])}} -->
                        </p>
                        <hr>
                    </div>
                    <!-- Character Class -->
                    <div class="form-group">
                        <h3>{{Form::label('Change your Character\'s Class?')}}</h3>
                        <p> Your character's current class is: {{$character->class}}</p>
                        <p>
                        {{Form::label('Barbarian')}}
                        {{Form::radio('class', 'Barbarian', ['class' => 'radio'])}}

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
                    <hr>

                    <!-- Ability Scores: Strength, Dex, Constitution, Intelligence, Wisdom, Charisma -->
                    <div class="form-group">
                        <h3>{{Form::label('Change your Ability Scores?')}}</h3>
                    
                        <div class="row">
                            <!-- Strength -->
                            
                            <div class="col-md-2">
                            {{Form::label('name', 'Strength')}}
                            <p>{{Form::number('str_score', $character->str_score, ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Dexterity -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Dexterity')}}
                            <p>{{Form::number('dex_score', $character->dex_score, ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Constitution -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Constitution')}}
                            <p>{{Form::number('con_score', $character->con_score, ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Intelligence -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Intelligence')}}
                            <p>{{Form::number('int_score', $character->int_score, ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Intelligence -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Wisdom')}}
                            <p>{{Form::number('wis_score', $character->wis_score, ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Charisma -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Charisma')}}
                            <p>{{Form::number('cha_score', $character->cha_score, ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Background: Acolyte, Criminal/Spy, Folk Hero, Haunted One, Noble, Sage, Soldier   -->
                    <div class="form-group">
                        <h3>{{Form::label('Change your Character\'s Background?')}}</h3>
                        <p>Your Current Background is: {{$character->background}}</p>
                        {{Form::select('background', 
                            [   'acolyte' => 'Acolyte', 
                                'criminal/spy' => 'Criminal/Spy', 
                                'folk hero' => 'Folk Hero', 
                                'haunted one' => 'Haunted One', 
                                'noble' => 'Noble', 
                                'sage' => 'Sage', 
                                'soldier' => 'Soldier'], $character->background 
                                )}}
                    </div>
                    <hr>
                    <!-- Alignment: Lawful Good, Neutral Good, Chaotic Good, Lawful Neutral, True Neutral, Chaotic Neutral, Lawful Evil, Neutral Evil, Chaotic Evil -->
                    <div class="form-group">
                        <h3>{{Form::label('Change your Character\'s Alignment?')}}</h3>
                        <p>Your Current Alignment is: {{$character->alignment}}</p>
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
                    
                    {{Form::hidden('_method', 'PUT')}}

                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div> 
    </div>
@endsection