@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Filières</h1>
                <h2>Nouvelle Filière</h2>
            </div>
            <a href="{{ route('activite.index') }}" class="btn btn-icon">
                Les Activités
            </a>
            <a href="{{ route('filiere.index') }}" class="btn btn-icon btn-red">
                Les Filières
            </a>
            <a href="{{ route('departement.index') }}" class="btn btn-blue btn-icon">
                Les Départements
            </a>
            <a href="{{ route('medias.index') }}" class="btn btn btn-icon">
                Les Medias
            </a>
            <a href="{{ route('enseignement.index') }}" class="btn btn-red">
                Les Enseignements
            </a>
        </div>
        <div class="wrapper wrapper-two-columns">
            <div class="card card-style-2 boxed">
                <form action="{{ route('filiere.save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="filere" class="form-label">Nom Filière <span class="required">*</span></label>
                        <input type="text" name="nomFiliere" class="form-input input-style-2">
                    </div>
                    <div class="form-group">
                        <label for="departements" class="form-label">Départements <span class="required">*</span></label>
                        <select name="departement_id" id="" class="form-input select input-style-2">
                            @foreach (auth()->user()->ecole->departements as $departement)
                            <option value="{{ $departement->id }}">{{ $departement->nomDepartement }}</option>
                            @endforeach


                        </select>
                    </div>
                    <div class="form-group select-style-multiple">
                        <label for="contrat" class="form-label">Acréditations</label>
                        <div class="title-select-multiple form-input input-style-2">
                            <span class="title">Acréditations</span>
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="options-list">
                            @foreach ($acreditations as $acreditation)
                            <li class="item">
                                <input name="acreditation[]" value="{{ $acreditation->id }}" type="checkbox" class="checkbox">
                                    <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                    </svg>
                                </input>
                                <span class="item-text">{{ $acreditation->nomAcreditation }}</span>
                            </li>
                            @endforeach
                        </ul>
                        </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="descriptionFiliere" id="" class="form-input text-area input-style-2"></textarea>
                    </div>
                    <input type="button" class="btn btn-fill btn-red" value="Annuler">
                    <input type="submit" class="btn btn-fill" value="Enregistrer">
                </form>
            </div>
            <div class="card card-for-icon">
                <img class="small-media" src="{{ asset('images/gh.png') }}" alt="" srcset="">
            </div>
        </div>
    </div>
    
    @if(Session::has('success'))
    <div class="flash-message flash-success">
        <p class="text">{{Session::get('success')}}</p>
        <a class="close">&times;</a>
    </div>
    @endif

    @if(Session::has('fail'))
    <div class="flash-message flash-error">
        <p class="text">{{Session::get('fail')}}</p>
        <a class="close">&times;</a>
    </div>
    @endif
@endsection
