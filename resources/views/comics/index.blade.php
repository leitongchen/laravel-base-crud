@extends('layout.default')

@section('page_title', 'index')


@section('content')

    {{-- <a href="{{ route('comics.create') }}">Create new record</a> --}}

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Sale date</th>
                <th>Price</th>
                <th></th>



            </tr>
        </thead>

        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td><strong>{{ $comic->id }}</strong></td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>€ {{ $comic->price }}</td>

                <td>
                    <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>

                    <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>

                    @include('partials.components.deleteBtn', ["id"=> $comic->id])
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

    

@endsection