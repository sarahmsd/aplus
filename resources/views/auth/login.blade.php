<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/scss/style.css') }}" rel="stylesheet">
</head>
<body>


    <header class="l-header">
        <div class="l-header-minimal" id="navbar">
            <div class="header-logo">
                <img src="{{  asset('images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png') }}" alt="" class="header-logo-img">
            </div>
            <div class="header-menu disabled" id="header-menu">
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
                    <li class="nav-menu-item">
                        <form action="#" method="post" class="search-form">
                            <input type="text" name="search" id="" class="input-search search-style-1" placeholder="rechercher une école, une formation...">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="header-icons">
                <ul class="header-top-icons-menu">
                    <a href="{{ route('register') }}">
                    <li class="header-top-icon-menu-item">
                        <svg class="svg svg-gris" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20" width="18">
                            <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>
                    </li>
                </a>
                    <li class="header-top-icon-menu-item">
                        <svg class="svg svg-gris" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20" width="18">
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <div class="l-main">
        <div class="main-content main-content-style-1">
            <div class="main-left">
                <div class="title-section">
                    <h1>Connexion</h1>
                    <h2>Bienvenue sur A+</h2>
                </div>
                <div class="form-signin">
                    <form action="{{ route('login') }}" method="POST">
                    @csrf

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" class="form-input input-style-2">
                        </div>
                        <div class="form-group inline-form">
                            <input type="checkbox" name="remember-me" id="" class="form-input input-style-2 checkbox">
                            <span class="form-checkbox-label" >Se souvenir de moi</span>
                            <span class="form-checkbox-label" >Mot de passe oublié?</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill">Se connecter</button>
                            <button type="submit" class="btn">Annuler</button>
                        </div>
                    </form>
                    <div class="socials-login">
                        <ul class="socials-icons">
                            <a href="{{ route('google.redirect') }}">
                                <li class="social-icon-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                                    <path d="M256,8C119.1,8,8,119.1,8,256S119.1,504,256,504,504,392.9,504,256,392.9,8,256,8ZM185.3,380a124,124,0,0,1,0-248c31.3,0,60.1,11,83,32.3l-33.6,32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9,0-77.2,35.5-77.2,78.1S142.3,334,185.3,334c32.6,0,64.9-19.1,70.1-53.3H185.3V238.1H302.2a109.2,109.2,0,0,1,1.9,20.7c0,70.8-47.5,121.2-118.8,121.2ZM415.5,273.8v35.5H380V273.8H344.5V238.3H380V202.8h35.5v35.5h35.2v35.5Z"/></svg>
                                </li>
                            <a href="{{ route('facebook.redirect') }}">
                            <li class="social-icon-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                            </svg>
                            </li>
                            </a>
                            <a href="{{ route('linkedin.redirect') }}">
                            <li class="social-icon-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                            </svg>
                            </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-right">
                <img src="{{ URL::asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" class="xsmall-media">
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
                <a href="" >
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                        <path fill="#0009" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                    </svg>
                </li>
                </a>
                <a href="">
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                        <path fill="#0009" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                    </svg>
                </li>
                </a>
                <a href="">
                <li class="social-icon-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                        <path fill="#0009" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                    </svg>
                </li>
                </a>
            </ul>
        </div>
    </footer>

</body>
</html>
