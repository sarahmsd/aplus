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
                    <h1>Détails de l'offre</h1>
                </div>
                <div class="entete-right">
                    <a href="/modules/emploi/new_offre.html" class="button-add">
                        <span> Publier une offre</span>
                    </a>
                </div>
            </div>
            <div class="entete-main-dashboard">
                <div class="entete-left">
                    <h1>Offre d'emploi: {{ $offre->nom }}</h1>
                </div>
                <div class="entete-right">
                    <a href="#test-lien-offre" class="button-offre-cv">
                        <span>Candidatures pour cette offre</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="wrapper">
                <div class="box box-style-5 ">
                        <div class="title-section content-style two-section ">

                            <div class="title-section-2">
                                <div class="buttons">
            
                                    <a href="{{ route('offres.edit', [$offre->id]) }}">         
                                        <span class="btn btn-green">Modifier</span>
                                    </a>
                                    <a href="{{ route('deleteOffre.destroy',$offre->id) }}">
                                        <button class="btn btn-red" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette offre?')">Supprimer</button>

                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="title-section-1">
                            <h1>Offre d'emploi: {{ $offre->nom }}</h1>
                        </div>
                        <div class="wrapper style-offre">
                            <h1>Critères de l'offre</h1>
                            <div class="critere-offre">
                                <div>
                                    <h3>Mode de contrat</h3>
                                    <span>@foreach (  $offre->contrat_modes as $contratMode )
                                        {{ $contratMode->nom }}
                                         @endforeach
                                   </span>
                                </div>
                                <div>
                                    <h3>Méthode de travail</h3>
                                    <span>@foreach (  $offre->methode_travails as $methode_travails )
                                        {{ $methode_travails->nom }}
                                        @endforeach
                                    </span>
                                </div>
                                <div>
                                    <h3>Type de contrat</h3>
                                    <span>{{ $contratType->nom }}</span>
                                </div>
                                <div>
                                    <h3>Domaine</h3>
                                    <span> @foreach (  $offre->domaines as $domaine )
                                        {{ $domaine->nom }}
                                        @endforeach
                                    </span>
                                </div>
                                <div>
                                    <h3>Lieu</h3>
                                    <span>@foreach (  $offre->lieux as $lieux )
                                        {{ $lieux->nom }}
                                        @endforeach
                                    </span>
                                </div>

                                <div>
                                    <h3>Date limite</h3>
                                    <span>{{ date('d/m/Y', strtotime( $offre->dateLimite )) }}</span>
                                </div>
                            </div>
                        </div>

                        <p>
                            <div class="wrapper">
                                <div class="card card-style-2">
                                    <h3>Détails du poste</h3>
                                    {!! $offre->description !!}
                                </div>
                            </div>
                        </p>

                </div>
            </div>
            <div id="test-lien-offre">
                <div class="wrapper">
                    <div class="title-section">
                        <h1>Les candidatures pour cette offre d’emploi: Nº{{$offre->id}}</h1>
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
                    <div class="cartes candidature">
                        @foreach($profilCandidats as $candidature)
                            <div class="carte candidature">
                                <div class="card-offre-left">
                                    <a href="" class="logo"><img src="{{ asset('images/CV-Assistant-Comptable-1.jpeg') }}" alt="" class="xsmall-media"></a>
                                </div>
                                <div class="card-offre-center">
                                    <div class="content-top">
                                        <span>Offre Nº{{ $offre->id }}</span>
                                        <span class="title-top">{{ $candidature->user->candidat->prenom}} {{ $candidature->user->candidat->nom }}</span>
                                        <span>{{ $candidature->linkedin}}</span>
                                    </div>
                                    <div class="content-bottom">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                                            <span>{{ $candidature->user->candidat->adress }}</span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                            </svg>
                                            <span>{{ $candidature->user->candidat->tel }}</span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                            </svg>
                                            <span>{{ $candidature->user->email }}</span>
                                        </div>
                                        <div class="date-envoi">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"/>
                                            </svg>
                                            <span>Envoyé le {{ $candidature->created_at}}</span>
                                        </div>
                                    </div>
                                    <div class="right">

                                    </div>
                                </div>
                                <div class="card-offre-right">
                                    <div class="offre-right-top">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="offre-right-bottom">
                                        <a href="{{ route('candidats.show', [$candidature->id]) }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/>
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
            <div class="title-section two-section">
                <div class="title-section-1">
                    <div class="card-btn">
                        <button class="btn btn-small btn-left-1">Afficher toutes mes offres demploi</button>
                    </div>
                </div>
                <div class="title-section-2">
                    <div class="pagination">
                        <button class="btnPage1" onclick="backBtn()">Précédent</button>
                        <ul>
                            <li class="link active" value="one" onclick="activeLink()">1</li>
                            <li class="link" value="2" onclick="activeLink()">2</li>
                            <li class="link" value="3" onclick="activeLink()">3</li>
                        </ul>
                        <button class="btnPage2" onclick="nextBtn()">Suivant</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
@endsection