@extends('layout.default')

@section('page_title', 'index')


@section('content')
    <a href="{{ route('comics.create') }}">Create new record</a>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Series</th>
                <th>Type</th>
                <th>Sale date</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->price }}</td>

                <td><a href="{{ route('comics.show', $comic->id) }}">Dettagli...</a></td>
            </tr>
            @endforeach
        </tbody>

</table>

@endsection