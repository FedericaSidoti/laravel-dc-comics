@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">{{$comic->title}}</h1>
        </div>
        <div class="row">
            <div class="col-7">
                <img src="{{$comic->thumb}}">
            </div>
            <div class="col-5">
                <ul>
                    <li>Descrizione: {{$comic->description}}:</li>
                    <li>Prezzo: {{$comic->price}}</li>
                    <li>Serie: {{$comic->series}}</li>
                    <li>Data di rilascio: {{$comic->sale_date}}</li>
                    <li>Genere: {{$comic->type}}</li>
                </ul>
            </div>
        </div>
        
    </div>
@endsection