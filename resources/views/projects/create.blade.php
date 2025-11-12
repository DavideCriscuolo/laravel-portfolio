@extends("./layouts/app")


@section("title", "Aggiungi un nuovo progetto")

@section("content")
<div class="container">
    <div class="my-5">

        <h1>Aggiungi un nuovo  progetto</h1>
    </div>

<div>
    <form action="{{ route("project.store") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo del Progetto</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                aria-describedby="helpId"
                placeholder=""
            />
        
        </div>

      

                   <div class="mb-3">
            <label for="tools" class="form-label">Tools usati</label>
            <input
                type="text"
                class="form-control"
                name="tools"
                id="tools"
                aria-describedby="helpId"
                placeholder=""
            />
        
        </div>
          
      <div class="mb-3">
        <label for="content" class="form-label">Descrizione del progetto</label>
        <textarea class="form-control" name="content" id="content" rows="3"></textarea>
      </div>
        <div>
            <button class="btn btn-success" type="submit">Aggiungi</button>
        </div>
    </form>
    
</div>

<div class="my-2">
    <a class="btn btn-outline-primary" href="{{ route("project.index") }}">Torna ai progetti</a>
</div>
</div>





@endsection