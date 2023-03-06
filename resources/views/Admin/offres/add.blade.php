@extends ('layouts.admin.sidebar')
@section('content')
<div class="main-content dashboard-emploi">
    <div>
        @if (session('message'))
            <div id="alert-success">
                {{ session('message') }}
            </div>
        @endif
    
        @if (session('error'))
            <div id="alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="toggle" onclick="toggleMenu();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
        </svg>
    </div>
    <div class="entete-main-dashboard">
        <div class="entete-left">
            <h1>Liste des Offres</h1>
        </div>
        <div class="entete-right">
            <a href="{{  route('admin.offres.add') }}" class="button-add">
                <span> Ajouter une nouvelle offre</span>
            </a>
        </div>
    </div>
    <form action="{{ route('offres.store') }}" method="POST">
        @csrf
        <div class="wrapper wrapper-two-column">
            <div class="card card-style-2">
                <div class="form-group">
                    <label for="employeur_id" class="form-label">Entreprise <span class="required">*</span></label>
                    <span class="form-sub-label">L'entrprise Recruteur</span>
                    <select name="employeur_id" id="" class="form-input">
                        @foreach($entreprises as $e)
                            <option value="{{$e->id}}">{{ $e->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="titre-offre" class="form-label">Titre Offre <span class="required">*</span></label>
                    <span class="form-sub-label">Généralement le poste à pourvoir</span>
                    <input type="text" name="nom" id="titre-offre" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label" for="lieux">Lieu <span class="required">*</span></label>
                    <select name="lieux[]" id="lieux" class="form-input" multiple data-live-search="true" multiple title="Selectionner un ou * lieu...">
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
            </div>
            <div class="card card-style-2">
                <div class="form-group">
                    <label class="form-label" for="domaines">Méthode de Travail <span class="required">*</span></label>
                    <select name="methodeTravails[]" id="methodeTravails" class="form-input" multiple data-live-search="true" multiple title="Selectionner un ou plusieurs Méthode de travail...">
                        @if (count($methodeTravails) >0)
                        @foreach ($methodeTravails as $methodeTravail)
                            <option value="{{$methodeTravail->id}}"> {{$methodeTravail->nom}} </option>
                        @endforeach
                        @endif
                    </select>
                    
                </div>
                <div class="form-group">
                    <label class="form-label" for="domaines">Mode de contrat <span class="required">*</span></label>
                    <select name="contratModes[]" id="contratModes" class="form-input" multiple data-live-search="true" multiple title="Selectionner un ou plusieurs Mode de travail...">
                        @if (count($contratModes) >0)
                        @foreach ($contratModes as $contratMode)
                            <option value="{{$contratMode->id}}"> {{$contratMode->nom}} </option>
                        @endforeach
                        @endif
                    </select>
                    
                </div>
                <div class="form-group">
                    <label class="form-label" for="domaines">Domaines <span class="required">*</span></label>
                    <select name="domaines[]" id="domaines" class="form-input" multiple data-live-search="true" multiple title="Selectionner un ou plusieurs domaines...">
                        @foreach ($domaines as $domaine)
                            <option value="{{ $domaine->id }}">{{ $domaine->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="contrat"> Type de contrat <span class="required">*</span> </label>
                    <select id="contrat" name="contrat_type" class="form-input">
                        <option value="">Selectionner un type de contrat</option>
                        @if(count($contratTypes) >= 1)
                        @foreach($contratTypes as $ID => $type)
                            <option value="{{$type->id}}"> {{$type->nom}} </option>
                        @endforeach
                        @endif

                    </select>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-two-column">
            <div class="card card-style-2">
                <div class="form-group">
                    <label for="contrat" class="form-label">Description <span class="required">*</span></label>
                    <span class="form-sub-label">Le de contrat</span>
                    <div class="container">
                        <div class="options">
                    </div>
                        <textarea class="text-input" contenteditable="true" name="description" cols="90" id="description"></textarea>
                    </div>
                </div>
            </div>
            <div class="card card-style-2"></div>
        </div>
        <button type="button" class="prev btn">Retour</button>
        <button type="submit" class="btn btn-fill">Poster</button>
    </form>
</div>
@endsection