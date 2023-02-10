@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Activités</h1>
                <h2>Nouvelle Activité</h2>
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
