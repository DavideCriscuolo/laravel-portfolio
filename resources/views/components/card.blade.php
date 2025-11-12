  @props(["project"])


  <div class="card">

      <div class="card-body">
          <h4 class="card-title mb-3">{{ $project->title }}</h4>
          <a class="btn btn-success" href="{{ route("project.show",$project->id) }}">Vai al progetto</a>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Elimina
</button>
      </div>
  </div>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    Sei sicuro di voler eliminare questo progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
     
        <form action="{{ route("project.destroy",$project->id) }}" method="POST">
            @csrf
            @method("DELETE")
      <button class="btn btn-danger" type="submit">Si</button>
        </form>



      </div>
    </div>
  </div>
</div>