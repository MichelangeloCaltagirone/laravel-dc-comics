@extends("layouts.app")

@section("page-title", "Edit Comic")

@section("main-content")

<div class="container">

    <form class="card col-8 px-3 m-auto" action="{{ route("comics.update", $comic->id) }}" method="POST">
        @method("PUT")
        @csrf

        <div class="my-1">
            <label for="comic-name" class="form-label ps-2">Name:</label>
            <input type="text" class="form-control" id="comic-name" name="name" value="">
        </div>

        <div class="my-1">
            <label for="comic-description" class="form-label ps-2">Description:</label>
            <input type="text" class="form-control" id="comic-description" name="description">
        </div>

        <div class="my-1">
            <label for="comic-image" class="form-label ps-2">Image Url:</label>
            <input type="text" class="form-control" id="comic-image" name="image_url">
        </div>

        <div class="my-1">
            <label for="comic-price" class="form-label ps-2">Price:</label>
            <input type="text" class="form-control" id="comic-price" name="price">
        </div>

        <div class="my-1">
            <label for="comic-series" class="form-label ps-2">Series:</label>
            <input type="text" class="form-control" id="comic-series" name="series">
        </div>

        <div class="my-1">
            <label for="comic-sale_date" class="form-label ps-2">Sale date:</label>
            <input type="text" class="form-control" id="comic-sale_date" name="sale_date">
        </div>

        <div class="my-1">
            <label for="comic-type" class="form-label ps-2">Type:</label>
            <input type="text" class="form-control" id="comic-type" name="type">
        </div>

        <div class="my-1 d-flex justify-content-around">
            <button class="btn btn-success my-2 px-3" type="submit">Invia</button>
            <button class="btn btn-warning my-2 px-3" type="reset">Svuota campi</button>
        </div>

    </form>

</div>


@endsection
