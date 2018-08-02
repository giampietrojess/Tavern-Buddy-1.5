@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        
            <div class="top">Welcome {{ Auth::user()->name }}! Your Adventure Begins Now!</div>
            <div class="col-md-12 mylinks">
                <a href="/characters/create" class="btn btn-lg btn-primary">Add a Character</a>
                <a href="/mycharacters" class="btn btn-lg btn-primary">View Your Characters</a>
                <a href="/characters" class="btn btn-lg btn-primary">View All Characters</a>
            
            </div>
    </div>
    <div class="container text-center">
   
        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">

                    
                
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6 justify-content-center">
                                <h3>Your Characters</h3>
                                <div class="scrolly">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Character Name</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($characters as $character)
                                            <tr>
                                                <th><a href="/characters/{{$character->id}}">{{$character->character_name}}</a></th>
                                            <th><a href="/characters/{{$character->id}}/edit" class="btn btn-primary">Edit</a></th>
                                                <th>{!!Form::open(['action' => ['Character\CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete?', ['class' => 'btn btn-primary'])}}
                                        {!!Form::close()!!}</th>
                                            </tr>
                                        @endforeach
                                    </table>   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/img/bw4.jpg">
                            </div>
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
