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
            <h1>Détails du Projet</h1>
        </div>
        <div class="entete-right">
            <a href="{{ route('admin.projets') }}" class="button-add">
                <span> Liste des projets</span>
            </a>
        </div>
    </div>
    <div class="entete-main-dashboard">
        <div class="entete-left">
            <h1>{{ $projet->nomStartup ?? 'Projet sans nom' }}</h1>
        </div>
        <div class="buttons">
            <a href="">
                <button class="btn btn-red" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet?')">Supprimer</button>
            </a>
            @if($projet->status == 0)
                <a href="{{ route('validation', $projet->id)}}">
                    <button class="btn btn-red" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir valider ce projet?')">Valider le projet</button>
                </a>
            @else
                <span class="btn btn-green">Ce projet a déjà été validé</span>
            @endif
        </div>
    </div>
    <div class="wrapper">
        <div class="box box-style-5 ">
            <h3>Description du projet</h3>
            <p>{!! $projet->description !!}</p>
        </div>
    </div>
</div>
@endsection