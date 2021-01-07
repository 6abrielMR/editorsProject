<tr>
    <th scope="row">{{ $publisher->id }}</th>
    <td>{{ $publisher->nombre }}</td>
    <td>{{ $publisher->sede }}</td>
    <td><a type="button" class="btn btn-success" href="{{ route('libro.list', ['id' => $publisher->id]) }}"><i class="fas fa-book"></i> Libros</a></td>
</tr>