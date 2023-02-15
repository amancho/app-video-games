@extends('layout')

@section('content')



<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach($games as $game)
        <div class="col-md-2">
            <div class="card">
                <img src="{{ $game->image_url}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->name }}</h5>
                    <p class="card-text">{{ substr($game->description, 0, 100) }}</p>
                    <div class="h-100 d-flex flex-row">
                        <a href="#" class="btn btn-primary me-2" id="btnViewGame-{{ $game->id }}">View</a>
                        <button type="button" class="btn btn-warning position-end" id="btnDeleteGame-{{ $game->id }}">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
