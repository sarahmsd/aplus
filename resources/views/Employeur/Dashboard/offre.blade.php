<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard_emploi</title>
    <link rel="stylesheet" href="{{ asset('css/scss/style.css') }}">

</head>
<body>
    <header class="l-header">
        <div class="l-header-minimal with-border" id="navbar">
            <div class="header-logo">
                <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png') }}" alt="" class="header-logo-img">
            </div>

            <div class="header-icons">
                <ul class="header-top-icons-menu">
                    <li class="header-top-icon-menu">
                        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                            <path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="58">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                        </svg>
                    </li>
                    <span class="vertical-line"></span>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="58">
                            <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>
                    </li>
                    <div class="menu-toggle">
                        <div class="hamburger">
                            <span></span>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </header>

    <div class="l-main sidebar-left dashboard-emploi">
        <div class="emploi-sidebar-left">
            <div class="sidebar-logo">
                <img src="../../public/images/Orange_logo.png" alt="" class="sidebar-logo-img">
            </div>
            <div class="menu-sidebar position">
                <a class="icone"  href="/modules/emploi/poster_offre.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                    </svg>
                    <span>Ajouter une offre</span>
                </a>
                <a class="icone active"  href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/>
                    </svg>
                    <span>Offres</span>
                </a>
                <a class="icone"  href="/modules/emploi/candidats.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                    </svg>
                    <span>Candidats</span>
                </a>
                <a class="icone"  href="/modules/emploi/message.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg>
                    <span>Messages</span>
                </a>
            </div>
        </div>
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
                                        <button class="btn btn-red">Supprimerr</button>
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
                                    <h3>Type de contrat</h3>
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
                                    <h3>Mode de contrat</h3>
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
                        <h1>Les candidatures pour cette offre d’emploi Nº12</h1>
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

     @foreach($profilCandidats as $candidat)

                <div class="cartes candidature">
                    <div class="carte candidature">
                        <div class="card-offre-left">
                            <a href="" class="logo"><img src="{{ asset('images/CV-Assistant-Comptable-1.jpeg') }}" alt="" class="xsmall-media"></a>
                        </div>
                        <div class="card-offre-center">
                            <div class="content-top">
                                <span>Offre Nº{{ $offre->id }}</span>
                                <span class="title-top">{{ $candidat->nom }}</span>
                                <span>Assistant Comptable</span>
                            </div>
                            <div class="content-bottom">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                                    <span>{{ $candidat->address }}</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                    </svg>
                                    <span>{{ $candidat->address }}</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                    </svg>
                                    <span>{{ $candidat->email }}</span>
                                </div>
                                <div class="date-envoi">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"/>
                                    </svg>
                                    <span>Envoyé le 26/10/2022 à 14h51mn</span>
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
                                <a href="{{ route('candidats.show', [$candidat->id]) }}">
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
    </div>
    <footer class="l-footer">
        <div class="footer-left">
            <ul class="menu-footer">
                <li class="menu-footer-item"> copyright &copy; 2022, AcademiePlus.</li>
                <li class="menu-footer-item">Politique de confidentialité</li>
                <li class="menu-footer-item">Sécurité</li>
            </ul>
        </div>
        <div class="footer-right">
            <ul class="socials-icons">
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                        <path fill="#0009" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                    </svg>
                </li>
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                        <path fill="#0009" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                    </svg>
                </li>
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                        <path fill="#0009" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                    </svg>
                </li>
            </ul>
        </div>
    </footer>
    <script src="{{ asset('js/pagination.js') }}"></script>
    <script src="asset('js/toggle.js')"></script>

</body>
</html>
