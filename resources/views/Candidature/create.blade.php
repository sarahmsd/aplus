@include('Projet.navbar')
    <div class="l-main sidebar-right toggled">
    @include('Projet.sidebar')
        <div class="main-content">
            <div class="form-content">
                <div class="form-title">
                    <h1>Candidature</h1>
                    <h2>Remplissez le formulaire pour postuler à l'offre</h2>
                    <div class="buttons">
                        <button class="btn btn-fill btn-orange">Mon profil</button>
                        <button class="btn">Toutes les offres</button>
                    </div>
                </div>
                <div class="form-inputs box-style">
                    <form action="{{ route('candidatureOffre', $offre->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="offre" value="{{ $offre->id }}">
                        <div class="form-group">
                            <label for="cv" class="form-label">CV <span class="required">*</span></label>
                            <span class="form-sub-label">Votre CV</span>
                            <input type="file" name="cv" id="cv" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="linkedin" class="form-label">Linkedin <span class="facultatif">facultatif</span></label>
                            <span class="form-sub-label">Votre profil linkedin</span>
                            <input type="text" name="linkedin" id="linkedin" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label"> Message <span class="facultatif">facultatif</span></label>
                            <span class="form-sub-label">Quelque chose à nous dire? </span>
                            <textarea name="message" id="message" class="form-input text-area"></textarea>
                        </div>
                        <div class="buttons">
                            <button type="reset" class="btn ">Annuler</button>
                            <input type="submit" class="btn btn-fill btn-orange" value="Envoyer" id="">
                        </div>
                    </form>
                </div>
                <div class="form-sidebar card card-style-2 boxed">
                    <div class="wrapper">
                        <h2 class="link-text-orange">{{ $offre->nom }}</h2>
                        <h3 class="small-text">{{ Str::limit($employeur->nom, 40) }}</h3>
                        @foreach (  $offre->contrat_modes as $contratMode )
                        <span class="small-text">{{ $contratMode->nom }}</span>
                        @endforeach
                        <span class="small-text">{{ $contratType->nom }}</span>
                        <div>
                            <h2>Description du poste</h2>
                            <p>
                                {{$employeur->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('Projet.footer')
