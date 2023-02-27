@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Trains</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-header">
          Treno "azienda" "codice treno"
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Partenza: "stazione di partenza" alle "oraio di partenza"</li>
          <li class="list-group-item">Arrivo: "stazione di arrivo" alle "oraio di arrivo"</li>
          <li class="list-group-item">"numero carrozze"</li>
          <li>Ritardo: "" - Treno cancellato: ""</li>
        </ul>
    </div>
</div>
@endsection