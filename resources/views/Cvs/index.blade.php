@extends('layouts.app')

@section('content')

<div class="list-group">
   
  
@foreach ($cvs as $key => $cv)
      

<a href="{{ route('cvs.show', [$cv->id]) }}" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $cv->postRecherche }}</h5>
    </div>
    <p class="mb-1">Nom: {{ $cv->nom }}</p>
    <p class="mb-1">Prenom: {{ $cv->prenom }}</p>
    <p class="mb-1">Address: {{ $cv->adress }}</p>
    <p class="mb-1">Tel: {{ $cv->tel }}</p>

    <small>And some small print.</small>
  </a>
@endforeach

</div>
@endsection