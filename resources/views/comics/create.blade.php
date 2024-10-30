@extends("layouts.app")

@section("page-title", "Create New Comic")

@section("main-content")

<div class="container">

    <form class="card" action="{{ route("comics.store") }}" method="POST">
    @csrf
        <div class="my-1">
            <label for="comic-name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="comic-name" name="name">
        </div>

        <div class="my-1">
            <label for="comic-description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="comic-description" name="description">
        </div>

        <div class="my-1">
            <label for="comic-image" class="form-label">Image Url:</label>
            <input type="text" class="form-control" id="comic-image" name="image_url">
        </div>

        <div class="my-1">
            <label for="comic-price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="comic-price" name="price">
        </div>

        <div class="my-1">
            <label for="comic-series" class="form-label">Series:</label>
            <input type="text" class="form-control" id="comic-series" name="series">
        </div>

        <div class="my-1">
            <label for="comic-sale_date" class="form-label">Sale date:</label>
            <input type="text" class="form-control" id="comic-sale_date" name="sale_date">
        </div>

        <div class="my-1">
            <label for="comic-type" class="form-label">Type:</label>
            <input type="text" class="form-control" id="comic-type" name="type">
        </div>

        <button class="btn btn-lg btn-success" type="submit">Invia</button>
        <button class="btn btn-lg btn-warning" type="reset">Svuota campi</button>

    </form>

</div>

@endsection
