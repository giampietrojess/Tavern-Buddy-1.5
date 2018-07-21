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
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-12">
               <a href="/characters/create" class="btn btn-lg btn-primary">Add a Character</a>
               <a href="/characters/show" class="btn btn-lg btn-primary">View Characters</a>
            </div>
        </div>


    </div>
</div>
@endsection
