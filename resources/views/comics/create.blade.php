@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <h2>Crea un nuovo Comic</h2>
        </div>

        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">

                @csrf

                {{-- Il valore di name degli input deve corrispondere al nome delle colonne
                della tabella creata con la migration, in modo da poter usare il metodo fill() --}}

                <p>
                    <label for="title">Titolo </label>
                    <input type="text" name="title" id="title" placeholder="Inserisci titolo">
                </p>
                <p>
                    <label for="description">Descrizione </label>
                    <input type="text" name="description" id="description" placeholder="Inserisci descrizione">
                </p>
                <p>
                    <label for="thumb">Immagine </label>
                    <input type="text" name="thumb" id="thumb" placeholder="Inserisc l'URL dell'immagine">
                </p>
                <p>
                    <label for="price">Prezzo </label>
                    <input type="number" name="price" id="price" placeholder="Inserisci il prezzo">
                </p>
                <p>
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" placeholder="Inserisci la serie">
                </p>
                <p>
                    <label for="sale_date">Sale Date</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Inserisci la sale date">
                </p>
                <p>
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" placeholder="Inserisci la serie">
                </p>

                <input type="submit" value="Invia">
            </form>
        </div>
    </section>
@endsection