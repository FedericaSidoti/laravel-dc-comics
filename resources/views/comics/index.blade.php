@extends('layouts.app')

@section('title')
    Comics Index
@endsection

@section('content')
    <h1>Homepage</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <img src="{{$comic->thumb}}">
                <ul class="list">
                    <li>Titolo: {{$comic->title}} </li>
                    <li>Descrizione {{$comic->description}}:</li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    
    
@endsection
