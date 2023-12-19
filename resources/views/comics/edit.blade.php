@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <h2>Aggiungi un fumetto</h2>
            <form action="{{route('comics.update', $comic->id)}}" class="d-flex flex-column fs-4 form " method="POST"> 
                @csrf
                @method('PUT')
                <input type="text" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
                <input type="text" name="thumb" placeholder="Inserisci l'url della thumb" value="{{$comic->thumb}}">
                <input type="text-area" name="description" placeholder="Inserisci la descrizione" value="{{$comic->description}}">
                <input type="number" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}}">
                <input type="text" name="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
                <label for="sale-date">Data di vendita</label>
                <input type="date" name="sale_date" placeholder="Inserisci la data di vendita" value="{{$comic->sale_date}}">
                <input type="text" name="type" placeholder="Inserisci il genere" value="{{$comic->type}}">
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection