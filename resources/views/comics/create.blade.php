@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <h2>Aggiungi un fumetto</h2>
            <form class="d-flex flex-column fs-4 form " method="POST"> @csrf
                <input type="text" name="title" placeholder="Inserisci il titolo">
                <input type="text" name="thumb" placeholder="Inserisci l'url della thumb">
                <input type="text-area" name="description" placeholder="Inserisci la descrizione">
                <input type="text" name="price" placeholder="Inserisci il prezzo">
                <input type="text" name="series" placeholder="Inserisci la serie">
                <input type="text" name="title" placeholder="Inserisci il titolo">
                <label for="sale-date">Data di vendita</label>
                <input type="date" name="sale_date" placeholder="Inserisci la data di vendita">
                <input type="text" name="type" placeholder="Inserisci il genere">
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection