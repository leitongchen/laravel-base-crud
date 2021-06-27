@extends('layout.default')

@section('page_title', 'Create new')

@section('content')
    @include('partials.components.cta')

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="input-container">
        
            <div class="input-field">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="input-field">
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>
            <div class="input-field">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" placeholder="ex: comic book">
            </div>
            <div class="input-field">
                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date" id="sale_date">
            </div>
            <div class="input-field">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step=".01" placeholder="100.00">
            </div>
            <div class="input-field">
                <label for="thumb">Url picture</label>
                <input type="text" name="thumb" id="thumb">
            </div>
            <div class="input-field-area">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="10"></textarea>
            </div>
        
            @include('partials.components.formBtns')

        </div>

    </form>

@endsection