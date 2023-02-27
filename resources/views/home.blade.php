@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Trains</h1>

    @foreach ($trains as $train)
    <div class="card" style="width: 18rem;">
        <div class="card-header">
          Treno {{$train->company}} {{$train->train_code}}
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Partenza: {{$train->departure_station}} alle {{$train->departure_hour}} il {{$train->departure_day}}</li>
          <li class="list-group-item">Arrivo: {{$train->arriving_station}} alle {{$train->arriving_hour}} il {{$train->arriving_day}}</li>
          @if ($train->wagon_number)
            <li class="list-group-item">Numero carrozze: {{$train->wagon_number}}</li>
          @endif
          @if ($train->is_cancelled)
            <li>Il Treno è stato cancellato</li>
          @else
            <li>Ritardo: @if ($train->is_on_time) Non c'è nessun ritardo @else Il treno è in ritardo @endif</li>
          @endif
        </ul>
    </div>
    @endforeach
</div>
@endsection