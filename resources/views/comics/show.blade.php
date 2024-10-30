@extends("layouts.app")

@section("page-title", "Commics")

@section("main-content")

<div class="container">

    <h1 class="text-center">Comic show</h1>

    <div class="d-flex flex-wrap justify-content-between">

        <div class="card my-2" style="width: 18rem;">
            <img class="card-img-top" src="{{ $comic->image_url }}" alt="{{ $comic->name }}">
            <div class="card-body">
            <h5 class="card-title">Titolo:<br> {{ $comic->name }}</h5>
            <p class="card-text">Descrizione:<br>{{ $comic->description }}</p>
            <span class="d-block">Prezzo: ${{ $comic->price }}</span>
            <span class="d-block">Series: {{ $comic->series }}</span>
            <span class="d-block">Sale date: {{ $comic->sale_date }}</span>
            <span class="d-block">Type: {{ $comic->type }}</span>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>

</div>

@endsection
