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
            <h1>Détails de l'école {{ $ecole->sigle }}</h1>
        </div>
        <div class="entete-right">
            <a href="{{  route('admin.ecoles.index') }}" class="button-add">
                <span> Liste des écoles</span>
            </a>
        </div>
    </div>
    <div class="wrapper">
        <div>
            <div class="header-table">
                <div class="header-table-left">
                    <form action="" method="post" class="search-form input-search-1">
                        <input type="text" name="search" id="" class="input-search search-style-large input-search-1" placeholder="Rechercher un utilisateur...">
                    </form>
                </div>
                <div class="header-table-right">
                    <div class="input-group select-style-simple ">
                        <div class="select-box box-filter">
                            <div class="options-container">
                            <div class="option">
                                <input type="radio" class="radio" id="automobiles" name="category"/>
                                <label for="informatique">Domaine</label>
                            </div>
                            <div class="option">
                                <input type="radio" class="radio" id="science" name="category" />
                                <label for="science">Titre Poste</label>
                            </div>
                            <div class="option">
                                <input type="radio" class="radio" id="art" name="category" />
                                <label for="art">Ville</label>
                            </div>
                            <div class="option">
                                <input type="radio" class="radio" id="music" name="category" />
                                <label for="music">Type Contrat</label>
                            </div>

                            </div>
                            <div class="selected input-text selected-filter">
                                <span class="selected-item">Trier par...</span>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                                <input type="hidden" name="domaine" class="input-for-select">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style-2">
            <div>
                <h4>Ecole: {{$ecole->ecole}}</h4>
                <h4>Sigle: {{$ecole->sigle}}</h4>
                <h4>Adresse: {{$ecole->adresse}}</h4>
                <h4>SiteWeb: {{$ecole->siteWeb}}</h4>
                <h4>Linkedin: {{$ecole->linkedin}}</h4>
                <h4>Created by: {{$ecole->creator->name ?? ''}}</h4>
            </div>
            <div>
                <a href="{{ route('admin.ecoles.edit', $ecole->id) }}">modifier</a>
                <a href="{{ route('admin.ecoles.delete', $ecole->id) }}">supprimer</a>
            </div>
        </div>
        <div class="card card-style-2">
            <h3>Départements</h3>
            <div class="wrapper wrapper-flex">
                @foreach($ecole->departements as $departement)
                    <div class="small-card">
                        <a href="{{ route('admin.ecoles.editDept', $departement->id) }}">{{$departement->nomDepartement}}</a>
                        <form action="{{ route('delete.departement', $departement->id) }}" method="get">
                            @csrf
                            <a class="delete-btn">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </a>
                        </form>
                    </div>
                    <div class="wrapper wrapper-flex">
                        @foreach($departement->filieres as $filiere)
                        <div class="small-card">
                            <a href="{{route('admin.ecoles.filieres.edit', [$filiere->id, $ecole->id])}}">{{ $filiere->nomFiliere}}</a>
                            <form action="{{ route('delete.filiere', $filiere->id) }}" method="get">
                                @csrf
                                <a class="delete-btn">supprimer</a>
                            </form>
                        </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div>
                <a href="{{ route('admin.ecoles.addDept', $ecole->id) }}" class="button-add">Ajouter un département</a>
            </div>
        </div>
        <div class="card card-style-2">
            <h3>Fileres</h3>
            <div>
                <a href="{{ route('admin.ecoles.filieres.add', $ecole->id) }}">Ajouter</a>
            </div>
        </div>
    </div>
@endsection