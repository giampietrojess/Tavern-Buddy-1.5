@extends('layouts.app')

@section('content')
<div class="container text-center">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
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
    {!! Form::open(['action' => 'Character\RaceController@index', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      {{ csrf_field() }}

        <!-- Character Race -->
        <div class="form-group">
          <h1>{{Form::label('What Race is your Character?')}}</h1>
          <h4>Click on an image to see more information</h4>
          <p>
            <div class="container">   
              <div class="row">
                <div class="col-md-4">
                    <img id="img-dwarf" class="img-fluid" src="/img/RaceIcons/DwarfIcon.png" data-toggle="modal" data-target="#yourModal1">
                    <p>{{Form::label('Dwarf')}}
                    {{Form::radio('race', 'Dwarf', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-elf" class="img-fluid" src="/img/RaceIcons/ElfIcon.png" data-toggle="modal" data-target="#yourModal2">
                    <p>{{Form::label('Elf')}}
                    {{Form::radio('race', 'Elf', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-halfling" class="img-fluid" class="img-fluid" src="/img/RaceIcons/Halfling.png" data-toggle="modal" data-target="#yourModal3">
                    <p>{{Form::label('Halfling')}}
                    {{Form::radio('race', 'Halfling', false, ['class' => 'radio radio-inline'])}}</p>
                </div>                
              </div>

              <div class="row">
                <div class="col-md-4">
                    <img id="img-human" class="img-fluid" src="/img/RaceIcons/HumanIcon.png" data-toggle="modal" data-target="#yourModal4">
                    <p>{{Form::label('Human')}}
                    {{Form::radio('race', 'Human', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-dragonborn" class="img-fluid" src="/img/RaceIcons/DragonBornIcon.png" data-toggle="modal" data-target="#yourModal5">
                    <p> {{Form::label('Dragonborn')}}
                    {{Form::radio('race', 'Dragonborn', false, ['class' => 'radio'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-gnome" class="img-fluid" src="/img/RaceIcons/GnomeIcon.png" data-toggle="modal" data-target="#yourModal6">
                    <p>{{Form::label('Gnome')}}
                    {{Form::radio('race', 'Gnome', false, ['class' => 'radio radio-inline'])}}
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                    <img id="img-half-elf" class="img-fluid" src="/img/RaceIcons/Half-Elf.png" data-toggle="modal" data-target="#yourModal7">
                    <p>{{Form::label('Half-Elf')}}
                    {{Form::radio('race', 'Half-Elf', false, ['class' => 'radio radio-inline'])}}
                </div>
                <div class="col-md-4">
                    <img id="img-half-orc" class="img-fluid" src="/img/RaceIcons/Half-Orc.png" data-toggle="modal" data-target="#yourModal8">
                    <p>{{Form::label('Half-Orc')}}
                    {{Form::radio('race', 'Half-Orc', false, ['class' => 'radio radio-inline'])}}</p>
                </div>
                <div class="col-md-4">
                    <img id="img-tiefling" class="img-fluid" src="/img/RaceIcons/TieflingIcon.png" data-toggle="modal" data-target="#yourModal9">
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
    <br>
    <br>


@endsection