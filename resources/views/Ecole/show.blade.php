
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Page Ecole</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
    <link href="https://fonts.cdnfonts.com/css/futura-pt" rel="stylesheet">

    <style>
        .l-school {
            background-image: url('<?= (isset($cover)) ? asset('storage/images/'. $cover->media) : asset('images/etudiants.jpg') ?>');
        }
    </style>
</head>
<body>
    <header class="l-header">
        <div class="l-header-top">
            <div class="header-top-logo">
                <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png') }}" alt="" class="header-logo-img">
            </div>
            <div class="l-nav">
                <span class="btn-toggle" id="btn-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                    </svg>
                </span>
               
                <ul class="nav-menu menu-top">
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
            <div class="header-top-icons">
                <ul class="header-top-icons-menu">
                    <li class="header-top-icon-menu-item">
                        <a href="{{ auth()->user() ? route('getprofil', auth()->user()->id) : route('login') }}">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                                <path fill="#FFF" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                            </svg>
                            @if(auth()->user())
                                <span class="header-top-icon-menu-item-link">Mon compte</span>
                            @else
                                <span class="header-top-icon-menu-item-link">Connexion</span>
                            @endif
                        </a>
                    </li>
                    <li class="header-top-icon-menu-item">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                            <path fill="#FFF" d="M32 0C46.3 0 58.4 9.4 62.5 22.3l.1 0-.1 .1 .1 .3 0-.4C89.8 11.5 128.1 0 168 0c38.8 0 74.6 9.1 105.7 17C306 25.2 332.9 32 360 32c26.8 0 52.9-6.8 73-14.1c9.9-3.6 17.9-7.2 23.4-9.8c2.7-1.3 4.8-2.4 6.2-3.1c.7-.4 1.1-.6 1.4-.8l.2-.1c9.9-5.6 22.1-5.6 31.9 .2S512 20.6 512 32V320c0 12.1-6.8 23.2-17.7 28.6L480 320c14.3 28.6 14.3 28.6 14.3 28.6l0 0 0 0-.1 0-.2 .1-.7 .4c-.6 .3-1.5 .7-2.5 1.2c-2.2 1-5.2 2.4-9 4c-7.7 3.3-18.5 7.6-31.5 11.9C424.5 374.9 388.8 384 352 384c-37 0-65.2-9.4-89-17.3l-1-.3c-24-8-43.7-14.4-70-14.4c-27.9 0-64.7 7.2-96.2 15c-12.1 3-23 6-31.8 8.6V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352 72 32C0 14.3 14.3 0 32 0zM64 158.4c17.5-4.9 40.4-10.7 64-15.2V68.8c-15 3.3-29.3 8.1-42 13c-8.5 3.4-16 6.7-22 9.6v67zm0 80v70.8c5.1-1.4 10.6-2.8 16.2-4.2c14.3-3.6 30.8-7.3 47.8-10.4V223.1c21.9-4.2 44.4-7.1 64-7.1c5.6 0 10.9 .2 16 .7v71.9c29.5 2.2 53 10 73.3 16.8l.9 .3c2 .7 3.9 1.3 5.8 1.9v-69-1.4c19 5.9 39.1 10.8 64 10.8c5.3 0 10.7-.2 16-.6v71.9c22-2 43.9-7.6 61.9-13.6c6.8-2.3 12.9-4.6 18.1-6.6V229.2c-20.9 7.5-49.9 15.8-80 18.1v-80c30.1-2.3 59.1-10.6 80-18.1V80.5c-21.6 7.3-49.5 14.3-80 15.4v71.5c-5.3 .4-10.7 .6-16 .6c-24.9 0-45-4.9-64-10.8V86.5c-9.3-2.1-18.3-4.4-27-6.7l-3.1-.8c-17.4-4.4-33.8-8.5-49.9-11.3v69c-5.1-.4-10.4-.7-16-.7c-19.6 0-42.1 3-64 7.1v80c-23.6 4.5-46.5 10.3-64 15.2zM208 136.7v80c24.4 2.1 44.3 8.7 64.2 15.3l0 0c5.2 1.7 10.5 3.5 15.8 5.2v-80c-5.3-1.7-10.6-3.4-15.8-5.2l0 0c-19.9-6.6-39.8-13.2-64.2-15.3z"/>
                        </svg>
                        <a href="" class="header-top-icon-menu-item-link">Français</a>
                    </li>
                    <li class="header-top-icon-menu-item">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                            <path fill="#FFF" d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 21 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
                        </svg>
                        <a href="" class="header-top-icon-menu-item-link">Sites Pays</a>
                    </li>
                    <li class="header-top-icon-menu-item">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="30" width="28">
                            <path fill="#FFF" d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z"/>
                        </svg>
                        <a href="" class="header-top-icon-menu-item-link">Boutique</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="l-header-bottom">
            <div class="l-nav">
                <ul class="nav-menu menu-bottom">
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
        </div>
    </header>
    <div class="l-school">
        <div class="header-school">
            <div class="accordeon">
                <div class="accordion-container">
                    <div class="accord-item">
                        <div class="accord-header">
                        <div class="acccord-title">{{ $ecole->ecole }}
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>

                        </div>
                        <div class="accord-content collapse">
                        <div class="accord-body">
                            {{ $ecole->description }}
                        </div>
                        </div>
                    </div>
                    <div class="element-bottom">
                        <div class="element-bottom-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                            </svg>
                            <span>{{ $ecole->email }}</span>
                        </div>
                        <div class="element-bottom-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                            </svg>
                            <span>{{ $ecole->telephone }}</span>
                        </div>
                        <div class="element-bottom-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 21 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
                            </svg>
                            <span>{{ $ecole->siteWeb }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-homepage">
        <div class="wrapper formation">
            <div class="content-left">
                <div class="title-1">
                    Documentations
                </div>
                <ul class="accordeon-menu homepage-ecole">
                    <form action="#">
                        <li class="link  homepage-ecole">
                            <div class="dropdown  homepage-ecole">
                                <span>Quel  niveau de formation recherchez-vous ?</span>
                                <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                            </div>
                            <ul class="sub-menu  homepage-ecole">
                                <div class="multi-select">
                                        <label for="lang">Je cherche une formation: </label>
                                        <div class="selection">
                                            <select name="niveau" id="niveau">
                                                <div class="options">
                                                <option value="select">Selectionner un niveau de formation</option>
                                                <option value="bac">de niveau BAC</option>
                                                <option value="bts">de niveau BTS</option>
                                                <option value="licence">de niveau Licence</option>
                                                <option value="master">de niveau Master</option>
                                                <option value="doctorat">de niveau Doctorat</option>
                                                </div>
                                            </select>
                                        </div>
                                </div>
                            </ul>
                        </li>
                        <li class="link  homepage-ecole">
                            <div class="dropdown  homepage-ecole">
                                <span>Dans quel domaine ?</span>
                                <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                            </div>
                            <ul class="sub-menu  homepage-ecole">
                                <div class="multi-select">
                                        <label for="lang">Dans le domaine de: </label>
                                        <div class="selection">
                                            <select name="nom_formation" id="nom_formatio">
                                                <option value="select">Selectionner un domaine</option>
                                                <option value="bac">Informatique</option>
                                                <option value="bts">Génie Civil</option>
                                                <option value="licence">Banque</option>
                                                <option value="master">Finance</option>
                                                <option value="doctorat">Médecine</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="button-search">
                                    <input type="submit" value="Rechercher une formation" class="btn btn-fill">
                                </div>
                            </ul>
                        </li>
                    </form>
                </ul>
                <div class="accreditation">
                    <div class="cadre-orange">
                        <span>Accreditations</span>
                        <div class="logos-accreditation">
                            @if(sizeof($accreditations) > 0)
                                @foreach ($accreditations as $accreditation)
                                <div class="logo-accredited">
                                    <img src="{{ asset('storage/images/'. $accreditation->logo) }}" alt="" class="header-logo-img">
                                </div>
                                @endforeach
                            @else
                                <div class="wrapper wrapper-center pt-20">Aucune Accréditation</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="title-1">
                    Formations
                </div>
                <ul class="accordeon-menu">
                    @foreach ($ecole->departements as $departement)
                    <li class="link">
                        <div class="dropdown">
                            <span>{{ $departement->nomDepartement }} </span>
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="sub-menu">
                            @forelse ($departement->filieres as $filiere)
                            <li><a href="{{ route('filiere.admission',$filiere->id) }}">{{ $filiere->nomFiliere }}</a></li>
                           @empty
                           <li>Pas encore de filiere pour cette departement</li>
                           @endforelse
                        </ul>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="wrapper">
            <div class="activite">
                <div class="top">
                    <div class="title-1">
                        Activités
                    </div>
                </div>
                @if(isset($activites) && sizeof($activites) == 4)
                <div class="activites-bottom">
                    <div class="carre-1">
                        <div class="text-1">
                            <p>{{$activites[0]->descriptionActivite}}</p>
                        </div>
                        <div class="titre-1">
                            <span>{{$activites[0]->nomActivite}}</span>
                        </div>
                    </div>
                    <div class="carre-2">
                        <div class="photo-activite">
                            <img src="{{ url('storage/images/'.$activites[1]->media->media) }}" alt="" >
                        </div>
                        <div class="text-2">
                            <p>{{ $activites[1]->descriptionActivite }}</p>
                        </div>
                    </div>
                    <div class="carre-3">
                        <div class="photo-activite-2">
                            <img src="{{ url('storage/images/'.$activites[1]->media->media) }}" alt="" >
                        </div>
                        <div class="text-2">
                            <p>{{ $activites[1]->descriptionActivite }}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="wrapper">
            <div class="galerie">
                <div class="top">
                    <div class="title-1">
                        Galérie
                    </div>
                </div>
                <div class="bottom">
                    @if(isset($gallery) && sizeof($gallery) > 3)
                    <div class="section-left">
                        <div class="photo-galerie-1">
                            <img src="{{ url('storage/images/'.$gallery[0]->media) }}" alt="" style="width : 570px; height : 700px;" >
                        </div>
                    </div>
                    <div class="section-right">
                        <div class="photo-galerie-2">
                            <img src="{{ url('storage/images/'.$gallery[0]->media) }}" alt="" style="width : 700px;" >
                        </div>
                        <div class="photo-bottom">
                            <div class="photo-galerie-3">
                                <img src="{{ url('storage/images/'.$gallery[0]->media) }}" alt="" style="width : 400px;" >
                            </div>
                            <div class="photo-galerie-3">
                                <img src="{{ url('storage/images/'.$gallery[0]->media) }}" alt="" style="width : 300px;" >
                            </div>
                        </div>
                        <div class="button-galerie">
                            <a href="{{ route('medias.index') }}" class="lien-galerie">Voir la galérie</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </div>
                    </div>
                    @endif
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
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/vertical-tab.js') }}"></script>
    <script src="{{ asset('js/accordeon.js') }}"></script>
</body>
</html>
