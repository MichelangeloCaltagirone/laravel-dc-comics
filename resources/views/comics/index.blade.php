@extends("layouts.app")

@section("page-title", "Commics")

@section("main-content")

<div class="container">

    <h1 class="text-center">Comics List</h1>

    <div class="d-flex flex-wrap justify-content-between">

        @forelse ($comics as $comic )

        <div class="card my-2" style="width: 18rem;">
            <img class="card-img-top" src="{{ $comic->image_url }}" alt="{{ $comic->name }}">
            <div class="card-body">
            <h5 class="card-title">{{ $comic->name }}</h5>
            {{-- <p class="card-text">{{ $comic->description }}</p> --}}
            <span>Prezzo: ${{ $comic->price }}</span>
            <span>Series: {{ $comic->series }}</span>
            <span>Sale date: {{ $comic->sale_date }}</span>
            <span>Type: {{ $comic->type }}</span>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        @empty

            <h1>No Comics List available</h1>

        @endforelse

    </div>

</div>

@endsection
