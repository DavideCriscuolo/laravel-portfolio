@extends("./layouts/app")


@section("title", "Aggiungi una nuova tipologia")

@section("content")
<div class="container">
    <div class="my-5">

        <h1>Aggiungi una nuova tipologia</h1>
    </div>

<div>
    <form action="{{ route("type.store") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nome Tipologia
            </label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                aria-describedby="helpId"
                placeholder=""
            />
        
        </div>
     
        <button type="submit" class="btn btn-success">Aggiungi</button>
    </form>
    
</div>

<div class="my-2">
    <a class="btn btn-outline-primary" href="{{ route("type.index") }}">Torna alla tipologia</a>
</div>
</div>





@endsection