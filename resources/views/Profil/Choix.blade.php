<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Scripts -->
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
        <div class="l-header-top">
            <div class="header-top-logo">
                <img src="../../public/images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png" alt="" class="header-logo-img">
            </div>
            <div class="l-nav">
            </div>
            <div class="header-top-icons">
                <ul class="header-top-icons-menu">
                    <li class="header-top-icon-menu-item">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                            <path fill="#FFF" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>

                        <a href="{{ route('register') }}" class="header-top-icon-menu-item-link">Sinscrire</a>
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
    </header>

<div class="l-main">

        <form method="POST" action="{{ route('profil.store') }}">
            @csrf

            <div class="signin-steps" id="step2">
                <div class="title-section">
                    <h1>Inscription</h1>
                    <h2>Choississez votre profil</h2>
                </div>
                <div class="form-inputs">

                    <input type="radio" name="profil" id="signin-profil school" value="Ecole" class="input-to-load ">
                    <label for="school">
                    <div class="signin-module" id="Ecole">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="80" width="78" class="svg-school">
                        <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                    </svg>
                        <h3>Ecole</h3>
                    </div>
                </label>

                    <input type="radio" name="profil" id="signin-profil cand" value="Candidat" class="input-to-load ">
                    <label for="candidat">

                    <div class="signin-module" id="Candidat">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="80" width="78" class="svg-candidate">
                        <path fill="" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                    </svg>
                        <h3>Candidat</h3>
                    </div>
                    </label>

                    <input type="radio" name="profil" id="signin-profil employeur" value="Employeur" class="input-to-load ">
                    <label for="employeur">

                    <div class="signin-module" id="Employeur">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="70" width="68" class="svg-company">
                        <path d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z"/>
                    </svg>
                        <h3>Entreprise</h3>
                    </div>
                    </label>
                </div>
                <button type="button" class="btn" id="signin-prev">Retour</button>
                <button type="submit" class="btn btn-fill">Sinscrire</button>
            </div>
        </div>
        <div class="main-right">
            <img src="{{ URL::asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" class="xsmall-media">
        </div>
        </form>
</div>
<script src="{{ asset('js/signin.js') }}"></script>

</body>
</html>
