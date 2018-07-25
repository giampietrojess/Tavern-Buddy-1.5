@extends('layouts.app')

@section('content')
<div class="container text-center">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    {!! Form::open(['action' => 'Character\RaceController@index', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      {{ csrf_field() }}

        <!-- Character Class -->
        <div class="form-group">
          <h1>{{Form::label('What Race is your Character?')}}</h1>
          <h4>Click on an image to see more information</h4>
          <p>
            <div class="container">   
              <div class="row">
                <div class="col-md-4">
                    <img id="img-barbarian" class="img-fluid" src="/img/RaceIcons/DragonBornIcon.png" data-toggle="modal" data-target="#yourModal1">
                    <p> {{Form::label('Dragonborn')}}
                    {{Form::radio('race', 'Dragonborn', false, ['class' => 'radio'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-bard" class="img-fluid" src="/img/RaceIcons/DwarfIcon.png" data-toggle="modal" data-target="#yourModal2">
                    <p>{{Form::label('Dwarf')}}
                    {{Form::radio('race', 'Dwarf', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-cleric" class="img-fluid" src="/img/RaceIcons/ElfIcon.png" data-toggle="modal" data-target="#yourModal3">
                    <p>{{Form::label('Elf')}}
                    {{Form::radio('race', 'Elf', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                
              </div>

              <div class="row">

                <div class="col-md-4">
                    <img id="img-fighter" class="img-fluid" src="/img/RaceIcons/GnomeIcon.png" data-toggle="modal" data-target="#yourModal5">
                    <p>{{Form::label('Gnome')}}
                    {{Form::radio('race', 'Gnome', false, ['class' => 'radio radio-inline'])}}
                    </p>
                </div>
                <div class="col-md-4">
                    <img id="img-monk" class="img-fluid" src="/img/RaceIcons/Half-Elf.png" data-toggle="modal" data-target="#yourModal6">
                    <p>{{Form::label('Half-Elf')}}
                    {{Form::radio('race', 'Half-Elf', false, ['class' => 'radio radio-inline'])}}
                </div>
                <div class="col-md-4">
                    <img id="img-paladin" class="img-fluid" src="/img/RaceIcons/Half-Orc.png" data-toggle="modal" data-target="#yourModal7">
                    <p>{{Form::label('Half-Orc')}}
                    {{Form::radio('race', 'Half-Orc', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
        
              </div>
              <div class="row">

                <div class="col-md-4">
                    <img id="img-rogue" class="img-fluid" class="img-fluid" src="/img/RaceIcons/Halfling.png" data-toggle="modal" data-target="#yourModal9">
                    <p>{{Form::label('Halfling')}}
                    {{Form::radio('race', 'Halfling', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-sorcerer" class="img-fluid" src="/img/RaceIcons/HumanIcon.png" data-toggle="modal" data-target="#yourModal10">
                    <p>{{Form::label('Human')}}
                    {{Form::radio('race', 'Human', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-warlock" class="img-fluid" src="/img/RaceIcons/TieflingIcon.png" data-toggle="modal" data-target="#yourModal11">
                    <p>{{Form::label('Tiefling')}}
                    {{Form::radio('race', 'Tiefling', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                  
              </div>
            </div>
              
          </p>

          <hr>          
        </div>
        <a href="/nameQuest" alt="go back" class="btn btn-primary">Back</a>
      {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
  <div class="col-md-2"></div>
  </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- {!! Form::open(['action' => 'Character\RaceController@index', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <h3>{{Form::label('What Race is your Character?')}}</h3>
            <p>
            {{Form::label('Human')}}
            {{Form::radio('race', 'Human', ['class' => 'radio'])}}

            {{Form::label('Elf')}}
            {{Form::radio('race', 'Elf', ['class' => 'radio radio-inline'])}}

            {{Form::label('Dwarf')}}
            {{Form::radio('race', 'Dwarf', ['class' => 'radio radio-inline'])}}

            {{Form::label('Halfling')}}
            {{Form::radio('race', 'Halfling', ['class' => 'radio radio-inline'])}}

            {{Form::label('Gnome')}}
            {{Form::radio('race', 'Gnome', ['class' => 'radio radio-inline'])}}

            {{Form::label('Dragonborn')}}
            {{Form::radio('race', 'Dragonborn', ['class' => 'radio radio-inline'])}}
            </p>
            <hr>
        </div>
    {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!} -->
    <br>
    
    <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{$human->name}}
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <p><strong>Ability Bonus:</strong> +1 to each Ability Score</p>
              <p><strong>Size:</strong> {{$human->size_description}}</p>
              <p><strong>Alignment:</strong> {{$human->alignment}}</p>
              <p><strong>Age:</strong> {{$human->age}}</p>
              <p><strong>Languages:</strong> {{$human->language_desc}}</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                {{$elf->name}}
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <p><strong>Ability Bonus:</strong> +2 to Dexterity</p>
                <p><strong>Size:</strong> {{$elf->size_description}}</p>
                <p><strong>Alignment:</strong> {{$elf->alignment}}</p>
                <p><strong>Age:</strong> {{$elf->age}}</p>
                <p><strong>Languages:</strong> {{$elf->language_desc}}</p>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  {{$dwarf->name}}
                </button>
              </h5>
            </div>
        
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <p><strong>Ability Bonus:</strong> +2 to Constitution</p>
                <p><strong>Size:</strong> {{$dwarf->size_description}}</p>
                <p><strong>Alignment:</strong> {{$dwarf->alignment}}</p>
                <p><strong>Age:</strong> {{$dwarf->age}}</p>
                <p><strong>Languages:</strong> {{$dwarf->language_desc}}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    {{$halfling->name}}
                </button>
              </h5>
            </div>
        
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <p><strong>Ability Bonus:</strong> +2 to Dexterity</p>
                <p><strong>Size:</strong> {{$halfling->size_description}}</p>
                <p><strong>Alignment:</strong> {{$halfling->alignment}}</p>
                <p><strong>Age:</strong> {{$halfling->age}}</p>
                <p><strong>Languages:</strong> {{$halfling->language_desc}}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    {{$gnome->name}}
                </button>
              </h5>
            </div>
        
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                <p><strong>Ability Bonus:</strong> +2 to Intelligence</p>
                <p><strong>Size:</strong> {{$gnome->size_description}}</p>
                <p><strong>Alignment:</strong> {{$gnome->alignment}}</p>
                <p><strong>Age:</strong> {{$gnome->age}}</p>
                <p><strong>Languages:</strong> {{$gnome->language_desc}}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSix">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    {{$dragonborn->name}}
                </button>
              </h5>
            </div>
        
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
              <div class="card-body">
                <p><strong>Ability Bonus:</strong> +2 to Strength, +1 to Charisma</p>
                <p><strong>Size:</strong> {{$dragonborn->size_description}}</p>
                <p><strong>Alignment:</strong> {{$dragonborn->alignment}}</p>
                <p><strong>Age:</strong> {{$dragonborn->age}}</p>
                <p><strong>Languages:</strong> {{$dragonborn->language_desc}}</p>
              </div>
            </div>
          </div>
    </div>
    <br>


@endsection