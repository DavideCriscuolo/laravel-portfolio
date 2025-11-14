@extends("./layouts/app")

@section("content")

<div class="container my-5">

    <div class="d-flex align-items-center justify-content-between flex-wrap">

        <div>
            <h1 class="text-center my-3">Tipologie di Progetti</h1>
    
        </div>
    <div>
    <a href="{{ route("type.create") }}" class="btn btn-outline-dark">Aggiungi una nuova tipologia</a>
    </div>
    </div>
<div class="my-3">
    <ul class="list-unstyled list-group">
        @foreach ($types as $type )
        <li class="list-group-item d-flex justify-content-between">{{ $type->name }}
<div class="d-flex gap-2"><a  href="{{ route("type.edit",$type->id) }}"class="btn btn-warning" >Modifica</a>
<form action="{{ route("type.destroy",$type->id)}}" method="POST">
@csrf
@method("DELETE")

<button type="submit" class="btn btn-danger" >Elimina</button>

</form>
</div>


        </li>
        @endforeach
    </ul>
</div>

</div>


@endsection