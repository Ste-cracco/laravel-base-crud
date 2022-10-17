@extends('layout.app')

@section('content')
    <div class="contanier">
        <div class="container_card">
            <h1> {{ $comic->title }} </h1>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p> {{ $comic->description }} </p>
            <span> € {{ $comic->price }} </span>
            <span> {{ $comic->series }} </span>
            <span> {{ $comic->sale_date }} </span>
            <span> {{ $comic->type }} </span>
        </div>
    </div>
@endsection