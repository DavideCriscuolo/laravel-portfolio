@extends("./layouts/app")


@section("title", "Modifica il progetto")

@section("content")
<div class="container">
    <div class="my-5">

        <h1>Modifica La Tipolgia : {{ $type->name }}</h1>
    </div>

<div>
    <form action="{{ route("type.update", $type->id) }}" method="POST">

        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Nome della Tipologia</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                aria-describedby="helpId"
                placeholder=""
            />
        
        </div>
        <div>
            <button class="btn btn-success" type="submit">Modifica</button>
        </div>
    </form>
    
</div>

<div class="my-2">
    <a class="btn btn-outline-primary" href="{{ route("type.index") }}">Torna alle Tipologie</a>
</div>




</div>





@endsection