<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumettre un projet</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">

</head>
<body>
    @include('Projet.navbar');
    <div class="l-annonce-orange annonce-inline">
        <h1 class="annonce-title">Ouverture de la session 2022-2023</h1>
        <h2 class="annonce-content">N'attendez pas! Soumettez votre projet</h2>
    </div>
    <div class="l-main">
        <div class="main-content">
            <div class="form-content">
                <div class="form-title">
                    <h1>Bienvenue sur A+ Project</h1>
                    <h2>Une seule étape entre votre idée et sa concrétisation</h2>
                    <div class="buttons">
                        <button class="btn btn-red">Suis-je éligible?</button>
                        <a href="liste_projet.html" class="btn btn-fill btn-blue">Mon compte</a>
                    </div>
                </div>
                <div class="form-inputs box-style">
                    <form action="{{ route('projet.save') }}" method="post">
                        @csrf
                        <input hidden type="number" name="user_id" value="{{ auth()->user()->id }}" >
                        <div class="form-group">
                            <label for="nomComplet" class="form-label">Nom Complet <span class="required">*</span></label>
                            <span class="form-sub-label">Votre nom et prenom</span>
                            <input type="text" name="NomComplet" value="{{ auth()->user()->name }}" id="nomComplet" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email <span class="required">*</span></label>
                            <span class="form-sub-label">Votre email</span>
                            <input type="email" name="email" value="{{ auth()->user()->email }}"  id="email" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="form-label">Telephone <span class="required">*</span></label>
                            <span class="form-sub-label">Un numéro sur lequel on peut vous contacter</span>
                            <input type="text" name="telephone" id="telephone" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="nomStartup" class="form-label">Startup <span class="facultatif">facultatif</span></label>
                            <span class="form-sub-label">Nom que vous donnez à votre projet</span>
                            <input type="text" name="nomStartup" id="nomStartup" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="siteWeb" class="form-label">Site web <span class="facultatif">facultatif</span></label>
                            <span class="form-sub-label">Votre site web</span>
                            <input type="text" name="siteWeb" id="siteWeb" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="secteurActivite" class="form-label">Secteur d'activité <span class="facultatif">facultatif</span></label>
                            <span class="form-sub-label">Dans quel domaine s'inscrit votre projet? </span>
                            <select name="secteur_id" id="secteurActivite"  class="form-input">
                               <option value='1'>Technologie</option>
                               <option value='2'>Insdustrie</option>
                               <option value='3'>Telecommunication et media</option>
                               <option value='4'>Transport</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="debutProjet" class="form-label"> Quand avez vous commencé ce projet? <span class="recommended">recommandé</span></label>
                            <span class="form-sub-label">Dites nous depuis quand vous vous intérressez à ce projet </span>
                            <textarea name="debutProjet" id="debutProjet" class="form-input text-area text-area-middle"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="motivations" class="form-label"> Quelles sont vos motivations? <span class="recommended">recommandé</span></label>
                            <span class="form-sub-label">Qu'est ce qui vous a poussé à vous lancer? </span>
                            <textarea name="motivation" id="motivation" class="form-input text-area text-area-middle"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="essais" class="form-label"> Qu'avez vous fait jusque là? <span class="recommended">recommandé</span></label>
                            <span class="form-sub-label">Soyez precis et concis et ne depassez pas cinq lignes </span>
                            <textarea name="demarcheProjet" id="question1" class="form-input text-area text-area-middle"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="objectifs" class="form-label"> Jusqu'oà voulez-vous aller avec ce projet? <span class="recommended">recommandé</span></label>
                            <span class="form-sub-label">Seulement quelques lignes </span>
                            <textarea name="objectif" id="objectifs" class="form-input text-area text-area-middle"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label"> Description <span class="required">*</span></label>
                            <span class="form-sub-label">Décrivez brièvement votre projet </span>
                            <textarea name="description" id="description" class="form-input text-area"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="col" class="form-label"> Avez-vous des collaborateurs <span class="required">*</span></label>
                            <input type="radio" name="col" id="col" class="form-input radio-button">Oui
                            <input type="radio" name="col" id="col" class="form-input radio-button">Non
                        </div>
                        <div class="form-group">
                            <label for="collaborateurs" class="form-label"> Vos collaborateurs </label>
                            <span class="form-sub-label">Citez vos collaborateurs en séparant leur noms par une virgule </span>
                            <input type="text" name="collaborateurs" id="collaborateurs" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="demoProjet" class="form-label"> Video </label>
                            <span class="form-sub-label">Vous pouvez nous partagez une vidéo de demonstration. (lien vimeo ou youtube) </span>
                            <input type="text" name="demoProjet" id="demoProjet" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="autre" class="form-label"> Autre chose? </label>
                            <span class="form-sub-label">Y'a t'il autre chose que nous devons savoir? </span>
                            <input type="text" name="autreChoseAsavoir" id="autre" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="autre" class="form-label"> Comment avez vous entendue parlez de nous? </label>
                            <span class="form-sub-label">Dites nous comment vous avez eu connaissance de A+ Project</span>
                            <input type="text" name="connaitreA" id="autre" class="form-input">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="autre" id="autre" class="form-input checkbox">
                            <span class="form-checkbox-label"> M'envoyer un email recapitulatif de mes reponses</span>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn">Annuler</button>
                            <button type="submit" class="btn btn-fill">Soumettre</button>
                        </div>
                    </form>
                </div>
                <div class="form-sidebar">
                    <div class="card card-style-readmore hover">
                        <div class="card-top pb-20">
                            <h1>Nom Projet</h1>
                            <h2>Meilleur projet de la session 4</h2>
                        </div>
                        <div class="card-content">
                            <p><h3>Lorem ipsum dolor</h3> sit amet consectetur adipisicing elit. Ratione, debitis consequuntur. Perferendis et id saepe sapiente facere consectetur temporibus labore voluptates reiciendis nemo.</p>
                        </div>
                    </div>
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

    <script src="{{ asset('js/notif.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/modal_profil.js') }}"></script>
</body>
</html>
