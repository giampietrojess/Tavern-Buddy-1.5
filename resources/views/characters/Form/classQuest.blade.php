
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda amet quos dolor ipsam rem recusandae nihil ratione molestias nulla. Nisi aliquam doloribus cupiditate sequi ab delectus aspernatur ea itaque neque?
                        Eos natus ipsam itaque asperiores repudiandae soluta aliquid labore cupiditate eligendi. Delectus voluptate asperiores facere, quidem quos ipsum? A ipsam sit cumque sunt ab minima dolore saepe libero alias est?
                        Maxime delectus quibusdam, nam natus, sed iure similique eum voluptatum magnam dolore obcaecati laborum fugit incidunt optio quam ratione esse quo dolores, eaque nulla voluptate? Nesciunt facilis vero ipsam distinctio!
                        Architecto tenetur aspernatur unde incidunt tempore voluptatibus officia amet, id provident quis odio blanditiis ipsam officiis nihil a excepturi aut culpa consequatur temporibus minus voluptatem esse reprehenderit voluptatum iusto. Iure.
                        Dolorum consectetur quis modi voluptate earum numquam. Saepe inventore recusandae sapiente sunt ullam hic vitae non, laboriosam cupiditate beatae, quidem obcaecati rem qui et a, molestias sequi. Ad, omnis voluptatum.</p>
                        
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