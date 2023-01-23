@if (auth()->user()->profil != 'Ecole')
@extends('layouts.app')

@section('content')
  <div class="l-main">
    <div class="main-content">
        <div class="wrapper">
            <div class="title-section">
                <h1>Nous vous aidons à trouver un emploi</h1>
                <span class="small-text">Recherchez unr offre parmi des centaines</span>
            </div>
            <div class="search-job">
                <form action="" class="form-with-icons">
                  <div class="search-top">
                    <div class="input-group select-style-simple">
                        <div class="select-box">
                            <div class="options-container">

                                @if (count($domaines) >0)
                                  @foreach ($domaines as $domaine)
                                     <div class="option">
                                       <input type="radio" class="radio" id="{{ $domaine->nom }}" name="domaine" value="{{ $domaine->id }}" />
                                       <label for="{{ $domaine->nom }}">{{ $domaine->nom }}</label>
                                     </div>
                                   @endforeach
                                 @endif
                            </div>
                            <div class="selected input-text">
                                <span class="selected-item">Domaines</span>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                                <input type="hidden" name="domaine" class="input-for-select">
                            </div>
                      </div>
                    </div>
                    <div class="input-group">
                        <input class="input-text" type="text" name="post" placeholder="fonction..."/>
                    </div>
                    <div class="input-group select-style-search">
                        <div class="select-box-search">
                            <div class="title-select input-text" name="lieu">
                                <span>Saisissez une ville</span>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                            </div>
                            <div class="content-select">
                                <div class="recherche">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
                                    </svg>
                                    <input type="text" placeholder="Chercher...">
                                </div>
                                <ul class="options"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="button-search">
                        <input type="submit" value="Rechercher" class="btn btn-fill">
                    </div>
                  </div>
                  <div class="search-bottom">
                    <div class="input-group select-style-multiple">
                        <div class="title-select-multiple select-for-filtre">
                            <span class="title">Type de contrat</span>
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                            </svg>
                        </div>
                        <ul class="options-list">

                            @if (count($contratModes) >0)
                            @foreach ($contratModes as $contratMode)

                            <li class="item">
                                <input class="checkbox" type="checkbox" name="type[]" id="{{ $contratMode->nom }}" value="{{ $contratMode->nom }}"/>
                                  <i class="fa-solid fa-check check-icon"></i>
                                <label for="{{ $contratMode->nom }}" class="item-text">{{ $contratMode->nom }}</label>
                              </li>

                            @endforeach
                            @endif

                        </ul>
                    </div>
                    <div class="input-group select-style-simple">
                        <div class="select-box">
                            <div class="options-container">
                            <div class="option">
                                <input type="radio" class="radio" id="entreprise" name="filtre"/>
                                <label for="entreprise">Entreprise</label>
                            </div>
                            <div class="option">
                                <input type="radio" class="radio" id="date" name="filtre" />
                                <label for="date">Date</label>
                            </div>
                            </div>
                            <div class="selected select-for-filtre">
                                <span class="selected-item">Filtrer par...</span>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                                <input type="hidden" name="filtre_par" class="input-for-select">
                            </div>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="wrapper">
            <div class="title-section">
                <h1>Liste des offres demploi</h1>
            </div>
        </div>
        <div class="cartes">

            @if (count($offres) > 0)
            @foreach ($offres as $offre)

            <div class="card card-job">
                <div class="card-top">
                    <h2>{{ $offre->nom }}</h2>
                    <svg class="dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
                    </svg>
                    @if(isset($offre->contrat_modes))

                    <h2>@foreach (  $offre->contrat_modes as $contratMode )
                        {{ $contratMode->nom }}
                        @endforeach
                    </h2>
                    @else
                    {{$offre->contrat_mode}}
               @endif
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                    </svg>
                </div>
                <div class="card-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"/>
                        </svg>
                        <span>Publié le: {{ $offre->created_at }}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/>
                        </svg>
                        @if(isset($offre->lieux))

                        <span> @foreach (  $offre->lieux as $lieux )
                          {{ $lieux->nom }},
                          @endforeach</span>
                          @else
                          {{ $offre->lieu }}
                          @endif
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" class="logo"><img src="../../public/images/unesco.jpg" alt="" class="xsmall-media"></a>
                    <span class="small-text">{{ $employeur->nom}}</span>
                    <a href="{{ route('offres.show', [$offre->id ]) }}" class="link"> Voir loffre</a>
                </div>
            </div>

            @endforeach


            @endif



            </div>
        </div>

        <div class="wrapper">
            <nav>
              <ul class="pager">
                <li class="pager-item pager-item-prev"><a class="pager-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                      <g fill="none" fill-rule="evenodd">
                        <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                      </g>
                    </svg></a>
                </li>
                <li class="pager-item"><a class="pager-link" href="#">...</a></li>
                <li class="pager-item active"><a class="pager-link" href="#">3</a></li>
                <li class="pager-item"><a class="pager-link" href="#">4</a></li>
                <li class="pager-item"><a class="pager-link" href="#">5</a></li>
                <li class="pager-item"><a class="pager-link" href="#">6</a></li>
                <li class="pager-item"><a class="pager-link" href="#">...</a></li>
                <li class="pager-item pager-item-next"><a class="pager-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                      <g fill="none" fill-rule="evenodd">
                        <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                      </g>
                    </svg></a>
                </li>
              </ul>
            </nav>
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

<script src="{{ asset('/js/menu.js') }}  "></script>
<script src="{{ asset('/js/multi-select-options.js') }}  "></script>
<script src="{{ asset('/js/notif.js') }}  "></script>


@endsection



@endif

