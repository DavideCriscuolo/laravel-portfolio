@extends("./layouts/app")

@section("content")

<div class="container my-5">
    <h1 class="text-center my-3">Tutti i miei Progetti</h1>

    <div class="row row-cols-1 row-cols-sm-2">


        @foreach ($projects as $project )
        <div class="col my-2">

            <x-card :project="$project"></x-card>
        </div>


        @endforeach
    </div>

</div>


@endsection