@extends('layouts.app')

@section('content')



<div class="wrapper detail-offre">
    <svg id="togg1" class="search-masquer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="40" height="42">
        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
    </svg>

    <div id="d1">

        <div id="p1" class="search-job">
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

    <div class="info-offre">
        <div class="detail-left">
            <div class="title-section-1">
                <h3>{{ $offre->nom }}</h3>
            </div>
            <div class="wrapper style-offre">
                <table class="fl-table table-style-2">
                    <h1>Critères du poste</h1>
                    <thead>
                    <tr>
                        <th>Type de contrat</th>
                        <th>Mode de contrat</th>
                        <th>Méthode de travail</th>
                        <th>Domaine</th>
                        <th>Lieu</th>
                        <th>Date Expiration</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>@foreach (  $offre->contrat_modes as $contratMode )
                            {{ $contratMode->nom }}
                             @endforeach
                        </td>
                        <td>{{ $contratType->nom }}</td>
                        <td>@foreach (  $offre->methode_travails as $methode_travails )
                            {{ $methode_travails->nom }}
                            @endforeach
                       </td>
                        <td> @foreach (  $offre->domaines as $domaine )
                            {{ $domaine->nom }}
                            @endforeach
                        </td>
                        <td>@foreach (  $offre->lieux as $lieux )
                            {{ $lieux->nom }}
                            @endforeach
                        </td>
                        <td>{{ date('d/m/Y', strtotime( $description->dateLimite )) }}</td>
                    </tr>
                    <tbody>
                </table>

            </div>

            <div class="wrapper">
                <div class="card card-style-2">
                    <h3>Détails du poste</h3>
                    {!! $description->context !!}
                </div>
                <div class="card card-style-2">
                    <h3>Missions</h3>
                    <p>{!! $description->mission !!}</p>
                </div>
                <div class="card card-style-2">
                    <h3>Qualifications</h3>
                    <p>{!! $description->qualifications !!}</p>
                </div>
                <div class="card card-style-2">
                    <h3>Expériences</h3>
                    <p>{{ $description->niveauExperience }}</p>
                </div>
            </div>

        </div>
        <div class="detail-right">
            <div class="content-top">
                <div class="gauche">
                    <div class="top-logo">
                        <img src="../../public/images/unesco.jpg" alt="" class="logo-img">
                    </div>
                    <span>{{ $employeur->nom }}</span>
                </div>
                <div class="droite">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="14" height="16">
                        <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/>
                    </svg>
                </div>
            </div>
            <div class="content-center">
                <div class="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14" height="16">
                        <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 21 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
                    </svg>
                    <span>{{ $employeur->adress }}</span>
                </div>
                <div class="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"  width="14" height="16">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/>
                    </svg>
                    <span> PG4G+3Q2, Rue MZ 83, Dakar</span>
                </div>
                <div class="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14" height="16">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg>
                    <span>{{ $employeur->email }}</span>
                </div>
                <div class="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14" height="16">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                    </svg>
                    <span>{{ $employeur->tel }}</span>
                </div>
            </div>
            <div class="content-bottom">


                @if($user->id != $employeur->user_id && $user->profil == 'Candidat')

                @if(!isset($CandidatCand))

                <form action=" {{ route('candidatures.create') }} " method="GET">
                  @csrf

                  <input type="hidden" name="offre" value="{{ $offre->id }}">
                  <input type="hidden" name="candidat" id="candidat" value="{{ $candidat->name }}">

                  <div class="form-submit-btn">
                    <input type="submit" value="Postuler">
                </div>
                 </form>

                 @elseif(isset($CandidatCand))
                 <p style="color: white; text-align: center">Vous avez postulé</p>


                @endif

          @endif

          @if($user->id != $employeur->user_id && $user->profil == 'Employeur')
                @if(!isset($candidatureEnt))

                <form action=" {{ route('candidatures.create') }} " method="GET">
                  @csrf

                  <input type="hidden" name="offre" value="{{ $offre->id }}">

                  <div class="form-submit-btn">
                    <input type="submit" value="Postuler">
                </div>

              </form>
                 @elseif(isset($candidatureEnt))
                 <p style="color: white; text-align: center">Vous avez postulé</p>

                @endif

          @endif

            </div>
        </div>
    </div>
    <div class="suggestion-offres">
        <h1>Ces annonces peuvent vous intéresser</h1>
        <div class="wrapper wrapper-three-columns">


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
                    <span class="small-text">{{ $structure->nom}}</span>
                    <a href="{{ route('offres.show', [$offre->id ]) }}" class="link"> Voir loffre</a>
                </div>
            </div>

            @endforeach


            @endif
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

<script src="{{ asset('js/multi-select-options.js') }}"></script>
<script src="{{ asset('js/afficher-masquer.js') }}"></script>
@endsection


{{--  <div class="l-main sidebar-right">
        <div class="sidebar">
            <div class="card card-style-readmore">
                <div class="card">
                    <h1>{{ $employeur->nom }}</h1>
                    <h2>{{ $employeur->description }}</h2>



                    @if($user->id != $employeur->user_id && $user->profil == 'Candidat')

      @if(!isset($CandidatCand))

      <form action=" {{ route('candidatures.create') }} " method="GET">
        @csrf

        <input type="hidden" name="offre" value="{{ $offre->id }}">
        <input type="hidden" name="candidat" id="candidat" value="{{ $candidat->name }}">

        <button class="btn btn-fill btn-large">
            Postuler
        </button>
       </form>

       @elseif(isset($CandidatCand))
       <p> <i class="bi bi-check-circle-fill text-success"></i>Vous avez postulé</p>


      @endif

@endif

@if($user->id != $employeur->user_id && $user->profil == 'Employeur')
      @if(!isset($candidatureEnt))

      <form action=" {{ route('candidatures.create') }} " method="GET">
        @csrf

        <input type="hidden" name="offre" value="{{ $offre->id }}">

        <button class="btn btn-fill btn-large">
            Postuler
        </button>

    </form>
       @elseif(isset($candidatureEnt))
       <p> <i class="bi bi-check-circle-fill text-success"></i>Vous avez postulé</p>

      @endif

@endif
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="box">
                <div class="title-section">
                    <h1>{{ $offre->nom }}F</h1>
                    <span class="small-text">Publiée le {{ date('d-m-Y', strtotime($offre->created_at)) }}</span>
                </div>
                <div class="card card-style-2">
                    <h1>Critères du poste</h1>
                    <div class="card-infos">
                        <div class="infos">
                            <h3>Type de Contrat</h3>
                            @foreach (  $offre->contrat_modes as $contratMode )
                               <p>{{ $contratMode->nom }}</p>
                                @endforeach
                        </div>
                        <div class="infos">
                            <h3>Secteur dactivité</h3>
                            @foreach (  $offre->domaines as $domaine )
                            <p>{{ $domaine->nom }}</p>
                            @endforeach
                        </div>
                        <div class="infos">
                            <h3>Travail à</h3>
                            <p>{{ $contratType->nom }}l</p>
                        </div>
                        <div class="infos">
                            <h3>Localisation</h3>
                            <p>@foreach (  $offre->lieux as $lieux )
                                {{ $lieux->nom }}
                                @endforeach</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="small-text">Expire le {{ date('d/m/Y', strtotime( $description->dateLimite )) }}</span>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="card card-style-2">
                        <h3>Détails du poste</h3>
                        {!! $description->context !!}
                    </div>
                    <div class="card card-style-2">
                        <h3>Missions</h3>
                        <p>{!! $description->mission !!}</p>
                    </div>
                    <div class="card card-style-2">
                        <h3>Qualifications</h3>
                        <p>{!! $description->qualifications !!}</p>
                    </div>
                    <div class="card card-style-2">
                        <h3>Expériences</h3>
                        <p>{{ $description->niveauExperience }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($user->id == $employeur->user_id)

    <a href=" {{ route('offres.edit', [$offre->id]) }}" class="btn text-light"  style="margin-bottom: 50px">Modifier</a>
    <hr  class="mb-5">

    <h2 class="text-underline">Liste des candidats</h2>

     @foreach($profilCandidats as $candidat)
    <hr>
     <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Nom du candidat: {{ $candidat->nom }} {{ $candidat->prenom }}</h5>
          <small class="text-muted">{{ $candidat->created_at }}</small>
        </div>
        <h5>Numero:</h5><p class="mb-1">{{ $candidat->tel }}</p>
        <h5>Region:</h5><p class="mb-1">{{ $candidat->adress }}</p>
        <h5>Mail:</h5><p class="mb-1">{{ $candidat->email }}</p>

        <small class="text-muted">And some muted small print.</small>

      </a>


       @foreach ($candidatureCands as $candidature)
       @if($candidat->user_id == $candidature->user_id && $candidature->valider == null)

       <form action=" {{ route('candidatures.update', [$candidature->id]) }} " method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="offre" value="{{ $offre->id }}">
        <input type="hidden" name="valider" value="1">
        <input type="hidden" name="candidature" value="{{ $candidature->id }}">


        <button style="background-color: #517EBC; color: white" class="btn text-light my-3">Recruter</button>

       </form>



       @endif
           @endforeach



     @endforeach

     @foreach ($profilEmployeurs as $employeur)
     <hr>

     <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Nom du candidat: {{ $employeur->nom }}</h5>
          <small class="text-muted">{{ $employeur->created_at }}</small>
        </div>
        <h5>Numero:</h5><p class="mb-1">{{ $employeur->tel }}</p>
        <h5>Region:</h5><p class="mb-1">{{ $employeur->adress }}</p>
        <h5>Mail:</h5><p class="mb-1">{{ $employeur->email }}</p>

        <small class="text-muted">And some muted small print.</small>
      </a>


       @foreach ($candidatureEmps as $emp)
       @if($employeur->user_id == $emp->user_id && $emp->valider == null)

       <form action=" {{ route('candidatures.update', [$emp->id]) }} " method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="offre" value="{{ $offre->id }}">
        <input type="hidden" name="valider" value="1">
        <input type="hidden" name="candidature" value="{{ $emp->id }}">


        <button style="background-color: #517EBC; color: white" class="btn text-light my-3">Recruter</button>

       </form>



       @endif
           @endforeach


     @endforeach

    @endif



    <script src="{{ asset('js/notif.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
 --}}
{{--  <div class="card mx-2">
 <div class="card-body">
<h2>Entrepise: {{ $employeur->nom }}</h2>


 {!! $description->context !!}
 <h5 class="text-bold">Mission:</h5>
 <p>{!! $description->mission !!}</p>
 <h5 class="text-bold">Qualifications:</h5>

 <p>{!! $description->qualifications !!}</p>

 <h5 class="text-bold">Lieu : </h5><p> @foreach (  $offre->lieux as $lieux )
    {{ $lieux->nom }}
    @endforeach</p>

<h5>Secteur dactivité: </h5>
<p>  @foreach (  $offre->domaines as $domaine )
    {{ $domaine->nom }}
    @endforeach </p>
<h5>Type de contrat:</h5> <p> {{ $contratType->nom }} </p>


 <h5>Mode de contrat: </h5> <p> @foreach (  $offre->contrat_modes as $contratMode )
    {{ $contratMode->nom }}
    @endforeach
</p>

 <h5 class="text-bold">Niveau d'experience:</h5>
 <p>{{ $description->niveauExperience }}</p>
 <h5 class="text-bold">Niveau d'etude:</h5>
 <p>{{ $description->niveauEtude }}</p>
 <h5 class="text-bold ">Doit être déposé avant le:  {{ date('d/m/Y', strtotime( $description->dateLimite )) }}</h5>

@if($user->id != $employeur->user_id && $user->profil == 'Candidat')

      @if(!isset($CandidatCand))

      <form action=" {{ route('candidatures.create') }} " method="GET">
        @csrf

        <input type="hidden" name="offre" value="{{ $offre->id }}">
        <input type="hidden" name="candidat" id="candidat" value="{{ $candidat->name }}">

        <button style="background-color: #517EBC" class="btn text-light my-3 candidature">Postuler</button>

       </form>

       @elseif(isset($CandidatCand))
       <p> <i class="bi bi-check-circle-fill text-success"></i>Vous avez postulé</p>


      @endif

@endif

@if($user->id != $employeur->user_id && $user->profil == 'Employeur')
      @if(!isset($candidatureEnt))

      <form action=" {{ route('candidatures.store') }} " method="POST">
        @csrf

        <input type="hidden" name="offre" value="{{ $offre->id }}">

        <button style="background-color: #517EBC" class="btn text-light my-3">Postuler</button>

       </form>
       @elseif(isset($candidatureEnt))
       <p> <i class="bi bi-check-circle-fill text-success"></i>Vous avez postulé</p>

      @endif

@endif


@if($user->id == $employeur->user_id)

<a href=" {{ route('offres.edit', [$offre->id]) }}" class="btn  text-light"  style="background-color: #517EBC">Modifier</a>
<hr  class="mb-5">

<h2 class="text-underline">Liste des candidats</h2>

 @foreach($profilCandidats as $candidat)
<hr>
 <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Nom du candidat: {{ $candidat->nom }} {{ $candidat->prenom }}</h5>
      <small class="text-muted">{{ $candidat->created_at }}</small>
    </div>
    <h5>Numero:</h5><p class="mb-1">{{ $candidat->tel }}</p>
    <h5>Region:</h5><p class="mb-1">{{ $candidat->adress }}</p>
    <h5>Mail:</h5><p class="mb-1">{{ $candidat->email }}</p>

    <small class="text-muted">And some muted small print.</small>

  </a>


   @foreach ($candidatureCands as $candidature)
   @if($candidat->id == $candidature->postulant_id && $candidature->valider == null)

   <form action=" {{ route('candidatures.update', [$candidature->id]) }} " method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" name="offre" value="{{ $offre->id }}">
    <input type="hidden" name="valider" value="1">
    <input type="hidden" name="candidature" value="{{ $candidature->id }}">


    <button style="background-color: #517EBC" class="btn text-light my-3">Recruter</button>

   </form>



   @endif
       @endforeach



 @endforeach

 @foreach ($profilEmployeurs as $employeur)
 <hr>

 <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Nom du candidat: {{ $employeur->nom }}</h5>
      <small class="text-muted">{{ $employeur->created_at }}</small>
    </div>
    <h5>Numero:</h5><p class="mb-1">{{ $employeur->tel }}</p>
    <h5>Region:</h5><p class="mb-1">{{ $employeur->adress }}</p>
    <h5>Mail:</h5><p class="mb-1">{{ $employeur->email }}</p>

    <small class="text-muted">And some muted small print.</small>
  </a>


   @foreach ($candidatureEmps as $emp)
   @if($employeur->id == $emp->postulant_id && $emp->valider == null)

   <form action=" {{ route('candidatures.update', [$emp->id]) }} " method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" name="offre" value="{{ $offre->id }}">
    <input type="hidden" name="valider" value="1">
    <input type="hidden" name="candidature" value="{{ $emp->id }}">


    <button style="background-color: #517EBC" class="btn text-light my-3">Recruter</button>

   </form>



   @endif
       @endforeach


 @endforeach

@endif

 </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>

<script>


</script>  --}}
