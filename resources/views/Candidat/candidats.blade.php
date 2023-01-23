@extends('layouts.app')

@section('content')


<div class="" style="margin-left: 200px; margin-top: 30px" >

    <h2 class=" ">Candidats</h2>
      <div class="">
    @if (count($candidats) > 0)
    @foreach ($candidats as $candidat)

    <a href="{{ route('candidats.show', [$candidat->id]) }}" class="list-group-item list-group-item-action" aria-current="true">
        <div class="">
         <img src="images/{{ $candidat->photo }}" style="width: 50px; height: 50px" alt="">
          <p class="">{{ $candidat->nom }} {{ $candidat->prenom }}</p>
          <p class="">{{ $candidat->adress }} </p>
          <p class="">{{ $candidat->email }} </p>
          <p class="">{{ $candidat->tel }} </p>


      </a>
    @endforeach
    @else
    <p>Aucun candidat</p>

    @endif
    </div>
    </div>


@endsection
