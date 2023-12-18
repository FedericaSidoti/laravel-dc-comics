@extends('layouts.app')

@section('title')
    Comics Index
@endsection

@section('content')
    <h1 class='text-center'>Lista dei Comics</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                    <h4>  {{$comic->title}} </h4>
                    <img class="thumb-img" src="{{$comic->thumb}}">
                    <a href="{{route('comics.show', $comic->id)}}" role="button" class="btn btn-primary fs-3"> Scopri di più</a>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    
    
@endsection
