@extends('layout.app')

@section('content')
    
    <section>
        <div class="container">
            <a href=" {{ route('comics.create') }} "> Aggiungi nuovo Comic </a>

        </div>
    </section>
    

    <table>
        <thead>
            <tr>
                <th> ID </th>
                <th> Titolo </th>
                <th> Descrizione </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $item)
                <tr>
                    <td> 
                         {{$item->id}} 
                    </td>
                    <td> 
                         <a href=" {{ route('comics.show', $item->id) }}"> {{$item->title}} </a> 
                         {{-- $item->id = ['comics' => $item->id] --}}
                    </td>
                    <td> 
                         {{$item->description}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection