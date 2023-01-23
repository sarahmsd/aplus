<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails projet</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">

</head>
<body>
        @include('header');

    <div class="l-main">
        <div class="l-infos-projet">
            <div class="title-section">
                <h1>AcademiePlus Projet</h1>
                <h2>Investir dans ce projet</h2>
            </div>
            <div class="wrapper">
                <div class="box box-style-3">
                    <div class="box-left">
                        <h1 class="box-title">{{ $projet->nomStartup }}</h1>
                        <p class="description">
                            {{ $projet->description }}
                        </p>

                        @if (auth()->user()->investissements->contains('projet_id', $projet->id))
                        <button class="btn btn-fill">projet deja investi</button>
                        @else
                        <div class="buttons">
                            <form action="{{ route('investissement.store', $projet) }}" method="post">
                                @csrf
                                <button class="btn btn-fill">Investir</button>
                            </form>
                            <button class="btn">Contacter le porteur</button>
                            <button class="btn btn-fill">Proposer une enchère</button>
                        </div>
                        @endif


                    </div>
                    <div class="box-right">
                        <div class="form-edit-one-row">
                            <div class="form-group inline-form">
                                <label for="idProjet" class="form-label-inline">Nom du projet</label>
                                <span type="text" class="form-input-edit" disabled name="idProjet" id="">{{ $projet->nomStartup }}</span>
                            </div>
                        </div>
                        <div class="form-edit-one-row">
                            <div class="form-group inline-form">
                                <label for="idProjet" class="form-label-inline">Email</label>
                                <span type="text" class="form-input-edit" disabled name="idProjet" id="">{{ $projet->email }}</span>
                            </div>
                        </div>
                        <div class="form-edit-one-row">
                            <div class="form-group inline-form">
                                <label for="idProjet" class="form-label-inline">Telephone</label>
                                <span type="text" class="form-input-edit" disabled name="idProjet" id="">{{ $projet->telephone }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-investisseurs">
            <div class="title-section">
                <h1>Les projets recents</h1>
                <h2>Consulter d'autres projets intérressants!</h2>
            </div>
            <div class="wrapper wrapper-four-columns">
                @foreach ($dernierProjets as $projets)
                <div class="box box-style-1">
                    <div class="box-title">
                        <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                        <h1 class="startup-title">{{ $projets->nomStartup }}</h1>
                    </div>
                    <div class="box-content">
                        <h2>Masr 2021</h2>
                        <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet .</p>
                    </div>
                    <button class="btn btn-fill">Voir</button>
                </div>
                @endforeach

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

    <script src="{{ asset('js/projet.js') }}"></script>
</body>
</html>
