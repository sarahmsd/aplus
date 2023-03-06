@include('Projet.navbar');
<div class="l-main sidebar-right">
    @include('Projet.sidebar')
    <div class="main-content">
        <div class="title-section two-section">
            <div class="title-section-1">
                <h1>AcademiePlus Projet</h1>
                <h2>Mon Profil</h2>
            </div>
            <div class="title-section-2 style-dashboard">
                <a href="{{ route('index.projet') }}" class="btn btn-orange btn-fill">
                    Nouveau projet
                </a>
                <a href="{{ route('projet.liste') }}" class="btn">
                    Mes projets
                </a>
            </div>
        </div>
        <div class="wrapper wrapper-two-column">
            <div class="card card-style-2 boxed">
                <div class="card-title">
                    <h2>Informations de base</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.candidat',$candidat->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" value="{{ $candidat->nom }}" class="form-input" value="Diallo">
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="form-label">Prenom</label>
                            <input type="text" name="prenom" value="{{ $candidat->prenom }}" class="form-input" value="Saratou">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $candidat->email }}" class="form-input" value="s@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" name="adress"  value="{{ $candidat->adress }}" class="form-input" value="Guediawaye">
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" name="tel" value="{{ $candidat->tel }}" class="form-input" value="783714731">
                        </div>
                        <div class="form-group">
                            <input type="reset" class="btn" value="Annuler">
                            <input type="submit" class="btn btn-fill" value="Enregistrer">
                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                <div class="small-card boxed">
                    <h3>Photo de profil</h3>
                    <img src="{{ asset('images/entretien.jpeg') }}" alt="" class="module-media">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="file" name="photo" id="" class="form-input input-style-2">
                        </div>
                        <input type="submit" value="Modifier la photo" class="btn btn-fill">
                    </form>
                </div>
                <div class="small-card boxed">
                    <h3>Modifier le mot de passe</h3>
                    <form action="{{ route('update.password',$user->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="password" name="password" id="" value="{{ $user->password }}" class="form-input input-style-2" placeholder="mot de paase actuel">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="" value="{{ $user->password }}" class="form-input input-style-2" placeholder="nouveau mot de passe">
                        </div>
                        <input type="submit" value="Mettre à jour" class="btn btn-fill">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Projet.footer')