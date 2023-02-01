<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Offre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/scss/style.css') }}">

</head>
<body>
   
    <header class="l-header">
        <div class="l-header-minimal with-border" id="navbar">
            <div class="header-logo">
                <img src="../../public/images/LOGO_ACADEMIEPLUS_V3__LOGO 2.png" alt="" class="header-logo-img">
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
                </ul>
            </div>
        </div>
    </header>

    <div class="l-main sidebar-left dashboard-emploi">
        <div class="emploi-sidebar-left">
            <div class="sidebar-logo">
                <img src="../../public/images/Orange_logo.png" alt="" class="sidebar-logo-img">
            </div>
            <div class="menu-sidebar position">
                <a class="icone"  href="/modules/emploi/new_offre.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                    </svg>
                    <span>Ajouter une offre</span>
                </a>
                <a class="icone active"  href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/>
                    </svg>
                    <span>Offres</span>
                </a>
                <a class="icone"  href="/modules/emploi/candidats.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                    </svg>
                    <span>Candidats</span>
                </a>
                <a class="icone"  href="/modules/emploi/message.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg>
                    <span>Messages</span>
                </a>
            </div>
        </div>
        <div class="main-content dashboard-emploi">
            <div class="toggle" onclick="toggleMenu();">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                </svg>
            </div>
            <div class="entete-main-dashboard">
                <div class="entete-left">
                    <h1>Discussions</h1>
                </div>
                <div class="entete-right">
                    <a href="/modules/emploi/new_offre.html" class="button-add">
                        <span> Publier une offre</span>
                    </a>
                </div>
            </div>

            <div class="offre">
            @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    @if(Session::has('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif
                <div class="offre-left">
                    <div class="entete-offre">
                        <h1 class="form-title">Modification Offre : 12
                            / Designer Graphique</h1>
                    </div>

                    <form action="{{ route('updateOffre.update', $offre->id) }}" method="POST" class="form text-secondary">
                        @csrf
                        @method('PUT')
                        
                            <div class="form-group">
                                <label  class="form-label" for="nomEntreprise">Titre Offre</label>
                                <input type="text" id="nomEntreprise" class="form-control" name="nom" value=" {{ $offre->nom }}"/>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label class="form-label" for="domaines">Domaines <span class="required">*</span></label>
                                <select name="domaines[]"  id="domaines" class="form-control selectpicker" multiple data-live-search="true" >
                                        @foreach ($domaines as $domaine)
                                            <option value="{{ $domaine->id }}" {{ in_array($domaine->id, $offre->domaines->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $domaine->nom }}</option>
                                        @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="contrat"> Type de contrat <span class="required">*</span> </label>
                                <select id="contrat" name="contrat_type" class="form-control selectpicker">
                                    <option value="">Selectionner un type de contrat</option>
                                    @foreach($contratTypes as $ID => $type)
                                        <option value="{{$type->id}}" {{ $type->id == $offre->contrat_type ? 'selected' : ''}}> {{$type->nom}} </option>
                                    @endforeach

                                </select>
                            </div> 
                            <div class="form-group">
                                <label class="form-label" for="lieux">Lieu <span class="required">*</span></label>
                                <select name="lieux[]"  id="lieux" class="form-control selectpicker" multiple data-live-search="true" >
                                        @foreach ($lieux as $lieu)
                                            <option value="{{ $lieu->id }}" {{ in_array($lieu->id, $offre->lieux->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $lieu->nom }}</option>
                                        @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="contratModes">Mode de Contrat <span class="required">*</span></label>
                                <select name="contratModes[]"  id="contratModes[]" class="form-control selectpicker" multiple data-live-search="true" >
    
                                    @foreach ($contratModes as $contratMode)
                                            <option value="{{ $contratMode->id }}" {{ in_array($contratMode->id, $offre->contrat_modes->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $contratMode->nom }}</option>
                                        @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="methodeTravails">Methode de Travail <span class="required">*</span></label>
                                <select name="methodeTravails[]"  id="methodeTravails" class="form-control selectpicker" multiple data-live-search="true" >

                                    @foreach ($methodeTravails as $methodeTravail)
                                            <option value="{{ $methodeTravail->id }}" {{ in_array($methodeTravail->id, $offre->methode_travails->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $methodeTravail->nom }}</option>
                                        @endforeach
                                </select>
                                
                            </div>
                            
                           
                            <div class="form-group">
                              <label for="date-limite" class="form-label">Date limite <span class="required">*</span></label>
                              <span class="form-sub-label">Jusqu'à quand loffre est elle valable?</span>
                              <input type="date" name="dateLimite" value="{{ $offre->dateLimite }}" id="date-limite" class="form-input">
                          </div>
                
                            <div class="form-group">
                              <label for="description" class="form-label">Description <span class="required">*</span></label>
                              <span class="form-sub-label">Description complète de l'offre</span>
                              <div class="container">
                                  <div class="options">


                              </div>
                                  <textarea class="text-input" contenteditable="true" name="description" cols="90" id="description">{!! $offre->description !!}</textarea>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-fill">Modifier</button>

                        </div>
                    </form>

                </div>
                <div class="offre-right">
                    <a href="" class="image-offre"><img src="../../public/images/job1.jpeg"></a>
                    <a href="" class="image-offre-2"><img src="../../public/images/job2.webp"></a>

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
    <script src="{{ asset('js/pagination.js') }}"></script>
    <script src="{{ asset('js/wysiwyg.js') }}"></script>
    <script src="{{ asset('js/toggle.js') }}"></script>
    <script src="{{ asset('js/multi-select-options.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</body>
</html>




