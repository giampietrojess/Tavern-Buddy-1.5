@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Let's Review Your Information!</h1>

    {!! Form::open(['action' => 'CharactersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}  
        <table class="table">
                <tr>
                    <td>Character Name:</td>
                    <td><strong>{{$character->character_name}}</strong></td>
                </tr>
                <tr>
                    <td>Character Race:</td>
                    <td><strong>{{$character->race}}</strong></td>
                </tr>
                <tr>
                    <td>Character Class:</td>
                    <td><strong>{{$character->class}}</strong></td>
                </tr>
                <tr>
                    <td>Character Attributes</td>
        
                    
                    <td><strong>Str: {{$character->str_score}}</strong></td>
                    <td><strong>Dex: {{$character->dex_score}}</strong></td>
                    <td><strong>Con: {{$character->con_score}}</strong></td>
                    <td><strong>Int: {{$character->int_score}}</strong></td>
                    <td><strong>Wis: {{$character->wis_score}}</strong></td>
                    <td><strong>Cha: {{$character->cha_score}}</strong></td>

                </tr>
                <tr>
                    <td>Character Background</td>
                    <td><strong>{{$character->background}}</strong></td>
                </tr>
                <tr>
                    <td>Character Alignment</td>
                    <td><strong>{{$character->alignment}}</strong></td>
                </tr>
            </table>

                {{Form::submit('Create Character', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}



@endsection