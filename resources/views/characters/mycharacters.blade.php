@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        
            <h2>Welcome {{ Auth::user()->name }}! Here are your adventurers!</h2>
    </div>
    <div class="container text-center">
        

        <div class="col-md-12 justify-content-center">
            <table class="table table-striped">
                <tr>
                    <th>Character Name</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($characters as $character)
                    <tr>
                        <th><a href="/characters/{{$character->id}}">{{$character->character_name}}</a></th>
                    <th><a href="#" class="btn btn-primary">Edit</a></th>
                        <th> <th>{!!Form::open(['action' => ['Character\CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete?', ['class' => 'ham'])}}
                                {!!Form::close()!!}</th></th>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</div>
@endsection
