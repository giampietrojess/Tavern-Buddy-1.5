@extends('layouts.app')

@section('content')

    
    <div id="app">
        <!-- <form action="https://postman-echo.com/post" method="post"> -->
        <div class="container text-center">
            {!! Form::open(['action' => 'Character\CharactersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                <div v-show="step === 1">
                    <!-- Character Name -->
                    <div class="form-group">
                    
                        <h3>{{Form::label('Choose a Name for your Character')}}</h3>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                {{Form::text('character_name', '', ['class' => 'form-control character-name', 'v-model' => 'characterCreation.character_name', 'id' => 'character_name', 'placeholder' => 'Name'])}}
                            </div> 
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <hr>

                    <button @click.prevent="next()">Next</button>

                </div>

                <div v-show="step === 2">
                    <h1>Step Two</h1>
                    @foreach ($raceArray as $race)    
                        <div class="modal fade" id="yourModal{{$race->index}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="text-center"><h3>{{$race->name}}</h3></div>
                                        <div class="text-left">
                                            <p><strong>Size:</strong> {{$race->size_description}}</p>
                                            <p><strong>Alignment:</strong> {{$race->alignment}}</p>
                                            <p><strong>Age:</strong> {{$race->age}}</p>
                                            <p><strong>Languages:</strong> {{$race->language_desc}}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Character Race -->
                    <div class="form-group">
                        <h1>{{Form::label('What Race is your Character?')}}</h1>
                        <h4>Click on an image to see more information</h4>
                        <p>
                        <div class="container">   
                            <div class="row">
                                <div class="col-md-4">
                                    <img id="img-dwarf" class="img-fluid test" src="/img/RaceIcons/DwarfIcon.png" data-toggle="modal" data-target="#yourModal1">
                                    <p>{{Form::label('Dwarf')}}
                                    {{Form::radio('race', 'Dwarf', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>
                                <div class="col-md-4">
                                    <img id="img-elf" class="img-fluid test" src="/img/RaceIcons/ElfIcon.png" data-toggle="modal" data-target="#yourModal2">
                                    <p>{{Form::label('Elf')}}
                                    {{Form::radio('race', 'Elf', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>
                                <div class="col-md-4">
                                    <img id="img-halfling" class="img-fluid test" class="img-fluid" src="/img/RaceIcons/Halfling.png" data-toggle="modal" data-target="#yourModal3">
                                    <p>{{Form::label('Halfling')}}
                                    {{Form::radio('race', 'Halfling', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>                
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <img id="img-human" class="img-fluid test" src="/img/RaceIcons/HumanIcon.png" data-toggle="modal" data-target="#yourModal4">
                                    <p>{{Form::label('Human')}}
                                    {{Form::radio('race', 'Human', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>
                                <div class="col-md-4">
                                    <img id="img-dragonborn" class="img-fluid test" src="/img/RaceIcons/DragonBornIcon.png" data-toggle="modal" data-target="#yourModal5">
                                    <p> {{Form::label('Dragonborn')}}
                                    {{Form::radio('race', 'Dragonborn', false, ['class' => 'radio', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>
                                <div class="col-md-4">
                                    <img id="img-gnome" class="img-fluid test" src="/img/RaceIcons/GnomeIcon.png" data-toggle="modal" data-target="#yourModal6">
                                    <p>{{Form::label('Gnome')}}
                                    {{Form::radio('race', 'Gnome', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <img id="img-half-elf" class="img-fluid test" src="/img/RaceIcons/Half-Elf.png" data-toggle="modal" data-target="#yourModal7">
                                    <p>{{Form::label('Half-Elf')}}
                                    {{Form::radio('race', 'Half-Elf', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}
                                </div>
                                <div class="col-md-4">
                                    <img id="img-half-orc" class="img-fluid test" src="/img/RaceIcons/Half-Orc.png" data-toggle="modal" data-target="#yourModal8">
                                    <p>{{Form::label('Half-Orc')}}
                                    {{Form::radio('race', 'Half-Orc', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>
                                <div class="col-md-4">
                                    <img id="img-tiefling" class="img-fluid test" src="/img/RaceIcons/TieflingIcon.png" data-toggle="modal" data-target="#yourModal9">
                                    <p>{{Form::label('Tiefling')}}
                                    {{Form::radio('race', 'Tiefling', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                </div>
                            </div>
                        </div>
                    
                        </p>

                        <hr>          
                    </div>
                            
                    <button @click.prevent="prev()">Previous</button>
                    <button @click.prevent="next()">Next</button>
                            
                            <!-- <a href="/nameQuest" alt="go back" class="btn btn-primary">Back</a>
                        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!} -->
                </div>
            


                <div v-show="step === 3">
                    <h1>Step Three</h1>
                    @foreach ($classArray as $class)    
                        <div class="modal fade" id="yourModal{{$class->index}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-body">
                                <div class="text-center"><h3>{{$class->name}}</h3></div>
                                <div class="text-left">
                                    <p><strong>Hit Die: </strong> 1 D{{$class->hit_die}}</p>
                                    <p><strong>Saving Throws: </strong>{{$class->saving_throws[0]->name}}, {{$class->saving_throws[1]->name}}</p>
                                    <h5><strong>Weapon and Armor Proficiencies: </strong></h5>
                                        <ul>
                                        @foreach ($class->proficiencies as $proficiencies)
                                            <li>{{$proficiencies->name}}</li>
                                        @endforeach
                                        </ul>
                                    <h5><strong>Skill Proficiency Choices (you may choose {{$class->proficiency_choices[0]->choose}}): </strong></h5>
                                        <ul>
                                            @foreach ($class->proficiency_choices[0]->from as $choices)
                                                <li>{{$choices->name}}</li>
                                            @endforeach
                                        </ul>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    <!-- Character Class -->
                    <div class="form-group">
                        <h1>{{Form::label('What Class is your Character?')}}</h1>
                        <h4>Click on an image to see more information</h4>
                        <p>
                            <div class="container">   
                                <div class="row">
                                    <div class="col-md-3">
                                        <img id="img-barbarian" class="img-fluid test" src="/img/ClassIcons/BarbarianIcon.png" data-toggle="modal" data-target="#yourModal1">
                                        <p>{{Form::label('Barbarian')}}
                                        {{Form::radio('class', 'Barbarian', false, ['class' => 'radio', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-bard" class="img-fluid test" src="/img/ClassIcons/BardIcon.png" data-toggle="modal" data-target="#yourModal2">
                                        <p>{{Form::label('Bard')}}
                                        {{Form::radio('class', 'Bard', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-cleric" class="img-fluid test" src="/img/ClassIcons/ClericIcon.png" data-toggle="modal" data-target="#yourModal3">
                                        <p>{{Form::label('Cleric')}}
                                        {{Form::radio('class', 'Cleric', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-druid" class="img-fluid test" src="/img/ClassIcons/DruidIcon.png" data-toggle="modal" data-target="#yourModal4">
                                        <p>{{Form::label('Druid')}}
                                        {{Form::radio('class', 'Druid', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}} </p>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-3">
                                        <img id="img-fighter" class="img-fluid test" src="/img/ClassIcons/FighterIcon.png" data-toggle="modal" data-target="#yourModal5">
                                        <p>{{Form::label('Fighter')}}
                                        {{Form::radio('class', 'Fighter', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-monk" class="img-fluid test" src="/img/ClassIcons/MonkIcon.png" data-toggle="modal" data-target="#yourModal6">
                                        <p>{{Form::label('Monk')}}
                                        {{Form::radio('class', 'Monk', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-paladin" class="img-fluid test" src="/img/ClassIcons/Paladin.png" data-toggle="modal" data-target="#yourModal7">
                                        <p>{{Form::label('Paladin')}}
                                        {{Form::radio('class', 'Paladin', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-ranger" class="img-fluid test" src="/img/ClassIcons/RangerIcon.png" data-toggle="modal" data-target="#yourModal8">
                                        <p>{{Form::label('Ranger')}}
                                        {{Form::radio('class', 'Ranger', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-3">
                                        <img id="img-rogue" class="img-fluid test" class="img-fluid" src="/img/ClassIcons/RogueIcon.png" data-toggle="modal" data-target="#yourModal9">
                                        <p>{{Form::label('Rogue')}}
                                        {{Form::radio('class', 'Rogue', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-sorcerer" class="img-fluid test" src="/img/ClassIcons/SorcererIcon.png" data-toggle="modal" data-target="#yourModal10">
                                        <p>{{Form::label('Sorcerer')}}
                                        {{Form::radio('class', 'Sorcerer', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-warlock" class="img-fluid test" src="/img/ClassIcons/WarlockIcon.png" data-toggle="modal" data-target="#yourModal11">
                                        <p>{{Form::label('Warlock')}}
                                        {{Form::radio('class', 'Warlock', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-wizard" class="img-fluid test" src="/img/ClassIcons/WizardIcon.png" data-toggle="modal" data-target="#yourModal12">
                                        <p>{{Form::label('Wizard')}}
                                        {{Form::radio('class', 'Wizard', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.class', 'id' => 'class'])}}</p>
                                    </div>
                                </div>
                            </div>
                            
                        </p>

                        <hr>          
                    </div>
                

                    <button @click.prevent="prev()">Previous</button>
                    <button @click.prevent="next()">Next</button>

                </div>



                <div v-show="step === 4">
                    <h1>Step 4</h1>
                    <div class="form-group">
                        <h3>{{Form::label('Establish your Ability Scores!')}}</h3>
                        <div class="row">
                            <!-- Strength -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Strength')}}
                            <p>{{Form::selectRange('str_score', 8, 21, null, ['v-model' => 'characterCreation.str_score'])}}</p>    
                            </div>
                            <!-- Dexterity -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Dexterity')}}
                            <p>{{Form::selectRange('dex_score', 8, 21, null, ['v-model' => 'characterCreation.dex_score'])}}</p>
                            </div>
                            <!-- Constitution -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Constitution')}}
                            <p>{{Form::selectRange('con_score', 8, 21, null, ['v-model' => 'characterCreation.con_score'])}}</p>
                            </div>
                            <!-- Intelligence -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Intelligence')}}
                            <p>{{Form::selectRange('int_score', 8, 21, null, ['v-model' => 'characterCreation.int_score'])}}</p>
                            </div>
                            <!-- Wisdom -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Wisdom')}}
                            <p>{{Form::selectRange('wis_score', 8, 21, null, ['v-model' => 'characterCreation.wis_score'])}}</p>
                            </div>
                            <!-- Charisma -->
                            <div class="col-md-2">
                            {{Form::label('name', 'Charisma')}}
                            <p>{{Form::selectRange('cha_score', 8, 21, null, ['v-model' => 'characterCreation.cha_score'])}}</p>
                            </div>
                        </div>
                    </div>

                    <button @click.prevent="prev()">Previous</button>
                    <button @click.prevent="next()">Next</button>


                </div>

                <div v-show="step === 5">
                    <h1>Step 5</h1>
                    
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
                                        {{Form::radio('background', 'Acolyte', false, ['class' => 'radio', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-bard" class="img-fluid" src="/img/Backgrounds/Charlatan.png" data-toggle="modal" data-target="#yourModal2">
                                        <p>{{Form::label('Charlatan')}}
                                        {{Form::radio('background', 'Charlatan', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-cleric" class="img-fluid" src="/img/Backgrounds/Criminal.png" data-toggle="modal" data-target="#yourModal3">
                                        <p>{{Form::label('Criminal')}}
                                        {{Form::radio('background', 'Criminal', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-druid" class="img-fluid" src="/img/Backgrounds/Entertainer.png" data-toggle="modal" data-target="#yourModal4">
                                        <p>{{Form::label('Entertainer')}}
                                        {{Form::radio('background', 'Entertainer', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}} </p>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <img id="img-fighter" class="img-fluid" src="/img/Backgrounds/FolkHero.png" data-toggle="modal" data-target="#yourModal5">
                                        <p>{{Form::label('Folk Hero')}}
                                        {{Form::radio('background', 'Folk Hero', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-monk" class="img-fluid" src="/img/Backgrounds/Guild Artisan.png" data-toggle="modal" data-target="#yourModal6">
                                        <p>{{Form::label('Guild Artisan')}}
                                        {{Form::radio('background', 'Guild Artisan', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-paladin" class="img-fluid" src="/img/Backgrounds/Hermit.png" data-toggle="modal" data-target="#yourModal7">
                                        <p>{{Form::label('Hermit')}}
                                        {{Form::radio('background', 'Hermit', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-ranger" class="img-fluid" src="/img/Backgrounds/Noble.png" data-toggle="modal" data-target="#yourModal8">
                                        <p>{{Form::label('Noble')}}
                                        {{Form::radio('background', 'Noble', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-rogue"  class="img-fluid" src="/img/Backgrounds/Outlander.png" data-toggle="modal" data-target="#yourModal9">
                                        <p>{{Form::label('Outlander')}}
                                        {{Form::radio('background', 'Outlander', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <div class="row">
                                    
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                        <img id="img-sorcerer" class="img-fluid" src="/img/Backgrounds/Sage.png" data-toggle="modal" data-target="#yourModal10">
                                        <p>{{Form::label('Sage')}}
                                        {{Form::radio('background', 'Sage', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-warlock" class="img-fluid" src="/img/Backgrounds/Sailor.png" data-toggle="modal" data-target="#yourModal11">
                                        <p>{{Form::label('Sailor')}}
                                        {{Form::radio('background', 'Sailor', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-wizard" class="img-fluid" src="/img/Backgrounds/Soldier.png" data-toggle="modal" data-target="#yourModal12">
                                        <p>{{Form::label('Soldier')}}
                                        {{Form::radio('background', 'Soldier', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="img-wizard" class="img-fluid" src="/img/Backgrounds/Urchin.png" data-toggle="modal" data-target="#yourModal12">
                                        <p>{{Form::label('Urchin')}}
                                        {{Form::radio('background', 'Urchin', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.background', 'id' => 'background'])}}</p>
                                    </div>
                                    <div class="col-md-2"></div>

                                </div>
                            </div>
                            
                        </p>

                        <hr>          
                    </div> 
                
                    <button @click.prevent="prev()">Previous</button>
                    <button @click.prevent="next()">Next</button>


                </div>

                <div v-show="step === 6">
                    <h1>Step 6</h1>

                    <div class="form-group">
                        <h1>{{Form::label('What Alignment is your Character?')}}</h1>
                        <p>
                            <div class="container">   
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/LawfulGood.png">
                                    <p>
                                        {{Form::label('Lawful Good')}}
                                        {{Form::radio('alignment', 'Lawful Good', false, ['class' => 'radio', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                    </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/NeutralGood.png">
                                    <p>
                                        {{Form::label('Neutral Good')}}
                                        {{Form::radio('alignment', 'Neutral Good', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                    </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/ChaoticGood.png">
                                        <p>
                                            {{Form::label('Chaotic Good')}}
                                            {{Form::radio('alignment', 'Chaotic Good', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/LawfulNeutral.png">
                                        <p>
                                            {{Form::label('Lawful Neutral')}}
                                            {{Form::radio('alignment', 'Lawful Neutral', false, ['class' => 'radio', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/NeutralNeutral.png">
                                        <p>
                                            {{Form::label('True Neutral')}}
                                            {{Form::radio('alignment', 'True Neutral', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/ChaoticNeutral.png">
                                        <p>
                                            {{Form::label('Chaotic Neutral')}}
                                            {{Form::radio('alignment', 'Chaotic Neutral', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>
                    
                                </div>


                                <div class="row">

                                    <div class="col-md-4">
                                        <img class="img-fluid" class="img-fluid" src="/img/AlignmentImages/LawfulEvil.png">
                                        <p>
                                            {{Form::label('Lawful Evil')}}
                                            {{Form::radio('alignment', 'Lawful Evil', false, ['class' => 'radio', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/NeutralEvil.png">
                                        <p>                    
                                            {{Form::label('Neutral Evil')}}
                                            {{Form::radio('alignment', 'Neutral Evil', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="/img/AlignmentImages/ChaoticEvil.png">
                                        <p>
                                            {{Form::label('Chaotic Evil')}}
                                            {{Form::radio('alignment', 'Chaotic Evil', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.alignment', 'id' => 'alignment'])}}
                                        </p>
                                    </div>

                                </div>
                            </div>
                            
                        </p>

                        <hr>          
                    </div>
                    <button @click.prevent="prev()">Previous</button>
                    <button @click.prevent="next()">Next</button>

                </div>


                <div v-show="step === 7">

                    <h1> Let's Review Your Information!</h1>

                    <table class="table">
                    <tr>
                        <td>Character Name:</td>
                        <td><strong>@{{characterCreation.character_name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Character Race:</td>
                        <td><strong>@{{characterCreation.race}}</strong></td>
                    </tr>
                    <tr>
                        <td>Character Class:</td>
                        <td><strong>@{{characterCreation.class}}</strong></td>
                    </tr>
                    <tr>
                        <td>Character Attributes</td>
            
                        
                        <td><strong>Str: @{{characterCreation.str_score}}</strong></td>
                        <td><strong>Dex: @{{characterCreation.dex_score}}</strong></td>
                        <td><strong>Con: @{{characterCreation.con_score}}</strong></td>
                        <td><strong>Int: @{{characterCreation.int_score}}</strong></td>
                        <td><strong>Wis: @{{characterCreation.wis_score}}</strong></td>
                        <td><strong>Cha: @{{characterCreation.cha_score}}</strong></td>

                    </tr>
                    <tr>
                        <td>Character Background</td>
                        <td><strong>@{{characterCreation.background}}</strong></td>
                    </tr>
                    <tr>
                        <td>Character Alignment</td>
                        <td><strong>@{{characterCreation.alignment}}</strong></td>
                    </tr>
                    </table>
                    <button @click.prevent="prev()">Previous</button>
                    {{Form::submit('Create Character!', ['class'=>'btn btn-primary'])}}
                </div>
                                <!-- <input type="submit" value="Save"> -->
                                
            {!! Form::close() !!}
        </div>
        <br/><br/>Debug: @{{characterCreation}}
    </div>
    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
            $("#img-barbarian").on('click','#pop',function () {
                $('#yourModal1').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-bard").on('click','#pop',function () {
                $('#yourModal2').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-cleric").on('click','#pop',function () {
                $('#yourModal3').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-druid").on('click','#pop',function () {
                $('#yourModal4').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-fighter").on('click','#pop',function () {
                $('#yourModal5').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-monk").on('click','#pop',function () {
                $('#yourModal6').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-paladin").on('click','#pop',function () {
                $('#yourModal7').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-ranger").on('click','#pop',function () {
                $('#yourModal8').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-rogue").on('click','#pop',function () {
                $('#yourModal9').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-sorcerer").on('click','#pop',function () {
                $('#yourModal10').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-warlock").on('click','#pop',function () {
                $('#yourModal11').modal('show'); 
            });
        });
        $(document).ready(function () {
            $("#img-wizard").on('click','#pop',function () {
                $('#yourModal12').modal('show'); 
            });
        });
    </script>
@endsection















