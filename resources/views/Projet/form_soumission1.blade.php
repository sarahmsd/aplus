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
                    <div class="wrapper wrapper-flex pb-20 pt-20">
                        <a class="btn btn-red">Suis-je éligible?</a>
                        <a href="{{ route('projet.liste') }}" class="btn btn-orange btn-icon">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M297.4 9.4c12.5-12.5 32.8-12.5 45.3 0l96 96c12.5 12.5 12.5 32.8 0 45.3l-96 96c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L338.7 160H128c-35.3 0-64 28.7-64 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V224C0 153.3 57.3 96 128 96H338.7L297.4 54.6c-12.5-12.5-12.5-32.8 0-45.3zm-96 256c12.5-12.5 32.8-12.5 45.3 0l96 96c12.5 12.5 12.5 32.8 0 45.3l-96 96c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 416H96c-17.7 0-32 14.3-32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V448c0-53 43-96 96-96H242.7l-41.4-41.4c-12.5-12.5-12.5-32.8 0-45.3z"/></svg>
                            Mes Projets
                        </a>
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
                            <input type="text" name="telephone" id="telephone" class="form-input" value="{{ auth()->user()->candidat->tel }}">
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

    @include('Projet.footer')