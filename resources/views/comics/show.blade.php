@extends('layout.default')

@section('page_title', 'show')


@section('content')

    @include('partials.components.cta')

    <h1>{{ $comic->title }}</h1>

    <div class="comic-box">
        <div class="cover-container">
            <img src="{{$comic->thumb}}" alt="">

            <ul>
                <li>SALE DATE: <strong>{{ $comic->sale_date }}</strong></li>
                <li>PRICE: <strong>€{{ $comic->price }}</strong></li>
            
            </ul>

            <div class="cta-below">
                <a class="btn" href="{{ route('comics.edit', $comic->id) }}">Modify</a>
                @include('partials.components.deleteBtn', ["id"=> $comic->id])
            </div>
        </div>

        <div class="desc-box">
            <ul>

                <li>ID: <strong>{{ $comic->id }}</strong></li>
                <li>DESCRIPTION: <br>{{ $comic->description }}</li>
                <li>SERIES: <strong>{{ $comic->series }}</strong></li>
                <li>TYPE: <strong>{{ $comic->type }}</strong></li>
                

            </ul>
        </div>
    </div>
    
@endsection