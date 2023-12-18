@extends('layouts.app');

@section('title')
Homepage
@endsection

@section('content')
    <h1 class="text-center">Homepage</h1>
    <div class="container d-flex align-items-center justify-content-center">
        <a href="{{route('comics.index')}}" role="button" class="btn btn-primary fs-1"> vai ai Comics </a>
    </div>
    
@endsection