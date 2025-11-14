@extends("./layouts/app")

@section("content")

<div class="container my-5">

    <div class="my-5">
        <h1>
            {{ $project->title }}
        </h1>
    </div>
    <div>
        <h3>Descrizione:
        </h3>
        <p> {{ $project->content }} </p>

    </div>

    <div>
        <h3>Tools:
        </h3>
        <p> </p>
        {{ $project->tools }}
    </div>

    <div>
        <span>Tipo di Progetto: {{ $project->type->name }}</span>
    </div>
    <div class="d-flex gap-2">


        <div class="my-5">
            <a class="text-decoration-none text-black btn btn-primary" href="{{ route("project.index") }}">Torna a tutti i Progetti</a>
        </div>
             <div class="my-5">
            <a class="text-decoration-none text-black btn btn-warning" href="{{ route("project.edit",$project->id) }}">Modifica il progetto</a>
        </div>
        
    </div>
</div>


@endsection