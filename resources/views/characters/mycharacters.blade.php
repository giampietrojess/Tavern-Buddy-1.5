@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        
            <div class="top">Welcome {{ Auth::user()->name }}! Here are your adventurers!</div>
    </div>
    <div class="container text-center">
        
        @if(count($characters) > 0)
            @foreach($characters as $character)
                <div class="col-md-4 float-left text-center">
                    <div class="card">
                        <h3><a href="/characters/{{$character->id}}">{{$character->character_name}}</a></h3>
                        <p> the {{$character->race}} {{$character->class}}</p>
                        <img class="character-icon" src="/img/CharacterClassIcons/{{$character->image}}">
                        <div class="text-center">
                          
                            <a href="/characters/{{$character->id}}/edit" class="btn btn-primary">Edit</a>
                        
                        
                            {!!Form::open(['action' => ['Character\CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete?', ['class' => 'btn btn-primary'])}}
                            {!!Form::close()!!}
                        
                        </div>
                    </div> 
                </div>  
            @endforeach
        @else
            <p>No characters found.</p>
        @endif
    </div>

    
        <!-- <div class="col-md-12 justify-content-center">
            <div class="card">
            <table class="table table-striped table-responsive-sm">
        
                <tbody>
                @foreach($characters as $character)
                    <tr>
                        <td>
                            <a href="/characters/{{$character->id}}">{{$character->character_name}}</a>, the {{$character->race}} {{$character->class}}
                        </td>

                        <td>
                          <a href="/characters/{{$character->id}}/edit" class="btn btn-primary">Edit</a>
                        </td>
                        <td>{!!Form::open(['action' => ['Character\CharactersController@destroy', $character->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete?', ['class' => 'btn btn-primary'])}}
                                {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
              
            </table>
            </div>
        </div> -->

    <!-- </div> -->
</div>
@endsection
