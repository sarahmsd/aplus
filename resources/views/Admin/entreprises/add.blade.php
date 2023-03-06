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
            <h1>Nouvelle Entreprise</h1>
        </div>
    </div>
    <div class="wrapper">
        <div class="card card-style-2">
            <form action="{{ route('admin.entreprises.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nom de l'entreprise</label>
                    <input type="text" name="nom" class="form-input">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-input">
                </div>
                <div class="form-group">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-input" name="adress">
                </div>
                <div class="form-group">
                    <label for="tel" class="form-label">Telephone</label>
                    <input type="number" class="form-input" name="tel">
                </div>
                <div class="form-group">
                    <label for="domaineActivite" class="form-label">Domaine d'activité</label>
                    <input type="text" name="domaineActivite" id="" class="form-input">
                </div>
                <div class="form-group">
                    <label for="profil" class="form-label">Description</label>
                    <input type="text" class="form-input" name="description">
                </div>
                <button class="btn btn-fill" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection