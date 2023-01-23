@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Activités</h1>
                <h2>Nouvelle Activité</h2>
            </div>
            <a href="activites.html" class="btn btn-icon btn-fill">
                Liste des Activités
            </a>
            <a href="annexes.html" class="btn btn-fill btn-blue">
                Annexes
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
        </div>
        <div class="wrapper wrapper-two-column">
            <div class="card card-style-2 boxed">
                <form action="{{ route('activite.save') }}" method="post" class="form-input" enctype="multipart/form-data">
                    @csrf
                    <input hidden name="ecole_id" value="{{ auth()->user()->ecole->id }}" type="text">
                    <div class="form-group">
                        <label for="activite" class="form-label">Nom Activité <span class="required">*</span></label>
                        <input type="text" name="nomActivite" class="form-input input-style-2">
                    </div>
                    <div class="form-group">
                        <label for="media" class="form-label">Medias</label>
                        <input type="file" name="medias" class="form-input input-style-2">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="descriptionActivite" id="" class="form-input text-area input-style-2"></textarea>
                    </div>
                    <input type="button" class="btn btn-fill btn-red" value="Annuler" onclick="launch_toast('error')">
                    <input type="submit" class="btn btn-fill" value="Enregistrer">
                </form>
            </div>
            <div class="card card-for-icon">
                <img class="small-media" src="{{ asset('images/Hero-formation.jpeg') }}" alt="" srcset="">
            </div>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif
@endsection
