@extends('layout.default')

@section('page_title', 'Create new')

@section('content')

    <a href="{{ route('comics.index') }}">Back to overview</a>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="series">Series</label>
        <input type="text" name="series" id="series">

        <label for="type">Type</label>
        <input type="text" name="type" id="type" placeholder="ex: comic book">

        <label for="sale_date">Sale date</label>
        <input type="date" name="sale_date" id="sale_date">

        <label for="price">Price</label>
        <input type="number" name="price" id="price" step=".01" placeholder="100.00">

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4" cols="50"></textarea>

        <label for="thumb">Url picture</label>
        <input type="text" name="thumb" id="thumb">

        <input type="submit" value="Send">

    </form>

@endsection