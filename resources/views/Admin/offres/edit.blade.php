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
            <h1>Modifier l'offre {{ $offre->nom }}</h1>
        </div>
        <div class="entete-right">
            <a href="{{  route('admin.offres.add') }}" class="button-add">
                <span> Ajouter une nouvelle offre</span>
            </a>
        </div>
    </div>
    <div class="offre-left">
        <div class="entete-offre">
            <h1 class="form-title">Modification Offre : {{ $offre->nom }}</h1>
        </div>
        <form action="{{ route('updateOffre.update', $offre->id) }}" method="POST" class="form text-secondary">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label  class="form-label" for="nomEntreprise">Titre Offre</label>
                <input type="text" id="nomEntreprise" class="form-control" name="nom" value=" {{ $offre->nom }}"/>
            </div>
            <div class="form-group">
                <label class="form-label" for="domaines">Domaines <span class="required">*</span></label>
                <select name="domaines[]"  id="domaines" class="form-control selectpicker" multiple data-live-search="true" >
                        @foreach ($domaines as $domaine)
                            <option value="{{ $domaine->id }}" {{ in_array($domaine->id, $offre->domaines->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $domaine->nom }}</option>
                        @endforeach
                </select>
                
            </div>
            <div class="form-group">
                <label class="form-label" for="contrat"> Type de contrat <span class="required">*</span> </label>
                <select id="contrat" name="contrat_type" class="form-control selectpicker">
                    <option value="">Selectionner un type de contrat</option>
                    @foreach($contratTypes as $ID => $type)
                        <option value="{{$type->id}}" {{ $type->id == $offre->contrat_type ? 'selected' : ''}}> {{$type->nom}} </option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="lieux">Lieu <span class="required">*</span></label>
                <select name="lieux[]"  id="lieux" class="form-control selectpicker" multiple data-live-search="true" >
                        @foreach ($lieux as $lieu)
                            <option value="{{ $lieu->id }}" {{ in_array($lieu->id, $offre->lieux->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $lieu->nom }}</option>
                        @endforeach
                </select>
                
            </div>
            <div class="form-group">
                <label class="form-label" for="contratModes">Mode de Contrat <span class="required">*</span></label>
                <select name="contratModes[]"  id="contratModes[]" class="form-control selectpicker" multiple data-live-search="true" >

                    @foreach ($contratModes as $contratMode)
                            <option value="{{ $contratMode->id }}" {{ in_array($contratMode->id, $offre->contrat_modes->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $contratMode->nom }}</option>
                        @endforeach
                </select>
                
            </div>
            <div class="form-group">
                <label class="form-label" for="methodeTravails">Methode de Travail <span class="required">*</span></label>
                <select name="methodeTravails[]"  id="methodeTravails" class="form-control selectpicker" multiple data-live-search="true" >

                    @foreach ($methodeTravails as $methodeTravail)
                            <option value="{{ $methodeTravail->id }}" {{ in_array($methodeTravail->id, $offre->methode_travails->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $methodeTravail->nom }}</option>
                        @endforeach
                </select>
                
            </div>
            <div class="form-group">
                <label for="date-limite" class="form-label">Date limite <span class="required">*</span></label>
                <span class="form-sub-label">Jusqu'à quand loffre est elle valable?</span>
                <input type="date" name="dateLimite" value="{{ $offre->dateLimite }}" id="date-limite" class="form-input">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description <span class="required">*</span></label>
                <span class="form-sub-label">Description complète de l'offre</span>
                <div class="container">
                    <div class="options"></div>
                    <textarea class="text-input" contenteditable="true" name="description" cols="90" id="description">{!! $offre->description !!}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-fill">Modifier</button>
        </form>
    </div>
</div>
@endsection