@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger" style="margin-left: 1000px" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-eye"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialogue-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="{{ route('monCv') }}" title="moncv" height="900" width="100%"></iframe>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('telecharger') }}" class="btn btn-primary">Telecharger</a>
      </div>
    </div>
  </div>
</div>


@if(isset($cv))

<div class="row">
<div class="col-3 py-5 px-2" style="background-color:  #517EBC;">
<div class="card mb-4 ms-3" style="width: 18rem;">
    <div class="card-header">
      Coordonnées
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Adress: {{ $candidat->adress }}</li>
      <li class="list-group-item">Email: {{ $candidat->email }}</li>
      <li class="list-group-item">{{ $candidat->tel }}</li>

    </ul>
  </div>

  <div class="card mb-4 mx-3" style="width: 18rem;">
    <div class="card-header">
      Specialités
    </div>
    <ul class="list-group list-group-flush">

    @foreach ($cv->specialites as $specialite )
    <li class="list-group-item">{{ $specialite->nom }}</li>

    @endforeach
    </ul>

    @if($candidat->user_id == auth()->user()->id)
    <div class="card">
    <div class="card-body ">
    <form action="{{ route('competences.store') }}" method="post">
        @csrf


        <div class="wrapp">
            <input type="hidden" name="cv" value="{{ $cv->id }}">

            <a href="javascript:void(0);" class="addCompetence btn btn-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i></a>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    </div>
    </div>
    @endif


  </div>

  <div class="card mb-2 mx-3" style="width: 18rem;">
    <div class="card-header">
      Langues
    </div>
    <ul class="list-group list-group-flush">

        @foreach ($cv->langues as $langue )
        <li class="list-group-item">{{ $langue->nom }}: {{ $langue->niveau }}</li>

        @endforeach

    </ul>

    @if($candidat->user_id == auth()->user()->id)
    <div class="card">
    <div class="card-body ">
    <form action="{{ route('langues.store') }}" method="post">
        @csrf

        <div class="wrappe">
            <input type="hidden" name="cv" value="{{ $cv->id }}">

            <a href="javascript:void(0);" class="addLangue btn btn-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i></a>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    </div>
    </div>
    @endif

  </div>


</div>

<div class="col-9">
 <h2 class="">{{ $candidat->nom }}  {{ $candidat->prenom }} </h2>
 <h4>{{ $cv->postRecherche }}</h4>

 <h5>Formations</h5>

 <ul class="list-group list-group-numbered">

    @if(!is_null($formation) )
    @foreach ($formation as $form )

    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $form->nom }}</div>
        <h6>{{ $form->dateDebut}} - {{ $form->dateFin }}| {{ $form->etablissement }} à {{ $form->lieu }}</h6>
        <p>{{ $form->description }}</p>
        </div>
      </li>

    @endforeach
    @endif

    @if($candidat->user_id == auth()->user()->id)
    <div class="card w-50">
    <div class="card-body ">
    <form action="{{ route('formations.store') }}" method="post">
        @csrf


        <div class="field_wrapper">
            <input type="hidden" name="cv" value="{{ $cv->id }}">

             <a href="javascript:void(0);" class="addFormation btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter une formation</a>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    </div>
    </div>
    @endif

  </ul>

  <h5>Experience</h5>

  <ul class="list-group list-group-numbered">

     @if(!is_null($experience) )
     @foreach ($experience as $exp )

     <li class="list-group-item d-flex justify-content-between align-items-start">
         <div class="ms-2 me-auto">
           <div class="fw-bold">{{ $exp->nom }}</div>
         <h6>{{ $exp->dateDebut }} - {{ $exp->dateFin }}| {{ $exp->entreprise }} à {{ $exp->lieu }}</h6>
         <p>{{ $exp->description }}</p>
         </div>
       </li>

     @endforeach
     @endif

     @if($candidat->user_id == auth()->user()->id)
     <div class="card w-50">
     <div class="card-body ">
     <form action="{{ route('experiences.store') }}" method="post">
        @csrf


         <div class="wraper">
             <input type="hidden" name="cv" value="{{ $cv->id }}">

             <a href="javascript:void(0);" class="addExperience btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter une experience</a>
            </div>
         <button type="submit" class="btn btn-success">Ajouter</button>
     </form>
     </div>
     </div>
     @endif


   </ul>

   <h5>Loisirs</h5>

   <ul class="list-group list-group-numbered">

      @if(!is_null($divers) )
      @foreach ($divers as $diver )

      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">{{ $diver->nom }}</div>
          </div>
        </li>

      @endforeach
      @endif

      @if($candidat->user_id == auth()->user()->id)
     <div class="card w-50">
     <div class="card-body ">
     <form action="{{ route('loisirs.store') }}" method="post">
        @csrf

         <div class="wrap">
             <input type="hidden" name="cv" value="{{ $cv->id }}">

             <a href="javascript:void(0);" class="addLoisir btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter un loisir</a>
            </div>
         <button type="submit" class="btn btn-success">Ajouter</button>
     </form>
     </div>
     </div>
     @endif


    </ul>


</div>

</div>

@else
  <h3>Vous navez pas de cv</h3>
@endif


<script src="{{ asset('js/cv.js') }}"></script>


@endsection
