@extends('layouts.app')

@section('content')


<div class="card w-75" style="margin-left: 200px" >
    <h2 class="card-header ">Offres</h2>
      <div class="card-body">
    @if (count($offres) > 0)
    @foreach ($offres as $offre)

    <a href="{{ route('offres.show', [$offre->id ]) }}" class="list-group-item list-group-item-action" aria-current="true">
        <div class="">
          <h4 class="mb-1">{{ $offre->nom }}</h4> <br>
          <h4> <small>{{ $offre->created_at}}</small>|Recruteur:{{ $employeur->nom}}</h4>
        </div>

        <p class="mb-1">{{ $description->context}}</p>
        <p>Lieu :  @foreach (  $offre->lieux as $lieux )
            {{ $lieux->nom }},
            @endforeach
        </p>
      </a>
    @endforeach


    @endif
    </div>
    </div>


@endsection
