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
 
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">

        

                            <!-- Character Race -->
                            <div class="form-group">
                                <h1>{{Form::label('What Race is your Character?')}}</h1>
                                <h4>Click on an image to see more information</h4>
                                <p>
                                <div class="container">   
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- <img id="img-dwarf" class="img-fluid test" src="/img/RaceIcons/DwarfIcon.png" data-toggle="modal" data-target="#yourModal1"> -->
                                            <p>{{Form::label('Dwarf')}}
                                            {{Form::radio('race', 'Dwarf', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <img id="img-elf" class="img-fluid test" src="/img/RaceIcons/ElfIcon.png" data-toggle="modal" data-target="#yourModal2"> -->
                                            <p>{{Form::label('Elf')}}
                                            {{Form::radio('race', 'Elf', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <img id="img-halfling" class="img-fluid test" class="img-fluid" src="/img/RaceIcons/Halfling.png" data-toggle="modal" data-target="#yourModal3"> -->
                                            <p>{{Form::label('Halfling')}}
                                            {{Form::radio('race', 'Halfling', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                        </div>                
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- <img id="img-human" class="img-fluid test" src="/img/RaceIcons/HumanIcon.png" data-toggle="modal" data-target="#yourModal4"> -->
                                            <p>{{Form::label('Human')}}
                                            {{Form::radio('race', 'Human', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <img id="img-dragonborn" class="img-fluid test" src="/img/RaceIcons/DragonBornIcon.png" data-toggle="modal" data-target="#yourModal5"> -->
                                            <p> {{Form::label('Dragonborn')}}
                                            {{Form::radio('race', 'Dragonborn', false, ['class' => 'radio', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <img id="img-gnome" class="img-fluid test" src="/img/RaceIcons/GnomeIcon.png" data-toggle="modal" data-target="#yourModal6"> -->
                                            <p>{{Form::label('Gnome')}}
                                            {{Form::radio('race', 'Gnome', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- <img id="img-half-elf" class="img-fluid test" src="/img/RaceIcons/Half-Elf.png" data-toggle="modal" data-target="#yourModal7"> -->
                                            <p>{{Form::label('Half-Elf')}}
                                            {{Form::radio('race', 'Half-Elf', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <img id="img-half-orc" class="img-fluid test" src="/img/RaceIcons/Half-Orc.png" data-toggle="modal" data-target="#yourModal8"> -->
                                            <p>{{Form::label('Half-Orc')}}
                                            {{Form::radio('race', 'Half-Orc', false, ['class' => 'radio radio-inline', 'v-model' => 'characterCreation.race', 'id' => 'race'])}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <img id="img-tiefling" class="img-fluid test" src="/img/RaceIcons/TieflingIcon.png" data-toggle="modal" data-target="#yourModal9"> -->
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
                            <div class="col-md-2"></div>
                            </div>
                                <br>
                                <br>
                <!-- <p>
                <legend for="street">Your Street:</legend>
                <input id="street" name="street" v-model="characterCreation.street">
                </p>

                <p>
                <legend for="city">Your City:</legend>
                <input id="city" name="city" v-model="characterCreation.city">
                </p>

                <p>
                <legend for="state">Your State:</legend>
                <input id="state" name="state" v-model="characterCreation.state">
                </p> -->

              

            </div>

            <div v-show="step === 3">
            <h1>Step Three</h1>

                <p>
                <legend for="numtickets">Number of Tickets:</legend>
                <input id="numtickets" name="numtickets" type="number" v-model="characterCreation.numtickets">
                </p>

                <p>
                <legend for="shirtsize">Shirt Size:</legend>
                <select id="shirtsize" name="shirtsize" v-model="characterCreation.shirtsize">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                    <option value="XL">X-Large</option>
                </select>
                </p>

                <button @click.prevent="prev()">Previous</button>
                <!-- <input type="submit" value="Save"> -->
                {{Form::submit('Create Character!', ['class'=>'btn btn-primary'])}}
            </div>
	    <!-- </form> -->
        {!! Form::close() !!}
    </div>
	<br/><br/>Debug: @{{characterCreation}}
</div>


@endsection