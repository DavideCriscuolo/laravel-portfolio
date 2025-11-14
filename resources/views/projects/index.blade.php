@extends("./layouts/app")

@section("content")

<div class="container my-5">

    <div class="d-flex align-items-center justify-content-between flex-wrap">

        <div>
            <h1 class="text-center my-3">Tutti i miei Progetti</h1>
    
        </div>
    <div>
    <a href="{{ route("project.create") }}" class="btn btn-outline-dark">Aggiungi un nuovo progetto</a>
    </div>
    <div>  <a href="{{ route("type.index") }}" class="btn btn-outline-dark">Tipologie di Progetto</a></div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2">


        @foreach ($projects as $project )
        <div class="col my-2">

            <x-card :project="$project"></x-card>
        </div>


        @endforeach
    </div>

</div>


@endsection