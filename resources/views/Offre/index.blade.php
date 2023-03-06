@extends('layouts.app')

@section('content')
<div class="contenu">
    <h2>Nous vous aidons à trouver un emploi</h2>

    @if(!is_null(auth()->user()->profil) && auth()->user()->profil == "Employeur" || !is_null(auth()->user()->profil) && auth()->user()->profil == "Ecole" )
    <a href="{{ route('offres.create') }}" class="btn1">Déposer une offre<i class="fa-solid fa-plus"></i></a>
    @endif

    <div class="search">
        <form action=" {{ route('recherche') }} ">
          <div class="search-top">
            <div class="select-domaine">
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

                <div class="selected">
                  Domaines
                </div>
              </div>
            </div>

            <div class="fonction">
              <input type="text" name="post" placeholder="Fonction">
              <i class="fa-sharp fa-solid fa-magnifying-glass" aria-hidden="true"></i>
            </div>
            <div class="select-ville">
              <div class="title-ville">
                  <span>Saisissez une ville</span>
                  <i class="fa-solid fa-angle-down"></i>
                </div>
              <div class="content-ville">
                  <div class="recherche">
                      <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                      <input type="text" name="lieu" placeholder="Chercher...">
                  </div>
                  <ul class="options"></ul>
              </div>
            </div>

            <div class="button-search">
                <input type="submit" value="Rechercher">
            </div>
          </div>
          <div class="search-bottom">
            <div class="contrat-type">
              <div class="input-type">
                <span class="contrat-text">Type de contrat</span>
              </div>
              <ul class="list-type">
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
          </div>
        </form>
      </div>
    <h2>Les dernières offres demploi</h2>

    <div class="list-Emploi">
      <div class="row">
        @if (count($offres) > 0)
        @foreach ($offres as $offre)

          <div class="col-6 mb-3">
            <div class="emploi">
              <div class="emploi-top">
                <h5>{{ $offre->nom }}</h5>
                <img src="./images/point.png">

                @if(isset($offre->contrat_modes))

                <h5>@foreach (  $offre->contrat_modes as $contratMode )
                    {{ $contratMode->nom }}
                    @endforeach
                </h5>
                @else
                {{$offre->contrat_mode}}
           @endif
                <Button onclick="Toggle1()" id="heart" class="btn-heart"><i class="fa-solid fa-heart"></i></Button>
              </div>
              <div class="emploi-center">
                <div class="center-left">
                  <i class="fa-regular fa-calendar"></i>
                  <h6>Publié: {{ $offre->created_at}}</h6>
                </div>
                <div class="center-right">
                  <i class="fa-solid fa-location-dot"></i>
                  @if(isset($offre->lieux))

                  <h6> @foreach (  $offre->lieux as $lieux )
                    {{ $lieux->nom }},
                    @endforeach</h6>
                    @else
                    {{ $offre->lieu }}
                    @endif
                </div>
              </div>
              <div class="emploi-bottom">
                <div class="bottom-left">
                  <a href="" class="logo-entreprise"><img src="./images/unesco.jpg"></a>
                  <h6>{{ $employeur->nom}}</h6>
                </div>
                <div class="bottom-right">
                    <a href="{{ route('offres.details', [$offre->id ]) }}" class="list-group-item list-group-item-action" aria-current="true">Voir loffre</a>
                    </div>
              </div>
            </div>
          </div>

          @endforeach


          @endif




      </div>
      <div class="pagination">
        <button class="btnPage1" onclick="backBtn()">Précédent</button>
        <ul>
            <li class="link active" value="one" onclick="activeLink()">1</li>
            <li class="link" value="2" onclick="activeLink()">2</li>
            <li class="link" value="3" onclick="activeLink()">3</li>
        </ul>
        <button class="btnPage2" onclick="nextBtn()">Suivant</button>
      </div>
    </div>

  </div>
<hr>
<div class="footer">
  <h6>Copyright © 2022, ZenStartup.</h6>
  <h5>Politiques de confidentialité</h5>
  <div class="reseaux-sociaux">
    <i class="fa-brands fa-square-facebook"></i>
    <i class="fa-brands fa-square-twitter"></i>
    <i class="fa-brands fa-linkedin"></i>
  </div>
</div>
  <script src="{{ asset('/js/script_emploi.js') }}  "></script>



@endsection
