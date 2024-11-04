@extends("layouts.app")

@section("page-title", "Create New Comic")

@section("main-content")

<div class="container">

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form class="card col-8 px-3 m-auto" action="{{ route("comics.store") }}" method="POST">
    @csrf
        <div class="my-1">
            <label for="comic-name" class="form-label ps-2">Name:</label>
            <input type="text" class="form-control" id="comic-name" name="name" value="{{ old('name') }}">
            @error("name")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="comic-description" class="form-label ps-2">Description:</label>
            <input type="text" class="form-control" id="comic-description" name="description" value="{{ old('description') }}">
            @error("description")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="comic-image" class="form-label ps-2">Image Url:</label>
            <input type="text" class="form-control" id="comic-image" name="image_url" value="{{ old('image_url') }}">
            @error("image_url")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="comic-price" class="form-label ps-2">Price:</label>
            <input type="text" class="form-control" id="comic-price" name="price" value="{{ old('price') }}">
            @error("price")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="comic-series" class="form-label ps-2">Series:</label>
            <input type="text" class="form-control" id="comic-series" name="series" value="{{ old('series') }}">
            @error("series")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="comic-sale_date" class="form-label ps-2">Sale date:</label>
            <input type="text" class="form-control" id="comic-sale_date" name="sale_date" value="{{ old('sale_date') }}">
            @error("sale_date")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="comic-type" class="form-label ps-2">Type:</label>
            <input type="text" class="form-control" id="comic-type" name="type" value="{{ old('type') }}">
            @error("type")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1 d-flex justify-content-around">
            <button class="btn btn-success my-2 px-3" type="submit">Invia</button>
            <button class="btn btn-warning my-2 px-3" type="reset">Svuota campi</button>
        </div>

    </form>

</div>

@endsection
