@extends('layout.app')

@section('content')
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
                    <td> {{$item->id}} </td>
                    <td> {{$item->title}} </td>
                    <td> {{$item->description}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection