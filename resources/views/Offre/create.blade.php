@extends('layouts.dashboard_Employeur')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@if(isset($employeur))

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="main-content dashboard-emploi">
          <div class="toggle" onclick="toggleMenu();">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
              </svg>
          </div>
          <div class="entete-main-dashboard">
            <div class="entete-left">
                <h1>Poster une offre</h1>
            </div>
            <div class="entete-right">
                <a href="/modules/emploi/dashboard.html" class="button-add">
                    <span>Consulter les offres</span>
                </a>
            </div>
        </div>
          <div class="new-offre">
            <div class="form-content">
              <div class="form-inputs box-style">
                  <form action="{{ route('offres.store') }}" method="POST">
                  @csrf
                  <input type="hidden" name="employeur_id" value="{{ $employeur->id }}">
                  <div class="step-1" id="step-1">
                          <div class="form-group">
                              <label for="entreprise" class="form-label">Entreprise <span class="required">*</span></label>
                              <span class="form-sub-label">Votre entreprise</span>
                              <input type="text" name="entreprise" id="entreprise" value="{{ $employeur->nom }}" class="form-input">
                          </div>
                          <div class="form-group">
                              <label for="email" class="form-label">Email <span class="required">*</span></label>
                              <span class="form-sub-label">Votre email</span>
                              <input type="email" name="email" id="email" class="form-input" value="{{ $employeur->email }}">
                          </div>
                          <input type="button" class="next btn btn-fill" value="Suivant" id="">
                      </div>
                      <div class="step-2 disabled" id="step-2">
                          <div class="form-group">
                              <label for="titre-offre" class="form-label">Titre Offre <span class="required">*</span></label>
                              <span class="form-sub-label">Généralement le poste à pourvoir</span>
                              <input type="text" name="nom" id="titre-offre" class="form-input">
                          </div>
                         
                          <div class="form-group">
                                <label class="form-label" for="lieux">Lieu <span class="required">*</span></label>
                                <select name="lieux[]" id="lieux" class="form-control selectpicker" multiple data-live-search="true" multiple title="Selectionner un ou * lieu...">
                                        @foreach ($lieux as $lieu)
                                            <option value="{{ $lieu->id }}">{{ $lieu->nom }}</option>
                                        @endforeach
                                </select>
                                
                            </div>
                         
                          <div class="form-group">
                              <label for="date-limite" class="form-label">Date limite <span class="required">*</span></label>
                              <span class="form-sub-label">Jusqu'à quand loffre est elle valable?</span>
                              <input type="date" name="dateLimite" id="date-limite" class="form-input">
                          </div>
                          <button type="button" class="prev btn">Retour</button>
                          <input type="button" class="next btn btn-fill" value="Suivant" id="">
                      </div>

                      <div class="step-3 disabled" id="step-3">
                          <div class="form-group">
                              <label for="contrat" class="form-label">Description <span class="required">*</span></label>
                              <span class="form-sub-label">Le de contrat</span>
                              <div class="container">
                                  <div class="options">


                              </div>
                                  <textarea class="text-input" contenteditable="true" name="description" cols="90" id="description"></textarea>
                              </div>
                          </div>
                          <button type="button" class="prev btn">Retour</button>
                          <button type="button" class="next btn btn-fill">Suivant</button>
                      </div>
                      
                      
                      <div class="step-6 disabled" id="step-4">
                            <div class="form-group">
                                <label class="form-label" for="domaines">Domaines <span class="required">*</span></label>
                                <select name="domaines[]" id="domaines" class="form-control selectpicker" multiple data-live-search="true" multiple title="Selectionner un ou plusieurs domaines...">
                                        @foreach ($domaines as $domaine)
                                            <option value="{{ $domaine->id }}">{{ $domaine->nom }}</option>
                                        @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="contrat"> Type de contrat <span class="required">*</span> </label>
                                <select id="contrat" name="contrat_type" class="form-control selectpicker">
                                    <option value="">Selectionner un type de contrat</option>
                                    @if(count($contratTypes) >= 1)
                                    @foreach($contratTypes as $ID => $type)
                                        <option value="{{$type->id}}"> {{$type->nom}} </option>
                                    @endforeach
                                    @endif

                                </select>
                            </div> 
                            <div class="form-group">
                                <label class="form-label" for="domaines">Méthode de Travail <span class="required">*</span></label>
                                <select name="methodeTravails[]" id="methodeTravails" class="form-control selectpicker" multiple data-live-search="true" multiple title="Selectionner un ou plusieurs Méthode de travail...">
                                    @if (count($methodeTravails) >0)
                                    @foreach ($methodeTravails as $methodeTravail)
                                        <option value="{{$methodeTravail->id}}"> {{$methodeTravail->nom}} </option>
                                    @endforeach
                                    @endif
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="domaines">Mode de contrat <span class="required">*</span></label>
                                <select name="contratModes[]" id="contratModes" class="form-control selectpicker" multiple data-live-search="true" multiple title="Selectionner un ou plusieurs Mode de travail...">
                                    @if (count($contratModes) >0)
                                    @foreach ($contratModes as $contratMode)
                                        <option value="{{$contratMode->id}}"> {{$contratMode->nom}} </option>
                                    @endforeach
                                    @endif
                                </select>
                                
                            </div>
                        
                          <button type="button" class="prev btn">Retour</button>
                          <button type="submit" class="btn btn-fill">Poster</button>
                      </div>
                  </form>
              </div>

            </div>
            <div class="image-new-offre">
              <img src="{{ asset('images/entretien2.png') }}" alt="" class="middle-media">
            </div>
          </div>
        </div>
      </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/pagination.js') }}"></script>
    <script src="{{ asset('js/multi-select-options.js') }}"></script>
    <script src="{{ asset('js/multi-step-form.js') }}"></script>
    <script src="{{ asset('js/wysiwyg.js') }}"></script>
    <script src="{{ asset('js/toggle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
      @endif
@endsection