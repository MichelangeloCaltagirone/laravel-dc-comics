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
            <h5 class="card-title">Titolo:<br> {{ $comic->name }}</h5>
            {{-- <p class="card-text">{{ $comic->description }}</p> --}}
            <span class="d-block">Prezzo: ${{ $comic->price }}</span>
            <span class="d-block">Series: {{ $comic->series }}</span>
            <span class="d-block">Sale date: {{ $comic->sale_date }}</span>
            <span class="d-block">Type: {{ $comic->type }}</span>
            <a href="/comics/{{$comic->id}}" class="btn btn-sm btn-primary mt-2">Vedi dettagli</a>
            <a href="/comics/{{$comic->id}}/edit" class="btn btn-sm btn-success mt-2">Modifica</a>
            <form action="{{ route("comics.delete", $comic->id) }}" method="POST" class="d-inline">
                @method("DELETE")
                @csrf

                <button type="submit" class="btn btn-sm btn-warning mt-2">
                    Elimina
                </button>

            </form>
            </div>
        </div>

        @empty

            <h1>No Comics List available</h1>

        @endforelse

    </div>

</div>

@endsection
