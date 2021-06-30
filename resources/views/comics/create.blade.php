@extends('layout.default')

@section('page_title', 'Create new')

@section('content')
    
    <div class="cta-upper">
        <a class="link" href="{{ route('comics.index') }}">Back to overview</a>
    </div>


    @include("partials.components.errorsAlert")

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="input-container">
        
            <div class="input-field">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="input-field">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ old('series') }}">
            </div>
            <div class="input-field">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" value="{{ old('type') }}" placeholder="ex: comic book">
            </div>
            <div class="input-field">
                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('dale_date') }}">
            </div>
            <div class="input-field">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price') }}" placeholder="100.00">
            </div>
            <div class="input-field">
                <label for="thumb">Url picture</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb') }}">
            </div>
            <div class="input-field-area">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="10"> {{ old('description') }} </textarea>
            </div>
        
            @include('partials.components.formBtns')

        </div>

    </form>

@endsection