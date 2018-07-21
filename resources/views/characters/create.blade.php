@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Add a Character questions</h1>
                {!! Form::open(['url' => 'characters/create']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', 'class', => )}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div>
@endsection