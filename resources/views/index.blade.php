@extends('layouts.app');

@section('title')
Homepage
@endsection

@section('content')
    <h1 class="text-center">Homepage</h1>
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <p class="fs-4 p-5">Questo è un bellissimo sito in cui si trovano tante liste di fumetti, yay!</p>
        <a href="{{route('comics.index')}}" role="button" class="btn btn-primary fs-1"> vai ai Comics </a>
    </div>
    
@endsection