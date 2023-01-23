<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
</head>
<body>

    <div class="l-admin-side">
        @include('Projet.investisseurs.header')
        <div class="main-content">
            <div class="l-header-admin">
                <div class="">
                    <ul class="nav-menu menu-admin left">
                        <li class="nav-menu-item" id="btn-toggle-sidebar">
                            <svg class="icon icon-toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                        </li>
                    </ul>
                    <div class="wrapper wrapper-right">

                    </div>
                </div>
            </div>
            <div class="main-section">
                <div class="title-section dashboard-title">
                    <div class="title">
                        <h1>Projets</h1>
                        <h2>Liste des projets</h2>
                    </div>

                    <div class="title-section-2">
                        <form action="{{ route('investisseur.search') }}" method="GET" class="search-form">
                            <input type="sumbit" name="q" value="{{ request()->q ??  '' }}" class="input-search search-style-large" placeholder="rechercher un projet...">
                        </form>
                    </div>
                    <a href="add_annexe.html" class="btn btn-icon">
                        Retour
                    </a>
                </div>
                <div class="nav-menu menu-style-1">
                    <ul class="menu">
                        <li class="item active"> <a href="#tous"> Tout les projets </a></li>
                        {{--  <li class="item"> <a href="#investis"> Projets Investis </a></li>
                        <li class="item"> <a href="#noninvestis"> Projets non Investis </a></li>
                    </ul>  --}}
                </div>
                <div class="card-grid">

                    @foreach (auth()->user()->investisseurs as $investisseurs)
                    @foreach ($investisseurs->projets as $projets)
                    @if ($projets->status == 1)
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="30" width="18">
                                        <path d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"/>
                                    </svg>
                                </span>
                                <h3>{{ $projets->nomStartup }}</h3>
                            </div>
                            <div>
                                <a href="#" class="btn btn-fill btn-red btn-icon btn-card">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM128 416H64V352c35.3 0 64 28.7 64 64zM64 224V160h64c0 35.3-28.7 64-64 64zM448 352c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM384 256c0 61.9-43 112-96 112s-96-50.1-96-112s43-112 96-112s96 50.1 96 112zM252 208c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z"/></svg>
                                   @if (auth()->user()->investissements->contains('projet_id', $projets->id))
                                        deja Investi
                                    @else
                                    Investir
                                   @endif

                                </a>
                            </div>
                        </div>

                        <div class="card-footer orange">
                            <a href="{{route('showProjet',$projets->id)}}">Voir details</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach


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

    {{--  <section class="custom-social-proof">
        <a class="custom-notification" href="chat">
          <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
              <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            </div>
            <div class="custom-notification-content-wrapper">
              <p class="custom-notification-content">
                Mr.Nagarajan - Banglore<br>New message <b>Bonjour...</b>
                <small>A l'instant</small>
              </p>
            </div>
          </div>
          <div class="custom-close"></div>
        </a>
        <a class="custom-notification" href="chat">
            <div class="custom-notification-container">
              <div class="custom-notification-image-wrapper">
                <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
              </div>
              <div class="custom-notification-content-wrapper">
                <p class="custom-notification-content">
                  Mr.Nagarajan - Banglore<br>New message <b>Ffvb hjhj...</b>
                  <small>1 hour ago</small>
                </p>
              </div>
            </div>
            <div class="custom-close"></div>
        </a>
    </section>  --}}

    <script src=""></script>{{ asset('js/notif.js') }}
    <script src="{{ asset('js/sidebar-toggle.js') }}"></script>
    <script>
        let csp = document.querySelectorAll(".custom-notification");
        csp.forEach(c => {
            setInterval(function(){
                c.classList.add('disabled');
            }, 8000);
            let close = c.lastElementChild;
            close.addEventListener('click', function(e){
                e.preventDefault();
                c.classList.add('disabled');
            });
        });
    </script>
</body>
</html>
