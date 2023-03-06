@extends('layouts.dashboard_Employeur')

@section('content')
<div class="main-content dashboard-emploi">
    <div class="toggle" onclick="toggleMenu();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
        </svg>
    </div>
    <div class="entete-main-dashboard">
        <div class="entete-left">
            <h1>Détails de l'utilisateur</h1>
        </div>
    </div>
    <div class="wrapper">
        <div class="box box-style-5 ">
                <div class="title-section content-style two-section ">
                    <div class="title-section-1">
                        <h1>Utilisateur: {{ $user->name }}</h1>
                        <p class="small-text">Email: <b>{{ $user->email }}</b></p>
                    </div>
                    <div>
                        <a href="" class="">Modifier</a>
                        <a href="" class="">Supprimer</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection