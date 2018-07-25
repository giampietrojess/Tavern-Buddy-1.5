
@extends('layouts.app')

@section('content')
<div class="container text-center">
    
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        
            {!! Form::open(['action' => 'Character\ClassController@index', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                <!-- Character Class -->
                <div class="form-group">
                    <h1>{{Form::label('What Class is your Character?')}}</h1>
                    <p>
                        <div class="container">   
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/BarbarianIcon.png">
                                    <p>{{Form::label('Barbarian')}}
                                    {{Form::radio('class', 'Barbarian', false, ['class' => 'radio'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/BardIcon.png">
                                    <p>{{Form::label('Bard')}}
                                    {{Form::radio('class', 'Bard', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/ClericIcon.png">
                                    <p>{{Form::label('Cleric')}}
                                    {{Form::radio('class', 'Cleric', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/DruidIcon.png">
                                    <p>{{Form::label('Druid')}}
                                    {{Form::radio('class', 'Druid', false, ['class' => 'radio radio-inline'])}} </p>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/FighterIcon.png">
                                    <p>{{Form::label('Fighter')}}
                                    {{Form::radio('class', 'Fighter', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/MonkIcon.png">
                                    <p>{{Form::label('Monk')}}
                                    {{Form::radio('class', 'Monk', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/Paladin.png">
                                    <p>{{Form::label('Paladin')}}
                                    {{Form::radio('class', 'Paladin', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/RangerIcon.png">
                                    <p>{{Form::label('Ranger')}}
                                    {{Form::radio('class', 'Ranger', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-md-3">
                                    <img class="img-fluid" class="img-fluid" src="/img/ClassIcons/RogueIcon.png">
                                    <p>{{Form::label('Rogue')}}
                                    {{Form::radio('class', 'Rogue', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/SorcererIcon.png">
                                    <p>{{Form::label('Sorcerer')}}
                                    {{Form::radio('class', 'Sorcerer', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/WarlockIcon.png">
                                    <p>{{Form::label('Warlock')}}
                                    {{Form::radio('class', 'Warlock', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid" src="/img/ClassIcons/WizardIcon.png">
                                    <p>{{Form::label('Wizard')}}
                                    {{Form::radio('class', 'Wizard', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </p>

                    <hr>          
                </div>

                {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}

        </div>
        <div class="col-md-2"></div>
          <!-- <div>{{$barbarian->name}} | {{$bard->name}} | {{$cleric->name}} | {{$druid->name}} | {{$fighter->name}} | {{$monk->name}} | {{$paladin->name}} | {{$ranger->name}} | {{$rogue->name}} | {{$sorcerer->name}} | {{$warlock->name}} | {{$wizard->name}}</div>
    -->
    </div>
</div>

@endsection