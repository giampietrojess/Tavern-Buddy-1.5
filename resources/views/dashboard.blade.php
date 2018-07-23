@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        
            <h2>Welcome {{ Auth::user()->name }}! Your Adventure Begins Now!</h2>
    </div>
    <div class="container text-center">
        
        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                        <div class="col-md-12 justify-content-center">
                            <a href="/nameQuest" class="btn btn-lg btn-primary">Add a Character</a>
                            <a href="/mycharacters" class="btn btn-lg btn-primary">View Characters</a>
                        </div>
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
                                        <th>{!!Form::open(['action' => ['CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete?', ['class' => 'ham'])}}
                                {!!Form::close()!!}</th>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

          
        </div>


    </div>
</div>
@endsection
