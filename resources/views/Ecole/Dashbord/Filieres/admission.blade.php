
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Page Ecole</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
    <link href="https://fonts.cdnfonts.com/css/futura-pt" rel="stylesheet">

</head>
<body>
    <header class="l-header">
        <div class="l-header-top">
            <div class="header-top-logo">
                <img src="../../public/images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png" alt="" class="header-logo-img">
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

                <ul class="nav-menu nav-vertical menu-toggle disabled" id="menu-toggle">
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
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                            <path fill="#FFF" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>
                        <a href="" class="header-top-icon-menu-item-link">Connexion</a>
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
            <div class="l-header-icons icons-bottom">
                <ul class="header-icons">
                    <li class="header-icon-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                        </svg>
                    </li>
                    <li class="header-icon-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M446.6 222.7c-1.8-8-6.8-15.4-12.5-18.5-1.8-1-13-2.2-25-2.7-20.1-.9-22.3-1.3-28.7-5-10.1-5.9-12.8-12.3-12.9-29.5-.1-33-13.8-63.7-40.9-91.3-19.3-19.7-40.9-33-65.5-40.5-5.9-1.8-19.1-2.4-63.3-2.9-69.4-.8-84.8.6-108.4 10C45.9 59.5 14.7 96.1 3.3 142.9 1.2 151.7.7 165.8.2 246.8c-.6 101.5.1 116.4 6.4 136.5 15.6 49.6 59.9 86.3 104.4 94.3 14.8 2.7 197.3 3.3 216 .8 32.5-4.4 58-17.5 81.9-41.9 17.3-17.7 28.1-36.8 35.2-62.1 4.9-17.6 4.5-142.8 2.5-151.7zm-322.1-63.6c7.8-7.9 10-8.2 58.8-8.2 43.9 0 45.4.1 51.8 3.4 9.3 4.7 13.4 11.3 13.4 21.9 0 9.5-3.8 16.2-12.3 21.6-4.6 2.9-7.3 3.1-50.3 3.3-26.5.2-47.7-.4-50.8-1.2-16.6-4.7-22.8-28.5-10.6-40.8zm191.8 199.8l-14.9 2.4-77.5.9c-68.1.8-87.3-.4-90.9-2-7.1-3.1-13.8-11.7-14.9-19.4-1.1-7.3 2.6-17.3 8.2-22.4 7.1-6.4 10.2-6.6 97.3-6.7 89.6-.1 89.1-.1 97.6 7.8 12.1 11.3 9.5 31.2-4.9 39.4z"/>
                        </svg>
                    </li>
                    <li class="header-icon-item notif" id="btn-notif">
                        <a href="">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                                </svg>
                                <mark class="big swing">7</mark>
                            </span>
                            <div class="dropdown-menu notifs animated slideInUp show disabled" id="notifs-bloc">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" >
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <div class="l-school">
        <div class="header-school">
            @foreach ($filiere->departement->ecoles as $ecole)
            <div class="accordeon">
                <div class="accordion-container">
                    <div class="accord-item">
                        <div class="accord-header">
                        <div class="acccord-title">

                            {{ $ecole->ecole }}

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
                    @endforeach
                    <div class="element-bottom">
                        <div class="element-bottom-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10" height="12">
                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                            </svg>
                            <span>contact@groupeiam.com</span>
                        </div>
                        <div class="element-bottom-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10" height="12">
                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                            </svg>
                            <span>+221 33 890 00 00</span>
                        </div>
                        <div class="element-bottom-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10" height="12">
                                <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 21 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
                            </svg>
                            <span>www.groupeiam.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="wrapper ecole-filiere">
            <div class="content-left" id="filiere-content">
                <h1 class="title">{{ $filiere->nomFiliere }}</h1>
                <div class="wrapper">
                    <div class="vertical-tabs">
                        <ul class="indicator">
                            <li class="active" data-target="#home">Présentation</li>
                            <li data-target="#profile">Admission</li>
                            <li data-target="#contact">Débouchés</li>
                            <li data-target="#settings">Diplômes</li>
                        </ul>
                        <ul class="content">
                            <li class="active" id="home">
                                <h1>Présentation</h1>
                                <p>
                                    {{ $ecole->description }}

                                </p>
                            </li>
                            <li id="profile">
                                <h1>Admission</h1>
                                <p>Le visa biométrique est délivré au niveau des postes diplomatiques et consulaires dans les treize pays suivants : France, Espagne, Belgique, États-Unis, Italie, Chine, Cameroun, Inde, Allemagne, Mauritanie, Afrique du Sud, Russie, Gambie, ainsi qu’éventuellement aux postes frontières du Sénégal.

                                    La demande de visa (pré-enrôlement) se fait en ligne sur le site internet suivant : www.visasenegal.sn, moyennant le paiement de la somme de 50 euros (paiement en ligne) à laquelle s’ajoute des frais de traitement de 2,5 ou 5 euros suivant le type de carte bancaire utilisé. Ces sommes ne sont pas remboursées en cas de refus de visa.

                                    Si la demande est acceptée, le demandeur reçoit un pré-visa (par courriel si la demande est faite en ligne), obligatoire pour se présenter au poste frontière. Ce pré-visa peut être utilisé auprès des compagnies aériennes pour embarquer.
                                    Le visa biométrique est délivré au niveau des postes diplomatiques et consulaires dans les treize pays suivants : France, Espagne, Belgique, États-Unis, Italie, Chine, Cameroun, Inde, Allemagne, Mauritanie, Afrique du Sud, Russie, Gambie, ainsi qu’éventuellement aux postes frontières du Sénégal.

                                    La demande de visa (pré-enrôlement) se fait en ligne sur le site internet suivant : www.visasenegal.sn, moyennant le paiement de la somme de 50 euros (paiement en ligne) à laquelle s’ajoute des frais de traitement de 2,5 ou 5 euros suivant le type de carte bancaire utilisé. Ces sommes ne sont pas remboursées en cas de refus de visa.

                                    Si la demande est acceptée, le demandeur reçoit un pré-visa (par courriel si la demande est faite en ligne), obligatoire pour se présenter au poste frontière. Ce pré-visa peut être utilisé auprès des compagnies aériennes pour embarquer.</p>
                            </li>
                            <li id="contact">
                                <h1>Débouchés</h1>
                                <p>
                                    Le visa biométrique est délivré au niveau des postes diplomatiques et consulaires dans les treize pays suivants : France, Espagne, Belgique, États-Unis, Italie, Chine, Cameroun, Inde, Allemagne, Mauritanie, Afrique du Sud, Russie, Gambie, ainsi qu’éventuellement aux postes frontières du Sénégal.

                                    La demande de visa (pré-enrôlement) se fait en ligne sur le site internet suivant : www.visasenegal.sn, moyennant le paiement de la somme de 50 euros (paiement en ligne) à laquelle s’ajoute des frais de traitement de 2,5 ou 5 euros suivant le type de carte bancaire utilisé. Ces sommes ne sont pas remboursées en cas de refus de visa.

                                    Si la demande est acceptée, le demandeur reçoit un pré-visa (par courriel si la demande est faite en ligne), obligatoire pour se présenter au poste frontière. Ce pré-visa peut être utilisé auprès des compagnies aériennes pour embarquer.
                                    Le visa biométrique est délivré au niveau des postes diplomatiques et consulaires dans les treize pays suivants : France, Espagne, Belgique, États-Unis, Italie, Chine, Cameroun, Inde, Allemagne, Mauritanie, Afrique du Sud, Russie, Gambie, ainsi qu’éventuellement aux postes frontières du Sénégal.

                                    La demande de visa (pré-enrôlement) se fait en ligne sur le site internet suivant : www.visasenegal.sn, moyennant le paiement de la somme de 50 euros (paiement en ligne) à laquelle s’ajoute des frais de traitement de 2,5 ou 5 euros suivant le type de carte bancaire utilisé. Ces sommes ne sont pas remboursées en cas de refus de visa.

                                    Si la demande est acceptée, le demandeur reçoit un pré-visa (par courriel si la demande est faite en ligne), obligatoire pour se présenter au poste frontière. Ce pré-visa peut être utilisé auprès des compagnies aériennes pour embarquer.
                                </p>
                            </li>
                            <li id="settings">
                                <h1>Diplômes</h1>
                                <p>Le visa biométrique est délivré au niveau des postes diplomatiques et consulaires dans les treize pays suivants : France, Espagne, Belgique, États-Unis, Italie, Chine, Cameroun, Inde, Allemagne, Mauritanie, Afrique du Sud, Russie, Gambie, ainsi qu’éventuellement aux postes frontières du Sénégal.

                                    La demande de visa (pré-enrôlement) se fait en ligne sur le site internet suivant : www.visasenegal.sn, moyennant le paiement de la somme de 50 euros (paiement en ligne) à laquelle s’ajoute des frais de traitement de 2,5 ou 5 euros suivant le type de carte bancaire utilisé. Ces sommes ne sont pas remboursées en cas de refus de visa.

                                    Si la demande est acceptée, le demandeur reçoit un pré-visa (par courriel si la demande est faite en ligne), obligatoire pour se présenter au poste frontière. Ce pré-visa peut être utilisé auprès des compagnies aériennes pour embarquer.
                                    Le visa biométrique est délivré au niveau des postes diplomatiques et consulaires dans les treize pays suivants : France, Espagne, Belgique, États-Unis, Italie, Chine, Cameroun, Inde, Allemagne, Mauritanie, Afrique du Sud, Russie, Gambie, ainsi qu’éventuellement aux postes frontières du Sénégal.

                                    La demande de visa (pré-enrôlement) se fait en ligne sur le site internet suivant : www.visasenegal.sn, moyennant le paiement de la somme de 50 euros (paiement en ligne) à laquelle s’ajoute des frais de traitement de 2,5 ou 5 euros suivant le type de carte bancaire utilisé. Ces sommes ne sont pas remboursées en cas de refus de visa.

                                    Si la demande est acceptée, le demandeur reçoit un pré-visa (par courriel si la demande est faite en ligne), obligatoire pour se présenter au poste frontière. Ce pré-visa peut être utilisé auprès des compagnies aériennes pour embarquer.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="title-top">
                    <h1>Formations</h1>
                </div>
                <ul class="accordeon-menu">
                    <li class="link">
                        <div class="dropdown">
                            <span>Informatique</span>
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#filiere-content">Génie Logiciel</a></li>
                            <li><a href="#filiere-content">Business Intelligent</a></li>
                            <li><a href="#filiere-content">Réseaux et Télécom</a></li>
                        </ul>
                    </li>
                    <li class="link">
                        <div class="dropdown">
                            <span>Gestion</span>
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#">Génie Logiciel</a></li>
                            <li><a href="#">Business Intelligent</a></li>
                            <li><a href="#">Réseaux et Télécom</a></li>
                        </ul>
                    </li>
                    <li class="link">
                        <div class="dropdown">
                            <span>Banque et Finance</span>
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#">Génie Logiciel</a></li>
                            <li><a href="#">Business Intelligent</a></li>
                            <li><a href="#">Réseaux et Télécom</a></li>
                        </ul>
                    </li>
                    <li class="link">
                        <div class="dropdown">
                            <span>Marketing</span>
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#">Génie Logiciel</a></li>
                            <li><a href="#">Business Intelligent</a></li>
                            <li><a href="#">Réseaux et Télécom</a></li>
                        </ul>
                    </li>
                    <li class="link">
                        <div class="dropdown">
                            <span>Génie Civil</span>
                            <svg class="icon-down"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#">Génie Logiciel</a></li>
                            <li><a href="#">Business Intelligent</a></li>
                            <li><a href="#">Réseaux et Télécom</a></li>
                        </ul>
                    </li>
                </ul>
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
    <script src="{{ asset('js/notif.js') }}"></script>
    <script src="{{ asset('js/accordeon.js') }}"></script>
</body>
</html>
