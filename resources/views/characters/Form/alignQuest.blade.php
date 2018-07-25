@extends('layouts.app')

@section('content')
<div class="container text-center">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        
            {!! Form::open(['action' => 'Character\AlignmentController@alignQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                <!-- Character Class -->
                <div class="form-group">
                    <h1>{{Form::label('What Alignment is your Character?')}}</h1>
                    <p>
                        <div class="container">   
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/LawfulGood.png">
                                <p>
                                    {{Form::label('Lawful Good')}}
                                    {{Form::radio('alignment', 'Lawful Good', false, ['class' => 'radio'])}}
                                </p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/NeutralGood.png">
                                <p>
                                    {{Form::label('Neutral Good')}}
                                    {{Form::radio('alignment', 'Neutral Good', false, ['class' => 'radio radio-inline'])}}
                                </p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/ChaoticGood.png">
                                    <p>
                                        {{Form::label('Chaotic Good')}}
                                        {{Form::radio('alignment', 'Chaotic Good', false, ['class' => 'radio radio-inline'])}}
                                    </p>
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/LawfulNeutral.png">
                                    <p>
                                        {{Form::label('Lawful Neutral')}}
                                        {{Form::radio('alignment', 'Lawful Neutral', false, ['class' => 'radio'])}}
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/NeutralNeutral.png">
                                    <p>
                                        {{Form::label('True Neutral')}}
                                        {{Form::radio('alignment', 'True Neutral', false, ['class' => 'radio radio-inline'])}}
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/ChaoticNeutral.png">
                                    <p>
                                        {{Form::label('Chaotic Neutral')}}
                                        {{Form::radio('alignment', 'Chaotic Neutral', false, ['class' => 'radio radio-inline'])}}
                                    </p>
                                </div>
                
                            </div>


                            <div class="row">

                                <div class="col-md-4">
                                    <img class="img-fluid" class="img-fluid" src="/img/AlignmentImages/LawfulEvil.png">
                                    <p>
                                        {{Form::label('Lawful Evil')}}
                                        {{Form::radio('alignment', 'Lawful Evil', false, ['class' => 'radio'])}}
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/NeutralEvil.png">
                                    <p>                    
                                        {{Form::label('Neutral Evil')}}
                                        {{Form::radio('alignment', 'Neutral Evil', false, ['class' => 'radio radio-inline'])}}
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/ChaoticEvil.png">
                                    <p>
                                        {{Form::label('Chaotic Evil')}}
                                        {{Form::radio('alignment', 'Chaotic Evil', false, ['class' => 'radio radio-inline'])}}
                                    </p>
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
@endsection


    
        <!-- <div class="col-md-3"></div>
        <div class="col-md-6"> -->
            <!-- {!! Form::open(['action' => 'Character\AlignmentController@alignQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}
                <div id="carouselExampleControls" class="carousel slide">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/LawfulGood.png" alt="First slide">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('Lawful Good')}}
                                {{Form::radio('alignment', 'Lawful Good', false, ['class' => 'radio'])}}
                            </p>
                        </div>
                        <div class="carousel-item">
                        <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/NeutralGood.png" alt="Second slide">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <p>                   
                                {{Form::label('Neutral Good')}}
                                {{Form::radio('alignment', 'Neutral Good', false, ['class' => 'radio radio-inline'])}}
                            </p>
                        </div>
                        <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/ChaoticGood.png" alt="Third slide">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('Chaotic Good')}}
                                {{Form::radio('alignment', 'Chaotic Good', false, ['class' => 'radio radio-inline'])}}
                            </p>
                        </div>
                        <div class="carousel-item">
                            
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/img/AlignmentImages/LawfulNeutral.png" alt="Fourth slide">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('Lawful Neutral')}}
                                {{Form::radio('alignment', 'Lawful Neutral', false, ['class' => 'radio'])}}
                            </p>    
                        
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="img-fluid" src="/img/AlignmentImages/NeutralNeutral.png" alt="Fifth slide">
                            </div>
                            <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('True Neutral')}}
                                {{Form::radio('alignment', 'True Neutral', false, ['class' => 'radio radio-inline'])}}
                            </p>
                            
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="img-fluid" src="/img/AlignmentImages/ChaoticNeutral.png" alt="Sixth slide">
                            </div>
                            <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('Chaotic Neutral')}}
                                {{Form::radio('alignment', 'Chaotic Neutral', false, ['class' => 'radio radio-inline'])}}
                            </p>
                        
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="img-fluid" src="/img/AlignmentImages/LawfulEvil.png" alt="Seventh slide">
                            </div>
                            <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('Lawful Evil')}}
                                {{Form::radio('alignment', 'Lawful Evil', false, ['class' => 'radio'])}}
                            </p>
                        </div>
                        <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="img-fluid" src="/img/AlignmentImages/NeutralEvil.png" alt="Eigth slide">
                            </div>
                            <div class="col-md-4"></div>
                            </div>
                            <p>                    
                                {{Form::label('Neutral Evil')}}
                                {{Form::radio('alignment', 'Neutral Evil', false, ['class' => 'radio radio-inline'])}}
                            </p>
                        </div>
                        <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="img-fluid" src="/img/AlignmentImages/ChaoticEvil.png" alt="Ninth slide">
                            </div>
                            <div class="col-md-4"></div>
                            </div>
                            <p>
                                {{Form::label('Chaotic Evil')}}
                                {{Form::radio('alignment', 'Chaotic Evil', false, ['class' => 'radio radio-inline'])}}
                            </p>
                        </div>
                    </div>  

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}       -->
        <!-- </div>
    
        <div class="col-md-3"></div> -->
            
            <!-- {!! Form::open(['action' => 'Character\AlignmentController@alignQuest', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <h3>{{Form::label('What is your Character\'s Alignment?')}}</h3>
                    <p>
                    {{Form::label('Lawful Good')}}
                    {{Form::radio('alignment', 'Lawful Good', false, ['class' => 'radio'])}}

                    {{Form::label('Neutral Good')}}
                    {{Form::radio('alignment', 'Neutral Good', false, ['class' => 'radio radio-inline'])}}

                    {{Form::label('Chaotic Good')}}
                    {{Form::radio('alignment', 'Chaotic Good', false, ['class' => 'radio radio-inline'])}}

                    {{Form::label('Lawful Neutral')}}
                    {{Form::radio('alignment', 'Lawful Neutral', false, ['class' => 'radio'])}}

                    {{Form::label('True Neutral')}}
                    {{Form::radio('alignment', 'True Neutral', false, ['class' => 'radio radio-inline'])}}

                    {{Form::label('Chaotic Neutral')}}
                    {{Form::radio('alignment', 'Chaotic Neutral', false, ['class' => 'radio radio-inline'])}}

                    {{Form::label('Lawful Evil')}}
                    {{Form::radio('alignment', 'Lawful Evil', false, ['class' => 'radio'])}}

                    {{Form::label('Neutral Evil')}}
                    {{Form::radio('alignment', 'Neutral Evil', false, ['class' => 'radio radio-inline'])}}

                    {{Form::label('Chaotic Evil')}}
                    {{Form::radio('alignment', 'Chaotic Evil', false, ['class' => 'radio radio-inline'])}}

                    </p>
                    <hr>
                </div>
            {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!} -->
