@extends('layout.default')

@section('page_title', 'Edit record')


@section('content')

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">

        <label for="series">Series</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">

        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}" placeholder="ex: comic book">

        <label for="sale_date">Sale date</label>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">

        <label for="price">Price</label>
        <input type="number" name="price" id="price" step=".01" value="{{ $comic->price }}" placeholder="100.00">

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4" cols="50">{{ $comic->description }}</textarea>

        <label for="thumb">Url picture</label>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">

        <input type="submit" value="Save">
    
    </form>

@endsection