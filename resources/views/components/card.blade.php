  @props(["project"])


  <div class="card">

      <div class="card-body">
          <h4 class="card-title mb-3">{{ $project->title }}</h4>
          <a class="btn btn-success" href="{{ route("project.show",$project->id) }}">Vai al progetto</a>
      </div>
  </div>