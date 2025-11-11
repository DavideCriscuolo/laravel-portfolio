@extends("./layouts/app")

@section("content")

<div class="container my-5">


    <div class="row">


        @foreach ($projects as $project )
        <div class="col">

            <x-card :project="$project"></x-card>
        </div>


        @endforeach
    </div>

</div>


@endsection