
@extends('layouts.app')

@section('content')
<div class="container text-center">
    
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
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
            {!! Form::open(['action' => 'Character\ClassController@index', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                <!-- Character Class -->
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

                                <div class="col-md-3">
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

                                <div class="col-md-3">
                                    <img id="img-rogue" class="img-fluid" class="img-fluid" src="/img/ClassIcons/RogueIcon.png" data-toggle="modal" data-target="#yourModal9">
                                    <p>{{Form::label('Rogue')}}
                                    {{Form::radio('class', 'Rogue', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-sorcerer" class="img-fluid" src="/img/ClassIcons/SorcererIcon.png" data-toggle="modal" data-target="#yourModal10">
                                    <p>{{Form::label('Sorcerer')}}
                                    {{Form::radio('class', 'Sorcerer', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-warlock" class="img-fluid" src="/img/ClassIcons/WarlockIcon.png" data-toggle="modal" data-target="#yourModal11">
                                    <p>{{Form::label('Warlock')}}
                                    {{Form::radio('class', 'Warlock', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                                <div class="col-md-3">
                                    <img id="img-wizard" class="img-fluid" src="/img/ClassIcons/WizardIcon.png" data-toggle="modal" data-target="#yourModal12">
                                    <p>{{Form::label('Wizard')}}
                                    {{Form::radio('class', 'Wizard', false, ['class' => 'radio radio-inline'])}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </p>

                    <hr>          
                </div>
                <a href="/raceQuest" alt="go back" class="btn btn-primary">Back</a>
                {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}

        </div>
        <div class="col-md-2"></div>
    </div>
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