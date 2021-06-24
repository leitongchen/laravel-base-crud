@extends('layout.default')

@section('page_title', 'show')


@section('content')

    <a href="{{ route('comics.index') }}">Back to overview</a>


    <h1>COMIC BOOK DETAILS</h1>
    <ul>

        <li>ID: {{ $comic->id }}</li>
        <li>TITLE: {{ $comic->title }}</li>
        <li>DESCRIPTION: {{ $comic->description }}</li>
        <li>SERIES: {{ $comic->series }}</li>
        <li>TYPE: {{ $comic->type }}</li>
        <li>SALE DATE: {{ $comic->sale_date }}</li>
        <li>PRICE: €{{ $comic->price }}</li>

    </ul>

    <a href="{{ route('comics.create') }}">Create new record</a>

@endsection