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
                    <h1>Détails du projet</h1>
                </div>
            </div>
            <div class="wrapper">
                <div class="box box-style-5 ">
                        <div class="title-section content-style two-section ">
                            <div class="title-section-1">
                                <h1>Projet: {{ $projet->nomStartup }}</h1>
                                <p class="small-text">Porteur du projet: <b>{{ $projet->NomComplet }}</b></p>
                            </div>
                            <div class="title-section-2">
                                @if($projet->expired == 0)
                                    @if(!$projet->investisseurs->contains($investisseur->id))
                                        <a href="{{ route('projet.investir', $projet->id) }}">
                                            <button class="btn btn-green" onclick="return confirm('Confirmez vous l\'investissement à ce projet?')">Investir</button>
                                        </a>
                                    @else
                                        <a class="btn btn-green">
                                            Vous avez Investi
                                        </a>
                                    @endif
                                @else
                                    <span class="btn btn-red">Ce projet a déjà trouvé un investissement</span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <h3>Description du projet</h3>
                            <p>{!! $projet->description !!}</p>
                        </div>
                </div>
            </div>
            <div id="test-lien-offre">
                <div class="wrapper">
                    <div class="title-section">
                        <h1>Les investisseurs pour ce projet</h1>
                    </div>
                    <div class="header-table">
                        <div class="header-table-left">
                            <form action="#" method="post" class="search-form input-search-1">
                                <input type="text" name="search" id="" class="input-search search-style-large input-search-1" placeholder="Rechercher une offre...">
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
            </div>
        </div>
@endsection