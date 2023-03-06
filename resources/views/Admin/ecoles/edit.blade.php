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
    <form action="{{ route('profilEcole', auth()->user()->id) }}" class="form-input wrapper wrapper-two-column" method="post">
                @csrf
                <div class="card card-style-2 boxed">
                    <div class="form-group">
                        <label for="ecole" class="form-label">Ecole</label>
                        <input type="text" name="ecole" class="form-input input-style-2" value="{{$ecole->ecole}}">
                    </div>
                    <div class="form-group">
                        <label for="sigle" class="form-label">Sigle</label>
                        <input type="text" name="sigle" class="form-input input-style-2" value="{{$ecole->sigle}}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-input input-style-2" value="{{$ecole->email}}">
                    </div>
                    <div class="form-group">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse" class="form-input input-style-2" value="{{$ecole->adresse}}">
                    </div>
                </div>
                <div class="card card-style-2 boxed">
                    <div class="form-group">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" name="telephone" class="form-input input-style-2" value="{{$ecole->telephone}}">
                    </div>
                    <div class="form-group">
                        <label for="siteWeb" class="form-label">Site Web</label>
                        <input type="text" name="siteWeb" class="form-input input-style-2" value="{{$ecole->siteWeb}}">
                    </div>
                    <div class="form-group">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" name="linkedin" class="form-input input-style-2" value="{{$ecole->linkedin}}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-input text-area input-style-2">{{$ecole->description}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-fill" value="Mettre à jour">     
                </div>
            </form>
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