@extends('layouts.app')

@section('content')
<div class="container content">
    @if (count($publishers) > 0)
        @include('includes.message')
        <h1>Editoriales</h1>
        <table class="table table-hover content-table">
            <thead>
                <tr class="bg-primary">
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Sede</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publishers as $publisher)
                    @include('includes.row-table', ['publisher'=>$publisher])
                @endforeach
            </tbody>
        </table>
        {{ $publishers->links() }}
    @else
        <h1>No hay Editoriales</h1>
        <p>Crea una editorial nueva.</p>
        <a class="btn btn-success" href="{{ route('editorial.create') }}">Crear editorial</a>
    @endif
</div>
@endsection