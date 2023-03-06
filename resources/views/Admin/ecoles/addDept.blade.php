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
        <form action="{{ route('departement.save') }}" method="post">
            @csrf
            <input hidden name="ecole_id" value="{{ $ecole->id }}" type="text">
            <div class="form-group">
                <label for="Departement" class="form-label">Nom Département <span class="required">*</span></label>
                <input type="text" name="nomDepartement" class="form-input input-style-2">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="descriptionDepartement" id="" class="form-input text-area input-style-2"></textarea>
            </div>
            <input type="button" class="btn btn-fill btn-red" value="Annuler">
            <input type="submit" class="btn btn-fill" value="Enregistrer">
        </form>
    </div>
@endsection