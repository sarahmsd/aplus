@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="l-header-admin">
        <div class="">
            <ul class="nav-menu menu-admin">
                <li class="nav-menu-item">
                    <a href="" class="nav-menu-item-link">Ecole</a>
                </li>
                <li class="nav-menu-item">
                    <a href="" class="nav-menu-item-link">Emploi</a>
                </li>
                <li class="nav-menu-item">
                    <a href="" class="nav-menu-item-link">Projet</a>
                </li>
                <li class="nav-menu-item">
                    <a href="" class="nav-menu-item-link">CV Thèque</a>
                </li>
            </ul>
        </div>
        <div class="line-with-logo">
            <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" srcset="" class="module-media">
        </div>
    </div>
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Filières</h1>
                <h2>Nouvelle Filière</h2>
            </div>
            <a href="annexes.html" class="btn btn-icon btn-fill">
                Liste des Annexes
            </a>
            <a href="filieres.html" class="btn btn-fill btn-icon btn-red">
                Filières
            </a>
            <a href="departements.html" class="btn btn-fill btn-blue btn-icon">
                Départements
            </a>
            <a href="cycles.html" class="btn btn-fill">
                Enseignement
            </a>
            <a href="activites.html" class="btn btn-fill btn-blue">
                Activités
            </a>
        </div>
        <div class="wrapper wrapper-two-column">
            <div class="card card-style-2 boxed">
                <form action="{{ route('update.filiere',$filiere->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="filere" class="form-label">Nom Filière <span class="required">*</span></label>
                        <input type="text" name="nomFiliere" value="{{ $filiere->nomFiliere }}" class="form-input input-style-2">
                    </div>
                    <div class="form-group">
                        <label for="departements" class="form-label">Départements <span class="required">*</span></label>
                        <select name="departement_id" id="" class="form-input select input-style-2">
                            <option value="{{ $filiere->departement_id }}">{{ $filiere->departement->nomDepartement }}</option>
                            @foreach (auth()->user()->ecole->departements as $departement)
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
                    <div class="card-grid" >
                        @foreach ($acreditations as $acreditation)
                        <div class="small-card boxed">
                        <input name="acreditation[]" value="{{ $acreditation->id }}"  type="checkbox" class="radio-input" {{ isset($acreditation->filieres[0]->id) && $acreditation->filieres[0]->id  === $filiere->id ? 'checked' : ''}}>
                            <span class="item-text">{{ $acreditation->nomAcreditation }}</span>
                        </div>
                        @endforeach
                    </div>
                    <input type="submit" class="btn btn-fill" value="Enregistrer">
                </form>
            </div>
        </div>
    </div>
@endsection
