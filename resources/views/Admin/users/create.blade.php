@extends ('layouts.admin.sidebar')
@section('content')
<div class="main-content dashboard-emploi">
    <div>
        @if (session('message'))
            <div id="alert-success">
                {{ session('message') }}
            </div>
        @endif
    
        @if (session('error'))
            <div id="alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="toggle" onclick="toggleMenu();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
        </svg>
    </div>
    <div class="entete-main-dashboard">
        <div class="entete-left">
            <h1>Nouvel Utilisateur</h1>
        </div>
    </div>
    <div class="wrapper">
        <div class="card card-style-2">
            <form action="{{ route('admin.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" class="form-input">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-input">
                </div>
                <div class="form-group">
                    <label for="profil" class="form-label">Profil</label>
                    <select name="profil" id="" class="form-input">
                        <option value="Ecole">Ecole</option>
                        <option value="Employeur">Employeur</option>
                        <option value="Candidat">Candidat</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button class="btn btn-fill" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    <div class="title-section two-section">
        <div class="title-section-1">
            <div class="card-btn">
                <button class="btn btn-small btn-left-1">Afficher toutes mes offres demploi</button>
            </div>
        </div>
        <div class="title-section-2">
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
    </div>
    </div>
    <script>
        function showMessage() {
            var message = document.getElementById("alert-success");
            message.style.opacity = 1;
            setTimeout(function() {
            message.style.opacity = 0;
            }, 5000);
        }
        showMessage();
    </script>
    <script>
        function showMessage() {
            var message = document.getElementById("alert-danger");
            message.style.opacity = 1;
            setTimeout(function() {
            message.style.opacity = 0;
            }, 5000);
        }
        showMessage();
    </script>
@endsection