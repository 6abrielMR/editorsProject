@extends('layouts.app')

@section('content')
<div class="container content">
    @if (count($publisher->libros->where('editoriales_id', '=', $publisher->id)) > 0)
        <h1>Libros de {{ $publisher->nombre }}</h1>
        <table class="table table-hover content-table">
            <thead>
                <tr class="bg-primary">
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">#Pag</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publisher->libros->where('editoriales_id', '=', $publisher->id) as $book)
                    <tr>
                        <th scope="row">{{ $book->ISBN }}</th>
                        <td>{{ $book->titulo }}</td>
                        @if ($book->sede)
                            <td>{{ $book->sinopsis }}</td>
                        @else
                            <td>Sin sinopsis</td>
                        @endif
                        <td>{{ $book->n_paginas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No hay libros para esta editorial</h1>
    @endif
</div>
@endsection