@extends('Ecole.Dashbord.Sidebar.navbar')
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
                    <h1>Départements</h1>
                    <h2>Nouveau département</h2>
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
            <div class="wrapper wrapper-two-columns">
                <div class="card card-style-2 boxed">
                    <form action="{{ route('departement.save') }}" method="post">
                        @csrf
                        <input hidden name="ecole_id" value="{{ auth()->user()->ecole->id }}" type="text">
                        <div class="form-group">
                            <label for="Departement" class="form-label">Nom Département <span class="required">*</span></label>
                            <input type="text" name="nomDepartement" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="descriptionDepartement" id="" class="form-input text-area input-style-2"></textarea>
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
@endsection





