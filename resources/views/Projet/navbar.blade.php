<header class="l-header">
    <div class="l-header-minimal style-1" id="navbar">
        <div class="header-logo">
            <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png') }}" alt="" class="header-logo-img">
        </div>
        <div class="header-menu fixe" id="header-menu">
            <ul class="nav-menu menu-top" id="bt-menu">
                <li class="nav-menu-item">
                    <a href="{{ route('list.ecole') }}" class="nav-menu-item-link">Ecole</a>
                </li>
                <li class="nav-menu-item">
                    <a href="" class="nav-menu-item-link">Emploi</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ route('projet.liste') }}" class="nav-menu-item-link">Projet</a>
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
                <li class="header-top-icon-menu-item icon-profil">
                    <svg class="svg svg-gris" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20" width="18">
                        <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                    </svg>
                </li>
                <li class="header-top-icon-menu-item">
                    <svg class="svg svg-gris" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20" width="18">
                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                    </svg>
                </li>
                <div class="modal-profil disabled">
                    <div class="small-card boxed">
                        <div class="card-top">
                            <img src="{{ asset('images/entretien.jpeg') }}" alt="" class="profil-media circle">
                            <h2></h2>
                        </div>
                        <div class="buttons flex">
                            <a href="profi.html" class="btn">Mon compte</a>
                            <a class="btn btn-fill btn-red" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Deconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf

                            </form>
                            {{--  <a href="../../modules/Ecole/home.html" class="btn btn-fill btn-red">Deconnexion</a>  --}}
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</header>


<li>





</li>
