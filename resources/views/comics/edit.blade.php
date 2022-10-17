@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <h2>Crea un nuovo Comic</h2>
        </div>

        <div class="container">
            <form action="{{ route('comics.update', $comic) }}" method="POST">

                @csrf
                @method('PUT')

                <p>
                    <label for="title">Titolo </label>
                    <input type="text" name="title" id="title" value="{{ old('title'), $comic->title}}" placeholder="Inserisci titolo">
                    {{-- Stampa messaggio singolo errore ↓↓↓ --}}
                    @error('title')
                        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="description">Descrizione </label>
                    <input type="text" name="description" id="description" value="{{ old('description'), $comic->description }}" placeholder="Inserisci descrizione">
                    @error('description')
                        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="thumb">Immagine </label>
                    <input type="text" name="thumb" id="thumb" value="{{ old('thumb'), $comic->thumb }}" placeholder="Inserisc l'URL dell'immagine">
                </p>
                <p>
                    <label for="price">Prezzo </label>
                    <input type="number" name="price" id="price" value="{{ old('price'),$comic->price }}" placeholder="Inserisci il prezzo">
                    @error('price')
                        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" value="{{ old('series'), $comic->series }}" placeholder="Inserisci la serie">
                    @error('series')
                        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="sale_date">Sale Date</label>
                    <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date'), $comic->sale_date }}" placeholder="Inserisci la sale date">
                    @error('sale_date')
                        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                <p>
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" value="{{ old('type'), $comic->type }}" placeholder="Inserisci la serie">
                    @error('type')
                        <div style="color: red;" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>

                <input type="submit" value="Invia">
            </form>

            {{-- Stampa di tutti i messaggi di errore ↓↓↓ --}}

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

        </div>
    </section>
@endsection