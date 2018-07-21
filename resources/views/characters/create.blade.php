@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                            <h1>Add a Character questions</h1><hr>
            
                {!! Form::open(['action' => 'CharactersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Character Name -->
                    <div class="form-group">
                        <h3>{{Form::label('title', 'Choose a Name for your Character')}}</h3>
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <hr>
                    <!-- Character Race -->
                    <div class="form-group">
                        <h3>{{Form::label('race', 'What Race is your Character?')}}</h3>
                        <p>
                        {{Form::label('race', 'Human')}}
                        {{Form::radio('race', 'Human', ['class' => 'radio'])}}

                        {{Form::label('race', 'Elf', ['class' => 'radio radio-inline'])}}
                        {{Form::radio('race', 'Elf', ['class' => 'radio radio-inline'])}}

                        {{Form::label('race', 'Dwarf', ['class' => 'radio radio-inline'])}}
                        {{Form::radio('race', 'Dwarf', ['class' => 'radio radio-inline'])}}

                        {{Form::label('race', 'Halfling', ['class' => 'radio radio-inline'])}}
                        {{Form::radio('race', 'Halfling', ['class' => 'radio radio-inline'])}}

                        {{Form::label('race', 'Gnome', ['class' => 'radio radio-inline'])}}
                        {{Form::radio('race', 'Gnome', ['class' => 'radio radio-inline'])}}
                        </p>
                        <hr>
                    </div>
                    <!-- Character Class -->
                    <div class="form-group">
                        <h3>{{Form::label('class', 'What Class is your Character?')}}</h3>
                        <p>
                        {{Form::label('class', 'Barbarian')}}
                        {{Form::radio('class', 'Human', ['class' => 'radio'])}}

                        {{Form::label('class', 'Bard')}}
                        {{Form::radio('class', 'Bard', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Cleric')}}
                        {{Form::radio('class', 'Cleric', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Druid')}}
                        {{Form::radio('class', 'Druid', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Fighter')}}
                        {{Form::radio('class', 'Fighter', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Monk')}}
                        {{Form::radio('class', 'Monk', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Paladin')}}
                        {{Form::radio('class', 'Paladin', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Ranger')}}
                        {{Form::radio('class', 'Ranger', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Rogue')}}
                        {{Form::radio('class', 'Rogue', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Sorcerer')}}
                        {{Form::radio('class', 'Sorcerer', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Warlock')}}
                        {{Form::radio('class', 'Warlock', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Rogue')}}
                        {{Form::radio('class', 'Rogue', ['class' => 'radio radio-inline'])}}

                        {{Form::label('class', 'Wizard')}}
                        {{Form::radio('class', 'Wizard', ['class' => 'radio radio-inline'])}}
                        </p>
                    </div>
                    <hr>

                    <!-- Ability Scores: Strength, Dex, Constitution, Intelligence, Wisdom, Charisma -->
                    <div class="form-group">
                        <h3>{{Form::label('score', 'Establish your Ability Scores!')}}</h3>
                        <div class="row">
                            <!-- Strength -->
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                            {{Form::label('name', 'Strength')}}
                            <p>{{Form::number('score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Dexterity -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Dexterity')}}
                            <p>{{Form::number('score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Constitution -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Constitution')}}
                            <p>{{Form::number('score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Intelligence -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Intelligence')}}
                            <p>{{Form::number('score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                            <!-- Charisma -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Charisma')}}
                            <p>{{Form::number('score', '', ['class' => 'form-control-small', 'type' => 'number', 'min' => 0, 'placeholder' => '--'])}}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Background: Acolyte, Criminal/Spy, Folk Hero, Haunted One, Noble, Sage, Soldier   -->
                    <div class="form-group">
                        <h3>{{Form::label('title', 'What is your Character\'s Background?')}}</h3>
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
                    <hr>
                    <!-- Alignment: Lawful Good, Neutral Good, Chaotic Good, Lawful Neutral, True Neutral, Chaotic Neutral, Lawful Evil, Neutral Evil, Chaotic Evil -->
                    <div class="form-group">
                        <h3>{{Form::label('race', 'What is your Character\'s Alignment?')}}</h3>
                        <p>
                        {{Form::label('name', 'Human')}}
                        {{Form::radio('alignment', 'Human', true, ['class' => 'radio'])}}

                        {{Form::label('race', 'Elf')}}
                        {{Form::radio('alignment', 'Elf', ['class' => 'radio radio-inline'])}}

                        {{Form::label('race', 'Dwarf')}}
                        {{Form::radio('alignment', 'Dwarf')}}

                        {{Form::label('race', 'Halfling')}}
                        {{Form::radio('alignment', 'Halfling', ['class' => 'radio radio-inline'])}}

                        {{Form::label('race', 'Gnome')}}
                        {{Form::radio('alignment', 'Gnome', ['class' => 'radio radio-inline'])}}
                        </p>
                        <hr>
                    </div>



                    <!-- Image upload -->
                    <!-- <div class="form-group">
                        {{Form::file('cover_image')}}
                    </div> -->
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div> 
    </div>
@endsection