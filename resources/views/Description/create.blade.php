@extends('layouts.app')

@section('content')


<div class="card mb-3 w-50 h-50" style="margin-left: 300px">
    <div class="card-body">

     <form action="{{ route('descriptions.store') }}" method="POST" class="form text-secondary">
        @csrf

  <div class="mb-3">
    <label for="context" class="form-label">Context</label>
    <textarea name="context" id="context" class="form-control"></textarea>
  </div>

  <div class="mb-3">
    <label for="mission" class="form-label">Mission</label>
    <textarea name="mission" id="mission" class="form-control"></textarea>
  </div>

  <div class="mb-3">
    <label for="qualification" class="form-label">Qualification</label>
    <textarea name="qualification" id="qualification" class="form-control"></textarea>
  </div>


  <div class="mb-3">
    <label for="niveauExp" class="form-label">Niveau d'experience</label>
    <input type="text" name="niveauExp" id="niveauExp" class="form-control"/>
  </div>

  <div class="mb-3">
    <label for="niveauEt" class="form-label">Niveau d'Etude</label>
    <input type="text" name="niveauEt" id="niveauEt" class="form-control"/>
  </div>


<div class="col-3">
          <button type="submit" style="background-color: #517EBC" class="btn text-light">
              Publier
          </button>
    </div>
  </div>
</div>


@endsection
