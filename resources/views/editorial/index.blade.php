@extends('layouts.app')

@section('content')
<div class="container content">
    @include('includes.message')
    <h1>Editoriales</h1>
    <table class="table table-hover content-table">
        <thead>
            <tr class="bg-primary">
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Sede</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
                @include('includes.row-table', ['publisher'=>$publisher])
            @endforeach
        </tbody>
    </table>
    {{ $publishers->links() }}
</div>
@endsection