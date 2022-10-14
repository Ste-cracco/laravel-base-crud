@extends('layout.app')

@section('content')
    <div class="contanier">
        <div class="container_card">
            <h1> {{ $comics->title }} </h1>
            <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
            <p> {{ $comics->description }} </p>
            <span> € {{ $comics->price }} </span>
            <span> {{ $comics->series }} </span>
            <span> {{ $comics->sale_date }} </span>
            <span> {{ $comics->type }} </span>
        </div>
    </div>
@endsection