@extends('layouts.app')

@section('title')
    Comics Index
@endsection

@section('content')

    <h1 class='text-center'>Lista dei Comics</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            {{-- Modale --}}
            <div class="modal fade" id="exampleModal-{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>Vuoi davvero eliminare {{$comic->title}}?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                {{-- Fine modale --}}
            <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                    <h4>  {{$comic->title}} </h4>
                    <img class="thumb-img" src="{{$comic->thumb}}">
                    <div class="d-flex">
                        <a href="{{route('comics.show', $comic->id)}}" role="button" class="btn btn-primary me-1"> Scopri di più</a>
                        <a href="{{route('comics.edit', $comic->id)}}" role="button" class="btn btn-primary me-1"> Modifica</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$comic->id}}">
                        Elimina
                        </button>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    
    
@endsection
