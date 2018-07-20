@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <img class="img-fluid" src="./img/TBHeader.png">   
        <h5>Welcome {{ Auth::user()->name }}! Your Adventure Begins Now!</h5>
</div>
<div class="container text-center">
    
    
    <div class="row justify-content-center">
        <div class="col-md-8">
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
</div>
@endsection
