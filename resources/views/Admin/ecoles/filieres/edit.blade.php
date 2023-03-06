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
            <h1>Nouvel Utilisateur</h1>
        </div>
    </div>
    <div class="wrapper wrapper-two-column">
        <div class="card card-style-2 boxed">
            <form action="{{ route('update.filiere', $filiere->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="filere" class="form-label">Nom Filière <span class="required">*</span></label>
                    <input type="text" name="nomFiliere" value="{{ $filiere->nomFiliere }}" class="form-input input-style-2">
                </div>
                <div class="form-group">
                    <label for="departements" class="form-label">Départements <span class="required">*</span></label>
                    <select name="departement_id" id="" class="form-input select input-style-2">
                        <option value="{{ $filiere->departement_id }}">{{ $filiere->departement->nomDepartement }}</option>
                        @foreach ($ecole->departements as $departement)
                        <option value="{{ $departement->id }}">{{ $departement->nomDepartement }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="descriptionFiliere" id="" class="form-input text-area input-style-2">{{ $filiere->descriptionFiliere }}</textarea>
                </div>
                <input type="button" class="btn btn-fill btn-red" value="Annuler">
                <input type="submit" class="btn btn-fill" value="Enregistrer">
            </form>
        </div>
        <div class="card card-style-2 boxed">
            <div class="title-section">
            <h2>Mettre à jour les accreditations</h2>
            </div>
            <form method="post" action="{{ route('update.filiere', $filiere->id) }}">
            @csrf
                <div class="card-grid">
                    @foreach ($acreditations as $acreditation)
                    <div class="small-card boxed">
                    <input name="acreditation[]" value="{{ $acreditation->id }}"  type="checkbox" class="radio-input" {{ isset($acreditation->filieres) && $acreditation->filieres->contains($filiere) ? 'checked' : ''}}>
                        <span class="item-text">{{ $acreditation->nomAcreditation }}</span>
                    </div>
                    @endforeach
                </div>
                <input type="submit" class="btn btn-fill" value="Enregistrer">
            </form>
        </div>
    </div>
@endsection