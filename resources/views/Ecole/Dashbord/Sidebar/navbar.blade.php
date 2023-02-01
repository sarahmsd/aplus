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
        @include('Ecole.Dashbord.Sidebar.sidebar');
        <div class="main-content">
            <div class="l-header-admin">
                <div class="">
                    <ul class="nav-menu menu-admin left">
                        <li class="nav-menu-item" id="btn-toggle-sidebar">
                            <svg class="icon icon-toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ route('home.ecole') }}" class="nav-menu-item-link">Ecole</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">Emploi</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ route('index.projet') }}" class="nav-menu-item-link">Projet</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">CV Thèque</a>
                        </li>
                    </ul>
                    <ul class="header-top-icons-menu">
                        <li class="header-top-icon-menu-item icon-profil">
                            <a href="{{ route('getprofil', auth()->user()->ecole->id) }}">
                            <svg class="svg svg-gris" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20" width="18">
                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                            </svg>
                            </a>
                        </li>
                        <li class="header-top-icon-menu-item">
                            <svg class="svg svg-gris" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>                        
                        </li>
                        <div class="modal-profil disabled">
                            <div class="small-card boxed">
                                <div class="card-top">
                                    <img src="../../public/images/entretien.jpeg" alt="" class="profil-media circle">
                                    <h2>{{auth()->user()->ecole->sigle}}</h2>
                                </div>
                                <div class="buttons flex">
                                    <a href="profi.html" class="btn">Mon compte</a>
                                    <a href="{{ route('profil', auth()->user()->ecole->id) }}" class="btn btn-fill btn-red">Deconnexion</a>
                                </div>
                            </div>
                        </div>
                    </ul>            
                </div>
                <div class="line-with-logo">
                    <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" srcset="" class="module-media">                
                </div>
            </div>
            @yield('content')
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

    <section class="custom-social-proof">
        <a class="custom-notification" href="chat">
          <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
              <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            </div>
            <div class="custom-notification-content-wrapper">
              <p class="custom-notification-content">
                Mr.Nagarajan - Banglore<br>New message <b>Bonjour...</b>
                <small>A l instant</small>
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
    </section>

    <script src="{{ asset('js/sidebar-toggle.js') }}"></script>
    <script src="{{ asset('js/multi-select-options.js') }}"></script>
    <script src="{{ asset('js/notif.js') }}"></script>
    <script src="{{ asset('js/filters.js') }}"></script>
    <script src="{{ asset('js/card-toggle.js') }}"></script>

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

    <script>
        function launch_toast(etat) {
            var x = document.getElementById("toast")
            x.className = "show";
            if(etat = "error"){
                x.classList.add("red");
            }else if(etat = "infos"){
                x.classList.add("blue");
            }else if(etat = "success"){
                x.classList.add("green");
            }
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
        }
    </script>

    <script>
        let remove_icons = document.querySelectorAll(".remove-icon");
        
        remove_icons.forEach(icon => {
            icon.addEventListener("click", function(){
                if(confirm("Supprimmer ce media?")){
                    icon.parentElement.classList.add("removed");
                    let form = icon.parentElement.lastElementChild;
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
