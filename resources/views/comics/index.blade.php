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
                    <a href="{{route('comics.show', $comic->id)}}" role="button" class="btn btn-primary mb-1"> Scopri di più</a>
                    <a href="{{route('comics.edit', $comic->id)}}" role="button" class="btn btn-primary"> Modifica</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    
    
@endsection
