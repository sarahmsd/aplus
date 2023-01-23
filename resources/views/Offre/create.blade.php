<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard_emploi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('css/scss/style.css')}}">

</head>
<body>
    <header class="l-header">
        <div class="l-header-minimal with-border" id="navbar">
            <div class="header-logo">
                <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png') }}" alt="" class="header-logo-img">
            </div>
            <div class="header-icons">
                <ul class="header-top-icons-menu">
                    <li class="header-top-icon-menu">
                        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                            <path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="58">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                        </svg>
                    </li>
                    <span class="vertical-line"></span>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="58">
                            <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>
                    </li>
                    <div class="menu-toggle">
                      <div class="hamburger">
                          <span></span>
                      </div>
                  </div>
                </ul>
            </div>
        </div>
    </header>

      <div class="l-main sidebar-left dashboard-emploi">
        <div class="emploi-sidebar-left">
            <div class="sidebar-logo">
                <img src="{{ asset('images/Orange_logo.png') }}" alt="" class="sidebar-logo-img">
            </div>
            @include('Employeur.header');
        </div>
        @if(isset($employeur))

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="main-content dashboard-emploi">
          <div class="toggle" onclick="toggleMenu();">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
              </svg>
          </div>
          <div class="entete-main-dashboard">
            <div class="entete-left">
                <h1>Candidats</h1>
            </div>
            <div class="entete-right">
                <a href="/modules/emploi/dashboard.html" class="button-add">
                    <span>Consulter les offres</span>
                </a>
            </div>
        </div>
          <div class="new-offre">
            <div class="form-content">
              <div class="form-inputs box-style">
                  <form action="{{ route('offres.store') }}" method="POST">
                  @csrf


                  <input type="hidden" name="employeur_id" value="{{ $employeur->id }}">
                  <div class="step-1" id="step-1">
                          <div class="form-group">
                              <label for="entreprise" class="form-label">Entreprise <span class="required">*</span></label>
                              <span class="form-sub-label">Votre entreprise</span>
                              <input type="text" name="entreprise" id="entreprise" value="{{ $employeur->nom }}" class="form-input">
                          </div>
                          <div class="form-group">
                              <label for="email" class="form-label">Email <span class="required">*</span></label>
                              <span class="form-sub-label">Votre email</span>
                              <input type="email" name="email" id="email" class="form-input" value="{{ $employeur->email }}">
                          </div>
                          <input type="button" class="next btn btn-fill" value="Suivant" id="">
                      </div>
                      <div class="step-2 disabled" id="step-2">
                          <div class="form-group">
                              <label for="titre-offre" class="form-label">Titre Offre <span class="required">*</span></label>
                              <span class="form-sub-label">Généralement le poste à pourvoir</span>
                              <input type="text" name="nom" id="titre-offre" class="form-input">
                          </div>
                          <div class="form-group">
                              <label for="lieu" class="form-label">Lieu <span class="required">*</span></label>
                              <span class="form-sub-label">Lieu de travail</span>
                              <input type="text" name="lieu" id="lieu" class="form-input">
                          </div>
                          
                         
                          <div class="form-group">
                              <label for="date-limite" class="form-label">Date limite <span class="required">*</span></label>
                              <span class="form-sub-label">Jusqu'à quand loffre est elle valable?</span>
                              <input type="date" name="dateLimite" id="date-limite" class="form-input">
                          </div>
                          <button type="button" class="prev btn">Retour</button>
                          <input type="button" class="next btn btn-fill" value="Suivant" id="">
                      </div>

                      <div class="step-3 disabled" id="step-3">
                          <div class="form-group">
                              <label for="contrat" class="form-label">Description <span class="required">*</span></label>
                              <span class="form-sub-label">Le de contrat</span>
                              <div class="container">
                                  <div class="options">


                              </div>
                                  <textarea class="text-input" contenteditable="true" name="description" cols="90" id="description"></textarea>
                              </div>
                          </div>
                          <button type="button" class="prev btn">Retour</button>
                          <button type="button" class="next btn btn-fill">Suivant</button>
                      </div>
                      
                      
                      <div class="step-6 disabled" id="step-4">
                        
                        <div class="form-group select-style-multiple">
                          <label for="domaines" class="form-label">Domaines <span class="required">*</span></label>
                          <div class="title-select-multiple form-input">
                              <span class="title">Domaines....</span>
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                              </svg>
                          </div>
                          <ul class="options-list">

                            @if (count($domaines) >0)
                            @foreach ($domaines as $domaine)
                              <li class="item">
                                  <input type="checkbox" class="checkbox" name="domaines[]" value="{{ $domaine->id }}">
                                      <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                          <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                      </svg>
                                  </span>
                                  <span class="item-text">{{ $domaine->nom }}</span>

                              </li>
                              @endforeach
                              @endif


                          </ul>
                        </div>

                        <label for="contrat"> Type de contrat </label>
                            <select id="contrat" name="contrat_type">
                                <option value="contrat">Selectionner un type de contrat</option>
                                @if(count($contratTypes) >= 1)
                                @foreach($contratTypes as $ID => $type)
                                    <option value="{{$type->id}}"> {{$type->nom}} </option>
                                @endforeach
                                @endif

                            </select>
                        <div class="form-group select-style-multiple">
                          <label for="methodTravail" class="form-label">Methode Travail <span class="required">*</span></label>
                          <div class="title-select-multiple form-input">
                              <span class="title">Methode....</span>
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                              </svg>
                          </div>
                          <ul class="options-list">

                            @if (count($methodeTravails) >0)
                            @foreach ($methodeTravails as $methodeTravail)
                              <li class="item">
                                  <input type="checkbox" class="checkbox" name="methodeTravails[]" value="{{ $methodeTravail->id }}">
                                      <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                          <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                      </svg>
                                  </span>
                                  <span class="item-text">{{ $methodeTravail->nom }}</span>
                                  <input type="hidden">
                              </li>
                            @endforeach
                            @endif

                          </ul>
                        </div>
                        <div class="form-group select-style-multiple">
                            <label for="methodTravail" class="form-label">Mode Contrat <span class="required">*</span></label>
                            <div class="title-select-multiple form-input">
                                <span class="title">Mode....</span>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                </svg>
                            </div>
                            <ul class="options-list">

                              @if (count($contratModes) >0)
                              @foreach ($contratModes as $contratMode)
                                <li class="item">
                                    <input type="checkbox" class="checkbox" name="contratModes[]" value="{{ $contratMode->id }}">
                                        <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                        </svg>
                                    </span>
                                    <span class="item-text">{{ $contratMode->nom }}</span>
                                </li>
                              @endforeach
                              @endif

                            </ul>
                          </div>
                          <button type="button" class="prev btn">Retour</button>
                          <button type="submit" class="btn btn-fill">Poster</button>
                      </div>
                  </form>
              </div>

            </div>
            <div class="image-new-offre">
              <img src="{{ asset('images/entretien2.png') }}" alt="" class="middle-media">
            </div>
          </div>
        </div>
      </div>
      @endif
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

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/pagination.js') }}"></script>
    <script src="{{ asset('js/multi-select-options.js') }}"></script>
    <script src="{{ asset('js/multi-step-form.js') }}"></script>
    <script src="{{ asset('js/wysiwyg.js') }}"></script>
    <script src="{{ asset('js/toggle.js') }}"></script>

</body>
</html>



{{--  <style>
    .form-step{
        display: none;
    }
    .form-step-active{
        display: block;
    }
        .btnh:active{
            color: blue;
        }
        .lg{
            height: 40px;
            width: 40px;
        }

        a{
            text-decoration: none;
            color: white;
        }

  </style>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


@if(isset($employeur))
<div class="card mb-3 w-50 h-50" style="margin-left: 300px; margin-top:30px">
    <div class="card-body">

     <form action="{{ route('offres.store') }}" method="POST" class="form text-secondary">
        @csrf

 <div class="form-step form-step-active" >


 <input type="hidden" name="employeur_id" value="{{ $employeur->id }}">
<div class="mb-3">
    <label for="nom" class="form-label">Titre de loffre</label>
    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Ex:Argent Marketing...">
    <p class="alert alert-danger my-3" role="alert">
    <small >

        @error('nom')
           {{ $message }}
        @enderror

    </small>
    </p>
  </div>


  <div class="mb-3">
    <label for="exampleDataList" class=" col-form-label">Type De Contrat</label>
         <select class="form-select mb-3 form-light bg-light" style="border-color: #517EBC; background-color: light" aria-label=".form-select-lg example" name="contrat_type" value="{{ old('contrat_type') }}">
             @if(count($contratTypes) >= 1)
             <option value="" class="bg-light"></option>

               @foreach($contratTypes as $ID => $type)
             <option value="{{ $type->id }}" class="bg-light"> {{ $type->nom }}</option>
             @endforeach
             @endif
           </select>

           <p class="alert alert-danger my-3" role="alert">
            <small>

                @error('contrat_type')
                   {{ $message }}
                @enderror

            </small>
            </p>

 </div>


    <h4 class="text-secondary">Domaines</h4>
    <div class="row">
      @if (count($domaines) >0)
      @foreach ($domaines as $domaine)
     <div class="col mb-2">
    <input type="checkbox" class="btn-check" id="{{ $domaine->id }}" name="domaines[]" value="{{ $domaine->id }}" autocomplete="off" >
   <label class="btn btn-outline-primary" for="{{ $domaine->id }}">{{ $domaine->nom }}</label><br>
 </div>
 @endforeach
 @endif
 <p class="alert alert-danger my-3" role="alert">
    <small>

        @error('domaines')
           {{ $message }}
        @enderror

    </small>
    </p>

</div>

<div class="mb-3">
    <label for="nom" class="form-label">Lieu(x)</label>
    <input type="text" class="form-control" id="lieu" name="lieu" value="{{ old('lieu') }}" placeholder="Ex:Dakar, Thies..." >
    <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('lieu')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>


<div class="mb-3">
    <h4 class="text-secondary">Mode de contrat</h4>

    @if (count($contratModes) >0)
    @foreach ($contratModes as $contratMode)

      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="contratModes[]" value=" {{ $contratMode->id }}" >
        <label class="form-check-label" for="flexSwitchCheckChecked">{{ $contratMode->nom }}</label>
      </div>
      @endforeach
      @endif
      <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('contratModes')
               {{ $message }}
            @enderror

        </small>
        </p>


</div>


<div class="mb-3">
    <h4 class="text-secondary">Methode de Travail</h4>

    @if (count($methodeTravails) >0)
    @foreach ($methodeTravails as $methodeTravail)

      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="methodeTravails[]" value=" {{ $methodeTravail->id }}" >
        <label class="form-check-label" for="flexSwitchCheckChecked">{{ $methodeTravail->nom }}</label>
      </div>
      @endforeach
      @endif
      <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('methodeTravails')
               {{ $message }}
            @enderror

        </small>
        </p>

</div>

<div class="row">
    <div class="col-3 text-end" style="margin-left: 450px">
     <a  class="btn btn-next mt-2 ms-1 text-light" style="background-color: #517EBC">Continuer</a>
    </div>
 </div>

 </div>


 <div class="form-step" >
<h4 class="text-secondary">Description</h4>
<div class="mb-3">
    <label for="description" class="form-label">Context</label>
    <textarea name="description" id="description" value="{{ old('context') }}" class="form-control"></textarea>

    <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('context')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>

  <div class="mb-3">
    <label for="mission" class="form-label">Mission</label>
    <textarea name="mission" id="mission" value="{{ old('mission') }}" class="form-control"></textarea>
    <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('mission')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>

  <div class="mb-3">
    <label for="qualification" class="form-label">Qualification</label>
    <textarea name="qualifications" id="qualifications" value="{{ old('qualification') }}" class="form-control"></textarea>
    <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('qualifications')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>


  <div class="mb-3">
    <label for="niveauExperience" class="form-label">Niveau Experience</label>
    <input type="text" name="niveauExperience" id="niveauExperience" value="{{ old('niveauExperience') }}" class="form-control" required/>
    <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('niveauExperience')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>

  <div class="mb-3">
    <label for="niveauEtude" class="form-label">Niveau Etude</label>
    <input type="text" name="niveauEtude" id="niveauEtude" class="form-control" value="{{ old('niveauEtude') }}" required/>
    <p class="alert alert-danger my-3" role="alert">
        <small>

            @error('niveauEtude')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>

  <div class="mb-5">
    <label for="date" class="form-label">Date Limite</label>
    <input type="date" name="dateLimite" id="date" class="form-control" required/>
    <p class="alert alert-danger my-3" role="alert">
        <small >

            @error('dateLimite')
               {{ $message }}
            @enderror

        </small>
        </p>

  </div>



  <div class="row mt-3">
    <div class="col-9">
  <a  class="btn btn-prev btn-outline-secondary mt-2 ms-1">Retour</a>
 </div>

<div class="col-3">
          <button type="submit" style="background-color: #517EBC" class="btn text-light">
              Publier
          </button>
    </div>
  </div>
</div>

     </form>

     @endif
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

     <script src="{{ asset('js/offre.js') }}"></script>
     <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const formSteps = document.querySelectorAll(".form-step");
        let formeStepNum = 0;

        nextBtns.forEach((btn) => {

        btn.addEventListener("click", () => {

          formeStepNum++;
           updateFormStep();

        });

       });

       prevBtns.forEach((btn) => {

          btn.addEventListener("click", () => {

            formeStepNum--;
             updateFormStep();

          });

         });

       function updateFormStep(){

          formSteps.forEach((formStep) => {
            formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active")
          })

          formSteps[formeStepNum].classList.add("form-step-active");
      }



      </script>  --}}



